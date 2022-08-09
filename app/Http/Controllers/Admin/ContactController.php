<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function PostContactDetail(Request $request){
        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');
        $contact_time = date("h:i:sa");
        $contact_date = date("d-m-Y");

        $result = contact::insert([
            'name' => $name,
            'email' => $email,
            'message' => $message,
            'contact_time' => $contact_time,
            'contact_date' => $contact_date

        ]);

        return $result;
    }
}
