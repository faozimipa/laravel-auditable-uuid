<?php

namespace Zitech\LaravelAuditableUuid;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\ServiceProvider;

class AuditableServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        Blueprint::macro('auditable', function() {
            $this->uuid('created_by')->nullable()->index();
            $this->uuid('updated_by')->nullable()->index();
        });

        Blueprint::macro('dropAuditable', function() {
            $this->dropColumn(['created_by', 'updated_by']);
        });
    }


    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Config/ziAuditable.php' => config_path('ziAuditable.php'),
        ]);
    }
    
    
}
