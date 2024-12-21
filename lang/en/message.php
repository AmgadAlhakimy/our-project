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

    "success"=>"Data has been saved successfully!",
    "already exists"=>"Data has already been saved!",
    "homework already exists"=>"You have already saved the homework for today",
    "update"=>"Data has been updated successfully!",
    "delete"=>"Data has been deleted successfully!",
    "restore"=>"Data has been restored successfully!",
    "force delete"=>"Data has been completely deleted from the system!",
    "delete_level_error"=>"you cannot delete this educational level first delete it's classrooms",
    "delete_classroom_error"=>"you cannot delete this classroom first delete it's students",
    "delete_parents_error"=>"you cannot delete these parents first delete their students",
    "delete_relative_error"=>"you cannot delete this relative first delete it's students",
    "restore_student_error"=>"you cannot restore this student first restore it's class",
    "restore_classroom_error"=>"you cannot restore this classroom first restore it's educational level",
];
