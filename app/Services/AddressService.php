<?php
namespace App\Services;

use App\Repositories\DistrictRepository;
use App\Repositories\ProvinceRepository;
use App\Repositories\WardRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class AddressService
{
    private $provinceReposiotry;
    private $districtRepository;
    private $wardRepository;
    /**
     * @param ProvinceRepository $provinceReposiotry
     * @return void
     */
    public function __construct(
        ProvinceRepository $provinceReposiotry, 
        DistrictRepository $districtRepository, 
        WardRepository $wardRepository)
    {
        $this->provinceReposiotry = $provinceReposiotry;
        $this->districtRepository = $districtRepository;
        $this->wardRepository = $wardRepository;
    }

    /**
     * @return Collection|null
     */
    public function getProvinces(): ?Collection{
        return $this->provinceReposiotry->findBy([
            'sort' => 'name'
        ], null, false);
    }

    /**
     * @param string $provinceCode
     * @return Collection|null
     */
    public function getDistricts(string $provinceCode): ?Collection{
        return $this->districtRepository->findBy([
            'filter' => [
                'province_code' => $provinceCode
            ],
            'sort' => 'name'
        ], null, false);
    }

    /**
     * @param string $districtCode
     * @return Collection|null
     */
    public function getWards(string $districtCode): ?Collection{
        return $this->wardRepository->findBy([
            'filter' => [
                'district_code' => $districtCode
            ],
            'sort' => 'name'
        ], null, false);
    }
}