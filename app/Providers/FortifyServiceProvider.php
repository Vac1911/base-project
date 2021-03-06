<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);


        Fortify::loginView(function () {
            return Inertia::render('Login');
        });
        Fortify::registerView(function () {
            return Inertia::render('Signup');
        });
        Fortify::requestPasswordResetLinkView(function () {
            return Inertia::render('ForgotPassword');
        });

        Fortify::resetPasswordView(function ($request) {
            return Inertia::render('ResetPassword');
        });
        Fortify::verifyEmailView(function () {
            return Inertia::render('VerifyEmail');
        });
    }
}
