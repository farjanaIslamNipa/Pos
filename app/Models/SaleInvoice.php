<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaleInvoice extends Model
{
    use HasFactory;
    protected $table = 'sale_invoices';
    // public function user() {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}
