<?php

class Reservation{

    private $host = 'Host class';
    private $guest = 'Guest class';
    public function cancel(){
        //check whether the cancellation is an option
        //refund the guest...if refunds applicable [Guest]
        //make the room avavilable again [room]
        //Notify the Host of the cancellation [Host]
            //In app notification of the cancellation
            //send email0rSMS
        //Send confirmation to the guest[Email, SMS]

        $this->sendCancellationNotification();
        $this->refundGuest();
    }

    private function sendCancellationNotification(){
       echo 'Sending notification to ' . $this->host . '<br>'; 
    }
    private function refundGuest(){
        echo 'Refunding ' . $this->guest . '<br>'; 
    }
}