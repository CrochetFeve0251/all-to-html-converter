<?php

namespace AllToHmlConverter\Tests\Unit;

use AllToHmlConverter\AllToHtmlConverterFacade;
use PHPUnit\Framework\TestCase;

class AllToHtmlConverterFacadeTest extends TestCase
{

    public function testConvertHTML()
    {
        $content = AllToHtmlConverterFacade::convert(__DIR__.'/../files/test.html');
        $this->assertTrue(strlen($content) > 0);
        $this->assertContains(__DIR__.'/../files/test.html', $content);
    }

    public function testConvertJPG()
    {
        $content = AllToHtmlConverterFacade::convert(__DIR__.'/../files/index.jpeg');
        $this->assertTrue(strlen($content) > 0);
        $this->assertContains(__DIR__.'/../files/index.jpeg', $content);
    }

    public function testConvertMP3()
    {
        $content = AllToHtmlConverterFacade::convert(__DIR__.'/../files/airplane-landing_daniel_simion.mp3');
        $this->assertTrue(strlen($content) > 0);
        $this->assertContains(__DIR__.'/../files/airplane-landing_daniel_simion.mp3', $content);
    }

    public function testConvertMP4()
    {
        $content = AllToHtmlConverterFacade::convert(__DIR__.'/../files/small.mp4');
        $this->assertTrue(strlen($content) > 0);
        $this->assertContains(__DIR__.'/../files/small.mp4', $content);
    }

    public function testConvertPDF()
    {
        $content = AllToHtmlConverterFacade::convert(__DIR__.'/../files/sample.pdf');
        $this->assertTrue(strlen($content) > 0);
        $this->assertContains('<body', $content);
    }

    public function testConvertPNG()
    {
        $content = AllToHtmlConverterFacade::convert(__DIR__.'/../files/PNG_transparency_demonstration_1.png');
        $this->assertTrue(strlen($content) > 0);
        $this->assertContains(__DIR__.'/../files/PNG_transparency_demonstration_1.png', $content);
    }
}
