<?php


namespace App\Traits;

trait PhotoTrait
{
    /**
     * store image.
     */
    public function insertImage($request, $index, $model, $folder)
    {
        if ($request->photo != NULL) {
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
    }

    public function deleteImage($id, $model)
    {
        $image = $model::withTrashed()->findorFail($id);
        $image_path = public_path($image->photo);
        if (file_exists($image_path)) {
            unlink($image_path);
        }
    }
}
