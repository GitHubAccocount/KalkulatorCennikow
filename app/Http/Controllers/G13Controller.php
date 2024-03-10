<?php

namespace App\Http\Controllers;

use App\Http\Requests\G13ValidationRequest;
use Illuminate\Http\Request;
use App\Models\Calculator;
use App\Models\G13Price;
use App\Services\CalculatorService;
use App\Services\SwitchCasesService;
use App\Services\SwitchCasesServiceFrozen;

class G13Controller extends Controller
{
    private $switchCasesServiceFrozen;

    public function __construct(SwitchCasesServiceFrozen $switchCasesServiceFrozen)
    {
        $this->switchCasesServiceFrozen = $switchCasesServiceFrozen;
    }

    public function calculateG13(G13ValidationRequest $request)
    {
        $validatedData = $request->validated();

        $g13Price = G13Price::find(1);

        if (!$g13Price) {
            throw $this->createNotFoundException('not_exist');
        }

        return $this->switchCasesServiceFrozen->handleSwitchCases(
            $validatedData,
            $g13Price
        );
    }
}
