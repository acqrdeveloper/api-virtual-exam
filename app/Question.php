<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    protected $table = 'question';

    protected $fillable = [
        'theme_id',
        'name',
        'option_answer_id',
        'level',
        'image',
        'image_url',
        'status',
    ];

    function returnRules($request)
    {
        $rules = [];

        switch ($request->method()){
            case 'POST':
                $rules = [
                    'theme_id' => 'required',
                    'name' => 'required',
                    'level' => 'required',
                ];
                break;
            case 'PUT':
                $rules = [
                    'theme_id' => 'required',
                    'name' => 'required',
                    'level' => 'required',
                    'status' => 'required',
                ];
                break;
        }
        return $rules;
    }

}
