<?php

namespace App\Http\Controllers;

use App\Models\Districts;
use App\Models\Provinces;
use App\Models\Wards;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //
    public function getProvinces(Request $request)
    {
        $provinces = Provinces::query()->get();
        return view('admin.user.create', [
            "provinces" => $provinces
        ]);
    }

    public function getDistricts($provinceId)
    {
        $districts = Districts::where('province_id', $provinceId)->get();
        return response()->json($districts);
    }


    public function getWards($districtId)
    {
        $wards = Wards::where('district_id', $districtId)->get();
        return response()->json($wards);
    }
}
