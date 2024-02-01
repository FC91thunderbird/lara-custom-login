<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use App\Models\User_detail;
use Faker\Factory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(1000)->create();
        // \App\Models\User_detail::factory(10)->create();

        // Permission
        $endPoints = ['create','read','update','delete'];
        $types = ['user','role','permission'];


        foreach($endPoints as $end){
            foreach($types as $type){
                $permission = new Permission();
                $permission->name = $type ."-". $end;
                $permission->save();
            }
        }



        // $roles = ["admin", "user", "editer"];

        // foreach($roles as $role){
        //     $roles = new Role();
        //     $roles->name = $role;
        //     $roles->save();
        // }

        // $users = [
        //     [
        //         'name'=> 'admin',
        //         'username'=> 'admin',
        //         'email'=> 'admin@gmail.com',
        //         'password'=> 'admin',
        //         'roleId'=> 1
        //     ],
        //     [
        //         'name'=> 'user',
        //         'username'=> 'user',
        //         'email'=> 'user@gmail.com',
        //         'password'=> 'user',
        //         'roleId'=> 2
        //     ],
        //     [
        //         'name'=> 'editer',
        //         'username'=> 'editer',
        //         'email'=> 'editer@gmail.com',
        //         'password'=> 'editer',
        //         'roleId'=> 3
        //     ],
           
        // ];

        // foreach ($users as $user) {
        //     User::create($user);
        // }

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(UserTableSeeder::class);
        // $this->call(UserDetailsTableSeeder::class);
        
   
    }
}
