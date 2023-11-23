<?php

namespace App\Actions\Mail;

use App\Models\CallRequest;

class MailActions
{
    function getCallRequestValidationRules(){
        return [
            'name' => ['sometimes'],
            'lastname' => ['sometimes'],
            'email' => ['required', 'email', 'max:254'],
            'phone' => ['sometimes'],
            'data' => ['sometimes'],
            'comment' => ['sometimes'],
        ];
    }
    function onCallRequest($data){
        $cr = CallRequest::create($data);
        \Mail::to(config('utility.emailOperator'))
            ->send(new \App\Mail\CallRequestRecieved($cr));
    }
}
