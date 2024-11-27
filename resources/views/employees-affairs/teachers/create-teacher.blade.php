@extends('layouts.sidebar')
@section('content')

    <main class="main ">
        <section class="section ">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
            @endif
            <!-- Start personal info  -->
            <h3 class="container-title">{{__('teacher.create a new teacher')}}</h3>
            <form method="post" action="{{route('teachers.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box col-lg-6 col-md-12  ">
                            <label for="teacher-name-a">{{__('teacher.teacher name in english')}}</label>
                            <input type="text" class="form-control " id='teacher-name-a' name="name"
                                    value="{{old('name')}}">
                            @error('name')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box col-lg-6 col-md-12">
                            <label for="teacher-name-e">{{__('teacher.teacher name in arabic')}}</label>
                            <input type="text" class="form-control " id='teacher-name-e' name="name_ar"
                                value="{{old('name_ar')}}">
                            @error('name_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="photo">{{__('teacher.photo')}}</label>
                            <input type="file" class="form-control"
                                id="photo" name="photo" value="{{old('photo')}}">
                            @error('photo')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 3 -->
                        <div class="box col-lg-6 col-md-12 ">
                            <label for="gender">{{ __('public.gender') }}</label>
                            <select class="col form-select form-control" id="gender" name="gender">
                                <option value="" disabled {{ old('gender') ? '' : 'selected' }}>{{ __('public.please select the gender') }}</option>
                                <option value="{{ __('public.male') }}" {{ old('gender') == __('public.male') ? 'selected' : '' }}>{{ __('public.male') }}</option>
                                <option value="{{ __('public.female') }}" {{ old('gender') == __('public.female') ? 'selected' : '' }}>{{ __('public.female') }}</option>
                            </select>
                            @error('gender')
                            <small class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <!-- 4 -->
                        <div class="box ">
                            <label for="t-numbers">{{__('public.contact')}}</label>
                            <div class="row">
                                <input type="number" class="col form-control ms-2 me-2" id='t-numbers'
                                    name="contact" value="{{old('contact')}}">
                                @error('contact')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <!-- 5 -->
                        <div class="box row">
                            <label for="t-address">{{__('public.address in english')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address'
                                name="address" value="{{old('address')}}">
                            @error('address')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box row">
                            <label for="t-address">{{__('public.address in arabic')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address_ar'
                                name="address_ar" value="{{old('address_ar')}}">
                            @error('address_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <!-- End personal info  -->
                <!-- Start functional info  -->
                <h3 class="container-title">{{__('teacher.functional data')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <!-- 1 -->
                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-qualification">{{__('teacher.qualification in english')}}</label>
                            <input type="text" class="form-control" id='t-qualification' name="qualification"
                                    value="{{old('qualification')}}">
                            @error('qualification')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-qualification_ar">{{__('teacher.qualification in arabic')}}</label>
                            <input type="text" class="form-control" id='t-qualification_ar' name="qualification_ar"
                                    value="{{old('qualification_ar')}}">
                            @error('qualification_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 2 -->

                        <div class="box  col-lg-6 col-md-12">
                            <label for="t-salary">{{__('teacher.salary')}}</label>
                            <input type="number" class="form-control" id='t-salary' name="salary"
                                value="{{old('salary')}}">
                            @error('salary')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <!-- 3 -->
                        <div class="box row">
                            <label for="t-address">{{__('teacher.major in english')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address' name="major"
                                value="{{old('major')}}">
                            @error('major')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="box row">
                            <label for="t-address">{{__('teacher.major in arabic')}}</label>
                            <input type="text" class=" form-control ms-2 me-2" id='t-address'
                                name="major_ar" value="{{old('major_ar')}}">
                            @error('major_ar')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            margin: 20px;
                        }
                        .btn {
                            padding: 10px 20px;
                            background-color: #007BFF;
                            color: white;
                            border: none;
                            cursor: pointer;
                            border-radius: 5px;
                        }
                        .popup {
                            display: none;
                            position: fixed;
                            left: 50%;
                            top: 50%;
                            transform: translate(-50%, -50%);
                            background-color: white;
                            border: 1px solid #ccc;
                            padding: 20px;
                            box-shadow: 0 0 10px rgba(0,0,0,0.1);
                            z-index: 1000;
                            width: 300px;
                        }
                        .overlay {
                            display: none;
                            position: fixed;
                            top: 0;
                            left: 0;
                            width: 100%;
                            height: 100%;
                            background: rgba(0, 0, 0, 0.5);
                            z-index: 999;
                        }
                        .close {
                            cursor: pointer;
                            color: red;
                            float: right;
                        }
                        .input-field {
                            margin: 10px 0;
                            width: calc(100% - 20px);
                        }
                    </style>
                    <label class="btn save-button" onclick="showPopup()">Add Major</label>

                    <div class="overlay" id="overlay" onclick="hidePopup()"></div>
                    <div class="popup" id="popup">
                        <span class="close" onclick="hidePopup()">&times;</span>
                        <h3>Add Major</h3>
                        <label for="majorEnglish">Major Name (English):</label>
                        <input type="text" id="majorEnglish" name="majorEn" class="input-field" placeholder="Enter major in English">
                        @error('majorEn')
                        <small class="form-text text-danger">{{$message}}</small>
                        @enderror
                        <label for="majorArabic">Major Name (Arabic):</label>
                        <input type="text" id="majorArabic" name="majorAr" class="input-field" placeholder="ادخل التخصص بالعربية">
                        <button class="btn" onclick="saveMajor()">Save</button>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        function showPopup() {
                            document.getElementById('popup').style.display = 'block';
                            document.getElementById('overlay').style.display = 'block';
                        }

                        function hidePopup() {
                            document.getElementById('popup').style.display = 'none';
                            document.getElementById('overlay').style.display = 'none';
                        }

                        function saveMajor() {
                            const majorEng = $('#majorEnglish').val();
                            const majorArab = $('#majorArabic').val();

                            $.ajax({
                                url: '/majors', // Your Laravel route to handle saving majors
                                type: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}', // CSRF token for security
                                    english: majorEng,
                                    arabic: majorArab
                                },
                                success: function(response) {
                                    alert('Major saved successfully!');
                                    hidePopup();
                                },
                                error: function(xhr) {
                                    alert('Error saving major: ' + xhr.responseText);
                                }
                            });
                        }
                    </script>
                  </div>
                <!-- End functional info  -->
                <!-- Start final box -->
                <h3 class="container-title">{{__('teacher.other info')}}</h3>
                <div class="container containers-style">
                    <div class="row">
                        <div class="notes col-lg-12 col-md-12">
                            <label class="form-label" for="st_dNote">{{__('public.note')}}</label>
                            <textarea name="note" class="form-control" id="st_dNote" cols="50"
                                    rows="5">{{old('note')}}</textarea>
                            @error('note')
                            <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class=" row">
                        <div class="box col ">
                            <input class="save-button " type="submit" value="{{__('public.save')}}">
                        </div>
                        <div class="box  col">
                            <input class="clear-button " type="reset" value="{{__('public.clear')}}">
                        </div>
                    </div>
                </div>
                <!-- End final box -->
            </form>
        </section>
    </main>
    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById('dropdown');
            dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
        }
    </script>
@endsection
