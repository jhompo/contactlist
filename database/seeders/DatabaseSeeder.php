<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       /* \App\Models\User::create([
            'name' => 'Jhonatan',
            'email' => 'jhompo@gmail.com',
            'password' => bcrypt('admin123'),
           // 'is_admin' => true,
           // 'is_staff' => true,
        ]);*/
        \App\Models\User::factory(3)->create();
        \App\Models\Origen::factory(3)->create();
        \App\Models\Tipo::factory(3)->create();
        \App\Models\Contact::factory(20)->create();
        \App\Models\Comentario::factory(30)->create();
        \App\Models\Task::factory(20)->create();
    }
}
