<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new App\User;
        $user->name='pedro araya';
        $user->email='pedroaraya@fizz.cl';
        $user->password=bcrypt(123456);
        $user->save();
    }
}
