<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 1)->state('admin')->create([
           'email' => 'admin@admin.com.br',
            'phone' => '00000000',
            'cpf' => '22569785'
        ]);

        factory(App\User::class, 1)->state('user')->create([
            'email' => 'user@user.com.br'
        ]);

        factory(App\User::class, 3)->state('user');
    }
}
