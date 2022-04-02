<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Переписать, добавить статики типа HTML полей и отформатированного телефона дабы не грузть ни JS ни PHP Бэк
        $data=array(
            'site_id' => 1,
            'city_id' => 1,
            'city' => 'London',
            'description'=>"Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem Excepteu sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspi deserunt mollit anim id est laborum. sed ut perspi.",
            'short_des'=>"Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.",
            'photo'=>"https://varimylo.ru/wa-data/public/site/themes/club_masters/img/top_logo.png",
            'logo'=>'https://varimylo.ru/wa-data/public/site/themes/club_masters/img/top_logo.png',
            'address'=>"NO. 342 - London Oxford Street, 012 United Kingdom",
            'email_for_clients'=>"eshop@gmail.com",
            'default_phone'=>"+060 (800) 801-582",
            'additional_phone'=>"+060 (800) 801-582",
            'commercial_email'=>"eshop@gmail.com",
            'working_time'=>'Пн-Пт: 10.00-20.00 Сб-Вс: 10.00-19.00',
            'vk' =>'',
            'instagramm'=>'',
            'youtube'=>'',
        );
        DB::table('site_settings')->insert($data);
    }
}
