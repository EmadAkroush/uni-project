<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketList extends Model
{
    protected $table = 'ticket_lists';
    protected $guarded = [];
    use HasFactory;
}
