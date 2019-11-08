<?php


namespace AllToHmlConverter\Handler;


use AllToHmlConverter\Handler\AbstractClass\Handler;
use AllToHmlConverter\Handler\Contract\HandlerInterface;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;
use AllToHmlConverter\Strategy\Strategy\PdfStrategy;

class PdfHandler extends Handler implements HandlerInterface
{
    public function handle(string $file): StrategyInterface
    {
        if(preg_match('/.*\.pdf$/', $file))
            return new PdfStrategy();
        return parent::handle($file);
    }
}