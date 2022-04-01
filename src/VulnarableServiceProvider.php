<?php

namespace Enrico\Vulnarable;

use Enrico\Vulnarable\Commands\VulnarableCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class VulnarableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-vulnerable')
            ->hasCommand(VulnarableCommand::class);
    }
}
