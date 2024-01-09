<?php
namespace IntelligentSoftwareDevelopment\StarterKit;

use Illuminate\Support\ServiceProvider;

class StarterKitServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->publishes([
            __DIR__ . '/phpstan.neon' => base_path('phpstan.neon'),
            __DIR__ . '/commands.txt' => base_path('commands.txt'),
        ]);
    }
}
