<?php

namespace App\Models;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PrivateMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'sender_id', 'receiver_id', 'subject', 'message', 'read'
    ];

    public function getCreatedAttribute($value)
    {
        return Carbon::parse($value)->diffForHumans();
    }

    protected $appends = ['sender', 'receiver'];

    public function getSenderAttribute()
    {
        return User::where('id', $this->sender_id)->first();
    }
    public function getReceiverAttribute()
    {
        return User::where('id', $this->receiver_id)->first();
    }
}
