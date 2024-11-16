<?php

namespace App\Features\User\Actions;

use App\Features\User\Models\User;

class GetByIdUserAction
{
    public function execute($id): User
    {
        return User::find($id);
    }
}
