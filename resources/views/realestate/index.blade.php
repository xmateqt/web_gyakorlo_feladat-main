{{--
most-beugrok-mert-jo-gyakornok-vagyok
___________________
Developer: vinczej
Created at: 2021.03.24.
--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center mb-5">Ingatlanok listája</h3>

            @if(count($realEstateList) > 1) 
                @foreach($realEstateList as $realEstate) 

                    <div class="well row">

                        

                        <div class="col-8">
                            <h5 class="pb-3">{{$realEstate->name}}</h5>
                            <p>{{$realEstate->description}}</p>
                            <p>{{$realEstate->address}}, {{$realEstate->type}}</p>
                            <p>Ár: {{$realEstate->price}} Ft</p>
                        </div>
                        <div class="col-4 float-right d-flex flex-column">
                            <img class="img-fluid justify-content-center" src={{$realEstate->img_uri}}>
                        </div>



                    </div>
                    <hr>
                @endforeach
            @else
                <p>Ingatlanok nem találhatóak</p>
            @endif

        </div>
    </div>
@endsection
