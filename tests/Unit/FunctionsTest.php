<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email()
    {
        $result = validate_email('jose@hotmail.com');
        $this->assertTrue($result);

        $result = validate_email('jose@@hotmail.com');
        $this->assertFalse($result);

    }
}
