<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\Sector;

class SectorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Sectors =[
            '「重要」で「緊急」なもの',
            '「重要」だけど「緊急」でないもの',
            '「重要」ではないが「緊急」なもの',
            '「重要」でもないが「緊急」でもないもの'
        ];

        foreach($Sectors as $Sector){
            Sector::create([
                'name' => $Sector,
            ]);
        }
    }
}
