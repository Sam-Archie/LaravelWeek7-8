
@extends("app")

@section('heading')
    <h1>Welcome</h1>
@endsection

@section('main')

@if ($owners->count() === 0)
     <p>No owners found.</p>
@elseif($owners->count() !== 0)
    @foreach($owners as $owner)
    <div class="container card my-2">    
    <a href="/owners/{{$owner->id}}">
        <ul class="">
            <div class="pagination">
                <p class="lead">{{$owner->fullName()}}</p>
            </div>
            <div class="">
                <p class="">{{$owner->fullAddress()}}</p>
            </div>
            <div class="">
                <p class="">{{$owner->email}}</p>
            </div>
            <div class="">
                <p class="">{{$owner->telephone}}</p>
            </div>
            </ul>
        </a>
    </div>
    @endforeach
@endif
@endsection

@section('pagination')
<div>
    {{$owners->links("pagination::bootstrap-4")}}
</div>
@endsection

