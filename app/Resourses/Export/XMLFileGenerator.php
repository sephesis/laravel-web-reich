<?php

namespace App\Resourses\Export;

use Illuminate\Contracts\Cache\Store;
use XMLWriter;
use Illuminate\Support\Facades\Storage;

class XMLFileGenerator extends Export
{
    public function generate($path)
    {
        $filename = 'catalog_export_' .md5($path) . '.xml';

        $tmpPath = Storage::disk('local')->path($filename);
        
        $xmlWriter = new XMLWriter();
    
        $xmlWriter->openUri($tmpPath);

        $xmlWriter->setIndent(true);
        $xmlWriter->setIndentString("\t");
        $xmlWriter->startDocument('1.0', 'UTF-8');

        $this->writeYmlInfo($xmlWriter);

        $xmlWriter->endDocument();
        $xmlWriter->flush();

        return $tmpPath;
    }

    private function writeYmlInfo(XMLWriter $xmlWriter)
    {
        $xmlWriter->startElement('yml_catalog');
        $xmlWriter->writeAttribute('date', date('Y-m-d H:i'));

        $this->writeShop($xmlWriter);

        $xmlWriter->endElement();
    }

    protected function writeShop(XMLWriter $xmlWriter)
    {

        $xmlWriter->startElement('shop');

        $xmlWriter->writeElement('name', 'Web Reych');
        $xmlWriter->writeElement('company', 'Web Reych');
        $xmlWriter->writeElement('url', '');

        $this->writeResults($xmlWriter);

        $xmlWriter->endElement();
    }

    protected function writeResults(XMLWriter $xmlWriter)
    {
        $xmlWriter->startElement('results');
        foreach ($this->results as $result) {
            $this->writeResult($xmlWriter, $result);
        }
        $xmlWriter->endElement();
    }

    protected function writeResult(XMLWriter $xmlWriter, $result)
    {
        $xmlWriter->startElement('result');
        $xmlWriter->writeElement('user', $result->name);
        $xmlWriter->writeElement('phone', $result->phone);
        if (!empty($result->file)) {
            $xmlWriter->writeElement('file', $result->file);
        }
        $xmlWriter->writeElement('service', '');
        $xmlWriter->endElement();
    }
}
