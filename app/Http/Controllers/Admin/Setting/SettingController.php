<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Traits\Lib;
use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\UpdateSettingRequest;
use App\Services\SettingService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    use Lib;

    protected $settingService;

    /**
     * @param SettingService $settingService
     * @return void
     */
    public function __construct(SettingService $settingService)
    {
        $this->settingService = $settingService;
    }
    public function index()
    {
        $settings = $this->settingService->getSetting()->keyBy('key');
        return view('Admin.Setting.index', [
            'settings' => $settings->toArray()
        ]);
    }


    public function update(UpdateSettingRequest $request){
        try {
            return DB::transaction(function () use ($request) {
                $this->settingService->updateSetting($request->settings);
                return $this->responseOK();
            });
        } catch (\Exception $e) {
            return $this->responseError(Response::HTTP_INTERNAL_SERVER_ERROR, $e);
        }
    }
}
