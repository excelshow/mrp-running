<?php

use Illuminate\Database\Seeder;
use App\MasterKurs;
class KursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kurs = new MasterKurs();
        $kurs->currency = 'IDR';
        $kurs->date = '2018-01-01';
        $kurs->sell = 13000;
        $kurs->middle = 12000;
        $kurs->buy = 11000;
        $kurs->user_id_created = 2;
        $kurs->user_id_updated = 2;
        $kurs->save();

        $kurs = new MasterKurs();
        $kurs->currency = 'USD';
        $kurs->date = '2018-01-01';
        $kurs->sell = 100;
        $kurs->middle = 90;
        $kurs->buy = 80;
        $kurs->user_id_created = 2;
        $kurs->user_id_updated = 2;
        $kurs->save();
    }
}
