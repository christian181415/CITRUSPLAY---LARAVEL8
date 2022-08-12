<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

use App\Models\Lesson;
use App\Observers\LessonObserver;

use App\Models\Section;
use App\Observers\SectionObserver;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //CREADO PARA EL SERVIDOR DE AZURE
        //31/08/2021
        $this->app->bind('path.public',function(){
            return base_path('public');
            });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Lesson::observe(LessonObserver::class);
        Section::observe(SectionObserver::class);


        Blade::directive('routeIs', function ($expression) {
            return "<?php if(Request::url() == route($expression)): ?>";
        });
    }
}
