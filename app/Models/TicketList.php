<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketList extends Model
{
    protected $table = 'ticket_lists';
    protected $guarded = [];
    use HasFactory;

    public function scopeSearch($query)
    {
        $keyword = request()->search;
        if (request()->has('search') && trim($keyword) != '') {
            $query->where('from', 'LIKE', '%' . trim($keyword) . '%');
        }

        return $query;
    }
    public function scopeFilter($query)
    {
        $keyword = request()->filter;
        if (request()->has('filter') && trim($keyword) != '') {
            $query->where('from' , 'LIKE', '%' . trim($keyword) . '%');
        }
        return $query;
    }
    public function scopeFilterTo($query)
    {
        $keyword = request()->filterto;
        if (request()->has('filterto') && trim($keyword) != '') {
            $query->where('to' , 'LIKE', '%' . trim($keyword) . '%');
        }
        return $query;
    }
}
