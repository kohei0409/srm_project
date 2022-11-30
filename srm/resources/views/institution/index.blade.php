@extends('layouts.app')

@section('content')



        <div class="container-fluid" style="padding-top: 100px;z-index: 99">


        <div class="row mb-5">
            <div class="col-4 offset-4 text-center">
                <a class="btn btn-primary btn-sm" data-bs-toggle="collapse" href="#collapseExample" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    SEARCH
                </a>
            </div>

            <div class="collapse mt-5" id="collapseExample">


                <!-- Card -->
                <div class="card border-0 flex-fill w-100">
                    <div class="card-header border-0 card-header-space-between">

                        <!-- Title -->
                        <h2 class="card-header-title h4 text-uppercase">
                            Sales
                        </h2>


                    </div>


                    <p>


                    <div class="card-body d-flex flex-column">
                        <div class="flex-grow-1 h-275px">
                            1
                        </div>
                    </div>

                </div>
            </div>


        </div> <!-- / .row -->

        <div class="row">
            <div class="col">

                <!-- Card -->
                <div class="card border-0 flex-fill w-100"
                     data-list='{"valueNames": ["name", "email", "id", {"name": "date", "attr": "data-signed"}, "status"], "page": 8}'
                     id="users">
                    <div class="card-header border-0 card-header-space-between">

                        <!-- Title -->
                        <h2 class="card-header-title h4 text-uppercase">
                            検索状態の表示
                        </h2>

                        <!-- Dropdown -->
                        <div class="dropdown ms-4">
                            <a href="javascript: void(0);" class="dropdown-toggle no-arrow text-secondary" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" height="14" width="14">
                                    <g>
                                        <circle cx="12" cy="3.25" r="3.25" style="fill: currentColor"/>
                                        <circle cx="12" cy="12" r="3.25" style="fill: currentColor"/>
                                        <circle cx="12" cy="20.75" r="3.25" style="fill: currentColor"/>
                                    </g>
                                </svg>
                            </a>
                            <div class="dropdown-menu">
                                <a href="javascript: void(0);" class="dropdown-item">
                                    Export report
                                </a>
                                <a href="javascript: void(0);" class="dropdown-item">
                                    Share
                                </a>
                                <a href="javascript: void(0);" class="dropdown-item">
                                    Action
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table align-middle table-edge table-hover table-nowrap mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th class="w-60px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                        ID
                                    </a>
                                </th>

                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="name">
                                        画像
                                    </a>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="email">
                                        施設名
                                    </a>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="id">
                                        販売状況
                                    </a>
                                </th>
                                <th>
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="date">
                                        部屋番号
                                    </a>
                                </th>
                                <th class="w-150px min-w-150px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                       居室面積（㎡）
                                    </a>
                                </th>
                                <th class="w-150px min-w-150px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                        方角
                                    </a>
                                </th>
                                <th class="w-150px min-w-150px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                       一人入居時金額
                                    </a>
                                </th>
                                <th class="w-150px min-w-150px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                       ペット可否
                                    </a>
                                </th>
                                <th class="w-150px min-w-150px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                        リフォーム状況
                                    </a>
                                </th>
                                <th class="w-150px min-w-150px">
                                    <a href="javascript: void(0);" class="text-muted list-sort" data-sort="status">
                                       入居可能時期
                                    </a>
                                </th>



                            </tr>


                            </thead>

                            <tbody class="list">
                            <tr>
                                <td>
                                    <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" value="">
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar avatar-circle avatar-xs me-2">
                                        <img src="https://d33wubrfki0l68.cloudfront.net/9e7ac59225f733be5944b3e91271b33adb30cae7/56230/assets/images/profiles/profile-14.jpeg"
                                             alt="..." class="avatar-img" width="30" height="30">
                                    </div>
                                    <span class="name fw-bold">Hakeem Chan</span>
                                </td>
                                <td class="email">lobortis.augue@natoquepenatibuset.ca</td>
                                <td class="id">#9265</td>
                                <td class="date" data-signed="1648252800">03.26.2022</td>
                                <td class="status"><span class="legend-circle bg-success"></span>Successful</td>
                                <td class="id">#4885</td>
                                <td class="id">#4885</td>
                                <td class="id">#4885</td>
                                <td class="id">#4885</td>
                                <td class="id">#4885</td>
                            </tr>


                            </tbody>
                        </table>
                    </div> <!-- / .table-responsive -->

                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-5 text-secondary small">
                                Showing: <span class="list-pagination-page-first"></span> - <span
                                    class="list-pagination-page-last"></span> of <span
                                    class="list-pagination-pages"></span>
                            </div>

                            <!-- Pagination -->
                            <ul class="pagination list-pagination mb-0"></ul>
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container-fluid -->




    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <div>
                            @foreach($institution as $institutions)
                                {{$institutions -> id}}

                            @endforeach

                        </div>


                        <ul>
                            <li><a href="institution">物件情報</a></li>
                            <ul>
                                <li type="circle">変更</li>
                                <li type="circle">印刷プレビュー</li>
                                <li type="circle">CSV or Excel Download</li>
                            </ul>
                            <li><a href="user">ユーザー設定</a></li>
                            <ul>
                                <li type="circle">追加</li>
                                <li type="circle">変更</li>
                                <li type="circle">削除</li>
                                <li type="circle">権限</li>
                            </ul>
                            <li><a href="property">施設設定</a></li>
                            <ul>
                                <li type="circle">施設プロパティ</li>
                            </ul>
                            <li><a href="room">居住データベース</a></li>
                            <ul>
                                <li type="circle">追加</li>
                                <li type="circle">変更</li>
                                <li type="circle">削除</li>
                            </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
