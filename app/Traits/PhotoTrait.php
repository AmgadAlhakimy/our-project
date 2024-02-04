<?php


namespace App\Traits;

trait PhotoTrait
{
    /**
     * store image.
     */
    public function insertImage($request, $id, $model, $folder)
    {
        if ($request->photo != NULL){
            $requestData = $request->all();
            $filename = time().$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs($folder, $filename, 'public');
            $requestData["photo"] = '/storage/'.$path;
            return $requestData['photo'];
        }else{
            $element = $model::findorFail($id);
            return  $element->photo;
        }
    }
    public function deleteImage($id, $model)
    {
        $image = $model::withTrashed()->findorFail($id);
        $image_path = public_path($image->photo);
        if (file_exists($image_path)){
            unlink($image_path);
        }
    }
}
