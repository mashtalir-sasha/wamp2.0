<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
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
        $img->fit(572, 322, function ($constraint) {
            $constraint->upsize();
        });

        $img->save($file, 100);
    }
}
