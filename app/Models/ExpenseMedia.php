<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseMedia extends Model
{
    protected $primaryKey = 'id';
    protected $table ='expense_media';
    protected $fillable = [
        'expense_id',
        'media_path',
    ];

    public function expense()
    {
        return $this->belongsTo(Expense::class, 'expense_id');
    }
}
