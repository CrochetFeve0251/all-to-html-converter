<?php


namespace AllToHmlConverter\Strategy\Strategy;


use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;

class Mp4Strategy implements StrategyInterface
{

    /**
     * Convert the file to Html
     * @param string $data
     * @return string
     */
    public function execute(string $data): string
    {
        return '<div><video controls src="' . $data . '">Ici la description alternative</video></div>';
    }
}