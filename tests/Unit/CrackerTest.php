<?php

namespace Tests\Unit;

use App\Models\Cracker;
use PHPUnit\Framework\TestCase;

class CrackerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_1()
    {
        $cracker = new Cracker();
        $this->assertSame("ab", $cracker->decrypt("!)"));
    }
    public function test_2()
    {
        $cracker = new Cracker();
        $this->assertSame("hello mum", $cracker->decrypt("&.aad bjb"));
    }
}
