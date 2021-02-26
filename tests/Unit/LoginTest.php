<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use App\Models\Owner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Assert;

use function PHPUnit\Framework\assertTrue;

// class LoginTest extends TestCase
// {
//     /**
//      * A basic unit test example.
//      *
//      * @return void
//      */

//     use RefreshDatabase;
    
//     private $user;

//      public function setUp() : void
//      {
//          parent::setUp();
 
//          $this->user = User::Create(['name' => 'John', 'email' => 'me@gmail.com', 'password' => 'right']);
//      }

//      public function test__user_is_logged_in()
//      {
//         assertTrue(Auth::login($this->user));
//      }

// }