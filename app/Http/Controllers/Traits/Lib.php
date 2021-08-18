<?php
namespace App\Http\Controllers\Traits;
trait Lib
{
    protected $res = [
        'status' => 200,
        'data' => [],
        'error' => [],
        'success' => true,
        'message' => ''
    ];

    public function setResponse($data)
    {

        if (isset($data['data']) && $data['data']) {
            $this->res['data'] = $data['data'];
        }
        if (isset($data['message'])) {
            $this->res['message'] = $data['message'];
        }
        if (isset($data['error']) && $data['error']) {
            $this->res['error'] = $data['error'];
            $this->res['success'] = false;
        }
        if (isset($data['status'])) {
            $this->res['status'] = $data['status'];
        }
        if (isset($data['success'])) {
            $this->res['success'] = $data['success'];
        }
        return response()->json($this->res, $this->res['status'], []);
    }
}
