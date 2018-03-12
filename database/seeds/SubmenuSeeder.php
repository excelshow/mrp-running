<?php

use Illuminate\Database\Seeder;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('submenu')->truncate();
      	DB::insert("
        INSERT INTO `submenu` (`id`, `menu_id`,`name`,`link`)
        VALUES
          (1, 4, 'Unit Master','unit'),
          (2, 4, 'Warehouse Master','warehouse'),
          (3, 4, 'Customer Master','customer'),
          (4, 4, 'Terms And Condition','tnc')
         ");
    }
}
