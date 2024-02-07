<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'success'=>'تم الحفظ بنجاح!',
    'update'=>'تم التعديل بنجاح!',
    "already exists"=>"لقد تم حفظ هذه البيانات مسبقاً!",
    "homework already exists"=>"لقد تم حفظ الواجب المنزلي لهذا اليوم مسبقاً!",
    'delete'=>'تم الحذف بنجاح!',
    'restore'=>'تم الإستعادة بنجاح!',
    'force delete'=>'تم الحذف النهائي من النظام بنجاح!',
    'delete_level_error'=>'لايمكن حذف هذه المرحلة أولا يجب حذف الصفوف التابعة لها',
    'delete_classroom_error'=>'لايمكن حذف هذا الصف أولا يجب حذف الطلاب التابعين له',
    'delete_relative_error'=>'لايمكن حذف ولي الأمر أولا يجب حذف الطالب أو الطلاب التابعين له',
    'restore_student_error'=>'لايمكن استعادة هذا الطالب أولا يجب استعادة الصف الخاص بالطالب',
    'restore_classroom_error'=>'لايمكن استعادة هذا الصف أولا يجب استعادة المرحلة الدراسية الخاص بالصف',
];
