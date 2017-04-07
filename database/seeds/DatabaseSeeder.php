<?php

use Illuminate\Database\Seeder;
USE Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(TaskTableSeeder::class);

        Model::reguard();
    }
}
