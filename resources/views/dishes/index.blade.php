@extends('layout2')
@section('title','menu')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 ">
                 <h1>Home menu</h1>
                </div>
                @if (count($dishes))
                <div class="mt-8">
                    @foreach ($dishes as $dishe)
                        <ul>
                            <li>
                                <a href="{{route('dishes.show',$dishe['id'])}}">{{$dishe['name']}}:{{$dishe['description']}}</a>
                            </li>
                            
                        </ul>
                    @endforeach
                    @else <h1>no dishes to display</h1>
   
                </div         
                @endif

@endsection