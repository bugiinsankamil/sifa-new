<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LocDistrict extends Model
{
    //

    public function locRegency(): BelongsTo
    {
        return $this->belongsTo(LocRegency::class);
    }

    public function locProvince(): BelongsTo
    {
        return $this->belongsTo(LocProvince::class);
    }
}
