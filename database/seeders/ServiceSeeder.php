<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'name' => 'Desain Arsitektur',
                'description' => 'Layanan desain bangunan yang mencakup perencanaan estetika dan fungsional bangunan.',
                'price' => 5000.00,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Konsultasi Arsitektur',
                'description' => 'Sesi konsultasi dengan arsitek untuk merancang konsep dan gagasan proyek.',
                'price' => 1000.00,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pengawasan Konstruksi',
                'description' => 'Layanan pengawasan dalam proses konstruksi untuk memastikan proyek berjalan sesuai desain.',
                'price' => 3000.00,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Renovasi Interior',
                'description' => 'Layanan untuk mendesain ulang interior bangunan sesuai kebutuhan klien.',
                'price' => 2000.00,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Landscape Design',
                'description' => 'Desain lanskap untuk mempercantik area sekitar bangunan dengan elemen alam dan taman.',
                'price' => 2500.00,
                'active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
