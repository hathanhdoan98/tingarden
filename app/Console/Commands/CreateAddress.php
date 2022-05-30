<?php

namespace App\Console\Commands;

use App\Imports\AddressImport;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;

class CreateAddress extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try{
            $data = curlRequest('https://provinces.open-api.vn/api/?depth=3', 'GET');
            $data = json_decode($data);
            $provinces = $districts = $wards = [];
            if ($data) {
                Province::whereNotNull('id')->delete();
                District::whereNotNull('id')->delete();
                Ward::whereNotNull('id')->delete();
                foreach ($data as $province) {
                    $provinceName = $province->name;
                    $regex = preg_match('/(Tỉnh|Thành phố)(.*)/i', $provinceName, $output_array);
                    if ($regex) {
                        $provinceName = $output_array[2];
                    }
                    $provinces[] = [
                        'name' => $provinceName,
                        'search' => Str::slug($provinceName, ' '),
                        'alias' => Str::slug($provinceName, '-'),
                        'province_id' => $province->code,
                        'province_code' => $province->code,
                        'code' => $province->code,
                        'status' => config('common.status.active'),
                        'created_at' => Carbon::now()->toDateTimeString(),
                        'updated_at' => Carbon::now()->toDateTimeString(),
                    ];
                    foreach ($province->districts as $district) {
                        $districts[] = [
                            'name' => $district->name,
                            'search' => Str::slug($district->name, ' '),
                            'alias' => Str::slug($district->name, '-'),
                            'district_id' => $district->code,
                            'district_code' => $district->code,
                            'province_code' => $province->code,
                            'code' => $province->code,
                            'status' => config('common.status.active'),
                            'created_at' => Carbon::now()->toDateTimeString(),
                            'updated_at' => Carbon::now()->toDateTimeString(),
                        ];
                        foreach ($district->wards as $ward) {
                            $wards[] = [
                                'name' => $ward->name,
                                'search' => Str::slug($ward->name, ' '),
                                'alias' => Str::slug($ward->name, '-'),
                                'ward_id' => $ward->code,
                                'ward_code' => $ward->code,
                                'district_code' => $district->code,
                                'code' => $ward->code,
                                'status' => config('common.status.active'),
                                'created_at' => Carbon::now()->toDateTimeString(),
                                'updated_at' => Carbon::now()->toDateTimeString(),
                            ];
                        }
                    }
                }
                Province::insert($provinces);
                foreach(array_chunk($districts, 50) as $chunk){
                    District::insert($chunk);
                }
                foreach(array_chunk($wards, 50) as $chunk){
                    Ward::insert($chunk);
                }
                writeLog('log_cronjob', 'Crawl address success');
            } else {
                writeLog('log_cronjob', 'Api crawl address (https://provinces.open-api.vn/api) doesnt work', LOG_LEVEL_ERROR);
            }
        }catch(\Exception $e){
            writeLog('log_cronjob', $e->getMessage(), LOG_LEVEL_ERROR);
        }
    }
}
