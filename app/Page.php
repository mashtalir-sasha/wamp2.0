<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function info()
    {
        return $this->hasMany(Service::class);
    }

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function setImageAttribute($image)
    {
        if (isset($this->attributes['image']) && $this->attributes['image'] != $image) {
            $file = public_path() . DIRECTORY_SEPARATOR . $this->attributes['image'];
            if (file_exists($file)) {
                @unlink($file);
            }
        }
        $this->attributes['image'] = $image;

        $file = public_path() . DIRECTORY_SEPARATOR . $image;

        $img = \Image::make($file);
        $img->resize(1920, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        $img->save($file, 100);
    }
}
