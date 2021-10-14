<?php
/*
*   01.02.2021
*   my traits.php
*/
namespace App\Traits;
use App\Models\User;
use App\Models\sistema;
use App\Models\permisos_user;
use App\Models\empresa;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use Tymon\JWTAuth\Facades\JWTAuth;


trait Verifytoken{



    public function verifica($token){
        $tokenin="3RRZ4Czrz9KDMMG5Xo3IzaCU5WV7ZluKDYhNiw9lNZvUdRgFDnNUePyByJF8LVgIXPEE5gzJgQrzqa5RFaPu69oK893wNFWpY6xEoVLtzmNH3seFecjKBCHrjJXkTFo0DjDrR13NKF1R4uTxhxDnSw";
if ($tokenin==$token) {
    return 1;

}else{
    return 0;
}

  }









}

