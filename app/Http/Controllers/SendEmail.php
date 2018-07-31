<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
 
class SendEmail extends Controller
{
    public function fn_sendmail()
    {
    	$data = array(
    			'name' => "Chris Dianne Calamba",
    	);
    	
    	Mail::send('mailtemplate', $data, function ($message) {
    		$message->from('chrisatuic@gmail.com', 'Learning Laravel');
    	
    		$message->to('chrisatuic@gmail.com')->subject('There is a new ticket!');
    	});
    		 
    }
}