<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Owner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;

class LoginTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

     private $user;

     public function setUp()
     {
        $this->user = new User();


     }


    public function test__user_is_loggged_in()
    {
        $user = new User();

        Auth::attempt(['username' => 'me', 'password' => 'right']);
        $this->assertTrue(Auth::check());
    }


}
