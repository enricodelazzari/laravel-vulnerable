<?php

namespace Enrico\Vulnarable;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Enrico\Vulnarable\Commands\VulnarableCommand;

class VulnarableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-vulnerable')
            ->hasCommand(VulnarableCommand::class);
    }
}
