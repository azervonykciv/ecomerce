<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            ['id' => 1,'name'=>'Super Admin','type'=>'superadmin','mobile'=>'98000000','email'=>'admin@admin.com']
        ];
    }
}
