<?php

namespace App\Listeners;

use App\Events\NilaiSiswaDiupdate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class KirimNotifikasi
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NilaiSiswaDiupdate  $event
     * @return void
     */
    public function handle(NilaiSiswaDiupdate $event)
    {
        dd($event);
    }
}
