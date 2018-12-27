<?php

use Illuminate\Database\Seeder;

class insertRole extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ["admin","member"];


        foreach ($roles as $key => $value) {
            $role = new \App\Model\Role();
            $role->role_name = $value;
            $role->save();
        }
    }
}
