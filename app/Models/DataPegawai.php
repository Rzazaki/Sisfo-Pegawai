<?php

namespace App\Models;

use App\Models\Mutasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataPegawai extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mutasi()
    {
        return $this->belongsTo(Mutasi::class, 'user_id', 'user_id');
    }

}
