<?php

namespace Astrogoat\Heap;

use Helix\Lego\Apps\App;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Astrogoat\Heap\Settings\HeapSettings;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HeapServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('heap')
            ->settings(HeapSettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ])
            ->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToHead(['heap::script']);
            });
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('heap')->hasViews()->hasConfigFile();
    }
}
