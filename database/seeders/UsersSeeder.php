<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\RoleModel;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'email' => 'superadmin@kkemenagkalsel.co.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'superadmin')->first()->id_role,
                'nip' => '12121',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'admin@kkemenagkalsel.co.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'admin')->first()->id_role,
                'nip' => '12122',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'admin_2@kkemenagkalsel.co.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'admin')->first()->id_role,
                'nip' => '12123',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'manager@kkemenagkalsel.co.id',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'manager')->first()->id_role,
                'nip' => '12124',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'pegawai@kkemenagkalsel.co.id',
                'password' => Hash::make('123'),
                'status' => false,
                'id_role' => RoleModel::where('nama_role', 'pegawai')->first()->id_role,
                'nip' => '12125',
                'created_at' => \Carbon\Carbon::now(),
            ],
            [
                'email' => 'Naufal Halim@gmail.com',
                'password' => Hash::make('123'),
                'status' => true,
                'id_role' => RoleModel::where('nama_role', 'pegawai')->first()->id_role,
                'nip' => '12126',
                'created_at' => \Carbon\Carbon::now(),
            ],
        ];

        // Memasukkan data user ke dalam tabel users
        User::insert($users);
    }
}
