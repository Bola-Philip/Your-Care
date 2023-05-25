<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseMedia extends Model
{
    protected $table ='expense_media';
    protected $primaryKey = 'id';

    protected $guarded = [];

    public function expense()
    {
        return $this->belongsTo(Expense::class, 'expense_id');
    }
}
