<?php


namespace AllToHmlConverter\Strategy\Strategy;


use AllToHmlConverter\Strategy\Strategy\contract\Strategy;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;
use Gufy\PdfToHtml\Pdf;

class PdfStrategy extends Strategy implements StrategyInterface
{

    /**
     * Convert the file to Html
     * @param string $data
     * @param string $urlFile
     * @return string
     */
    public function execute(string $data, string $urlFile): string
    {
        $pdf = new Pdf($data);
        return $pdf->html();
    }
}