<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Loan extends Pivot
{
    public $incrementing = true;

    protected $casts = [
        'due_back_at' => 'datetime',
        'returned_at' => 'datetime',
    ];
}
