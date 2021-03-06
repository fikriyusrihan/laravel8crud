@extends('layout')

@section('content')
    <style>
        .uper {
            margin-top: 40px;
        }
        .btn-cancel {
            margin-left: 24px;
        }
    </style>
    <div class="card uper">
        <div class="card-header">
            Add Game Data
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
            <form method="POST" action="{{ route('games.store') }}">
                <div class="form-group">
                    @csrf
                    <label for="country_name">Game Name:</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="cases">Price :</label>
                    <input type="text" class="form-control" name="price">
                </div>
                <button type="submit" class="btn btn-primary">Add Game</button>
                <a href="{{ route('games.index') }}" class="btn-cancel">Cancel</a>
            </form>
        </div>
    </div>
@endsection