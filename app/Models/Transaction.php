<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps= false;

    protected $fillable = [
        'code',
        'montant',
        'dateTransaction',
        'idMode',
        'idPortefeuille'
    ];

    protected $primaryKey = 'idTransaction';
    protected $table = 'mtakeaway.Transactions';

    
}
