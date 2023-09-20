<?php

namespace App\Resourses\Export;

use XMLWriter;

class XMLFileGenerator extends Export
{
    public function generate($path)
    {
        $tmpPath = $_SERVER['DOCUMENT_ROOT'] . '/catalog_export_' . md5($path) . '.xml';
        $xmlWriter = new XMLWriter();
        $xmlWriter->openUri($tmpPath);

        $xmlWriter->setIndent(true);
        $xmlWriter->setIndentString("\t");

        $xmlWriter->startDocument('1.0', 'UTF-8');

        $this->writeYmlInfo($xmlWriter);

        $xmlWriter->endDocument();
        $xmlWriter->flush();

        rename($tmpPath, $path);
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
                //$this->writeOffer($xmlWriter, $results);
        }
        $xmlWriter->endElement();
    }
}