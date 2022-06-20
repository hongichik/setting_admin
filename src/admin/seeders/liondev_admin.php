<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;
use liondev\setting_admin\function\image;

class liondev_admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $img = new image(); 
        
        $create_admin_1 = new User();
        $create_admin_1->name = "master admin";
        $create_admin_1->email = "masteradmin@gmail.com";
        $create_admin_1->password = bcrypt('123456');
        $create_admin_1->img = $img->copy();
        $create_admin_1->save();

    }
}
