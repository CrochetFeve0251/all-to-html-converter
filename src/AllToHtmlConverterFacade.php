<?php


namespace AllToHmlConverter;

use AllToHmlConverter\Handler\Contract\HandlerInterface;
use AllToHmlConverter\Handler\HtmlHandler;
use AllToHmlConverter\Handler\JpgHandler;
use AllToHmlConverter\Handler\Mp3Handler;
use AllToHmlConverter\Handler\Mp4Handler;
use AllToHmlConverter\Handler\PdfHandler;
use AllToHmlConverter\Handler\PngHandler;
use AllToHmlConverter\Handler\PpxHandler;
use AllToHmlConverter\Strategy\Context\Context;

require_once __DIR__ . '/../vendor/autoload.php';

class AllToHtmlConverterFacade
{
    /**
     * Setup handlers
     * @return HandlerInterface
     */
    protected static function setUpHandlers(): HandlerInterface {
        $handler = new HtmlHandler();
        $handlerNext = new JpgHandler();
        $handler->setNext($handlerNext);
        $handlers = array(
            new PngHandler(),
            new Mp3Handler(),
            new Mp4Handler(),
            new PdfHandler(),
            new PpxHandler(),
        );
        foreach ($handlers as $currentHandler){
            $handlerTmp = $handlerNext;
            $handlerNext = $currentHandler;
            $handlerTmp->setNext($handlerNext);
        }
        return $handler;
    }

    /**
     * Convert a file to html and return its content in html
     * @param string $file
     * @param string $urlFile
     * @return string
     */
    public static function convert(string $file, string $urlFile) {
        $handler = self::setUpHandlers();
        $context = new Context();
        $context->setStrategy($handler->handle($file, $urlFile));
        return $context->convertToHTML($file);
    }
}