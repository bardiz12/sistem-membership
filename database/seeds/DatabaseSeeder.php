<?php

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
        $this->call(insertUser::class);
        $this->call(insertRole::class);
        $this->call(insertUserRole::class);
    }
}
