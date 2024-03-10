<?php

namespace App\View\Components;

use App\Models\G11Price;
use App\Models\G12Price;
use App\Models\G12wPrice;
use App\Models\G13Price;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FaqTable extends Component
{
    // brutto
    public $g11Brutto;
    public $g12Brutto1;
    public $g12Brutto2;
    public $g12wBrutto1;
    public $g12wBrutto2;
    public $g13Brutto1;
    public $g13Brutto2;
    public $g13Brutto3;
    // netto
    public $g11Netto;
    public $g12Netto1;
    public $g12Netto2;
    public $g12wNetto1;
    public $g12wNetto2;
    public $g13Netto1;
    public $g13Netto2;
    public $g13Netto3;

    private function assignPrices($model, $limit, $columnName)
    {
        switch ($limit) {
            case 'before':
                return $model->{$columnName . '_before_limit'};
            case 'after':
                return $model->{$columnName . '_after_limit'};
            case 'beyond':
                return $model->{$columnName . '_beyond_limit'};
            default:
                return null;
        }
    }

    /**
     * Create a new component instance.
     */
    public function __construct($limit)
    {
        // Retrieve models
        $g11BruttoModel = G11Price::find(1);
        $g12BruttoModel = G12Price::find(1);
        $g12wBruttoModel = G12wPrice::find(1);
        $g13BruttoModel = G13Price::find(1);

        $g11NettoModel = G11Price::find(2);
        $g12NettoModel = G12Price::find(2);
        $g12wNettoModel = G12wPrice::find(2);
        $g13NettoModel = G13Price::find(2);

        // Assign brutto prices based on the limit and column names
        $this->g11Brutto = $this->assignPrices($g11BruttoModel, $limit, 'g11');
        $this->g12Brutto1 = $this->assignPrices($g12BruttoModel, $limit, 'g12_1');
        $this->g12Brutto2 = $this->assignPrices($g12BruttoModel, $limit, 'g12_2');
        $this->g12wBrutto1 = $this->assignPrices($g12wBruttoModel, $limit, 'g12w_1');
        $this->g12wBrutto2 = $this->assignPrices($g12wBruttoModel, $limit, 'g12w_2');
        $this->g13Brutto1 = $this->assignPrices($g13BruttoModel, $limit, 'g13_1');
        $this->g13Brutto2 = $this->assignPrices($g13BruttoModel, $limit, 'g13_2');
        $this->g13Brutto3 = $this->assignPrices($g13BruttoModel, $limit, 'g13_3');

        // Assign netto prices based on the limit and column names
        $this->g11Netto = $this->assignPrices($g11NettoModel, $limit, 'g11');
        $this->g12Netto1 = $this->assignPrices($g12NettoModel, $limit, 'g12_1');
        $this->g12Netto2 = $this->assignPrices($g12NettoModel, $limit, 'g12_2');
        $this->g12wNetto1 = $this->assignPrices($g12wNettoModel, $limit, 'g12w_1');
        $this->g12wNetto2 = $this->assignPrices($g12wNettoModel, $limit, 'g12w_2');
        $this->g13Netto1 = $this->assignPrices($g13NettoModel, $limit, 'g13_1');
        $this->g13Netto2 = $this->assignPrices($g13NettoModel, $limit, 'g13_2');
        $this->g13Netto3 = $this->assignPrices($g13NettoModel, $limit, 'g13_3');

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.faq-table');
    }
}
