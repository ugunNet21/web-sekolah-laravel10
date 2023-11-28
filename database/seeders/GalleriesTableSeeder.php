<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $galleries = [
            [
                'title' => 'Galeri Kegiatan Sekolah',
                'description' => 'Galeri ini berisi foto-foto kegiatan sekolah',
                'category' => 'Kegiatan',
                'image' => 'https://example.com/images/gallery/1.jpg',
                'uploader_id' => 1,
                'uploaded_at' => now(),
                'status' => 1,
            ],
            [
                'title' => 'Galeri Foto Siswa',
                'description' => 'Galeri ini berisi foto-foto siswa',
                'category' => 'Siswa',
                'image' => 'https://example.com/images/gallery/2.jpg',
                'uploader_id' => 2,
                'uploaded_at' => now(),
                'status' => 1,
            ],
            [
                'title' => 'Galeri Foto Guru',
                'description' => 'Galeri ini berisi foto-foto guru',
                'category' => 'Guru',
                'image' => 'https://example.com/images/gallery/3.jpg',
                'uploader_id' => 3,
                'uploaded_at' => now(),
                'status' => 1,
            ],
        ];

        foreach ($galleries as $gallery) {
            Gallery::create($gallery);
        }
    }
}
