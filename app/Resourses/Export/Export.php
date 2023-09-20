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

    protected function getResults($formId)
    {
        $results = FormResult::where('form_id', '=', $formId)->get();
        $data = [];

        foreach ($results as $result) {
            $data['formResults'][$formId][] = json_decode($result['values']);
        }

        return $data;
    }
}
