<?php

namespace App\Http\Requests;

use App\Services\NumberFormatterService;
use Illuminate\Foundation\Http\FormRequest;

class G13ValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'consumption1' => 'required|integer|min:0',
            'consumption2' => 'required|integer|min:0',
            'consumption3' => 'required|integer|min:0',
            'limit_exceeded' => 'required|in:yes,no',
            'cennik_fee' => 'nullable|numeric|min:0|required_with:cennik_discount',
            'cennik_discount' => 'nullable|numeric|min:0|required_with:cennik_fee'
        ];
    }

    public function messages(): array
    {
        $requiredMessage = 'Podaj miesięczne zużycie prądu.';
        $integerMessage = 'Miesięczne zużycie prądu musi być liczbą całkowitą.';
        $minMessage = 'Miesięczne zużycie prądu nie może być mniejsze niż 0.';

        return [
            // 'consumption1.required' => $requiredMessage,
            // 'consumption2.required' => $requiredMessage,
            // 'consumption3.required' => $requiredMessage,
            // 'consumption1.integer' =>  $integerMessage,
            // 'consumption2.integer' =>  $integerMessage,
            // 'consumption3.integer' =>  $integerMessage,
            // 'consumption1.min' => $minMessage,
            // 'consumption2.min' => $minMessage,
            // 'consumption3.min' => $minMessage,
            // 'limit_exceeded.required' => 'Podaj czy został przekroczony limit.',
            // 'limit_exceeded.in' => 'Odpowiedź musi być "tak" lub "nie".'
        ];
    }

    public function prepareForValidation()
    {
        $numberFormatter = resolve(NumberFormatterService::class);
        $numberFormatter->prepareNumbers($this);
    }
}
