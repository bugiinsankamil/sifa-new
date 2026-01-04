<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class RefBranch extends Model implements HasMedia
{
    //
    use InteractsWithMedia;

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('preview')
            ->fit(Fit::Contain, 300, 300)
            ->nonQueued();
    }

    public function locDistrict(): BelongsTo
    {
        return $this->belongsTo(LocDistrict::class, 'loc_district_id');
    }

    public function locVillage(): BelongsTo
    {
        return $this->belongsTo(LocVillage::class, 'loc_village_id');
    }
}
