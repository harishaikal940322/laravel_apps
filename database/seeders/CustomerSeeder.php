<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('customer2')->insert([
            [
                'name' => 'Abu',
                'address1' => 'Desa Jati',
                'address2' => 'Nilai',
                'address3' => 'Negeri Sembilan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ahmad',
                'address1' => 'Pencak Jati',
                'address2' => 'Nilai',
                'address3' => 'Negeri Sembilan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('customer_transaction')->insert([
            'invoice' => 'INV2024000001',
            'customer_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
