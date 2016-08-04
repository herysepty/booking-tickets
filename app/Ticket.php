<?php

namespace hs;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    protected $fillable = ['ticketName','id_ticket_type'];

    public function ticketType(){
    	return $this->belongsTo('hs\TicketType','id_ticket_type');
    }
}
