<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Owner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class isEmailInDBTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
   

    public function setUp() : void
    {
        parent::setUp();

    }
   
     public function test_is_Email_in_DB()
    {

        Owner::create([
            "first_name" => "Jamie", "last_name" => "XX", "telephone" => "02074564892", "email" => "jamiexx@XL.com", "address_1" => "103", "address_2" => "Stoke Newington High Street", "town" => "London","postcode" => "N16 423"
        ]);
        
        $this->assertTrue(Owner::doesEmailExist("jamiexx@XL.com"));
        $this->assertFalse(Owner::doesEmailExist("jamiexx@XL.cm"));
        
    }
}
