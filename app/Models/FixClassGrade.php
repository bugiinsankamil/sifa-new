<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FixClassGrade extends Model
{
    //

    public function fixEducationLevel(): BelongsTo
    {
        return $this->belongsTo(FixEducationLevel::class);
    }
}
