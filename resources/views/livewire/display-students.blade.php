{{-- واجهة استعراض بيانات الطلاب العامة --}}
    <div class="my-table">
        {{-- -------***********START THE HEAD OF TABLES***********-------- --}}
        {{-- the table header with bottuns and search input --}}
        <div class="table-header">
            {{-- the title and search --}}
            <div class="row first-card ">
                <h4 class="col container-title mt-2">Students Information</h4>
                <div class="row first-card mt-4">
                    <form method="post" action="{{route('students.search')}}">
                        @method('GET')
                        @csrf
                        <div class="row">
                            <label class="col-10">
                                <input type="text" required class="form-control " name="search"
                                       value="{{isset($search) ? $search : ''}}">
                            </label>
                            <button type="submit" class="col save-button ">{{__('public.search')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- table-hover table-striped -->
        <div class="table-header mt-3 mb-3">
            <button class="save-button btn-info select_bt me-1 ms-1" onclick="toggleCheckboxes()"
                    id="select_bt">{{__('public.select')}}</button>
            <button class="save-button btn-danger me-1 ms-1">{{__('public.delete all')}}</button>
        </div>
        <div class="table-section shadow-none">
            <div class="card table-section ">
                <table class=" " id="check_table">
                    <thead>
                    <tr>

                        <th class=" me-4 ms-4">
                            <input type="checkbox" id="select_all"
                                   style="display: none">
                        </th>
                        <th class="th-head-1  ">{{__('public.id')}}</th>
                        <th class="th-head-3">{{__('public.name')}}</th>
                        <th class="th-head-1">{{__('public.photo')}}</th>
                        <th class="th-head-3">{{__('public.address')}}</th>
                        <th class="th-head-1">{{__('student.gender')}}</th>
                        <th class="th-head-2">{{__('student.birth date')}}</th>
                        <th class="th-head-2">{{__('student.birth place')}}</th>
                        <th class="th-head-2">{{__('public.class')}}</th>
                        <th class="th-head-2">{{__('public.created at')}}</th>
                        <th class="th-head-2">{{__('public.updated at')}}</th>
                        <th colspan="2">
                            <div class="th-head-4">{{__('public.processes')}}</div>
                        </th>
                        <th>
                            <div class="th-head-2">{{__('student.more info')}}</div>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($students  as $student )
                        <tr class="test_1">
                            <td><input type="checkbox" class="check_item ms-2 me-2" id="checkbox" style="display: none">
                            </td>
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td><img src="{{ asset('storage/' . $student->photo) }}"
                                    class="student-img" alt="photo"></td>
                            <td>{{$student->address}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->birthdate}}</td>
                            <td>{{$student->place_of_birth}}</td>
                            <td>{{$student->classroom->name}}</td>
                            <td>{{$student->created_at}}</td>
                            <td>{{$student->updated_at}}</td>

                            <td>
                                <a href="{{route('students.edit',$student->id)}}"
                                   class="btn save-button btn-success w-100">
                                    <i class="fa-solid fa-pen-to-square"></i> {{__('public.edit')}} </a>
                            </td>
                            <td>
                                <button class="btn clear-button btn-danger w-100" data-bs-toggle="modal"
                                        data-bs-target="#delete{{$student->id}}">
                                    <i class="fa-solid fa-trash"></i> {{__('public.delete')}}
                                </button>
                                <!-- Modal -->

                                <div class="modal fade" id="delete{{$student->id}}"
                                     tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="exampleModalLabel">{{__('public.delete')}}</h5>
                                            </div>
                                            <div class="modal-body">
                                                {{__('public.are you sure you want to delete').$student->name}}
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    {{__('public.cancel')}}</button>
                                                <form method="post" action="{{route('students.destroy',$student->id)}}">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                            class="btn btn-primary">{{__('public.ok')}}</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            {{-- واجهة المعلومات او الاستمارة الكاملة الخاصة بالطالب --}}
                            <td>
                                <a href="{{route('students.more',$student->id)}}"
                                   class="btn save-button btn-info w-100">
                                    <i class="fa-solid fa-info-circle"></i> {{__('Student.more info')}} </a>
                            </td>
                        </tr>
                    @endforeach
                    {{$students->links()}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
