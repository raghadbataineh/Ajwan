<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Mail;
use App\Models\Contactus;

use App\Mail\MailNotify;




class MailController extends Controller
{
  /**
   * Write code on Method
   *
   * @return response()
   */
  public function showContact()
  {
      return view('contact');
  }

  public function sendContact(Request $request)
  {
      $request->validate([
          'name' => 'required|regex:/^[^0-9]+$/',
          'email' => 'required|email|valid_email_domain',
          'subject' => 'required',
          'message' => 'required'
      ], [
          'name.regex' => 'The name field should not contain numbers.',
          'phone.starts_with' => 'The phone number should start with "07".'
      ]);


      // Create an array with the data you want to send in the email
      $data = [
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'subject' => $request->input('subject'),
          'message' => $request->input('message')
      ];

      // Send the email
      try {
          Mail::to('97saraababneh@gmail.com')->send(new MailNotify($data));
          return redirect()->back()->with(['success' => 'شكرًا لاتصالك بنا. سنقوم بالرد عليك قريبًا']);
      } catch (Exception $e) {
          return redirect()->back()->with(['error' => 'عذرًا، حدثت مشكلة في إرسال رسالتك. يرجى المحاولة مرة أخرى لاحقًا']);
      }
  }

  public function showmessage()
  {
      $Contact = Contactus::orderBy('created_at', 'desc')->get();
      return view('backend.contact.index', compact('Contact'));
  }

  public function deletmessage($id)
  {
      // dd('delet message , '.$id);
      Contactus::destroy($id);
      return back()->with('success', 'Message deleted successfully.');
  }

}