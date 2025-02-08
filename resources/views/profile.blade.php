<div class="login_style">
    @include('layouts.header')
    @include('layouts.main_page_header')
    <div class="login_container">
        
        <div>
            <div class="profile-content">
                <div class="box">
                    <img src="{{URL::asset('assets/images/layouts/skills-02.jpg')}}" alt="صورة المستخدم" class="w-50 col-12 personal_img">
                    <h2 class="col-12 container-title">اسم المستخدم</h2>
                </div>
                <p class="form-label ">khaled@gmial.com</p>
                <ul class="profile-details">
                    <li class=" title-3 d-f text-end ms-3 me-3">
                        <strong class="form-label">رقم الهاتف:</strong>
                        123-456-7890
                    </li>
                    <li class=" title-3 d-f text-end ms-3 me-3">
                        <strong class="form-label ">رقم الهاتف الثاني:</strong>
                        098-765-4321
                    </li>
                    <li class=" title-3 d-f text-end ms-3 me-3">
                        <strong class="form-label ">المنطقة:</strong>
                        المنطقة الفاضلة
                    </li>
                    <li class=" title-3 d-f text-end ms-3 me-3">
                        <strong class="form-label ">رقم التعريف:</strong>
                        123456789
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
