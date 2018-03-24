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
          (2, 4, 'Product Master','product'),
          (3, 4, 'Bill of Material','bom'),
          (4, 4, 'Responsible','responsible')
         ");
    }
}
