<?php


namespace AllToHmlConverter\Handler\Contract;


use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;

interface HandlerInterface
{
    /**
     * Set the following handler
     * @param HandlerInterface $handler
     * @return HandlerInterface
     */
    public function setNext(HandlerInterface $handler): void;

    /**
     * Send a file to run the responsability chain
     * @param string $file
     * @return string
     */
    public function handle(string $file): StrategyInterface;
}