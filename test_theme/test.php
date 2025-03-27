<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public string $theme = 'test_theme';
    public array $themePath = 'test_theme_path';

    const TEST_CONSTANT = [
        'my_key' => 'my_value',
        'my_key2' => 'my_value2',
    ];

    public function testOne(bool $isOk): void
    {
        $this->assertTrue($isOk);
    }

    public function testTwo(string $not_Used): void
    {
        $this->assertTrue(self::TEST_CONSTANT['my_key'] === 'my_value');
    }
}
