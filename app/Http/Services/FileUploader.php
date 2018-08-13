<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Storage;

class FileUploader
{
    /**
     * @param $user_id
     * @param $avatar
     * @return false|string
     */
    public function uploadAvatar($user_id, $avatar)
    {
        return Storage::putFile('avatars/' . $user_id, $avatar);
    }
}
