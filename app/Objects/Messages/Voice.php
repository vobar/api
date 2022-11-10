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

namespace App\Objects\Messages;

use DragonCode\SimpleDataTransferObject\DataTransferObject;

class Voice extends DataTransferObject
{
    public ?int $duration;

    public ?string $fileId;

    public ?string $fileUniqueId;

    public ?string $mimeType;

    protected $map = [
        'file_id'        => 'fileId',
        'file_unique_id' => 'fileUniqueId',
        'mime_type'      => 'mimeType',
    ];
}
