<?php

namespace App\Features\User\Actions;

use App\Features\User\Models\User;

class DeleteUserAction
{
    public function execute($id)
    {
        /** @var User $record  */
        $record = User::find($id);
        $record->delete();
    }
}
