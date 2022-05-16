<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LanguageProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view)
        {
            if (session()->get('locale') == '') {
                session()->put('locale', 'ru');
                app()->setLocale('ru');
            } else {
                app()->setLocale(session()->get('locale'));
            }
            $lang = session()->get('locale');
            $n = 'name_'.$lang;
            $d = 'description_'.$lang;
            $ld = 'less_'.$lang;
            $l = 'location_'.$lang;
            $r = 'region_'.$lang;
            $p = 'price_'.$lang;
            $pl = 'place_'.$lang;
            $t = 'type_'.$lang;
            $mn = 'mininame_'.$lang;
            $view->with(['n'=>$n, 'd'=>$d, 'ld'=>$ld, 'l'=>$l, 'r'=>$r, 'p'=>$p, 'pl'=>$pl, 't'=>$t, 'mn'=>$mn, 'lang' => $lang]);
        });
    }
}
