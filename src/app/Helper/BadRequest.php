<?php

namespace App\Helper;

class BadRequest
{
    public static  function notificationBadRequest($e,$code,$line){
        if ($code == 400){
            $message = 'Bad request';
        }elseif ($code == 401){
            $message = 'Unauthorized';
        }elseif ($code == 403){
            $message = 'Forbidden';
        }elseif ($code == 404){
            $message = 'Not found';
        }elseif ($code == 405){
            $message = 'Method not allowed';
        }elseif ($code == 500){
            $message = 'Not Implemented';
        }elseif ($code == 501){
            $message = 'Bad Gateway';
        }elseif ($code == 503){
            $message = 'Service Unavailable';
        }
        $message = isset($message) ? ('Line : '.$line.' ('.$code.') '.$message.'___'.$e)  : ('Line : '.$line.' ('.$code."/".$e);

        return back()->with(
            'notification', [
                'message' => $message,
                'type' => 'error',]
        );

    }
}
