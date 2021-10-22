<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointment';
    protected $primaryKey = 'id';
    protected $fillable = ['subject','start_datetime','end_datetime','is_canceled'];
    protected $hidden = ['id_Type_appointment'];

    public function person_appointment() {
        return $this->hasMany('App\Models\Person_appointment', 'id_Appointment','id');
    }
}
