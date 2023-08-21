<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Company;
use App\Models\EmployementStatus;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'company_id' => '1',
            'employement_status_id' => '1',
            'name' => 'Kiki Effist',
            'email' => 'admin@dev.com',
            'password' => Hash::make('admin'),
            'remember_token' => Str::random(10),
            'gender' => 'male',
            'marital_status' => 'married'
        ]);

        User::factory(10)->create();
        Company::factory(6)->create();
        News::factory(7)->create();

        EmployementStatus::insert([
            ['name' => 'Probation', 'created_at' => date('Y-m-d h:i:s')],
            ['name' => 'Kontrak', 'created_at' => date('Y-m-d h:i:s')],
            ['name' => 'Permanent', 'created_at' => date('Y-m-d h:i:s')],
            ['name' => 'Magang', 'created_at' => date('Y-m-d h:i:s')]
        ]);
    }
}
