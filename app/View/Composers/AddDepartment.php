<?php
/**
 * Created by PhpStorm.
 * User: ns
 * Date: 2018/6/1
 * Time: 11:03
 */
namespace App\View\Composers;
use App\Department;
use Illuminate\View\View;
class AddDepartment
{
    public function compose(View $view)
    {
        $departments = Department::all();
        $arr_departments =[];
        foreach($departments as $department)
        {
            $arr_departments[$department->id] = $department->name;
        }
        $view->with('departments', $arr_departments);
    }
}