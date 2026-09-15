<?php

namespace App\Console\Commands;

use App\Http\Controllers\Auth\Register;
use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

#[Signature('create-user')]
#[Description('Command description')]
class CreateUser extends Command
{
    protected $signature = 'create-user';

    protected $description = 'Register a new user via the console.';

    /**
     * Execute the console command.
     */
    public function handle(Register $registerController)
    {
        $name = $this->ask('Enter the name of the user');
        $email = $this->ask('Enter the email of the user');
        $password = $this->secret('Enter the password of the user');

        $request = request()->create('/register', 'POST', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password,
        ]);

        try {
            $registerController->__invoke($request);
            $this->info("User [{$name}] successfully registered!");
        } catch (\Exception $e) {
            $this->error("Error: " . $e->getMessage());
        }
    }
}
