<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LocProvince extends Model
{
    //

    public function locCountry(): BelongsTo
    {
        return $this->belongsTo(LocCountry::class);
    }
}
