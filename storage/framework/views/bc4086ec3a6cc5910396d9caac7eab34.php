<?php $__env->startSection('content'); ?>
    
    <main class="">
        <section class="section  ">
                <!-- Start personal info  -->
                <h3 class="container-title mb-5"><?php echo e(__('student.student information')); ?></h3>
            <div class="cards_container row">
                
                <div class=" containers-style">
                    <label class="box container-title col-12 "><?php echo e(__('student.personal info')); ?></label>
                    <div class="row col">
                        
                        <div class="col col-ms-12 row me-1 ms-1 ">
                            <div class=" containers-style cards_info_style">
                                    <div class=" row">
                                        
                                        <div class="box col">
                                            <img class=" cards_img" src="<?php echo e(asset($student->photo)); ?>" alt="">
                                        </div> 
                                        <div class="text-center ">
                                            <label class="  cards_title"> <?php echo e($student->name); ?> </label>
                                            <label class="  cards_sup_title">(<?php echo e($student->id); ?>)</label>
                                        </div>
                                        <div class="text-center ">
                                        </div>
                                    </div>
                            </div>
                            <div class=" containers-style cards_info_style">
                                <div class="text-center row">
                                    <label class="  cards_sup_title col-12 big_font">8</label>
                                    <label class="  cards_title col-12"><?php echo e(__('student.absent')); ?></label>
                                </div>
                            </div>
                            <div class=" containers-style cards_info_style">
                                
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"><?php echo e(__('student.student allergy')); ?></label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title">no allergy </label>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"> <?php echo e(__('student.student health problem')); ?></label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title">no health problem</label>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"><?php echo e(__('student.student medicines')); ?> </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title">no medicines</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class=" col row me-1 ms-1">
                            <div class=" containers-style cards_info_style  ">
                                
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"><?php echo e(__('student.gender')); ?></label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> <?php echo e($student->gender); ?> </label>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"> <?php echo e(__('student.birth date')); ?></label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> <?php echo e($student->birthdate); ?> </label>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"><?php echo e(__('public.address')); ?> </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> <?php echo e($student->address); ?> </label>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"> <?php echo e(__('student.birth place')); ?> </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> <?php echo e($student->place_of_birth); ?> </label>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"> <?php echo e(__('public.class')); ?> </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> <?php echo e($student->classroom->name); ?> </label>
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <div class="col s_info_1">
                                        <label class=" mb-1 cards_title"><?php echo e(__('student.level')); ?> </label>
                                    </div>
                                    <div class="col  s_info_1">
                                        <label class=" mb-1 cards_sup_title"> <?php echo e($student->classroom->Level->name); ?> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                        

                        <div class=" containers-style  ">
                            <label class="box container-title col "> <?php echo e(__('student.parent info')); ?> </label>
                            <div class="row ">
                                    
                                <div class="col-lg-4 col-md-6 col-ms-12  cards_info_style  mb-3">
                                    
                                    <div class="row mb-3 mt-2">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> <?php echo e(__('student.father name')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"> <?php echo e($student->relative->father_name); ?> </label>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> <?php echo e(__('student.father work')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"><?php echo e($student->relative->father_work); ?></label>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"><?php echo e(__('student.father contacts 1')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"><?php echo e($student->relative->father_contact1); ?></label>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"><?php echo e(__('student.father contacts 2')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"><?php echo e($student->relative->father_contact2); ?></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-ms-12 cards_info_style  mb-3">
                                    
                                    <div class="row mb-3 mt-2 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> <?php echo e(__('student.mother name')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"><?php echo e($student->relative->mother_name); ?></label>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> <?php echo e(__('student.mother work')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"> <?php echo e($student->relative->mother_work); ?></label>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"><?php echo e(__('student.mother contacts 1')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"><?php echo e($student->relative->mother_contact1); ?></label>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"><?php echo e(__('student.mother contacts 1')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"><?php echo e($student->relative->mother_contact2); ?></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-ms-12 cards_info_style mb-3">
                                    
                                    <div class="row mb-3 mt-2 ms-1 me-1">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"><?php echo e(__('student.kin name')); ?> </label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"><?php echo e($student->relative->kin_name); ?></label>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3 ms-1 me-1 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"><?php echo e(__('student.kin relationship')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"><?php echo e($student->relative->kin_relationship); ?> </label>
                                        </div>
                                    </div>
                                    
                                    <div class="row mb-3 ms-1 me-1 ">
                                        <div class="col s_info_1 ">
                                            <label class=" mb-1 cards_title"> <?php echo e(__('student.kin contact')); ?></label>
                                        </div>
                                        <div class="col  s_info_1 ">
                                            <label class=" mb-1 cards_sup_title"><?php echo e($student->relative->kin_contact); ?></label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col  col-ms-12 cards_info_style  mb-3">
                                    
                                    <h3 class="text-center cards_title mt-5"><?php echo e(__('student.more info')); ?></h3>
                                        <div class="box col-lg-12 col-md-12 mt-3">
                                            <label class=" mb-2 mt-2 cards_sup_title"><?php echo e($student->note); ?></label>
                                        </div>
                                </div>
                            </div>
                        </div>


                        
                        <!-- End final box -->
            </div>
        </section>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/students_affairs/students/student_more_info.blade.php ENDPATH**/ ?>