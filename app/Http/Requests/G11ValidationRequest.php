<?php

namespace App\Http\Requests;

use App\Services\NumberFormatterService;
use Illuminate\Foundation\Http\FormRequest;

class G11ValidationRequest extends FormRequest
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
            'limit_exceeded' => 'required|in:yes,no',
            'cennik_fee' => 'nullable|numeric|min:0|required_with:cennik_discount',
            'cennik_discount' => 'nullable|numeric|min:0|required_with:cennik_fee'
        ];
    }

    public function messages(): array
    {
        return [
            // 'consumption1.required' => 'Podaj miesięczne zużycie prądu.',
            // 'consumption1.integer' => 'Miesięczne zużycie prądu musi być liczbą całkowitą.',
            // 'consumption1.min' => 'Miesięczne zużycie prądu nie może być mniejsze niż 0.',
            // 'limit_exceeded.required' => 'Podaj czy został przekroczony limit.',
            // 'limit_exceeded.in' => 'Odpowiedź musi być "tak" lub "nie".',
            // 'cennik_fee.numeric' => 'Opłata handlowa musi być liczbą.',
            // 'cennik_fee.min' => 'Opłata handlowa nie może być mniejsza niż 0.',
            // 'cennik_fee.required_with' => 'Jeśli uzupełniłeś rabat, musisz uzupełnić także opłatę za cennik.',
            // 'cennik_discount.numeric' => 'Rabat musi być liczbą',
            // 'cennik_discount.min' => 'Rabat nie może być mniejszy niż 0.',
            // 'cennik_discount.required_with' => 'Jeśli uzupełniłeś opłatę za cennik, musisz uzupełnić także rabat.',
        ];
    }

    public function prepareForValidation()
    {
        $numberFormatter = resolve(NumberFormatterService::class);
        $numberFormatter->prepareNumbers($this);
    }
}
