<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    public $table = 'categories';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'Measurement_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function categoryQuestions()
    {
        return $this->hasMany(Question::class, 'category_id', 'id');
    }

    public function Measure()
    {
        return $this->belongsTo(Measurement::class, 'Measurement_id');
    }
}
