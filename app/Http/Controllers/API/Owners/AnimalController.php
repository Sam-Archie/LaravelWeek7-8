<?php

namespace App\Http\Controllers\API\Owners;

use App\Models\Owner;
use App\Models\Animal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\AnimalRequest;
use App\Http\Resources\API\Owners\AnimalResource;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Owner $owner)
    {
        // dd($owner->animals);
        return AnimalResource::collection($owner->animals);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnimalRequest $request, Owner $owner)
    {
        $data = $request->all();

        $animal = new Animal($data);

        $animal->owner()->associate($owner);

        $animal->save();

        $animal->setTreatments($request->get("treatments"));
      
        return new AnimalResource($animal);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Owner $owner, Animal $animal)
    {
        return new AnimalResource($animal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AnimalRequest $request, Owner $owner, Animal $animal)
    {
        $data = $request->all();

        $animal->fill($data);

        $animal->setTreatments($request->get("treatments"));

        $animal->save();

        return new AnimalResource($animal);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Owner $owner, Animal $animal)
    {
        $animal->delete();

        return response(null, 204);
    }
}
