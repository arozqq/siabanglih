<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Kandidat extends Model
{
    use HasFactory;

    protected $fillable = ['nama_kandidat', 'foto_kandidat', 'visi', 'misi', 'status'];

    public function getCreatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['created_at'])
            ->format('d-M-Y H:i');
    }

    public function getUpdatedAtAttribute()
    {
        return \Carbon\Carbon::parse($this->attributes['updated_at'])
            ->diffForHumans();
    }


    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

   
}
