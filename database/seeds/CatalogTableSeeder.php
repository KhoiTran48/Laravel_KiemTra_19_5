<?php

use Illuminate\Database\Seeder;
//use DateTime;
class CatalogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//new DateTime=new DateTime;
        DB::table('catalog')->insert(
					[
						[
							'name' => 'Chuyện lạ',
							'created_at'=>new \DateTime(),
						],
						[
							'name' => 'Giải trí',
							'created_at'=>new \DateTime(),
						],
						[
							'name' => 'Giáo dục',
							'created_at'=>new \DateTime(),
						],
						[
							'name' => 'Kinh doanh',
							'created_at'=>new \DateTime(),
						],
						[
							'name' => 'Nhân ái',
							'created_at'=>new \DateTime(),
						],
						[
							'name' => 'Nhịp sông trẻ',
							'created_at'=>new \DateTime(),
						],

						[
							'name' => 'Pháp luật',
							'created_at'=>new \DateTime(),
						],

						[
							'name' => 'Sự kiện',
							'created_at'=>new \DateTime(),
						],
						[
							'name' => 'Tình yêu',
							'created_at'=>new \DateTime(),
						],
						[
							'name' => 'Xã hội',
							'created_at'=>new \DateTime(),
						],
					]
				);
    }
}
