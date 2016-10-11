<?php

use App\AttendeeType;
use Illuminate\Database\Seeder;

class AttendeeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        AttendeeType::create([
            'role_name'      => 'Mladší žiaci',
            'category'  => 'youth',
        ]);

        AttendeeType::create([
            'role_name'      => 'Starší žiaci',
            'category'  => 'youth',
        ]);

        AttendeeType::create([
            'role_name'      => 'Kadeti',
            'category'  => 'youth',
        ]);

        AttendeeType::create([
            'role_name'      => 'Juniori',
            'category'  => 'adult',
        ]);

        AttendeeType::create([
            'role_name'      => 'Seniori',
            'category'  => 'adult',
        ]);
    }
}
