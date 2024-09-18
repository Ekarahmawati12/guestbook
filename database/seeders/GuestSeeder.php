<?php

namespace Database\Seeders;

use App\Models\Guest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Guest::create([
            'fullname' =>'eka',
            'institution_id'=>2,
            'from'=> 'serang',
            'phonenumber'=>'09246738',
            'email'=>'ekara@mail.com',
            'note'=>'Test'

            
        ]);
    }
}
