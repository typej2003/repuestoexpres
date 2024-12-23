<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use Mail;
class SendMailController extends Controller
{
    public function sendMailWithAttachment($user, $title = '', $body = '')
    {
        // Laravel 8

        $mailData["email"] = $user->email;
        $mailData["title"] = "Techsolutionstuff";
        $mailData["body"] = "This is test mail with attachment";
 
        $files = [
            public_path('img/regalo.png'),
            public_path('img/test_pdf.pdf'),
        ];
  
        Mail::send('emails.test_mail', $mailData, function($message) use ($mailData, $files) {
            $message->to($mailData["email"])
                    ->subject($mailData["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }            
        });

        // $mailData = [
        //     'title' => 'This is Test Mail',
        //     'files' => [
        //         public_path('img/regalo.png'),
        //         public_path('img/test_pdf.pdf'),
        //     ],
        // ];
           
        // Mail::to('to@gmail.com')->send(new TestMail($mailData));
             
        $this->dispatchBrowserEvent('hide-form', ['message' => 'Email enviado satisfactoriamente!']);
    }
}