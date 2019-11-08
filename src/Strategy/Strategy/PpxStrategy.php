<?php


namespace AllToHmlConverter\Strategy\Strategy;


use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;
use Gufy\PdfToHtml\Pdf;
use NcJoes\OfficeConverter\OfficeConverter;

class PpxStrategy implements StrategyInterface
{

    /**
     * Convert the file to Html
     * @param string $data
     * @return string
     */
    public function execute(string $data): string
    {
        $converter = new OfficeConverter($data);
        $pdf_name = preg_replace('//', '.pdf', $data);
        $converter->convertTo($pdf_name);
        $pdf = new Pdf($pdf_name);
        unlink($pdf_name);
        return $pdf->html();
    }
}