<?php

namespace App\Providers;

use App\Contracts\Interfaces\CityInterface;
use App\Contracts\Interfaces\FaqInterface;
use App\Contracts\Interfaces\NewsCategoryInterface;
use App\Contracts\Interfaces\NewsInterface;
use App\Contracts\Interfaces\ProvinceInterface;
use App\Contracts\Interfaces\RfidInterface;
use App\Contracts\Interfaces\SchoolInterface;
use App\Contracts\Interfaces\SubDistrictInterface;
use App\Contracts\Interfaces\UserInterface;
use App\Contracts\Repositories\CityRepository;
use App\Contracts\Repositories\FaqRepository;
use App\Contracts\Repositories\NewsCategoryRepository;
use App\Contracts\Repositories\NewsRepository;
use App\Contracts\Repositories\ProvinceRepository;
use App\Contracts\Repositories\RfidRepository;
use App\Contracts\Repositories\SchoolRepository;
use App\Contracts\Repositories\SubDistrictRepository;
use App\Contracts\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    private array $register = [
        ProvinceInterface::class => ProvinceRepository::class,
        CityInterface::class => CityRepository::class,
        SubDistrictInterface::class => SubDistrictRepository::class,
        SchoolInterface::class => SchoolRepository::class,
        RfidInterface::class => RfidRepository::class,
        FaqInterface::class => FaqRepository::class,
        NewsCategoryInterface::class => NewsCategoryRepository::class,
        NewsInterface::class => NewsRepository::class,
        UserInterface::class => UserRepository::class
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
