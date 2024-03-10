<?php

namespace App\Services;

use App\Http\Controllers\CalculatorController;
use App\Models\Cennik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class SwitchCasesServiceFrozen
{
  private $calculator;

  public function __construct(CalculatorController $calculator)
  {
    $this->calculator = $calculator;
  }

  // checks what cennik was choosen by user and uses appropriate cennik's price, name and discount

  public function handleSwitchCases(
    array $validatedData,
    Model $prices
  ): ?View {
    // if custom cennik fee adn cennik discount was choosen
    if ($validatedData['cennik_fee'] && $validatedData['cennik_discount']) {
      return $this->calculator->calculator(
        $validatedData,
        $prices,
        $validatedData['cennik_discount'],
        $validatedData['cennik_fee'],
        'Cennik spoza listy'
      );
    }

    // if cennik from list was choosen
    $cennik = request()->input('cenniki');
    $cennikCollection = Cennik::get();
    $matchingCennik = $cennikCollection->first(function ($cennikSingleRow) use ($cennik) {
      return $cennik === $cennikSingleRow->name;
    });

    if ($matchingCennik) {
      return $this->calculator->calculator(
        $validatedData,
        $prices,
        $matchingCennik->discount,
        $matchingCennik->price,
        $matchingCennik->description
      );
    }
  }
}
