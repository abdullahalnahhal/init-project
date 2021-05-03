<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Role;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Setting::all();

        View::composer('users.fields', function ($view) use ($settings) {
            $roles = Role::all();
            $view->with([
                'roles' => $roles,
            ]);
        });

        View::composer('landing-page', function ($view) use ($settings) {
            $settings = $settings->where(['type' => 'website']);
            $view->with([
                'settings' => $settings,
            ]);
        });

        View::composer('layouts.admin.chatting-user-list', function ($view) use ($settings) {
            $users = User::all();
            $view->with([
                'users' => $users,
            ]);
        });

        View::composer('layouts.admin.sidebar', function ($view) use ($settings) {
            $view->with([
                'settings' => $settings,
            ]);
        });
    }
}
