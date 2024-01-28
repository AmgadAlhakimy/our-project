<?php


namespace App\Traits;

trait GenderTrait
{

    /**
     * translate the gender.
     */
    private function gender($request,$lang)
    {
        if($request->gender == 'ذكر')
        {
            $gender_en = $request->gender_ar_m;
            $gender_ar = $request->gender;
        }
        elseif (strtolower($request->gender )== 'male')
        {
            $gender_en = $request->gender;
            $gender_ar = $request->gender_ar_m;
        }
        elseif ($request->gender == 'أنثى')
        {
            $gender_en = $request->gender_ar_f;
            $gender_ar = $request->gender;
        }
        elseif (strtolower($request->gender )== 'female')
        {
            $gender_en = $request->gender;
            $gender_ar = $request->gender_ar_f;
        }

        if($lang == 'en')
            return $gender_en;
        elseif($lang == 'ar')
            return  $gender_ar;
    }
}
