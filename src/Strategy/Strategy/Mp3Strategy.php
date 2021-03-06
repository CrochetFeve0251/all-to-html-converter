<?php


namespace AllToHmlConverter\Strategy\Strategy;


use AllToHmlConverter\Strategy\Strategy\contract\Strategy;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;

class Mp3Strategy extends Strategy implements StrategyInterface
{

    /**
     * Convert the file to Html
     * @param string $data
     * @param string $urlFile
     * @return string
     */
    public function execute(string $data, string $urlFile): string
    {
        return '<div><audio autoplay loop src="' . $urlFile . '"></audio></div>';
    }
}