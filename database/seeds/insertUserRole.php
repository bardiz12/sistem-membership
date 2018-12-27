<?php

use Illuminate\Database\Seeder;

class insertUserRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into user_role (user_id, role_id) values (?, ?)', [1, 1]);
        DB::insert('insert into user_role (user_id, role_id) values (?, ?)', [1, 2]);
    }
}
