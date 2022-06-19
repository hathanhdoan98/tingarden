<?php

namespace App\Services;

use App\Repositories\CustomerRepository;
use Illuminate\Database\Eloquent\Model;

class CustomerService
{
    private $customerRepository;
    /**
     * @param CustomerRepository $customerRepository
     * @return void
     */
    public function __construct(
        CustomerRepository $customerRepository
    ) {
        $this->customerRepository = $customerRepository;
    }

    /**
     * Create new customer or update if their phone number is existed
     * @param array $data
     * @return ?Model
     */
    public function createCustomer(array $data): ?Model
    {
        return $this->customerRepository->updateOrCreate([
            'phone' => $data['phone'],
        ],[
            'name' => $data['name'],
            'email' => $data['email'] ?? '',
            'address' => $data['address'],
            'province_code' => $data['province_code'],
            'district_code' => $data['district_code'],
            'ward_code' => $data['ward_code'],
            'status' => config('common.status.active'),
        ]);
    }
}
