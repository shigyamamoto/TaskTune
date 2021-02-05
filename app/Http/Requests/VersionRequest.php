<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VersionRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:128'
            ],
            'status' => [
                'required',
                'numeric',
                'min:0',
                'max:2'
            ],
            'start_date' => [
                'date_format:Y-m-d'
            ],
            'end_date' => [
                'date_format:Y-m-d'
            ],
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'バージョン名',
            'status' => 'ステータス',
            'start_date' => '開始日',
            'end_date' => '終了日',
        ];
    }
}
