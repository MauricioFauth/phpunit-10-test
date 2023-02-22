<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testFoo(): void
    {
        $this->assertSame('foo', foo());
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function testFoo2(): void
    {
        $this->assertSame('foo', foo());
    }
}
