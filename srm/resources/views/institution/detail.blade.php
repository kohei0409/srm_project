@extends('layouts.app')


@section('content')

    <?php
    switch ($institution->sheetformat) {
        case 'sheetformat1':
            $top_title_image = "top-image-0001@3x.png";
            $calc_image = "calc-1@3x.png";
            $footer_image = "footer-1@3x.png";
            break;
        case 'sheetformat2':

            $top_title_image = "top-image-0002@3x.png";
            $calc_image = "calc-2@3x.png";
            $footer_image = "footer-2@3x.png";

            break;
        case 'sheetformat3':
            $top_title_image = "top-image-0003@3x.png";
            $calc_image = "calc-3@3x.png";
            $footer_image = "footer-3@3x.png";
            break;
        case 'sheetformat4':
            $top_title_image = "top-image-0004@3x.png";
            $calc_image = "calc-4@3x.png";
            $footer_image = "footer-4@3x.png";
            break;
        case 'sheetformat5':
            $top_title_image = "top-image-0005@3x.png";
            $calc_image = "calc-5@3x.png";
            $footer_image = "footer-5@3x.png";
            break;
        default:
            // 処理
    }
    ?>



    <style>
        .image_position {
            background-size: cover;
            display: inline-block;
            background-repeat: no-repeat;
            background-position: bottom;
        }

        .sheet {
            padding-top: 80px;
        }

        .sheet_detail {
            background-color: white;
            border: solid 1px black;
            max-width: 1200px;
            padding: 20px 0px;
        }

        @media print {
            .print_none {
                display: none;
            }

            .sheet {
                padding-top: 0px;
            }

            .sheet_detail {
                background-color: white;
                padding: 20;
                border: solid 10px white;

            }


        }

    </style>



    <div class="sheet">
        <div id="sheet1"
             class="sheet_detail" style=" margin: 0 auto;">

            <div class=" container-fluid print_pages screen_page
        " style="z-index: 99;">
                <div class="row">
                    <div class="col-12 top_border">
                        &nbsp;
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 header_border">

                        <span class="header_0001">{{$institution->madori}}</span>

                        <div class="header_0002">{{$institution->roomnumber}}</div>

                        <div class="header_0003">{{$institution->areasize}}㎡</div>


                    </div>
                    <div class="col-3"></div>

                    <div class="col-3 text-right pt-1 pr-4">

                        <img src='../images/common/<?php echo $top_title_image; ?>' class="w-100">

                    </div>

                </div>

                <div class="row mt-2">
                    <div class="col-4 text-center pr-3">
                        <img src='../images/{{$institution->madoriimage1}}' style="width: 90%;">
                        <div class="text-center p-1 mt-5 text_0001 " style="background-color: #ECF8EA;bottom: 0">
                            実際の間取りは上記と異なる場合がございます。<br>
                            図面との差異がある場合、現況を優先させていただきます。
                        </div>
                    </div>

                    <div class="col-4 text-center p-0 mt-3">
                        <div class="container-fluid">
                            <div class="row pb-3">
                                <div class="col-12 p-1 image_position"
                                     style="background-image: url('../images/{{$institution->image1}}');height: 220px;">
                                </div>
                                <div class="text-left pt-2 text_0001">
                                    {{$institution->image1comment}}

                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-6 p-1 image_position"
                                     style="background-image: url('../images/{{$institution->image2}}');height: 100px;">


                                </div>
                                <div class="col-6 p-1 image_position"
                                     style="background-image: url('../images/{{$institution->image3}}');height: 100px;">


                                </div>

                                <div class="col-6 p-1">
                                    <div class="text-left pt-2 text_0001">
                                        {{$institution->image2comment}}
                                    </div>
                                </div>
                                <div class="col-6 p-1">
                                    <div class="text-left pt-2 text_0001">
                                        {{$institution->image3comment}}
                                    </div>
                                </div>


                            </div>


                            <div class="row pb-3">
                                <div class="col-6 p-1 image_position"
                                     style="background-image: url('../images/{{$institution->image4}}');height: 100px;">
                                    \
                                    <div class="text-left pt-2 text_0001" style="margin-top: 80px">
                                        {{$institution->image4comment}}
                                    </div>
                                </div>

                                @if ($institution->image5)
                                    {{--画像５表示--}}
                                    <div class="col-6 p-1 image_position"
                                         style="background-image: url('../images/{{$institution->image5}}');height: 100px;">

                                        <div class="text-left pt-2 text_0001" style="margin-top: 80px">
                                            {{$institution->image5comment}}
                                        </div>
                                    </div>

                                @else
                                    {{--シータ表示--}}
                                    <div class="col-6 p-1">
                                        <div class="image_check2" style="position: relative;">
                                            <img
                                                src="../images/common/sheet_bg@2x.png"
                                                alt="" class="w-100">
                                            <img src='../images/{{$institution->theta}}'
                                                 style="width: 90px;z-index: 99999;position: absolute;left: 7px;top:7px;">

                                        </div>
                                    </div>
                                @endif


                            </div>

                        </div>
                    </div>


                    <div class="col-4 p-3">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-3 price_0004 text-center"
                                     style="background-color: #DFF4DC;height: 90px;padding-top: 22px">
                                    入居時の費用

                                </div>
                                <div class="col-9 p-0 text-right">


                                    <div class="">
                                        <div class="pl-3">
                                            <div class="price_0001">お一人さま　合計</div>
                                            <div class="price_0002">{{$institution->price1}}</div>
                                            <div class="price_0003">万円</div>
                                        </div>
                                    </div>

                                    <div class="">
                                        <div class="pl-3">
                                            <span class="price_0001">お二人さま　合計</span>
                                            <span class="price_0002">{{$institution->price2}}</span>
                                            <span class="price_0003">万円</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="row row-border">
                                <div class="col-3 p-0 pt-2 price_0006 text-center font-weight-bold"
                                     style="background-color: #DFF4DC;color: #4e3b30;">
                                    居室番号


                                </div>
                                <div class="col-9 pl-3 text-left">
                                    <span class="price_0004">{{$institution->roomnumber}}</span>

                                </div>
                            </div>

                            <div class="row row-border">
                                <div class="col-3 p-0 pt-2 price_0006 text-center font-weight-bold"
                                     style="background-color: #DFF4DC;color: #4e3b30;">
                                    間取り


                                </div>
                                <div class="col-9 pl-3 text-left">
                                    <span class="price_0004">{{$institution->madori}}</span>

                                </div>
                            </div>

                            <div class="row row-border">
                                <div class="col-3 p-0" style="background-color: #DFF4DC;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 78 17">
                                        <g id="グループ_54" data-name="グループ 54" transform="translate(-557 -190)">
                                            <rect id="長方形_14" data-name="長方形 14" width="78" height="17"
                                                  transform="translate(557 190)" fill="#dff4dc"/>
                                            <text id="居室面積" transform="translate(596 202)" fill="#4e3b30"
                                                  font-size="9"
                                                  font-family=" '游ゴシック体', YuGothic, '游ゴシック Medium', 'Yu Gothic Medium', '游ゴシック', 'Yu Gothic', sans-serif;"
                                                  font-weight="700" letter-spacing="0.06em">
                                                <tspan x="-18.81" y="3">居室面積</tspan>
                                            </text>
                                        </g>
                                    </svg>


                                </div>
                                <div class="col-9 pl-3 text-left">
                                    <span class="price_0004">{{$institution->areasize}}㎡</span>

                                </div>
                            </div>


                            <div class="row row-border">
                                <div class="col-3 p-0" style="background-color: #DFF4DC;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 78 17">
                                        <g id="グループ_56" data-name="グループ 56" transform="translate(-557 -217)">
                                            <rect id="長方形_13" data-name="長方形 13" width="78" height="17"
                                                  transform="translate(557 217)" fill="#dff4dc"/>
                                            <text id="階数" transform="translate(596 229)" fill="#4e3b30"
                                                  font-size="9"
                                                  font-family=" '游ゴシック体', YuGothic, '游ゴシック Medium', 'Yu Gothic Medium', '游ゴシック', 'Yu Gothic', sans-serif;"
                                                  font-weight="700" letter-spacing="0.06em">
                                                <tspan x="-9.27" y="3">階数</tspan>
                                            </text>
                                        </g>
                                    </svg>


                                </div>
                                <div class="col-9 pl-3 text-left">
                                    <span class="price_0004">{{$institution->floornumber}}</span> <span
                                        class="price_0004">階</span> /
                                    <span class="price_0004">{{$institution->floortotalnumber}}</span><span
                                        class="price_0004">階建</span>

                                </div>
                            </div>

                            <div class="row row-border">
                                <div class="col-3 p-0" style="background-color: #DFF4DC;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 78 17">
                                        <g id="グループ_57" data-name="グループ 57" transform="translate(-557 -244)">
                                            <rect id="長方形_12" data-name="長方形 12" width="78" height="17"
                                                  transform="translate(557 244)" fill="#dff4dc"/>
                                            <text id="方角" transform="translate(596 256)" fill="#4e3b30"
                                                  font-size="9"
                                                  font-family=" '游ゴシック体', YuGothic, '游ゴシック Medium', 'Yu Gothic Medium', '游ゴシック', 'Yu Gothic', sans-serif;"
                                                  font-weight="700" letter-spacing="0.06em">
                                                <tspan x="-9.27" y="3">方角</tspan>
                                            </text>
                                        </g>
                                    </svg>


                                </div>
                                <div class="col-9 pl-3 text-left">
                                <span class="price_0004">
                                    <?php
                                    switch ($institution->direction) {
                                        case 'east':
                                            echo "東";
                                            break;
                                        case 'northeast':
                                            echo "北東";
                                            break;
                                        case 'southeast':
                                            echo "東南";
                                            break;
                                        case 'west':
                                            echo "西";
                                            break;
                                        case 'northwest':
                                            echo "北西";
                                            break;
                                        case 'southwest':
                                            echo "南西";
                                            break;
                                        case 'south':
                                            echo "南";
                                            break;
                                        case 'north':
                                            echo "北";
                                            break;
                                        default:

                                    }
                                    ?>向き

                                </span>

                                </div>
                            </div>


                            <div class="row row-border p-0">
                                <div class="col-3 p-0" style="background-color: #DFF4DC;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 78 17">
                                        <g id="グループ_58" data-name="グループ 58" transform="translate(-557 -271)">
                                            <rect id="長方形_24" data-name="長方形 24" width="78" height="17"
                                                  transform="translate(557 271)" fill="#dff4dc"/>
                                            <text id="入居可能時期" transform="translate(596 283)" fill="#4e3b30"
                                                  font-size="9"
                                                  font-family=" '游ゴシック体', YuGothic, '游ゴシック Medium', 'Yu Gothic Medium', '游ゴシック', 'Yu Gothic', sans-serif;"
                                                  font-weight="700" letter-spacing="0.06em">
                                                <tspan x="-28.35" y="3">入居可能時期</tspan>
                                            </text>
                                        </g>
                                    </svg>

                                </div>
                                <div class="col-9 pl-3 text-left">
                                    <span class="price_0004">{{$institution->hikiwatashi}}</span>

                                </div>
                            </div>


                            <div class="row row-border_non">
                                <div class="col-12 p-3" style="background-color: #ffffff;">

                            <span class="price_0005 ">
                                <img src='../images/common/<?php echo $calc_image; ?>' class="w-100">
                            </span>
                                    </span>

                                </div>
                            </div>


                            <div class="row mt-3">
                                <div class="col-12 p-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 243 17">
                                        <g id="グループ_60" data-name="グループ 60" transform="translate(-557 -382)">
                                            <rect id="長方形_11" data-name="長方形 11" width="243" height="17"
                                                  transform="translate(557 382)" fill="#dff4dc"/>
                                            <text id="担当者コメント" transform="translate(596 394)" fill="#4e3b30"
                                                  font-size="9"
                                                  font-family=" '游ゴシック体', YuGothic, '游ゴシック Medium', 'Yu Gothic Medium', '游ゴシック', 'Yu Gothic', sans-serif;"
                                                  font-weight="700" letter-spacing="0.06em">
                                                <tspan x="-33.12" y="0">担当者コメント</tspan>
                                            </text>
                                        </g>
                                    </svg>

                                </div>
                            </div>
                            <div class="row mt-3">

                                <div class="col-3 p-0 text-center">
                                    <div><img src='tanimagesrc' class="w-100"></div>
                                    <div class="mt-2 price_0005 text-center font-weight-bold">お客様相談室</div>
                                    <div class="mt-0 price_0005 text-center font-weight-bold">
                                        {{$institution->tanimagename}}
                                    </div>
                                </div>
                                <div class="col-9 pl-3 text-left">
                            <span class="price_0005">{{$institution->comment1}}
                            </span>

                                </div>
                                <div class="col-12 p-0 text-right mt-0">
                            <span class="price_0005">{{$institution->writedate}}
                            </span>
                                </div>

                            </div>


                        </div>
                    </div>


                    <div class="row p-0" style="margin-top: -10px;">
                        <div class="col-12 p-0">


                            <img src='../images/common/<?php echo $footer_image; ?>' class="w-100">


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
