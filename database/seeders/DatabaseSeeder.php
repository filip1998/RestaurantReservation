<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $users = [
            ['firstname'=>'Pero','lastname'=>'Perić','phone'=>'091234567','email'=>'pero.peric@gmail.com','password'=>'pass'],
            ['firstname'=>'Ivo','lastname'=>'Ivić','phone'=>'097654321','email'=>'ivo.ivic@gmail.com','password'=>'pass'],
            ['firstname'=>'Marko','lastname'=>'Marković','phone'=>'092333333','email'=>'marko.markovic@gmail.com','password'=>'pass']
        ];

        DB::table('users')->insert($users);

        $employees = [
            ['firstname'=>'Horvat','lastname'=>'Horvatić','phone'=>'091234567'],
            ['firstname'=>'Filip','lastname'=>'Filipović','phone'=>'091234567'],
            ['firstname'=>'Ana','lastname'=>'Anić','phone'=>'091234567']
        ];


        DB::table('employees')->insert($employees);

        $restaurants = [
            ['res_name'=>'Restoran I','city'=>'Zadar','res_address'=>'Zadarska ulica 4'],
            ['res_name'=>'Restoran II','city'=>'Šibenik','res_address'=>'Šibenska ulica 5'],
            ['res_name'=>'Restoran III','city'=>'Trogir','res_address'=>'Trogirska ulica 6']
        ];

        DB::table('restaurants')->insert($restaurants);

        $tables = [
            ['capacity'=>6,'empty'=>true,'reserved'=>false,'employee_id'=>1,'res_id'=>1]
        ];

        DB::table('tables')->insert($tables);

        $reservations = [
            ['no_of_people'=> 4,'date'=>'2022-01-01','time'=>'16:00','table_id'=> 1,'user_id'=> 1]
        ];

        DB::table('reservations')->insert($reservations);

        User::factory()
            ->count(env('SEED_USER',5))
            ->create();

        Restaurant::factory()
            ->count(env('SEED_USER'),10)
            ->create();
        Employee::factory()
            ->count(env('SEED_EMPLOYEE'),20)
            ->create();
    }
}
