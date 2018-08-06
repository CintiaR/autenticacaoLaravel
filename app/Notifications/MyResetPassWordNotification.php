<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;

class MyResetPassWordNotification extends ResetPassword
{
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->subject(Lang::getFromJson('Redefinição de senha'))
            ->line(Lang::getFromJson('Você está recebendo este e-mail porque solicitou redefinição de sennha'))
            ->action(Lang::getFromJson('Reset Password'), url(config('app.url').route('password.reset', $this->token, false)))
            ->line(Lang::getFromJson('If you did not request a password reset, no further action is required.'));
    }

}
