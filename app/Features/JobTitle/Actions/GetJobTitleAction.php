<?php

namespace App\Features\JobTitle\Actions;

use App\Features\JobTitle\Models\JobTitle;
use Illuminate\Database\Eloquent\Collection;

class GetJobTitleAction
{
    public function execute(): Collection
    {
        return JobTitle::all();
    }
}
