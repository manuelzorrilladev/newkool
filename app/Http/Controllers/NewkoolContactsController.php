<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\contact;

class NewkoolContactsController extends Controller
{


    public function submit(Request $request): RedirectResponse
    {
        $to_send = $request->all()['toSend'];
        $type = $request->all()['type'];
        $data = [
            'name' => $request->all()['name'],
            'email' => $request->all()['email'],
            'phone' => $request->all()['phone'],
            'subject' => $request->all()['subject'],
            'message' => $request->all()['message'],
            
        ];

        Mail::to($to_send)->send(new contact($data));
        $return_route = $type== 'atencion'? '/atencion-al-cliente' : '/servicio-tecnico';


        return redirect($return_route)->with('message', 'mensaje enviado con exito');
    }
}
