<?php


namespace AllToHmlConverter\Handler;


use AllToHmlConverter\Handler\AbstractClass\Handler;
use AllToHmlConverter\Handler\Contract\HandlerInterface;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;
use AllToHmlConverter\Strategy\Strategy\JpgStrategy;

class JpgHandler extends Handler implements HandlerInterface
{
    public function handle(string $file): StrategyInterface
    {
        if(preg_match('/.*\.jpe?g$/', $file))
            return new JpgStrategy();
        return parent::handle($file);
    }
}