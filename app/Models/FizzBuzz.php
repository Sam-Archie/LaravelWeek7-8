<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FizzBuzz extends Model
{
    // private string $result = "";
   
    public function forNumber($num)
    {
        $result = "";
        
        if ($num % 3 === 0) {
            $result .= "Fizz";
        }
        if ($num % 5 === 0) {
            $result .= "Buzz";
        }
        if ($num % 7 === 0) {
            $result .= "Rarr";
        }

        //An empty string has a falsy value
        // return $result === "" ? "$num" : $result;
        return $result ? $result : "$num";
    }
}
