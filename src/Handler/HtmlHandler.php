<?php


namespace AllToHmlConverter\Handler;


use AllToHmlConverter\Handler\AbstractClass\Handler;
use AllToHmlConverter\Handler\Contract\HandlerInterface;

class HtmlHandler extends Handler implements HandlerInterface
{
    public function handle(string $file): string
    {
        return parent::handle($file);
    }
}