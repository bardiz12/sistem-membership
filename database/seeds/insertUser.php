<?php

use Illuminate\Database\Seeder;

class insertUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = "Bardizba";
        $user->email = "tes@example.com";
        $user->password  = bcrypt("123456");
        $user->save();
    }
}
