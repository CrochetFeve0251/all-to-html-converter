<?php


namespace AllToHmlConverter\Handler;


use AllToHmlConverter\Handler\AbstractClass\Handler;
use AllToHmlConverter\Handler\Contract\HandlerInterface;
use AllToHmlConverter\Strategy\Strategy\contract\StrategyInterface;
use AllToHmlConverter\Strategy\Strategy\Mp4Strategy;

class Mp4Handler extends Handler implements HandlerInterface
{
    public function handle(string $file): StrategyInterface
    {
        if(preg_match('/.*\.mp4$/', $file))
            return new Mp4Strategy();
        return parent::handle($file);
    }
}