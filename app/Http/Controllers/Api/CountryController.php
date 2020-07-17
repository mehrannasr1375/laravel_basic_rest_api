<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Api\Country;
use Illuminate\Support\Facades\Validator;

class CountryController extends Controller
{


    // get all contries
    public function index()
    {
        $countries = Country::all();

        if (is_null($countries))
            return response()->json(['countries not found'], 404);

        return response()->json($countries, 200);
    }


    // get single country
    public function show($id)
    {
        $country = Country::find($id);

        if (is_null($country))
            return response()->json(['country not found'], 404);

        return response()->json($country, 200);
    }


    // create a country
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'iso' => 'unique:App\Api\Country,iso',
            'iso3' => 'unique:App\Api\Country,iso3',
        ]);
        if ($validator->fails())
            return response()->json(["error" => $validator->errors()], 400); // 400=bad request

        $country = Country::create($request->all());

        return response()->json($country, 201); // 201=created
    }


    // update a country
    public function update(Request $request, $id)
    {
        $country = Country::find($id);
        
        if (is_null($country))
            return response()->json(['country not found'], 404);
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3',
            'iso' => 'unique:App\Api\Country,iso',
            'iso3' => 'unique:App\Api\Country,iso3',
        ]);
        if ($validator->fails())
            return response()->json(["error" => $validator->errors()], 400); // 400=bad request

        $country->update($request->all());    
        
        return response()->json($country, 200); // 200=ok
    }


    // delete a country
    public function delete($id)
    {
        $country = Country::find($id);
        
        if (is_null($country))
            return response()->json(['country not found'], 404);
        
        $country->delete();   

        return response()->json(null, 204); // 204=no content
    }






















}
