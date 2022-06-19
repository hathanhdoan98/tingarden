<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;

/**
 * @param $file
 * @return boolean
 */
function isUploadFile($file): bool
{
    return $file instanceof UploadedFile;
}

/**
 * @param string $channel
 * @param string $message
 * @param string $level
 * @param array $context
 * @return void
 */
function writeLog(string $channel = 'stack', string $message, string $level = LOG_LEVEL_INFO, $context = []): void
{
    $log = Log::channel($channel);
    $message = 'Log message: ' . $message;
    switch ($level) {
        case LOG_LEVEL_INFO:
            $log->info($message, $context);
            break;
        case LOG_LEVEL_ERROR:
            $log->error($message, $context);
            break;
        case LOG_LEVEL_DEBUG:
            $log->debug($message, $context);
            break;
    }
}

/**
 * @param string $dirty
 * @param array|null $config
 * @return string
 */
function cleanHTML(string $dirty, $config = null): string
{
    return app('purifier')->clean($dirty, $config);
}

/**
 * @param string $imagePath
 * @return string
 */
function renderImagePath(string $imagePath): string
{
    return public_path($imagePath);
}

/**
 * @param string $column
 * @param string $sortKey
 * @param string $sortValue
 * @return string
 */
function showClassSort(string $column, string $sortKey, string $sortValue): string
{
    if ($sortKey == $column) {
        return $sortValue == 0 ? 'fa-sort-down' : 'fa-sort-up';
    }
    return 'fa-sort';
}

/**
 * @param int $status
 * @return string
 */
function showClassStatus(int $status): string
{
    switch ($status) {
        case 0:
            return 'bg-danger';
        case 1:
            return 'bg-success';
        default:
            return '';
    }
}

/**
 * @param string $url
 * @param string $method
 * @param array $data
 * @return string|bool
 */
function curlRequest(string $url, string $method, array $data=[]){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => $method,
      CURLOPT_POSTFIELDS => $data,
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    return $response;
}

/**
 * Get current url
 * @return string
 */
function getCurrentUrl(): string{
    return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
}
