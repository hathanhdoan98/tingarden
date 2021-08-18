<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class OptimizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $image_path;
    public function __construct($image_path)
    {
        $this->image_path = $image_path;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        \Tinify\setKey(config('upload.tinify_key'));
        $source = \Tinify\fromFile($this->image_path);
        $source->toFile($this->image_path);
    }
}
