<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'club_name',
        'club_code',
        'owner_number',
        'owner_id',
    ];

    /**
     * Get the owner of the club.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}
