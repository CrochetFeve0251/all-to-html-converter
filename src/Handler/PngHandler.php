<?php


namespace AllToHmlConverter\Handler;


use AllToHmlConverter\Handler\AbstractClass\Handler;
use AllToHmlConverter\Handler\Contract\HandlerInterface;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;
use AllToHmlConverter\Strategy\Strategy\PngStrategy;

class PngHandler extends Handler implements HandlerInterface
{
    public function handle(string $file): StrategyInterface
    {
        if(preg_match('/.*\.png$/', $file))
            return new PngStrategy();
        return parent::handle($file);
    }
}