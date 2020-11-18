<?php

namespace App\Models;

use App\Models\user;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
	protected $fillable = ['title', 'content','user_id'];

    use HasFactory;

    public function user()
    {
      return $this->belongsTo('App\Models\user');
    }

    protected static function boot(){
      parent::boot();
      self::creating(function ($table){

         if(!app()->runningInConsole()){
             $table->user_id = auth()->id();
         }

      }
      );
    }
}
