<?php
namespace App\Models;

use Spatie\Permission\Models\Role as BaseRole;

class Role extends BaseRole
{
    /**
     * [array of validation rules]
     * @var array
     */
    public static $rules = [
        'name' => 'required|max:255',
    ];
}
?>
