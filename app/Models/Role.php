<?php

/**
 * This file is part of the "Volunteers CRM" project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Andrey Helldar <helldar@dragon-code.pro>
 * @copyright 2022 Andrey Helldar
 * @license MIT
 *
 * @see https://github.com/volunteers-crm
 */

declare(strict_types=1);

namespace App\Models;

use App\Models\Scopes\SortByTitleScope;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'is_storage',
    ];

    protected $casts = [
        'is_storage' => 'bool',
    ];

    protected static function booted()
    {
        static::addGlobalScope(new SortByTitleScope());
    }
}
