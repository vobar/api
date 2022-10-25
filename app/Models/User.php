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

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'social_id',
        'external_id',

        'username',
        'name',
        'avatar',

        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'social_id'   => 'int',
        'external_id' => 'int',
    ];

    public function roles(): Relation
    {
        return $this->hasMany(Role::class);
    }

    public function ownedBots(): Relation
    {
        return $this->hasMany(Bot::class, 'owner_id');
    }

    public function bots(): BelongsToMany
    {
        return $this->belongsToMany(Bot::class, UserBot::class);
    }
}
