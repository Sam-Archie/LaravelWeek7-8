@extends("App")

@section("main")
<section>
    <p>{{$owner->fullName()}}</p>
    <p>{{$owner->telephone}}</p>
    <p>{{$owner->email}}</p>
    <p>{{$owner->fullAddress()}}</p>
</section>
@endsection