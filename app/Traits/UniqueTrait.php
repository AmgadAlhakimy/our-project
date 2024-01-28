<?php


namespace App\Traits;


trait UniqueTrait
{
    /**
     * store image.
     */
    public function unique($name, $name_ar, $model)
    {
        if($model::where('name->en',$name)
            ->orwhere('name->ar',$name_ar)->exists()) {
            return true;
        }
    }
}
