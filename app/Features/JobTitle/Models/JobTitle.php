<?php

namespace App\Features\JobTitle\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class JobTitle
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property bool $active
 * @property int $user_creation_id
 */
class JobTitle extends Model
{
    use HasFactory;

    protected $table = 'job_title';

    public $timestamps = false;

    protected $fillable = [
        'code',
        'name',
        'active',
        'user_creation_id'
    ];
}
