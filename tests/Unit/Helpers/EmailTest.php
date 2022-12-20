<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email()
    {
        //$email = 'jose@hotmail.com';
        //$result = (bool) filter_var($email,FILTER_VALIDATE_EMAIL);
        $result = Email::validate('jose@hotmail.com');

        $this->assertTrue($result);
    }
}
