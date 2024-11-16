<?php

namespace App\Features\User\Actions;

use App\Features\User\Models\User;

class EditUserAction
{
    public function execute($data): User
    {
        /** @var User $record */
        $record = User::find($data["id"]);

        $record->username = $data['username'];
        $record->first_name = $data['first_name'];
        $record->second_name = $data['second_name'];
        $record->first_last_name = $data['first_last_name'];
        $record->second_last_name = $data['second_last_name'];
        $record->department_id = $data['department_id'];
        $record->job_title_id = $data['job_title_id'];

        $record->save();
        $record->refresh();

        return $record;
    }
}
