<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LocVillage extends Model
{
    //

    public function locDistrict(): BelongsTo
    {
        return $this->belongsTo(LocDistrict::class);
    }
}
