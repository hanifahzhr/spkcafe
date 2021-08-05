<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SpkcafeAppServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman = '';

        if (request()->segment(1) == 'user') {
            $halaman = 'user';
        }

        if (request()->segment(1) == 'kriteria') {
            $halaman = 'kriteria';
        }

        if (request()->segment(1) == 'alternatif') {
            $halaman = 'alternatif';
        }

        if (request()->segment(1) == 'hitungkriteria') {
            $halaman = 'hitungkriteria';
        }

        if (request()->segment(1) == 'hitungkonsisten') {
            $halaman = 'hitungkonsisten';
        }
        if (request()->segment(1) == 'cekonsisten') {
            $halaman = 'cekonsisten';
        }
        if (request()->segment(1) == 'hitungalternatif') {
            $halaman = 'hitungalternatif';
        }
        if (request()->segment(1) == 'ranking') {
            $halaman = 'ranking';
        }



        view()->share('halaman', $halaman);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
