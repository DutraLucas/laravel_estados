<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
  protected $fillable = [
  'nome',
  'sigla',
  'historico',
  'user_id'
  ];
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
