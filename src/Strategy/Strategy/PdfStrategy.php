<?php


namespace AllToHmlConverter\Strategy\Strategy;


use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;
use Gufy\PdfToHtml\Pdf;

class PdfStrategy implements StrategyInterface
{

    /**
     * Convert the file to Html
     * @param string $data
     * @return string
     */
    public function execute(string $data): string
    {
        $pdf = new Pdf($data);
        return $pdf->html();
    }
}