<?php


namespace AllToHmlConverter\Handler;


use AllToHmlConverter\Handler\AbstractClass\Handler;
use AllToHmlConverter\Handler\Contract\HandlerInterface;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;
use AllToHmlConverter\Strategy\Strategy\HtmlStrategy;

class HtmlHandler extends Handler implements HandlerInterface
{
    public function handle(string $file): StrategyInterface
    {
        if(preg_match('/.*\.html$/', $file))
            return new HtmlStrategy();
        return parent::handle($file);
    }
}