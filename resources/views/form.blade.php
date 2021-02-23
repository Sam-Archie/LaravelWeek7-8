@extends("app")

@section("main")
    <form class="form card" method="POST">
        <h2 class="card-header">Create Article</h2>
        @csrf

        <fieldset class="card-body">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" class="form-control @error("first_name") is-invalid @enderror" value="{{ old('first_name')}}"/>
            @error("first_name")
                <p class="invalid-feedback">
                {{ $message }}
                </p>
            @enderror
            </div>
            
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" id="last_name" name="last_name" class="form-control @error("last_name") is-invalid @enderror" value="{{ old('last_name')}}"/>
            @error("last_name")
                <p class="invalid-feedback">
                {{ $message }}
                </p>
            @enderror
            </div>

            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" id="telephone" name="telephone" class="form-control @error("telephone") is-invalid @enderror" value="{{ old('telephone')}}" />
            @error("telephone")
                <p class="invalid-feedback">
                {{ $message }}
                </p>
            @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control @error("email") is-invalid @enderror" value="{{ old('email')}}"/>
            @error("email")
                <p class="invalid-feedback">
                {{ $message }}
                </p>
            @enderror
            </div>

            <div class="form-group">
                <label for="address_1">First Line of your Address</label>
                <input type="text" id="address_1" name="address_1" class="form-control @error("address_1") is-invalid @enderror" value="{{ old('address_1')}}"/>
            @error("address_1")
                <p class="invalid-feedback">
                {{ $message }}
                </p>
            @enderror
            </div>

            <div class="form-group">
                <label for="address_2">Second Line of your Address</label>
                <input type="text" id="address_2" name="address_2" class="form-control @error("address_2") is-invalid @enderror" value="{{ old('address_2')}}" />
            @error("address_2")
                <p class="invalid-feedback">
                {{ $message }}
                </p>
            @enderror
            </div>

            <div class="form-group">
                <label for="town">Town</label>
                <input type="text" id="town" name="town" class="form-control @error("town") is-invalid @enderror" value="{{ old("town")}}"/>
            @error("town")
                <p class="invalid-feedback">
                {{ $message }}
                </p>
            @enderror
            </div>

            <div class="form-group">
                <label for="postcode">PostCode</label>
                <input type="text" id="postcode" name="postcode" class="form-control @error("postcode") is-invalid @enderror" value="{{ old('postcode')}}"/>
            @error("postcode")
                <p class="invalid-feedback">
                {{ $message }}
                </p>
            @enderror
            </div>

        </fieldset>

        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection