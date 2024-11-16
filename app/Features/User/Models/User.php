<?php

namespace App\Features\User\Models;

use App\Features\Department\Models\Department;
use App\Features\JobTitle\Models\JobTitle;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class User
 *
 * @property int $id
 * @property string $username
 * @property string $first_name
 * @property string $second_name
 * @property string $first_last_name
 * @property string $second_last_name
 * @property int $department_id
 * @property int $job_title_id
*/
class User extends Model
{
    use HasFactory;

    protected $table = 'user';

    public $timestamps = false;

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function jobTitle(): BelongsTo
    {
        return $this->belongsTo(JobTitle::class);
    }

}
