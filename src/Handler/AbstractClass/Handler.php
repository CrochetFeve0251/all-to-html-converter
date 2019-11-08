<?php


namespace AllToHmlConverter\Handler\AbstractClass;


use AllToHmlConverter\Handler\Contract\HandlerInterface;
use AllToHmlConverter\Handler\Exception\CanTreatFileException;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;

abstract class Handler implements HandlerInterface
{
    /**
     * @var HandlerInterface $handler next handler
     */
    protected $nextHandler;

    /**
     * Set the following handler
     * @param HandlerInterface $handler
     * @return HandlerInterface
     */
    public function setNext(HandlerInterface $handler): HandlerInterface
    {
        $this->nextHandler = $handler;
    }

    /**
     * Send a file to run the responsability chain
     * @param string $file
     * @return string
     * @throws CanTreatFileException
     */
    public function handle(string $file): StrategyInterface
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($file);
        }
        throw new CanTreatFileException("The file isn't one of the files supported");
    }
}