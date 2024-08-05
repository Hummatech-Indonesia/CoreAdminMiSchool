<?php

namespace App\Services;

use App\Http\Requests\StoreContactUsRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendEmail;

class ContactUsService
{
    public function sendEmail(StoreContactUsRequest $request, $email): array|bool
    {
        $data = $request->validated();
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ];

        Mail::to($email)->send(new SendEmail($data));

        return $data;
    }
}
