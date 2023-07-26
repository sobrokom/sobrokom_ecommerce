<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            [
                'id' => 1,
                'name' => 'Super Admin',
                'type' => 'superadmin',
                'vendor_id' => 0,
                'mobile' => '01742735416',
                'email' => 'admin@admin.com',
                'password' => '$2y$10$7c6Y1fZjSGa4OKLkFQ6.o.QXWcZm/g9LUklj/fV.IfuguuosTefy6',
                'image' => '',
                'status' => 1
            ],
        ];
        Admin::insert($adminRecords);
    }
}
