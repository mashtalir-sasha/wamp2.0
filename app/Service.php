<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id', 'id');
    }

    public function setPageImgAttribute($image)
    {
        if (isset($this->attributes['page_img']) && $this->attributes['page_img'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['page_img'];
            if (file_exists($file)) {
                @unlink($file);
            }
        }
        $this->attributes['page_img'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;

        $img = \Image::make($file);
        $img->fit(832, 500, function ($constraint) {
            $constraint->upsize();
        });

        $img->save($file, 100);
    }
}
