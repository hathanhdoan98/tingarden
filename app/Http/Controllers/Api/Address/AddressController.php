<?php
namespace App\Http\Controllers\Api\Address;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Lib;
use App\Http\Resources\DistrictResource;
use App\Http\Resources\WardResource;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use App\Services\AddressService;

class AddressController extends Controller {
    use Lib;

    private $addressService;

    public function __construct(AddressService $addressService){
        $this->addressService = $addressService;
    }

    public function getDistricts($provinceCode){
        $districts = $this->addressService->getDistricts($provinceCode);
        $districts = DistrictResource::collection($districts)->toArray(\request());
        return $this->responseOK($districts);
    }

    public function getWards($districtCode){
        $wards = $this->addressService->getWards($districtCode);
        $wards = WardResource::collection($wards)->toArray(\request());
        return $this->responseOK($wards);
    }
}
