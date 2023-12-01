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
            'image' => 'images/courses-1.jpg',
        ]);
        Category::create([
            'name' => 'الموارد البشرية والتدريب',
            'image' => 'images/courses-2.jpg',
        ]);
        Category::create([
            'name' => 'العلاقات العامة والإعلام',
            'image' => 'images/courses-3.jpg',
        ]);

        Category::create([
            'name' => 'التربوية والقيادة الاكاديمية',
            'image' => 'images/courses-4.jpg',
        ]);

        Category::create([
            'name' => 'المالية ، المحاسبة والمصرفية',
            'image' => 'images/courses-4.jpg',
        ]);

        Category::create([
            'name' => 'التسويق والمبيعات',
            'image' => 'images/courses-4.jpg',
        ]);

        Category::create([
            'name' => 'القانونية والمشتريات والمخازن',
            'image' => 'images/courses-4.jpg',
        ]);

        Category::create([
            'name' => 'إدارة المكاتب والسكرتارية التنفيذية',
            'image' => 'images/courses-4.jpg',
        ]);

        Category::create([
            'name' => 'الإحصاء ، إدارة المشاريع والتأمين',
            'image' => 'images/courses-4.jpg',
        ]);
        Category::create([
            'name' => 'الجودة و النوعية',
            'image' => 'images/courses-4.jpg',
        ]);
        Category::create([
            'name' => 'الإدارة الصحية والطبية التخصصية',
            'image' => 'images/courses-4.jpg',
        ]);
        Category::create([
            'name' => 'الصيانة ، الهندسة ، والسلامة المهنية',
            'image' => 'images/courses-4.jpg',
        ]);

        Category::create([
            'name' => 'تكنولوجيا و أمن المعلومات',
            'image' => 'images/courses-4.jpg',
        ]);

    }
}
