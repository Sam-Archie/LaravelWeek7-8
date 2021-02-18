
@extends("app")

@section('heading')
    <h1>Welcome</h1>
@endsection

@section('owner-list')

@if ($owners->count() === 0)
     <p>No owners found.</p>
@elseif($owners->count() !== 0)
    @foreach($owners as $owner)
        <ul>
            <li>{{$owner->fullName()}}</li>
        </ul>
    @endforeach
@endif
@endsection

