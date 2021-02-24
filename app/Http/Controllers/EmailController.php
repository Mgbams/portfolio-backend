<?php

namespace App\Http\Controllers;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function mail(Request $request)
    {
        $contact = $request;
        Mail::to('mgbamsstephen@gmail.com')->send(new SendMail($contact));
        return response()->json(["message" => "Email sent successfully."]);
    }
}
