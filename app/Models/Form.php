<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $table = "form";
    protected $fillable = ['client', 'matter', 'issuer','language','curency', 'Invoice_num', 'issuing_date', 'Amount', 'Discount', 'Invoice', 'VAT'];
}
