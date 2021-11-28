<?php

namespace Database\Seeders;

use App\Models\DealStatus;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        // This is for Role Name
        DealStatus::create(['name' => 'معلق']);
        DealStatus::create(['name' => 'متقبل الموضوع']);
        DealStatus::create(['name' => 'لم يفهم']);
        DealStatus::create(['name' => 'رفض التعامل']);
        DealStatus::create(['name' => 'غير متقبل الفكرة']);
        DealStatus::create(['name' => 'يحتاج عرض']);
        DealStatus::create(['name' => 'موافق']);

    }
}
