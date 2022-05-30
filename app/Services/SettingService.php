<?php

namespace App\Services;

use App\Repositories\SettingRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Carbon;

class SettingService
{
    private $settingRepository;
    /**
     * @param SettingRepository $settingRepository
     * @return void
     */
    public function __construct(
        SettingRepository $settingRepository
    ) {
        $this->settingRepository = $settingRepository;
    }

    /**
     * @param array $keys
     * @return Collection|null
     */
    public function getSetting(array $filter = []): ?Collection {
        
        $searchCriteria = [
            "filter" => $filter,
        ];
        return $this->settingRepository->findBy(
            $searchCriteria,
            null,
            false
        );
    }

    /**
     * @param array $data
     * @param int|null $data
     * @return bool
     */
    public function updateSetting(array $data): bool{
        $this->settingRepository->removeByKeys(array_column($data, 'key'));
        $dataCreate = [];
        foreach($data as $setting){
            $dataCreate[] = [
                'key' => $setting['key'], 
                'value' => $setting['value'], 
                'type' => config("setting.type." . $setting['type']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }
        $this->settingRepository->insertSettings($dataCreate);

        return true;
    }
}
