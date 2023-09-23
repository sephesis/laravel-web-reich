<?php

namespace App\Resourses\Export;

use Illuminate\Support\Facades\Storage;
use \PhpOffice\PhpSpreadsheet\Spreadsheet,
    \PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelFileGenerator extends Export
{
    protected $spreadsheet;

    protected function setParams()
    {
        $this->spreadsheet = new Spreadsheet();

        $styleArrayFirstRow = [
            'font' => [
                'bold' => true,
            ]
        ];
  
        $this->spreadsheet->getActiveSheet()->getStyle('A1:D1')->applyFromArray($styleArrayFirstRow);

        $this->spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A1', 'Имя')
            ->setCellValue('B1', 'Телефон')
            ->setCellValue('C1', 'Услуга')
            ->setCellValue('D1', 'Файл');

        $this->spreadsheet->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $this->spreadsheet->getActiveSheet()->getColumnDimension('B')->setWidth(20);
        $this->spreadsheet->getActiveSheet()->getColumnDimension('C')->setWidth(50);
        $this->spreadsheet->getActiveSheet()->getColumnDimension('D')->setWidth(15);
    }

    public function generate($path)
    {
        $this->setParams();

        $filename = 'catalog_export_' .md5($path) . '.xlsx';

        $path = Storage::disk('local')->path($filename);

        $line = 2;
        foreach ($this->results as $result) {
            $this->spreadsheet->setActiveSheetIndex(0)
            ->setCellValue('A' . $line, $result->name)
            ->setCellValue('B' . $line, $result->phone)
            ->setCellValue('C' . $line, '')
            ->setCellValue('D' . $line, $result->file);
            $line++;
        }
 
        return $this->save($path);
    }

    protected function save($path) 
    {
        $writer = new Xlsx($this->spreadsheet);
        $writer->save($path);
  
        return $path;
    }
}