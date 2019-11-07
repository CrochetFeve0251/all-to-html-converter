<?php


namespace AllToHmlConverter\Strategy\Strategy\contract;


interface StrategyInterface
{
    /**
     * Convert the file to Html
     * @param string $data
     * @return string
     */
    public function execute(string $data): string;
}