<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateGuest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //  protected $fillable = ['name', 'document', 'photo', 'destiny', 'person', 'company', 'start_at', 'expires_at'];

        $rules = [
            'name' => ['required', 'min:3', 'max:255'],
            'document' => ['required', 'min:3', 'max:255'],
            'photo' => ['nullable', 'image'],
            'destiny' => ['required', 'min:2', 'max:255'],
            'person' => ['required', 'min:3', 'max:255'],
            'company' => ['nullable', 'min:3', 'max:255'],
            'start_at' => ['required', 'date'],
            'expires_at' => ['required', 'date'],
        ];

        if ($this->method() == 'PUT') {
            $rules['photo'] = ['nullable', 'image'];
        }

        return $rules;
    }
}
