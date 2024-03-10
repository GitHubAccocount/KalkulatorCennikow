<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class CalculatorController extends Controller
{
    public function calculator(
        array $validatedData,
        Model $prices,
        float $discount,
        float $cennikPrice,
        string $cennikDescription,
    ): View {
        $realCost =  $this->realCost(
            $validatedData,
            $prices,
        );

        $specCost = $this->specCost(
            $validatedData,
            $prices,
            $discount,
            $cennikPrice,
        );

        $specCostWithCennik = $specCost['specCostWithCennik'];
        $specCostWithoutCennik = $specCost['specCostWithoutCennik'];
        $specCostDifference = $specCost['specCostDifference'];
        $totalCosts = $specCost['totalCosts'];

        return view('result.result', compact([
            'realCost',
            'cennikPrice',
            'specCostWithoutCennik',
            'specCostWithCennik',
            'specCostDifference',
            'totalCosts',
            'cennikDescription'
        ]));
    }

    // calcualtes real price of electricity (with frozen prices)
    // it includes cennik, but discount from cennik is equal to 0 so 
    // the discount has been ommitted
    private function realCost(
        array $validatedData,
        Model $prices,
    ): float {
        // if limit is not exceeded, the lower prices are used
        if ($validatedData['limit_exceeded'] === 'no') {
            if ($prices->g11_before_limit) {
                $realCost = $this->costHelper(
                    $validatedData,
                    $prices->g11_before_limit,
                );
            }

            if ($prices->g12_1_before_limit) {
                $realCost = $this->costHelper(
                    $validatedData,
                    $prices->g12_1_before_limit,
                    $prices->g12_2_before_limit,
                );
            }

            if ($prices->g12w_1_before_limit) {
                $realCost = $this->costHelper(
                    $validatedData,
                    $prices->g12w_1_before_limit,
                    $prices->g12w_2_before_limit,
                );
            }

            if ($prices->g13_1_before_limit) {
                $realCost = $this->costHelper(
                    $validatedData,
                    $prices->g13_1_before_limit,
                    $prices->g13_2_before_limit,
                    $prices->g13_3_before_limit,
                );
            }
            $realCost = round($realCost, 2);
        }

        // if limit is exceeded, the higher prices are used
        if ($validatedData['limit_exceeded'] === 'yes') {
            if ($prices->g11_after_limit) {
                $realCost = $this->costHelper(
                    $validatedData,
                    $prices->g11_after_limit,
                );
            }

            if ($prices->g12_1_after_limit) {
                $realCost = $this->costHelper(
                    $validatedData,
                    $prices->g12_1_after_limit,
                    $prices->g12_2_after_limit,
                );
            }

            if ($prices->g12w_1_after_limit) {
                $realCost = $this->costHelper(
                    $validatedData,
                    $prices->g12w_1_after_limit,
                    $prices->g12w_2_after_limit,
                );
            }

            if ($prices->g13_1_after_limit) {
                $realCost = $this->costHelper(
                    $validatedData,
                    $prices->g13_1_after_limit,
                    $prices->g13_2_after_limit,
                    $prices->g13_3_after_limit,
                );
            }

            $realCost = round($realCost, 2);
            // return real price
        }
        return $realCost;
    }

    // this method calculates electricity price without frozen electricity prices.
    // I call it 'speculative' prices as they are not valid. 
    // it would be valid if it weren't for the frozen electricity prices.
    private function specCost(
        array $validatedData,
        Model $prices,
        float $discount,
        float $cennikPrice,
    ): array {
        // calculates 'speculative' price of electricity with cennik
        if ($prices->g11_beyond_limit) {
            $specCostWithCennik = $this->costHelper(
                $validatedData,
                $prices->g11_beyond_limit,
                0,
                0,
                $discount,
            );
        }

        if ($prices->g12_1_beyond_limit) {
            $specCostWithCennik = $this->costHelper(
                $validatedData,
                $prices->g12_1_beyond_limit,
                $prices->g12_2_beyond_limit,
                0,
                $discount,
            );
        }

        if ($prices->g12w_1_beyond_limit) {
            $specCostWithCennik = $this->costHelper(
                $validatedData,
                $prices->g12w_1_beyond_limit,
                $prices->g12w_2_beyond_limit,
                0,
                $discount,
            );
        }

        if ($prices->g13_1_beyond_limit) {
            $specCostWithCennik = $this->costHelper(
                $validatedData,
                $prices->g13_1_beyond_limit,
                $prices->g13_2_beyond_limit,
                $prices->g13_3_beyond_limit,
                $discount,
            );
        }

        $specCostWithCennik = round($specCostWithCennik, 2);

        // calculates 'speculative' price of electricity without cennik
        if ($prices->g11_beyond_limit) {
            $specCostWithoutCennik = $this->costHelper(
                $validatedData,
                $prices->g11_beyond_limit,
            );
        }

        if ($prices->g12_1_beyond_limit) {
            $specCostWithoutCennik = $this->costHelper(
                $validatedData,
                $prices->g12_1_beyond_limit,
                $prices->g12_2_beyond_limit,
            );
        }

        if ($prices->g12w_1_beyond_limit) {
            $specCostWithoutCennik = $this->costHelper(
                $validatedData,
                $prices->g12w_1_beyond_limit,
                $prices->g12w_2_beyond_limit,
            );
        }

        if ($prices->g13_1_beyond_limit) {
            $specCostWithoutCennik = $this->costHelper(
                $validatedData,
                $prices->g13_1_beyond_limit,
                $prices->g13_2_beyond_limit,
                $prices->g13_3_beyond_limit
            );
        }

        $specCostWithoutCennik = round($specCostWithoutCennik, 2);

        // calculates the difference between the 'speculative' price with cennik and without cennik
        $specCostDifference = round(($specCostWithoutCennik - $specCostWithCennik), 2);

        // calculates the difference in user's bill, that means the difference between the price of
        // electricity inculding cennik and cennik price
        $totalCosts = round(($specCostDifference - $cennikPrice), 2);

        // return array of variables
        return array(
            'specCostWithCennik' => $specCostWithCennik,
            'specCostWithoutCennik' => $specCostWithoutCennik,
            'specCostDifference' => $specCostDifference,
            'totalCosts' => $totalCosts
        );
    }

    private function costHelper(array $validatedData, float $price1, float $price2 = 0, float $price3 = 0, float $discount = 0): float
    {
        // check if input is provided, if not returns 0 for that input
        $consumption1 = isset($validatedData['consumption1']) ? $validatedData['consumption1'] : 0;
        $consumption2 = isset($validatedData['consumption2']) ? $validatedData['consumption2'] : 0;
        $consumption3 = isset($validatedData['consumption3']) ? $validatedData['consumption3'] : 0;

        return (($consumption1 * $price1 * (1 - ($discount / 100)))
            + ($consumption2 * $price2  * (1 - ($discount / 100)))
            + ($consumption3 * $price3 * (1 - ($discount / 100))));
    }
}
