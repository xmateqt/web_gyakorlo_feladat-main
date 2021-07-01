<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\RealEstate;
use App\Models\RealEstateType;

class HomeController extends Controller
{
    /**
     * Adja vissza az ingatlanok listáját
     * Azonosító, teljes cím, ár, ingatlan jelleg
     * eloqent modell!
     * https://laravel.com/docs/8.x/eloquent
     */
    public function listRealEstate()
    {
        $realEstatesList = RealEstate::orderBy('created_at', 'desc')->paginate(5);
        return view('realestate.index')->with('realEstateList', $realEstatesList);
    }

    /**
     * @param $id
     * Ajda vissza egy ingatlan adatlapját
     * eloqent modell használata elkerülhetetlen
     * https://laravel.com/docs/8.x/eloquent
     */
    public function getRealEstate($id)
    {
        $realEstate = RealEstate::find($id);
        return view('realestate.details')->with('realEstate', $realEstate);
    }

    /**
     * @param Request $request
     * Ingatlan adatainak modositasa
     * Validacio model szerinti megkötésekkel
     */
    public function updateRealEstate(Request $request)
    {
         $validator = new Validator($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'price' => 'required',
            'type' => 'required',
        ]);

      /* if ($validator->fails()) {
            return redirect('#')->withErrors($validator);
        } */

        $realEstate = RealEstate::find($request->input('id'));
        $realEstate->name = $request->input('name');
        $realEstate->description = $request->input('description');
        $realEstate->address = $request->input('address');
        $realEstate->price = $request->input('price');
        $realEstate->type = $request->input('type');
        $realEstate->save();
        return redirect('/')->with('success_message', 'Ingatlan sikeresen frissítve');

    }

    public function newRealEstate() {
        return view('realestate.new');
    }

    public function addRealEstate(Request $request) {

        $validator = new Validator($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'address' => 'required',
            'price' => 'required',
            'type' => 'required',
        ]);

        $realEstate = new RealEstate;
        $realEstate->name = $request->input('name');
        $realEstate->description = $request->input('description');
        $realEstate->address = $request->input('address');
        $realEstate->price = $request->input('price');
        $realEstate->type = $request->input('type');
        $realEstate->img_uri = "#";
        $realEstate->save();
        return redirect('/')->with('success_message', 'Ingatlan sikeresen hozzáadva');
    }

    /**
     * @param $id
     * azonosito alapjan SOFT delete
     */
    public function deleteRealEstate($id)
    {

    }

    public static function listRealEstateTypes() {
        $realEstateTypeList = RealEstateType::all();
        return $realEstateTypeList;
    }
}
