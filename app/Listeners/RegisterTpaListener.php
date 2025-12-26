<?php

namespace App\Listeners;

use Mail;
use App\Enum\Role;
use App\Models\User;
use App\Mail\WelcomeMail;
use Illuminate\Support\Str;
use App\Events\RegisterNewTpa;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterTpaListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }
    private function userCreate($event, $password)
    {
        //buatkan sebuah user untuk new student
        $user = User::create([
            'name' => $event->data->name,
            'email' => $event->data->email,
            'password' => $password,
            'role' => Role::STUDENT,
        ]);
        return $user;
    }
    /**
     * Handle the event.
     */
    public function handle(RegisterNewTpa $event): void
    {
        $generatePassword = Str::random(10);

        $user = $this->userCreate($event, $generatePassword);

        // send to user 
        Mail::to($event->data->email)->send(new WelcomeMail($user, $event->data, $generatePassword));


    }
}
