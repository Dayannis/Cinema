<?php

namespace Cinema\Http\Requests;

use Cinema\Http\Requests\Request;

class MovieRequest extends Request
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
        return [
            'name'      => 'required',
            'cast'      => 'required|unique:users',
            'direction' => 'required',
            'duration'  => 'required',
            'path'      => 'required',
            'genre_id'  => 'required'
        ];
    }
}
