<?php

namespace App\Providers;

use App\View\Composers\AddDepartment;
use function foo\func;
use Illuminate\Support\ServiceProvider;
use App\View\ThemeViewFinder;
use App\View\Composers\AddadminUser;
use App\View\Composers\AddUser;
use App\View\Composers\AddContainer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['view']->setFinder($this->app['theme.finder']);
        $this->app['view']->composer('backend.users.form', AddDepartment::class);
        $this->app['view']->composer('layouts.backend', AddAdminUser::class);
        $this->app['view']->composer('backend.servers.form', AddUser::class);
        $this->app['view']->composer('backend.servers.form', AddContainer::class);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
//        return 'suee';
        $this->app->singleton('theme.finder', function($app){
            $finder = new ThemeViewFinder($app['files'], $app['config']['view.paths']);
            $config = $app['config']['cms.theme'];
            $finder->setBasePath($app['path.public'].'/'.$config['folder']);
            $finder->setActive($config['active']);
            $original_finder = $this->app['view']->getFinder();
            $finder->setHints($original_finder->getHints());
            return $finder;
        });
    }
}
