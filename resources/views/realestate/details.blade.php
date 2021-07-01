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

                    <div class="row">

                        <div class="col-8">
                            <h4 class="pb-3">Ingatlan neve: {{$realEstate->name}}</h5>
                            <p>Ingatlan leírása: {{$realEstate->description}}</p>
                            <p>Ingatlan címe: {{$realEstate->address}}</p>
                            <p>Ingatlan típusa: {{$realEstate->type}}</p>
                            <p>Ingatlan ára: {{$realEstate->price}} Ft</p>
                        </div>
                        <div class="col-4 float-right d-flex flex-column">
                            <img class="img-fluid justify-content-center" src={{$realEstate->img_uri}}>
                        </div>
                    </div>


                <form method="POST" action="{{url('update-real-estate')}}" id="update-real-estate">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{$realEstate->id}}">
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Név</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{$realEstate->name}}" placeholder="Ingatlan neve"><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Leírás</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" placeholder="Ingatlan leírása" rows="3">{{$realEstate->description}}</textarea><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Cím</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address" value="{{$realEstate->address}}" placeholder="Ingatlan címe"><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Típus</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="type">
                                <option>Válasszon típust</option>
                                {{$realEstateTypeList = App\Http\Controllers\HomeController::listRealEstateTypes()}}
                                @foreach ($realEstateTypeList as $listItem) 
                                    @if ($realEstate->type == $listItem->name)
                                        <option selected value="{{$listItem->name}}">{{$listItem->name}}</option>
                                    @else
                                         <option value="{{$listItem->name}}">{{$listItem->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Ár</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" name="price"  value="{{$realEstate->price}}" placeholder="Ingatlan ára (Ft-ban)"><br>
                        </div>
                    </div>
                    <input type="submit" value="Mentés" class="btn btn-outline-primary"><br><br>

                </form>

                <a href="/" class="btn btn-outline-danger" role="button">Vissza</a>
        </div>
    </div>
@endsection
