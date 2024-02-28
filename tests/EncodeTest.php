<?php

declare(strict_types=1);

namespace PHPForge\Html\Tests\Helper;

use PHPForge\Html\Helper\Encode;

final class EncodeTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider PHPForge\Html\Helper\Tests\Provider\EncodeProvider::encode
     *
     * @param string $value Value to encode.
     * @param string $expected Expected result.
     * @param bool $doubleEncode Whether to encode HTML entities in `$value`.
     */
    public function testContent(string $value, string $expected, bool $doubleEncode): void
    {
        $this->assertSame($expected, Encode::content($value));
        $this->assertSame($expected, Encode::content($value, $doubleEncode));
    }

    /**
     * @dataProvider PHPForge\Html\Helper\Tests\Provider\EncodeProvider::encodeValue
     *
     * @param string $value Value to encode.
     * @param string $expected Expected result.
     * @param bool $doubleEncode Whether to encode HTML entities in `$value`.
     */
    public function testValue(string $value, string $expected, bool $doubleEncode): void
    {
        $this->assertSame($expected, Encode::value($value));
        $this->assertSame($expected, Encode::value($value, $doubleEncode));
    }
}
