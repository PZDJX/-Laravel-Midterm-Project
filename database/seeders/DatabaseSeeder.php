<?php

namespace Database\Seeders;

use App\Models\Student;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
         User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

         Student::create([
            'first_name' => 'Juan',
            'middle_name' => 'Santos',
            'last_name' => 'Dela Cruz',
            'age' => 19,
            'email' => 'juan@mail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();

        Student::create([
            'first_name' => 'fredell',
            'middle_name' => 'Dionero',
            'last_name' => 'Vacaro',
            'age' => 19,
            'email' => 'fredellvacaro586@gmail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();

        Student::create([
            'first_name' => 'Adrian Dave ',
            'middle_name' => 'Demon',
            'last_name' => 'Cano',
            'age' => 19,
            'email' => 'juan@mail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();

        Student::create([
            'first_name' => 'Jason',
            'middle_name' => 'Yesrael',
            'last_name' => 'Relano',
            'age' => 19,
            'email' => 'juan@mail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();

        Student::create([
            'first_name' => 'RJ-MEL',
            'middle_name' => 'Batican',
            'last_name' => 'Dogello',
            'age' => 19,
            'email' => 'juan@mail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();

        Student::create([
            'first_name' => 'Aries',
            'middle_name' => 'Santos',
            'last_name' => 'Dela Cruz',
            'age' => 19,
            'email' => 'juan@mail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();

        Student::create([
            'first_name' => 'Biji',
            'middle_name' => 'Vacaro',
            'last_name' => 'Vacaro',
            'age' => 19,
            'email' => 'juan@mail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();

        Student::create([
            'first_name' => 'A-J',
            'middle_name' => 'Natalio',
            'last_name' => 'Casay',
            'age' => 19,
            'email' => 'juan@mail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();

        Student::create([
            'first_name' => 'EJ',
            'middle_name' => 'Balatayo',
            'last_name' => 'Besana',
            'age' => 19,
            'email' => 'juan@mail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();

        Student::create([
            'first_name' => 'Reymond',
            'middle_name' => 'Gray',
            'last_name' => 'Abender',
            'age' => 19,
            'email' => 'juan@mail.com',
            'address' => 'Roxas City',
            'course' => 'BSIT'
         ]);

        Student::factory(30)->create();



    }
}
