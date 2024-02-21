<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovieRequest extends FormRequest
{
    // protected $redirectRoute = 'movies.index';

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
            'name' => ['required', 'max:255', 'min:3'],
            'hitFilm' => 'boolean',
            'year' => 'required|integer|min:1900|max:2024',
            'genre' => ['nullable', 'exists:zanr,id_zanr'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'year.integer' => 'Year must be in a number format',
            'year.min' => 'Movies were not made before 1900',
        ];
    }
}
