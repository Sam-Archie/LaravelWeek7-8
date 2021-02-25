<?php

namespace App\Models;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    protected $fillable = ["name", "date_of_birth", "type", "weight_kg", "height_m", "biteyness"];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function dangerous()
    {
        return $this->biteyness >= 3;   
    }

    public function treatments()
    {
        return $this->belongsToMany(Treatment::class);
    }

    public function setTreatments(array $string) : Animal
    {
        $treatments = Treatment::fromStrings($string);

        $this->treatments()->sync($treatments->pluck("id"));

        return $this;
    }
}
