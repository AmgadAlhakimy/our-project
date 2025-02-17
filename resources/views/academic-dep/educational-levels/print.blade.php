
<main class="print-container ">
        @extends('layouts.print_header')

        <div class="container print-containe ">
            <div class="col-12 row text-center print-header ">
                <div class="col-12">
                    <h4 class="">بسم الله الرحمن الرحيم</h4>
                </div>
                <div><hr></div>
                <div class="col">
                    <img src="{{URL::asset(path: 'assets/images/layouts/logo2.png')}}" class=" col-12 logo-img" alt="" />
                </div>
                <div class="col ">
                    <p class=""> روضة كوكب الصغار</p>
                    <p class=""> الاصبحي بجانب مدرسة العلفي</p>
                    <p class="">رقم الهاتف: 123456789</p>
                </div>
                <div><hr class="h2"></div>
                <div class="col-12 mt-5 ">
                    <p class="">جدول الطلاب الغائبين</p>
                </div>
            </div>
            <div class="col table_card">
                <table class="table table-bordered print-table mt-4">
                    <thead class="table_header">
                        <tr class="N-bg">
                            <th>N</th>
                            <th>عمود 1</th>
                            <th>عمود 2</th>
                            <th>عمود 3</th>
                            <th>عمود 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="N-bg">1</td>
                            <td>بيانات 1</td>
                            <td>بيانات 2</td>
                            <td>بيانات 3</td>
                            <td>بيانات 4</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            function printPage() {
                window.print();
            }
            </script>
</main>
<button class="btn btn-primary" onclick="printPage()">طباعة</button>
