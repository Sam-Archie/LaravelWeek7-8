<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Owner;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AddOwnerToDBTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */

    private $owner;

    public function setUp() : void
    {
        parent::setUp();

        $this->owner = new Owner([
            "first_name" => "Jamie", "last_name" => "XX", "telephone" => "02074564892", "email" => "jamiexx@XL.com", "address_1" => "103", "address_2" => "Stoke Newington High Street", "town" => "London","postcode" => "N16 423"
        ]);
    }


    public function test__AddOwnerToTestDataBase()
    {

        Owner::create([
            "first_name" => "Jamie", "last_name" => "XX", "telephone" => "02074564892", "email" => "jamiexx@XL.com", "address_1" => "103", "address_2" => "Stoke Newington High Street", "town" => "London","postcode" => "N16 423"
        ]);

        $ownerFromDB = Owner::first();

        $this->assertSame($this->owner->fullName(), $ownerFromDB->fullName());
        $this->assertSame($this->owner->fullAddress(), $ownerFromDB->fullAddress());
        $this->assertSame($this->owner->email, $ownerFromDB->email);
        $this->assertSame($this->owner->formattedPhoneNumber(), $ownerFromDB->formattedPhoneNumber());
    }
}
