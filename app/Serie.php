<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model

{
    public  $timestamps = false;
    protected $fillable = ['nome'];
    protected $table = 'serie';
    

    public function temporadas ()
    {
        return $this->hasMany(Temporada::class);
    }

}