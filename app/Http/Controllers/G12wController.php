<?php

namespace App\Http\Controllers;

use App\Http\Requests\G12ValidationRequest;
use Illuminate\Http\Request;
use App\Models\G12wPrice;
use App\Services\SwitchCasesServiceFrozen;

class G12wController extends Controller
{
    private $switchCasesServiceFrozen;

    public function __construct(SwitchCasesServiceFrozen $switchCasesServiceFrozen)
    {
        $this->switchCasesServiceFrozen = $switchCasesServiceFrozen;
    }

    public function calculateG12w(G12ValidationRequest $request)
    {
        $validatedData = $request->validated();

        $g12wPrice = G12wPrice::find(1);

        if (!$g12wPrice) {
            throw $this->createNotFoundException('not_exist');
        }

        return $this->switchCasesServiceFrozen->handleSwitchCases(
            $validatedData,
            $g12wPrice
        );
    }
}
