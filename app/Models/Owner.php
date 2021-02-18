<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Owner extends Model
{
    use HasFactory;

    protected $fillable = ["first_name", "last_name", "telephone", "email", "address_1", "address_2", "town", "postcode"];

    //Example of using given, when, then 

    //Given
    //Icreate 10 records in my DB

    //When
    //I count those DB records

    //Then
    //I expect to get 10 returned

    
    public function fullName()
    {
        return "{$this->first_name} {$this->last_name}";
    } 

    public function fullAddress()
    {
        return "{$this->address_1}, {$this->address_2}, {$this->town}, {$this->postcode}";
    }

    public function formattedPhoneNumber()
    {
        $partOne = Str::of($this->telephone)->substr(0,4);
        $partTwo = Str::of($this->telephone)->substr(4, 3);
        $partThree = Str::of($this->telephone)->substr(7, 4);
    
        return "{$partOne} {$partTwo} {$partThree}";
    }

    
    public static function haveWeBananas($number)
    {
        if ($number === 0) {
            return "No we have no bananas";
        }
        
        if ($number === 1) {
            return "Yes we have {$number} banana";
        }

        return "Yes we have {$number} bananas";
    }

    public static function doesEmailExist($email)
    {
        // $userEmail = Owner::all()->pluck('email');
        // return $userEmail === $email ? true : false;

        // if (Owner::all()->pluck('email') === $email);

    
    }

}

// $partOne = Str::of($phoneNumber)->substr(3);
// $partTwo = Str::of($phoneNumber)->substr(4, 6);
// $partThree = Str::of($phoneNumber)->substr(7, 10);

// return "{$partOne} {$partTwo} {$partThree}";