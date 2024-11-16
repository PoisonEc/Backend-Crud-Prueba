<?php

namespace App\Features\Department\Actions;

use App\Features\Department\Models\Department;
use Illuminate\Database\Eloquent\Collection;

class GetDepartmentsAction
{

    public function execute(): Collection
    {
        return Department::all();
    }
}
