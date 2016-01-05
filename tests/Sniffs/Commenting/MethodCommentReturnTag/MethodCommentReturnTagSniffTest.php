<?php

namespace Symplify\CodingStandard\Tests\Sniffs\Commenting\MethodCommentReturnTag;

use PHPUnit_Framework_TestCase;
use Symplify\CodingStandard\Tests\CodeSnifferRunner;

/**
 * @covers SymplifyCodingStandard\Sniffs\Commenting\MethodCommentReturnTagSniff
 */
final class MethodCommentReturnTagSniffTest extends PHPUnit_Framework_TestCase
{
    public function testDetection()
    {
        $codeSnifferRunner = new CodeSnifferRunner('SymplifyCodingStandard.Commenting.MethodCommentReturnTag');

        $this->assertSame(1, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/wrong.php.inc'));
        $this->assertSame(1, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/wrong2.php.inc'));
        $this->assertSame(1, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/wrong3.php.inc'));

        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct2.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct3.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct4.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct5.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct6.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct7.php.inc'));
        $this->assertSame(0, $codeSnifferRunner->getErrorCountInFile(__DIR__.'/correct8.php.inc'));
    }
}
