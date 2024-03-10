<?php

namespace App\Services;

use Illuminate\Foundation\Http\FormRequest;

class NumberFormatterService
{
  public function prepareNumbers(FormRequest $request)
  {
    $request->merge([
      'cennik_fee' => $this->parseNumber($request->cennik_fee),
      'cennik_discount' => $this->parseNumber($request->cennik_discount)
    ]);
  }

  private function parseNumber($value)
  {
    return is_string($value) ? floatval((str_replace(',', '.', $value))) : $value;
  }
}
