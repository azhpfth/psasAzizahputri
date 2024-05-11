<?php

namespace Database\Seeders;

use App\Models\Outlet;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OutletsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Outlet::create ([
            'code' => '001',
            'name' => 'Raya',
            'status' => 'sedang berlangsung',
            'addres' => 'jalan cempaka No.3',
            'phone_number' => '0855628900',
        ]);

        Outlet::create ([
            'code' => '002',
            'name' => 'Angkasa',
            'status' => 'sedang berlangsung',
            'addres' => 'jalan pangandaran No.2',
            'phone_number' => '0896378200',
        ]);

        Outlet::create ([
            'code' => '003',
            'name' => 'Fania',
            'status' => 'sudah selesai',
            'addres' => 'jalan paripurna No.6',
            'phone_number' => '08572347890',
        ]);

        Outlet::create ([
            'code' => '004',
            'name' => 'Agnia',
            'status' => 'sedang berlangsung',
            'addres' => 'jalan pasir putih No.1',
            'phone_number' => '0853221015',
        ]);

        Outlet::create ([
            'code' => '005',
            'name' => 'Andika',
            'status' => 'sedang berlangsung',
            'addres' => 'jalan teratai No.11',
            'phone_number' => '08971567223',
        ]);
    }
}
