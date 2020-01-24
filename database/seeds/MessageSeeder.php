<?php

use App\Message;
use App\Role;
use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role::truncate();
        DB::table('assigned_roles')->truncate();
        // Message::truncate();

        $user = User::create([
            'name' => 'Eddy Rufino',
            'email' => 'eddyjaair@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $role = Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador de todo el sitio'
        ]);

        $user->roles()->save($role);

        for ($i=1; $i < 11; $i++) {
            $message = Message::create([
                'name' => 'Administrador',
                'email' => 'eddyjaair@gmail.com',
                'subject' => "Mensaje de prueba {$i}",
                'content' => "Contenido del mensaje {$i}",
                'user_id' => '1',
                'created_at' => Carbon::now()->subDays(100)->addDays($i)
            ]);
        }

        $user->messages()->save($message);
    }
}
