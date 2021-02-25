<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\API\OwnerRequest;

class OwnerController extends Controller
{
    
    public function index()
    {
        $ownerList = Owner::paginate(5);
        return view("owners", ["owners" => $ownerList]);
    }

    public function show(Owner $owner)
    {
        return view("show", ["owner" => $owner]);
    }

    public function create()
    {
        
        return view("form");
    }

    public function createPost(OwnerRequest $request)
    {
        $data = $request->all();

        $owner = Owner::create($data);

        return redirect("owners/{$owner->id}");
    }

    public function updateOwner(OwnerRequest $request, $id)
    {
        $owner = Owner::find($id);

        $data = $request->all();

        $owner->update($data)->save();

        return redirect("owners/{$owner->id}");

    }
}
