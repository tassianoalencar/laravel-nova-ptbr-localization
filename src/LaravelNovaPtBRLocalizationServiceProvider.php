<?php

namespace TassianoAlencar\LaravelNovaPtBRLocalization;

use Illuminate\Support\ServiceProvider;

class LaravelNovaPtBRLocalizationServiceProvider extends ServiceProvider
{
    /**
     * Publish the package's config file.
     */
    public function register()
    {
        $pathCommand = 'resource_path';

        $this->publishes([
            __DIR__ . '/pt-BR.json' => $pathCommand('lang/vendor/nova/pt-BR.json')
        ], 'laravel-nova-ptbr-localization');
    }
}