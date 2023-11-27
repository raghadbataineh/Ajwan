<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{

    public function run():void
    {
        Category::create([
            'name' => 'الإدارة العامة والقيادة',
            'image' => 'courses-1.jpg',
        ]);
        Category::create([
            'name' => 'الموارد البشرية والتدريب',
            'image' => 'courses-2.jpg',
        ]);
        Category::create([
            'name' => 'العلاقات العامة والإعلام',
            'image' => 'courses-3.jpg',
        ]);

        Category::create([
            'name' => 'التربوية والقيادة الاكاديمية',
            'image' => 'courses-4.jpg',
        ]);

        Category::create([
            'name' => 'المالية ، المحاسبة والمصرفية',
            'image' => 'courses-4.jpg',
        ]);

        Category::create([
            'name' => 'التسويق والمبيعات',
            'image' => 'courses-4.jpg',
        ]);

        Category::create([
            'name' => 'القانونية والمشتريات والمخازن',
            'image' => 'courses-4.jpg',
        ]);

        Category::create([
            'name' => 'إدارة المكاتب والسكرتارية التنفيذية',
            'image' => 'courses-4.jpg',
        ]);

        Category::create([
            'name' => 'الإحصاء ، إدارة المشاريع والتأمين',
            'image' => 'courses-4.jpg',
        ]);
        Category::create([
            'name' => 'الجودة و النوعية',
            'image' => 'courses-4.jpg',
        ]);
        Category::create([
            'name' => 'الإدارة الصحية والطبية التخصصية',
            'image' => 'courses-4.jpg',
        ]);
        Category::create([
            'name' => 'الصيانة ، الهندسة ، والسلامة المهنية',
            'image' => 'courses-4.jpg',
        ]);

        Category::create([
            'name' => 'تكنولوجيا و أمن المعلومات',
            'image' => 'courses-4.jpg',
        ]);

    }
}
