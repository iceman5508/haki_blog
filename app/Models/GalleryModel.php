<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class GalleryModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "gallery";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'image_title','image_desc', 'image', 'active'];


}
