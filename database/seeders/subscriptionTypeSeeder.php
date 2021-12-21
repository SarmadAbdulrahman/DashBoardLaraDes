<?php

namespace Database\Seeders;

use App\Models\subscriptionType;
use Illuminate\Database\Seeder;


class subscriptionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        subscriptionType::create([
            'typeCode'=>1,
            'name'=>"اشتراك شهري",
            'amount'=>25000
        ]);

        subscriptionType::create([
            'typeCode'=>2,
            'name'=>"نسبة",
            'ratio'=>1
        ]);

        subscriptionType::create([
            'typeCode'=>2,
            'name'=>"نسبة 2%",
            'ratio'=>2
        ]);

        subscriptionType::create([
            'typeCode'=>2,
            'name'=>" نسبة 3%",
            'ratio'=>3
        ]);
        subscriptionType::create([
            'typeCode'=>2,
            'name'=>"نسبة 4%",
            'ratio'=>4
        ]);


        subscriptionType::create([
            'typeCode'=>2,
            'name'=>"نسبة 5%",
            'ratio'=>5
        ]);


    }
}
