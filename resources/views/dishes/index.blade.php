<x-app-layout>
    <x-slot name="header">
        <div class="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" id="dash-header">
            {{ __('Dashboard') }}
        </h2>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" >
            <a href="{{route('landing_page.index')}}">menu</a>
        </h2>
    </div>
    </x-slot>
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 ">
                 <h1 class="mt-5 dash-title" >Dishes of the Week</h1>
                </div>
                <div class="">
                    <a href="{{route('dishes.create')}}" class="create-btn"><i class='fa fa-plus' style='color: white'></i> new dish </a>
                </div>
                
                @if (count($dishes))
                    <div class="row mt-5">

                        @foreach ($dishes as $dishe)
                        <div class="table-responsive">
                        
                                    <table class="table table-hover" >

                                          
                                        <tbody>
                                         
                                          <tr>
                                            <td><img style="height: 8rem; width: 10rem !important;" src="{{asset('/storage/'.$dishe['image'])}}" class="card-img-top"   height="30"></td>
                                            <td>{{$dishe['name']}}</td>
                                            <span class="inline-block text-truncate" style="max-width: 15px;">
                                            <td >{{$dishe['description']}}</td>
                                            </span>
                                            <td>{{$dishe['date']}}</td>
                                            <td><a href="{{route('dishes.show',$dishe['id'])}}" class="show-btn">show</a></td>
                                          </tr>
                                        
                                        </tbody>
                                      
                                      </table>
                        </div>
                                
                        @endforeach
                    </div>
                    @else <h1 style="color:brown">no dishes to display</h1>
   
                        
                @endif
            </div>

        </x-app-layout>