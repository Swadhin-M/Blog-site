<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class content extends Model
{
    use HasFactory;

    public function blogCatagory(): BelongsTo
    {
        return $this->belongsTo(gallary::class,'catagory_id');
    }
}
