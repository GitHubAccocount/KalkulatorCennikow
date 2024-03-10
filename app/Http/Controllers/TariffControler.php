<?php

namespace App\Http\Controllers;

use App\Events\CalculatorView;
use App\Models\ViewCounter;
use Illuminate\Http\Request;

class TariffControler extends Controller
{
    public function show()
    {
        $calculator = ViewCounter::find(1);
        event(new CalculatorView($calculator));
        return view('calc.calc');
    }

    public function showG11()
    {
        return view('calc.calcg11');
    }

    public function showG12()
    {
        return view('calc.calcg12');
    }

    public function showG12W()
    {
        return view('calc.calcg12w');
    }

    public function showG13()
    {
        return view('calc.calcg13');
    }
}
