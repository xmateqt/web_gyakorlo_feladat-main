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

            @if(count($realEstateList) > 0) 
                @foreach($realEstateList as $realEstate) 

                    <div class="row">

                        

                        <div class="col-8 card p-3 mt-3 mb-3">
                            <h5 class="pb-3"><a href="/get-real-estate/{{$realEstate->id}}">{{$realEstate->name}}</a></h5>
                            <p>{{$realEstate->address}}, {{$realEstate->type}}</p>
                            <p>Ár: {{$realEstate->price}} Ft</p>
                        </div>
                        <div class="col-4 card p-3 mt-3 mb-3 float-right d-flex flex-column">
                            <img class="img-fluid justify-content-center" src={{$realEstate->img_uri}}>
                        </div>



                    </div>
                    <hr>
                @endforeach
                {{$realEstateList->links("pagination::bootstrap-4")}}
            @else
                <p>Ingatlanok nem találhatóak</p>
            @endif

        </div>
    </div>
@endsection
