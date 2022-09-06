<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactoMail;

class Contacto extends Model
{
    use HasFactory;
    public $fillable = ['nombre', 'email', 'telefono', 'mensaje'];
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "asanscliment@gmail.com";
            Mail::to($adminEmail)->send(new ContactoMail($item));
        });
    }
}
