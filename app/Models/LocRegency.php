<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LocRegency extends Model
{
    //

    public function locProvince(): BelongsTo
    {
        return $this->belongsTo(LocProvince::class);
    }
}
