<?php

namespace App\Models;

use App\Models\BaseModel as Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RefSchool extends Model
{
    //

    public function refBranch(): BelongsTo
    {
        return $this->belongsTo(RefBranch::class, 'ref_branch_id');
    }

    public function fixEducationLevel(): BelongsTo
    {
        return $this->belongsTo(FixEducationLevel::class, 'fix_education_level_id');
    }

    public function fixSchoolType(): BelongsTo
    {
        return $this->belongsTo(FixSchoolType::class, 'fix_school_type_id');
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
