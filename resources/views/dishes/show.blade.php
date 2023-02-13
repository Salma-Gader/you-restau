@extends('layout2')
@section('title', 'show')
@section('content')
    <div class="row mt-5">
            <div class="col-12 col-sm-6 col-md-8" style="width: 25rem;" class="show-card">
                <div class="card mb-3">
                    <img  style="height: 25rem !important" src="{{ asset('/storage/' . $dishe['image']) }}" class="card-img-top h-50" alt="image food">
                    <div class="card-body" >
                        <h5 class="card-title">{{ $dishe['name'] }}</h5>
                        <p class="card-text">{{ $dishe['description'] }}</p>
                        <p class="card-text">{{ $dishe['date'] }}</p>
                        <div class="edit-delete">
                            <a href="{{route('dishes.edit',$dishe->id)}}" class="btn-edite">Edit</a>
                            <form action="{{route('dishes.destroy',$dishe->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn-delete">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
