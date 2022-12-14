@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">

                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-striped table-nowrap mb-0">
                                <thead>
                                <tr>

                                    <th class="w-60px" data-sorter="false">
                                        写真
                                    </th>

                                    <th class="w-60px" data-sorter="false">
                                        所属施設
                                    </th>

                                    <th class="w-60px" data-sorter="false">
                                        名前
                                    </th>
                                    <th class="w-60px" data-sorter="false">
                                        メールアドレス
                                    </th>
                                    <th class="w-60px" data-sorter="false">
                                        権限グループ
                                    </th>
                                    <th class="w-60px" data-sorter="false">
                                        管理施設
                                    </th>
                                    <th class="w-60px" data-sorter="false">

                                    </th>

                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>
                                        <img src="" alt="">
                                    </td>

                                    <td>
施設名：
                                    </td>

                                    <td>

                                    </td>

                                    <td>
ご担当者
                                    </td>

                                    <td>

                                    </td>

                                    <td>

                                    </td>

                                    <td>

                                    </td>

                                </tr>
                                </tbody>


                            </table>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-8">

                <div class="card">

                    <div class="card-body">

                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">ユーザー登録</a>
                        @endif

                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
