<?php

namespace App\Http\ViewComposers;

use App\Models\Department;
use App\Providers\DepartmentServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class DepartmentComposer
{
    private $employeeDepartments;

    public function __construct()
    {
        $this->employeeDepartments = Cache::remember('employeeDepartments', 450, function () {
            return Department::all();
        });
    }

    public function compose(View $view)
    {
        $view->with('employeeDepartments', $this->employeeDepartments);
    }
}
