<?php


namespace AllToHmlConverter\Strategy\Strategy;


use AllToHmlConverter\Strategy\Strategy\contract\Strategy;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;

class Mp4Strategy extends Strategy implements StrategyInterface
{

    /**
     * Convert the file to Html
     * @param string $data
     * @param string $urlFile
     * @return string
     */
    public function execute(string $data, string $urlFile): string
    {
        return '<div><video controls autoplay loop src="' . $urlFile . '">Ici la description alternative</video></div>';
    }
}