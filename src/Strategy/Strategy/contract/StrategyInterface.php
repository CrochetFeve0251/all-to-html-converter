<?php


namespace AllToHmlConverter\Strategy\Strategy\contract;


interface StrategyInterface
{
    /**
     * Convert the file to Html
     * @param string $data
     * @param string $urlFile
     * @return string
     */
    public function execute(string $data, string $urlFile): string;
}