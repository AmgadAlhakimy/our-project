<?php


namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait PhotoTrait
{
    public function insertImage($request, $index, $model, $folder)
    {
        try {
            if ($request->photo) {
                if ($index > 0) {
                    $this->deleteImage($index, $model);
                }
                $requestData = $request->all();
                $filename = time() . $request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs($folder, $filename, 'public');
                $requestData["photo"] = '/storage/' . $path;
                return $requestData['photo'];
            } else {
                if ($index > 0) {
                    $element = $model::findorFail($index);
                    return $element->photo;
                } else {
                    return null;
                }
            }
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function insertImageWithLivewire($index)
    {
        if ($this->photo) {
                if ($index > 0) {
                    Storage::disk('public')->delete($this->current_photo);
                }
            $filename = time() . '.' . $this->photo->getClientOriginalExtension();
            return $this->photo->storeAs('images/students', $filename, 'public');
        }else{
            return null;
        }

    }

    public function deleteImage($id, $model)
    {
        try {
            $image = $model::withTrashed()->findorFail($id);
            $image_path = public_path($image->photo);
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        } catch (\Exception $e) {
            return $e;
        }
        return null;
    }
}
