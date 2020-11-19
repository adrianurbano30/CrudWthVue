<?php

namespace App\Providers;

use App\Models\Entry;
use App\Policies\EntryPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Entry::class=>EntryPolicy::class,
    ];


    public function boot()
    {
        $this->registerPolicies();


    }
}
