<?php

namespace App\Http\Controllers;

use App\Http\Requests\G12ValidationRequest;
use App\Models\G12Price;
use App\Services\SwitchCasesServiceFrozen;

class G12Controller extends Controller
{
    private $switchCasesServiceFrozen;

    public function __construct(SwitchCasesServiceFrozen $switchCasesServiceFrozen)
    {
        $this->switchCasesServiceFrozen = $switchCasesServiceFrozen;
    }

    public function calculateG12(G12ValidationRequest $request)
    {
        $validatedData = $request->validated();

        $g12Price = G12Price::find(1);

        if (!$g12Price) {
            throw $this->createNotFoundException('not_exist');
        }

        return $this->switchCasesServiceFrozen->handleSwitchCases(
            $validatedData,
            $g12Price
        );
    }
}

// $consumption1,
// $consumption2,
// $consumption3 = 0,
// $g12Price->g12_1_before_limit,
// $g12Price->g12_2_before_limit,
// $electricityPrice3 = 0,
// $g12Price->g12_1_beyond_limit,
// $g12Price->g12_2_beyond_limit,
// $electricityPriceSpec3 = 0,