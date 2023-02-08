@extends('layout2')
@section('title','create')
@section('content')
 <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">                                      
    <div class="flex justify-center ">
      <form action="{{route('dishes.store')}}" method="POST" class="form">
        
        <div class="title">
            <h1>create a new Dishes</h1>
        </div>
        @csrf
        <div class="input-container ic1">
            <label for="dishe-name">Dishe Name</label>
            <input id="dishe-name" type="text" name="dishe-name"  class="input">
        </div>
        <div class="input-container">
            <label for="dishe-date">Dishe day</label>
            <input id="dishe-date" type="date" name="dishe-date" class="input">
        </div>
        <div class="input-container">
            <label for="dishe-description">Dishe Description</label>
            <textarea id="dishe-description" name="dishe-description" class="input"></textarea>
        </div class="input-container">
        <div>
            <label for="dishe-image">Dishe Image</label>
            <input id="dishe-image" type="file" name="dishe-image" class="input">
        </div>
        <div class=""> 
            <button type="submit" class="btn-submit">Add</button>
        </div>
      </form>
    </div>                                       
 </div>         

@endsection