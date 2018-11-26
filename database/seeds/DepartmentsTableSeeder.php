<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $department = ['创业学院','教育技术中心'];
        Department::truncate();
        foreach($department as $d)
        {
            Department::create(
                ['name' => $d]
            );
        }
    }
}
