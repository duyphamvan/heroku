<?php

use Illuminate\Database\Seeder;

class GampSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hanoi = new \App\Location();
        $hanoi->id = '1';
        $hanoi->city = 'ha noi';
        $hanoi->lat = '21.1702';
        $hanoi->lng = '72.8311';
        $hanoi->save();

        $hanoi = new \App\Location();
        $hanoi->id = '2';
        $hanoi->city = 'Vinh Phuc';
        $hanoi->lat = '21.339343';
        $hanoi->lng = '105.717387';
        $hanoi->save();




    }
}
