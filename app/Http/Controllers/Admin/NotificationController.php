<?php

namespace App\Http\Controllers\Admin;
use Pusher\Pusher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\Console\Input\Input;

class NotificationController extends Controller
{

    public function sendNotification(Request $request){
        //Remember to change this with your cluster name.
        $options = array(
            'cluster' => 'eu', 
            'encrypted' => true
        );
       //Remember to set your credentials below.
        $pusher = new Pusher(
            '07ae158646bd85bde360',
            'bc27ecfe5b45471aacd4',
            '981681',
            $options
        );
        $message= "Hello User";
        //Send a message to notify channel with an event name of notify-event
        $pusher->trigger('notification', 'MyEvent', $message);  

    }

    private function extractIdFromToken($token) {
        if ($token === null) {
           throw new \Exception('Missing token');
        }
    
        $tokenValue = explode(':', Crypt::decrypt($token));
        // do verification of time needed else go to next
        return $tokenValue[0] ?? null;
    }


    public function pusherAuth()
    {
        $user = auth('admin')->user();
        if ($user) {
            $pusher = new Pusher(config('07ae158646bd85bde360'), config('bc27ecfe5b45471aacd4'), config('981681'));
           echo  $pusher->socket_auth('notification', '128454.17417933');


            return;
        }else {
            header('', true, 403);
            echo "Forbidden";
            return;
        }
    }
}
