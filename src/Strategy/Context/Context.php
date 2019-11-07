<?php


namespace AllToHmlConverter\Strategy\Context;


use AllToHmlConverter\Strategy\Context\Contract\ContextInterface;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;

class Context implements ContextInterface
{
    /**
     * @var StrategyInterface $strategy the current strategy
     */
    protected $strategy;

    /**
     * Set the used strategy
     * @param StrategyInterface $strategy
     * @return mixed
     */
    public function setStrategy(StrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * convert the file to html
     * @param string $file
     * @return string
     */
    public function convertToHTML(string $file): string
    {
       return $this->strategy->execute($file);
    }
}