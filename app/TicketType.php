<?php

namespace hs;

use Illuminate\Database\Eloquent\Model;

class TicketType extends Model
{
    protected $table = 'tickets_type';
    protected $fillable = ['ticket_type'];

    public function ticket(){
        return $this->hasOne('hs\Ticket','id');
    }

}
