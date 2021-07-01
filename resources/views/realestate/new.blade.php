
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center mb-5">Új ingatlan hozzáadása</h3>



                <form method="POST" action="{{url('add-real-estate')}}" id="add-real-estate" enctype="multipart/form-data" class="needs-validation" novalidate>
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Név</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ingatlan neve">
                            <span class="text-danger" role="alert">@error('name'){{$message}}@enderror</span><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Leírás</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" placeholder="Ingatlan leírása" rows="3"></textarea>
                            <span class="text-danger" role="alert">@error('description'){{$message}}@enderror</span><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Cím</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Ingatlan címe">
                            <span class="text-danger" role="alert">@error('address'){{$message}}@enderror</span><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Típus</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="type">
                                <option value="0" selected>Válasszon típust</option>
                                {{$realEstateTypeList = App\Http\Controllers\HomeController::listRealEstateTypes()}}
                                @foreach ($realEstateTypeList as $listItem) 
                                    <option value="{{$listItem->name}}">{{$listItem->name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger" role="alert">@error('type'){{$message}}@enderror</span><br>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Ár</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" name="price" placeholder="Ingatlan ára (Ft-ban)">
                            <span class="text-danger" role="alert">@error('price'){{$message}}@enderror</span><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Kép</label>
                        <div class="col-sm-10 custom-file">
                        	<label class="custom-file-label" for="image">Kép feltöltése</label>
                            <input type="file" class="custom-file-control" id="image" name="image">
                            <span class="text-danger" role="alert">@error('image'){{$message}}@enderror</span><br>
                        </div>
                    </div>
                    <input type="submit" value="Mentés" class="btn btn-outline-success"><br><br>         
                </form>
                <a href="/" class="btn btn-outline-primary" role="button">Vissza</a>
        </div>
    </div>
@endsection
