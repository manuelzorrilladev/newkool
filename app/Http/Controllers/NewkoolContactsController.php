<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact; // Asegúrate de que esta clase de mail existe
use App\Mail\Warranty;
use Illuminate\Support\Facades\Storage; // Necesario para almacenar el archivo


class NewkoolContactsController extends Controller
{

    public function service_submit(Request $request): RedirectResponse
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:20',
            'location'=> 'nullable|string|max:255',
            'issue'=> 'nullable|string|max:255',
            'comments'=> 'nullable|string|max:2000',
            'file'    => 'nullable|file|max:5120|mimes:pdf,doc,docx,jpg,jpeg,png',
            'toSend'  => 'required|email',
        ]);


        $to_send = $request->input('toSend');

        $uploadedFile = null;
        $filePath = null;

        if ($request->hasFile('file')) {
            $file = $request->file('file');

            $filePath = $file->store('uploads/attachments', 'public');

            $uploadedFile = Storage::disk('public')->path($filePath);
        }

        $data = [
            'name'    => $request->input('name'),
            'location'    => $request->input('location'),
            'phone'   => $request->input('phone'),
            'email'   => $request->input('email'),
            'issue' => $request->input('issue'),
            'comment' => $request->input('comments'),
            'attachmentPath' => $uploadedFile,
        ];

        $mailable = new Warranty($data);
        Mail::to($to_send)->send($mailable);

        if ($filePath) {

            Storage::disk('public')->delete($filePath);
        }

        $return_route = '/servicio-tecnico';

        return redirect($return_route)->with('message', 'Mensaje enviado con éxito');
    }


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
        $return_route = '/atencion-al-cliente';


        return redirect($return_route)->with('message', 'mensaje enviado con exito');
    }
}
