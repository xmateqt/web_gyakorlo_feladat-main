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
            <h3 class="text-center mb-5">Ingatlan részletek</h3>

                    <div class="well row">

                        <div class="col-8">
                            <h4 class="pb-3">Ingatlan neve: {{$realEstate->name}}</h5>
                            <p>Ingatlan leírása: {{$realEstate->description}}</p>
                            <p>Ingatlan címe: {{$realEstate->address}}, {{$realEstate->type}}</p>
                            <p>Ingatlan típusa: {{$realEstate->type}}</p>
                            <p>Ingatlan ára: {{$realEstate->price}} Ft</p>
                        </div>
                        <div class="col-4 float-right d-flex flex-column">
                            <img class="img-fluid justify-content-center" src={{$realEstate->img_uri}}>
                        </div>
                    </div>
                <a href="/" class="btn btn-outline-primary" role="button">Vissza</a>
        </div>
    </div>
@endsection
