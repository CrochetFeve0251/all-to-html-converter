<?php


namespace AllToHmlConverter\Strategy\Context\Contract;


use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;

interface ContextInterface
{
    /**
     * Set the used strategy
     * @param StrategyInterface $strategy
     * @return mixed
     */
    public function setStrategy(StrategyInterface $strategy);

    /**
     * convert the file to html
     * @param string $file
     * @return string
     */
    public function convertToHTML(string $file): string;
}