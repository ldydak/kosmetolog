<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function submit(Request $request)
    {
        // $validated = $request->validate([
        //     'name' => 'required|min:3|max:255',
        //     'company' => 'required|min:3',
        //     'email' => 'required|email',
        //     'phone' => 'required|min:5',
        //     'message' => 'required|min:10',
        // ]);
        $checkboxes = [];
        if ($request->checkbox_sklep == 'on'){
            array_push($checkboxes, 'umówi się na zabieg');
        }
        if ($request->checkbox_strona == 'on'){
            array_push($checkboxes, 'umówi się na szkolenie');
        }
        if ($request->checkbox_development == 'on'){
            array_push($checkboxes, 'konsultacji');
        }
        $toSend = ['name' => $request->name, 'company' => $request->company, 'email' => $request->email, 'phone' => $request->phone, 'message' => $request->message, 'checkboxes' => implode(', ', $checkboxes)];
        Mail::to('kontakt@kosmetolog.wroclaw.pl')->send(new ContactMail($toSend));

        $notification = array(
            'message' => 'Dziękujemy za wiadomość, bądźmy w kontakcie.',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
