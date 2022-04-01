<?php

namespace Enrico\Vulnarable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Enrico\Vulnarable\Commands\VulnarableCommand;

class VulnarableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-vulnerable')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-vulnerable_table')
            ->hasCommand(VulnarableCommand::class);
    }
}
