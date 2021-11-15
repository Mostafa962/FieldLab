<?php

namespace Admin\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    public function deletedBy()
    {
        return $this->belongsTo('Admin\Models\Admin', 'deleted_by');
    }

    public function createdBy()
    {
        return $this->belongsTo('Admin\Models\Admin', 'created_by');
    }
}
