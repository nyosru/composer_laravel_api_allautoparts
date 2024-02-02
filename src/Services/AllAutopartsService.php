<?php

namespace Phpcatcom\Api\AllAutoParts\Services;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class AllAutopartsService extends Controller
{

    /**
     * @param int $api_id
     * @param string $login
     * @param string $passsword
     * @param string $search
     * @return String
     */
    public static function get(int $api_id, string $login, string $passsword, string $search):string
    {
        $query = [
            'search' => $search,
            'login' => $login,
            'password' => $passsword,
            'api_id' => $api_id
        ];
        return file_get_contents('https://api74.php-cat.com/allautoparts/api.php?' . http_build_query($query));
    }

}
