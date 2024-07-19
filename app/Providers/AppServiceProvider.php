<?php

namespace App\Providers;

use App\Contracts\Interfaces\CityInterface;
use App\Contracts\Interfaces\SubDistrictInterface;
use App\Contracts\Repositories\CityRepository;
use App\Contracts\Repositories\SubDistrictRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        CityInterface::class => CityRepository::class,
        SubDistrictInterface::class => SubDistrictRepository::class,
    ];
    /**
     * Register any application services.
     */
    public function register(): void
    {
        foreach ($this->register as $index => $value) {
            $this->app->bind($index, $value);
        }
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        config(['app.locale' => 'id']);
        \Carbon\Carbon::setLocale('id');
    }
}
