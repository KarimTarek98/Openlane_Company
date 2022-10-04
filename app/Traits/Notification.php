<?php

namespace App\Traits;

trait Notification
{
    public function notification($msg, $alertType, $route)
    {
        $notification = [
            'message' => $msg,
            'alert-type' => $alertType
        ];

        return redirect()->route($route)->with($notification);
    }
}
