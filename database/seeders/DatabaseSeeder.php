<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ArsipModel;
use App\Models\RhkModel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Isi Arsip
        ArsipModel::create([
            'rhk_id'=> '1',
            'tanggal' => '3-3-2023',
            'judul_kegiatan' => 'Penyuluhan'
        ]);
        ArsipModel::create([
            'rhk_id'=> '2',
            'tanggal' => '21-3-2023',
            'judul_kegiatan' => 'Senam'
        ]);
        ArsipModel::create([
            'rhk_id'=> '1',
            'tanggal' => '27-3-2023',
            'judul_kegiatan' => 'Pembersihan'
        ]);
        
        //Isi Rhk
        RhkModel::create([
            'nama_rhk' => 'Tugas A'
        ]);
        RhkModel::create([
            'nama_rhk' => 'Tugas B'
        ]);
    }
}
