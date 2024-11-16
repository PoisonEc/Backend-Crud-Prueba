<?php

namespace App\Features\User\Actions;

use App\Features\User\Models\User;
use Illuminate\Database\Eloquent\Collection;

class GetUsersAction
{
    public function execute(): Collection
    {
        return User::all();
    }
}
