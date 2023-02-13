@extends('layout2')
@section('title','menu')
@section('content')

<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">

                <div class="flex justify-center pt-8 ">
                 <h1 class="mt-5 menuTitle">Dishes of the Week</h1>
                </div>
                
                @if (count($dishes))
                    <div class="row mt-5">
                        @foreach ($dishes as $dishe)
                        
                                <div class="col-sm-4" style="width:20rem">                    
                                        <div class="card mb-3">
                                        
                                            <img style="height: 20rem !important" src="{{asset('/storage/'.$dishe['image'])}}" class="card-img-top"  height="300">
                                            <div class="card-body">
                                            <h5 class="card-title">{{$dishe['name']}}</h5>
                                            <p class="card-text d-inline-block text-truncate" style="max-width: 150px;">{{$dishe['description']}}</p>
                                            <p class="card-text">{{$dishe['date']}}</p>
                                            </div>
                                        </div>
                                    </div>
                                
                        @endforeach
                    </div>
                    @else <h1 style="color:brown">no dishes to display</h1>
   
                        
                @endif
            </div>

@endsection