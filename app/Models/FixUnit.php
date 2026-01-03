<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FixUnit extends Model
{
    //

    public function unitType(): BelongsTo
    {
        return $this->belongsTo(FixUnitType::class);
    }
}
