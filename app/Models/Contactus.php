<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\MailController; 

class Contactus extends Model
{
    use HasFactory;
  
    public $fillable = ['name', 'email', 'subject', 'message'];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        // This function will be triggered when a new contact is created
        static::created(function ($item) {
                
            $adminEmail = "97saraababneh@gmail.com";
            // Ensure your mail configuration in .env file is correct
            Mail::to($adminEmail)->send(new MailController($item));
        });
    }
}
