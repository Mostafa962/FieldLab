<?php

namespace Admin\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
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
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->morphMany('Admin\Models\File', 'model');
    }
}
