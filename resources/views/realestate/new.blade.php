
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h3 class="text-center mb-5">Új ingatlan hozzáadása</h3>



                <form method="POST" action="{{url('add-real-estate')}}" id="add-real-estate" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Név</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ingatlan neve"><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-2 col-form-label">Leírás</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="description" name="description" placeholder="Ingatlan leírása" rows="3"></textarea><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Cím</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="address" name="address" placeholder="Ingatlan címe"><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-2 col-form-label">Típus</label>
                        <div class="col-sm-10">
                            <select class="custom-select" name="type">
                                <option selected>Válasszon típust</option>
                                {{$realEstateTypeList = App\Http\Controllers\HomeController::listRealEstateTypes()}}
                                @foreach ($realEstateTypeList as $listItem) 
                                    <option value="{{$listItem->name}}">{{$listItem->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><br>
                    <div class="form-group row">
                        <label for="price" class="col-sm-2 col-form-label">Ár</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="price" name="price" placeholder="Ingatlan ára (Ft-ban)"><br>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Kép</label>
                        <div class="col-sm-10 custom-file">
                        	<label class="custom-file-label" for="image">Kép feltöltése</label>
                            <input type="file" class="custom-file-control" id="image" name="image"><br>
                        </div>
                    </div>
                    <input type="submit" value="Mentés" class="btn btn-outline-primary"><br><br>         
                </form>
                <a href="/" class="btn btn-outline-danger" role="button">Vissza</a>
        </div>
    </div>
@endsection
