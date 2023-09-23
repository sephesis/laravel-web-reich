<?php

namespace App\Resourses\Export;

use App\Models\FormResult;

class Export
{
    protected $results = [];

    public function __construct($formId)
    {
        $this->results = $this->getResults($formId);
    }

    protected function getResults($formId = 0)
    {
        if ($formId > 0) {
            $results = FormResult::where('form_id', '=', $formId)->get();
        }else{
            $results = FormResult::all();
        }
       
        $data = [];

        foreach ($results as $result) {
            $data[] = json_decode($result['values']);
        }

        return $data;
    }
}
