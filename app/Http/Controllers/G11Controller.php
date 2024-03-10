<?php

namespace App\Http\Controllers;

use App\Http\Requests\G11ValidationRequest;
use App\Models\G11Price;
use App\Services\SwitchCasesServiceFrozen;

class G11Controller extends Controller
{
    private $switchCasesServiceFrozen;

    public function __construct(SwitchCasesServiceFrozen $switchCasesServiceFrozen)
    {
        $this->switchCasesServiceFrozen = $switchCasesServiceFrozen;
    }

    public function calculateG11(G11ValidationRequest $request)
    {
        $validatedData = $request->validated();


        $g11Price = G11Price::find(1);

        if (!$g11Price) {
            throw $this->createNotFoundException('not_exist');
        }

        return $this->switchCasesServiceFrozen->handleSwitchCases(
            $validatedData,
            $g11Price
        );
    }
}
