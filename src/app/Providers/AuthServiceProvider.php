<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * This method customizes the email verification 
     * notification sent to users when they need to 
     * verify their email address. 
     */
    public function boot(): void
    {
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            $greeting = 'Good ' . (date('H') < 12 ? 'Morning' : (date('H') < 18 ? 'Afternoon' : 'Evening')) . ',';
            return (new MailMessage)
            ->subject('Microblog Email Verification')
            ->greeting($greeting)
            ->line('Click the button below to verify your email address.')
            ->action('Verify Email Address', $url);
        });
    }
}
