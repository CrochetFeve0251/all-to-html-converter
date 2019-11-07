<?php


namespace AllToHmlConverter\Handler\Contract;


interface HandlerInterface
{
    /**
     * Set the following handler
     * @param HandlerInterface $handler
     * @return HandlerInterface
     */
    public function setNext(HandlerInterface $handler): HandlerInterface;

    /**
     * Send a file to run the responsability chain
     * @param string $file
     * @return string
     */
    public function handle(string $file): string;
}