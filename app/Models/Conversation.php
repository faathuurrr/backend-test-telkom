<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'assistant_id', 'start_time', 'end_time'];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
