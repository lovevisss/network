<?php

use Illuminate\Database\Seeder;
use App\Container;
class ContainersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $containers = ['A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7',
                       'B1', 'B2', 'B3', 'B4', 'B5', 'B6', 'B7',
                       'C1', 'C2', 'C3', 'C4', 'C5', 'C6', 'C7',
                         'cluster-UCS', 'dfxy_dp', 'HP-Cluster', 'other-VMware'];
        Container::truncate();
        foreach($containers as $c)
        {
            Container::create([
                'name' => $c
            ]);
        }
    }
}
