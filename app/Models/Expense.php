<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Expense extends Model
{
    protected $table ='expenses';
    protected $primaryKey = 'id';

    protected $guarded = [
        'center_id',
        'client_id',
        'title',
        'expense_description',
        'expense_value',
        'accounting_code',
    ];

    public function center()
    {
        return $this->belongsTo(Center::class, 'center_id');
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function expenseMedia()
    {
        return $this->hasMany(ExpenseMedia::class, 'expense_id');
    }
}
