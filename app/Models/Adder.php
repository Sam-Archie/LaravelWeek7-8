<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adder extends Model
{
    public function add($num_1, $num_2)
    {
        return $num_1 + $num_2;
    }
}
