<?php $__env->startSection('content'); ?>
    <div class="my-table">
        
        
        <div class="table-header">
            
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Absect Students</h4>
                <div class="row col ">
                    <input class="col search2" placeholder="<?php echo e(__('public.search')); ?>">
                    <button class="col-1 save-button search-button "><?php echo e(__('public.search')); ?></button>
                </div>
            </div>
            
            <div class="box col-lg-12 col-md-12 ">
                <select class="  Names second-card mb-4 mt-4  card-info_2//   form-control" id="sex" name="sex" value="<?php echo e(old('sex')); ?>">
                    <option class="text-center"
                            value="<?php echo e(__('student.male')); ?>"><?php echo e(__('student.male')); ?></option>
                    <option class="text-center"
                            value="<?php echo e(__('student.female')); ?>"><?php echo e(__('student.female')); ?></option>
                </select>
                <?php $__errorArgs = ['sex'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="form-text text-danger"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>
        </div>
        
        <!-- table-hover table-striped -->
        <div class="table-section">
        <div class="card table-section ">
            <table class=" " >
                <thead>
                    <tr>
                        <th scope="col"><div class="th-head-1  " >id</div></th>
                        <th scope="col"><div class="th-head-3" >Name</div></th>
                        <th scope="col"><div class="th-head-2" >photo</div></th>
                        <th scope="col"><div class="th-head-2" >class</div></th>
                        <th scope="col"><div class="th-head-4" >note</div></th>
                        <th scope="col"><div class="th-head-2" >processes</div></th>
                        <th scope="col"><div class="th-head-1" ></div></th>
                        <th scope="col"><div class="th-head-1" ></div></th>

                    </tr>
                </thead>
                <tbody>
            
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>
            
                    <tr>
                        <td>130</td>
                        <td>mohanad naser mansour</td>
                        <td><img src="../../images/skills-01.jpg" alt=""></td>
                        <td>frist gride</td>
                        <td>PAKHI GUPTA</td>
                        
                        <td><button class="save-button btn-success w-100"><i class="fa-solid fa-pen-to-square"></i></button></td>
                        <td><button class="clear-button btn-danger w-100"><i class="fa-solid fa-trash"></i></button></td>
                        <td></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<!-- <th scope="col"><div class="th-head-3" >father name</div></th>
<th scope="col"><div class="th-head-3" >father work</div></th>
<th scope="col"><div class="th-head-3" >father contact 1</div></th>
<th scope="col"><div class="th-head-3" >father contact 2</div></th>
<th scope="col"><div class="th-head-3" >mother name</div></th>
<th scope="col"><div class="th-head-3" >mother work</div></th>
<th scope="col"><div class="th-head-3" >mother contact 1</div></th>
<th scope="col"><div class="th-head-3" >mother contact 2</div></th>
<th scope="col"><div class="th-head-3" >next to kin</div></th>
<th scope="col"><div class="th-head-3" >next to kin relationship</div></th>
<th scope="col"><div class="th-head-3" >next to kin contact</div></th>
<th scope="col"><div class="th-head-4" >note</div></th>
<th scope="col"><div class="th-head-2" >processes</div></th>
<th scope="col"><div class="th-head" > </div></th>
-->

<!--
<main class=" m-3">
<table class="table my-card table-hover table-striped ">
    <thead>
    <tr>
        <th scope="col"><div class="th-head-1  " >id</div></th>
        <th scope="col"><div class="th-head-3" >Name</div></th>
        <th scope="col"><div class="th-head-2" >photo</div></th>
        <th scope="col"><div class="th-head-4" >address 1</div></th>
        <th scope="col"><div class="th-head-4" >address 2</div></th>
        <th scope="col"><div class="th-head-1" >sex</div></th>
        <th scope="col"><div class="th-head-2" >birth date</div></th>
        <th scope="col"><div class="th-head-3 " >place of birth</div></th>
        <th scope="col"><div class="th-head-3" >date of joining</div></th>
        <th scope="col"><div class="th-head-3" >take medicine</div></th>
        <th scope="col"><div class="th-head-3" >medicine description</div></th>
        <th scope="col"><div class="th-head-3" >have allergy</div></th>
        <th scope="col"><div class="th-head-3" >allergy description</div></th>
        <th scope="col"><div class="th-head-3" >health problem</div></th>
        <th scope="col"><div class="th-head-4 ">health problem description</div> </th>

        <th scope="col"><div class="th-head-3" >father name</div></th>
        <th scope="col"><div class="th-head-3" >father work</div></th>
        <th scope="col"><div class="th-head-3" >father contact 1</div></th>
        <th scope="col"><div class="th-head-3" >father contact 2</div></th>
        <th scope="col"><div class="th-head-3" >mother name</div></th>
        <th scope="col"><div class="th-head-3" >mother work</div></th>
        <th scope="col"><div class="th-head-3" >mother contact 1</div></th>
        <th scope="col"><div class="th-head-3" >mother contact 2</div></th>
        <th scope="col"><div class="th-head-3" >next to kin</div></th>
        <th scope="col"><div class="th-head-3" >next to kin relationship</div></th>
        <th scope="col"><div class="th-head-3" >next to kin contact</div></th>
        <th scope="col"><div class="th-head-4" >note</div></th>
        <th scope="col"><div class="th-head-2" >processes</div></th>
        <th scope="col"><div class="th-head" > </div></th>

    </tr>
    </thead>
    <tbody>
        <tr>
            <td>1 1</td>
            <td>khalid abdulnasser mansour</td>
            <td>no photo in this moment </td>
            <td>darsalm after the aljaady hosbital</td>
            <td>alsafia after the alkhateb resturant</td>
            <td>male</td>
            <td>12-10-2004</td>
            <td>sana'a</td>
            <td>12-2-2020</td>
            <td>no</td>
            <td>none</td>
            <td>yes</td>
            <td>from same frots</td>
            <td>yes</td>
            <td>he can't preth verey will</td>
            <td>ali muhammad</td>
            <td>taxi driver</td>
            <td>32423432434</td>
            <td>234324324</td>
            <td>fatima</td>
            <td>house ceber</td>
            <td>234324324</td>
            <td>234324434</td>
            <td>salim mohammed</td>
            <td>uncle</td>
            <td>3209409432</td>
            <td>Lorem ipsum dolor, sit amet </td>


            



        </tr>
    </tbody>
</table>
</main> -->

<?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\My-Github\our-project\resources\views/students_affairs/absence/absent_students.blade.php ENDPATH**/ ?>