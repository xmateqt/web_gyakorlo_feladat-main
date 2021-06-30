<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\RealEstate;

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
        $realEstatesList = RealEstate::all();
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
        $validator = new Validator($request->all(), []);

    }

    /**
     * @param $id
     * azonosito alapjan SOFT delete
     */
    public function deleteRealEstate($id)
    {

    }
}
