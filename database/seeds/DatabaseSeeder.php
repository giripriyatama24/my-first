<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('SeederKategori');
        //$this->call('SeederAdmin');
        $this->call('SeederLokasi');
        // $this->call(UsersTableSeeder::class);
    }
}
