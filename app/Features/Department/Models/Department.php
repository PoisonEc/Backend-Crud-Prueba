<?php

namespace App\Features\Department\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Department
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property bool $active
 * @property int $user_creation_id
 */

class Department extends Model
{
    use HasFactory;

    protected $table = 'department';

    public $timestamps = false;

    protected $fillable = [
        'code',
        'name',
        'active',
        'user_creation_id'
    ];

}
