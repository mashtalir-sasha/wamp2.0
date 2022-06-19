<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    public function getImagesAttribute($value)
    {
        return empty($value) ? NULL : explode(',', $value);
    }

    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id', 'id');
    }

    public function setImagesAttribute($photos)
    {
        if (isset($this->attributes['images'])) {
            $this->attributes['images'] = explode(',', $this->attributes['images']);
            foreach ($this->attributes['images'] as $photo) {
                if (!in_array($photo, $photos)) {

                    $file = public_path() . DIRECTORY_SEPARATOR . $photo;
                    $smallFile = public_path() . '/img/uploads/@1x/' . basename($file);

                    $webpFile = public_path() . '/img/uploads/' . pathinfo($file, PATHINFO_FILENAME) . '.webp';
                    $smallWebpFile = public_path() . '/img/uploads/@1x/' . pathinfo($file, PATHINFO_FILENAME) . '.webp';

                    if (file_exists($file)) {
                        @unlink($file);
                    }
                    if (file_exists($smallFile)) {
                        @unlink($smallFile);
                    }
                }
            }
        }
        if (empty($photos))
            $this->attributes['images'] = NULL;
        else
            $this->attributes['images'] = implode(',', $photos);
        if (!empty($photos)) {
            foreach ($photos as $photo) {
                $file = public_path() . DIRECTORY_SEPARATOR . $photo;
                $smallFile = public_path() . '/img/uploads/@1x/' . basename($file);

                $webpFile = public_path() . '/img/uploads/' . pathinfo($file, PATHINFO_FILENAME) . '.webp';
                $smallWebpFile = public_path() . '/img/uploads/@1x/' . pathinfo($file, PATHINFO_FILENAME) . '.webp';

                $img = \Image::make($file);
                $img->resize(1100, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save($file, 100);

                $img->resize(550, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->save($smallFile, 100);

                $img->resize(1100, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->encode('webp', 100);
                $img->save($webpFile, 100, 'webp');

                $img->resize(550, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $img->encode('webp', 100);
                $img->save($smallWebpFile, 100, 'webp');
            }
        }
    }
}
