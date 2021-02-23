<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Owner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdatePhoneNumberTest extends TestCase
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

    public function test_update_phone_number()
    {
        Owner::create([
            "first_name" => "Jamie", "last_name" => "XX", "telephone" => "02074564892", "email" => "jamiexx@XL.com", "address_1" => "103", "address_2" => "Stoke Newington High Street", "town" => "London","postcode" => "N16 423"
            ]);
    }

}
