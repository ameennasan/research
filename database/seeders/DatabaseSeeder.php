<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Chapter;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'ameennasan',
            'email' => 'ameennasan@gmail.com',
        ]);

        Chapter::factory()->create([
            'name' => 'علوم مالية ومصرفية',
        ]);
        Chapter::factory()->create([
            'name' => 'تسويق',
        ]);
        Chapter::factory()->create([
            'name' => 'قانون',
        ]);
        Chapter::factory()->create([
            'name' => 'تكنولوجيا ونظم معلومات',
        ]);
        Chapter::factory()->create([
            'name' => 'تربية وتعليم وعلم نفس',
        ]);
        Chapter::factory()->create([
            'name' => 'إدارة أعمال',
        ]);
        Chapter::factory()->create([
            'name' => 'محاسبة',
        ]);
        Chapter::factory()->create([
            'name' => 'علوم سياسية وتاريخ',
        ]);
        Chapter::factory()->create([
            'name' => 'إقتصاد',
        ]);
        Chapter::factory()->create([
            'name' => 'سياحة',
        ]);
        Chapter::factory()->create([
            'name' => 'بيئة',
        ]);
        Chapter::factory()->create([
            'name' => 'إدارة مستشفيات',
        ]);

    }
}
