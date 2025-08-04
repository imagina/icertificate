<?php

namespace Modules\Icertificate\Providers;

use Illuminate\Database\Eloquent\Factory as EloquentFactory;
use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Icertificate\Listeners\RegisterIcertificateSidebar;

class IcertificateServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterIcertificateSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            // append translations
        });


    }

    public function boot()
    {
       
        $this->publishConfig('icertificate', 'config');
        $this->publishConfig('icertificate', 'crud-fields');

        $this->mergeConfigFrom($this->getModuleConfigFilePath('icertificate', 'settings'), "asgard.icertificate.settings");
        $this->mergeConfigFrom($this->getModuleConfigFilePath('icertificate', 'settings-fields'), "asgard.icertificate.settings-fields");
        $this->mergeConfigFrom($this->getModuleConfigFilePath('icertificate', 'permissions'), "asgard.icertificate.permissions");

        //$this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Repositories\CustomerRepository',
            function () {
                $repository = new \Repositories\Eloquent\EloquentCustomerRepository(new \Entities\Customer());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Repositories\Cache\CacheCustomerDecorator($repository);
            }
        );
        $this->app->bind(
            'Repositories\CompanyRepository',
            function () {
                $repository = new \Repositories\Eloquent\EloquentCompanyRepository(new \Entities\Company());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Repositories\Cache\CacheCompanyDecorator($repository);
            }
        );
        $this->app->bind(
            'Repositories\TrainingTypeRepository',
            function () {
                $repository = new \Repositories\Eloquent\EloquentTrainingTypeRepository(new \Entities\TrainingType());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Repositories\Cache\CacheTrainingTypeDecorator($repository);
            }
        );
        $this->app->bind(
            'Repositories\TrainerRepository',
            function () {
                $repository = new \Repositories\Eloquent\EloquentTrainerRepository(new \Entities\Trainer());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Repositories\Cache\CacheTrainerDecorator($repository);
            }
        );
        $this->app->bind(
            'Repositories\CourseRepository',
            function () {
                $repository = new \Repositories\Eloquent\EloquentCourseRepository(new \Entities\Course());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Repositories\Cache\CacheCourseDecorator($repository);
            }
        );
        $this->app->bind(
            'Repositories\CertificateRepository',
            function () {
                $repository = new \Repositories\Eloquent\EloquentCertificateRepository(new \Entities\Certificate());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Repositories\Cache\CacheCertificateDecorator($repository);
            }
        );
// add bindings






    }


}
