@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Edit Game Data
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br>
            @endif
            <form action="{{ route('games.update', $game->id) }}" method="post">
                <div class="form-group">
                    @csrf
                    @method('PATCH')
                    <label for="country_name">Game Name: </label>
                    <input type="text" class="form-control" name="name" value="{{ $game->name }}">
                </div>
                <div class="form-group">
                    <label for="cases">Game Price:</label>
                    <input type="text" class="form-control" name="price" value="{{ $game->price }}">
                </div>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>
        </div>
    </div>
@endsection