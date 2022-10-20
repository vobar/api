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

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Socialite\ConfirmRequest;
use App\Models\Social;
use App\Services\Users\Registrator;

class AuthController extends Controller
{
    public function confirm(ConfirmRequest $request, Social $social, Registrator $users)
    {
        $user = $users->register($social, $request->dto());

        $token = $user->createToken($social->type)->plainTextToken;

        return redirect()->intended(route('manage.index'))->withCookie('token', $token);
    }
}
