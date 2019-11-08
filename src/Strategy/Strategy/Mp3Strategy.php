<?php


namespace AllToHmlConverter\Strategy\Strategy;


use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;

class Mp3Strategy implements StrategyInterface
{

    /**
     * Convert the file to Html
     * @param string $data
     * @return string
     */
    public function execute(string $data): string
    {
        return '<div><audio autoplay loop src="' . $data . '"></audio></div>';
    }
}