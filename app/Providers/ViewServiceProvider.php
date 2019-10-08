<?php

namespace App\Providers;

use App\Models\Label;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
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
        $labels = Label::all();
        $labelsArr = [];
        foreach ($labels as $label) {
            $labelsArr[$label->key] = $label->value;
        }
        View::share('labels', $labelsArr);
    }
}
