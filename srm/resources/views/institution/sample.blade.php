<?php
use App\Util\ImageUtil;
use App\Util\PermissionUtil;

$image_url = asset( Voyager::image( '/rooms/system/images/print/' ) );
?>
<html>


<head>
    <link rel='stylesheet' href="<?php echo asset( Voyager::image( '/rooms/system/css/base.css' ) ) ?>">
    <link rel='stylesheet' href="<?php echo asset( Voyager::image( '/rooms/system/css/print.css' ) ) ?>">

    <link rel='stylesheet' href="<?php echo asset( Voyager::image( '/rooms/system/css/bootstrap.css' ) ) ?>">


    <script src="https://code.jquery.com/jquery-3.3.1.js"
            integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="<?php echo asset( Voyager::image( '/rooms/system/lib/vue.min.js' ) ) ?>"></script>


    <script>


        $(document).ready(function () {


            mainmodel = new Vue({
                el: '#sheet1',
                methods: {
                    sheetstatus1message2boxclick() {
                        $("#sheetstatus1message2box").remove();
                    }
                },
                data: {
                    writedate: "@if(isset($dataTypeContent->writedate)){{ $dataTypeContent->writedate }}@endif",
                    madoriimage: "@if(isset($dataTypeContent->madoriimage1)){{ ImageUtil::thumbnail($dataTypeContent->madoriimage1,'mediummadori') }}@endif",
                    image1: "@if(isset($dataTypeContent->image1)){{  ImageUtil::thumbnail($dataTypeContent->image1,'medium') }}@endif",
                    image2: "@if(isset($dataTypeContent->image2)){{  ImageUtil::thumbnail($dataTypeContent->image2,'medium') }}@endif",
                    image3: "@if(isset($dataTypeContent->image3)){{  ImageUtil::thumbnail($dataTypeContent->image3,'medium') }}@endif",
                    image4: "@if(isset($dataTypeContent->image4)){{  ImageUtil::thumbnail($dataTypeContent->image4,'medium') }}@endif",
                    image5: "@if(isset($dataTypeContent->image5)){{  ImageUtil::thumbnail($dataTypeContent->image5,'medium') }}@endif",
                    theta: "@if(isset($dataTypeContent->theta)){{  ImageUtil::thumbnail($dataTypeContent->theta,'medium') }}@endif",
                    image1comment: "@if(isset($dataTypeContent->image1comment)){{ $dataTypeContent->image1comment }}@endif",
                    imagecomment2: "@if(isset($dataTypeContent->image2comment)){{ $dataTypeContent->image2comment }}@endif",
                    imagecomment3: "@if(isset($dataTypeContent->image3comment)){{ $dataTypeContent->image3comment }}@endif",
                    imagecomment4: "@if(isset($dataTypeContent->image4comment)){{ $dataTypeContent->image4comment }}@endif",
                    imagecomment5: "@if(isset($dataTypeContent->image5comment)){{ $dataTypeContent->image5comment }}@endif",
                    imagecomment6: "@if(isset($dataTypeContent->image6comment)){{ $dataTypeContent->image6comment }}@endif",
                    tancomment: "@if(isset($dataTypeContent->comment1)){{ $dataTypeContent->comment1 }}@endif",
                    tanname: "@if(isset($dataTypeContent->peoplename)){{ $dataTypeContent->peoplename }}@endif",
                    price1: "@if(isset($dataTypeContent->price1)){{ $dataTypeContent->price1 }}@endif",
                    price1_80: "@if(isset($dataTypeContent->price1_80)){{ $dataTypeContent->price1_80 }}@endif",
                    price2: "@if(isset($dataTypeContent->price2)){{ $dataTypeContent->price2 }}@endif",
                    price2_80: "@if(isset($dataTypeContent->price2_80)){{ $dataTypeContent->price2_80 }}@endif",
                    price2food: "@if(isset($dataTypeContent->price2food)){{ $dataTypeContent->price2food }}@endif",
                    price2manage: "@if(isset($dataTypeContent->price2manage)){{ $dataTypeContent->price2manage }}@endif",
                    price1food: "@if(isset($dataTypeContent->price1food)){{ $dataTypeContent->price1food }}@endif",
                    price1manage: "@if(isset($dataTypeContent->price1manage)){{ $dataTypeContent->price1manage }}@endif",
                    madori: "@if(isset($dataTypeContent->madori)){{ $dataTypeContent->madori }}@endif",
                    areasize: "@if(isset($dataTypeContent->areasize)){{ $dataTypeContent->areasize . '㎡' }}@endif",
                    roomnumber: "@if(isset($dataTypeContent->roomnumber)){{ $dataTypeContent->roomnumber }}@endif",
                    floornumber: "@if(isset($dataTypeContent->floornumber)){{ $dataTypeContent->floornumber }}@endif",
                    floortotalnumber: "@if(isset($dataTypeContent->floortotalnumber)){{ $dataTypeContent->floortotalnumber }}@endif",
                    direction: "@if(isset($dataTypeContent->direction)){{ $dataTypeContent->direction }}@endif",
                    hikiwatashi: "@if(isset($dataTypeContent->hikiwatashi)){{ $dataTypeContent->hikiwatashi }}@endif",
                    service: "@if(isset($dataTypeContent->service)){{ preg_replace("/\r\n|\r|\n/", "", $dataTypeContent->service) }}@endif",
                    type: "@if(isset($dataTypeContent->type)){{ $dataTypeContent->type }}@endif",
                    sheetformat: "@if(isset($dataTypeContent->sheetformat)){{ $dataTypeContent->sheetformat }}@endif",
                    tanimage: "@if(isset($dataTypeContent->peopleimage)){{ $dataTypeContent->peopleimage }}@endif",
                    roomversionselect: "normalversion",
                    pricemodeselect: "all",
                    sheetstatus1: "@if(isset($dataTypeContent->status1)){{ $dataTypeContent->status1 }}@endif",
                },
                computed: {
                    directionname: function () {
                        var array2 = {
                            "east": "東",
                            "northeast": "北東",
                            "southeast": "東南",
                            "west": "西",
                            "northwest": "北西",
                            "southwest": "南西",
                            "south": "南",
                            "north": "北"
                        }

                        if (this.direction === "") {
                            return "";
                        } else {
                            return array2[this.direction] + "向き";

                        }

                    },
                    madoriimagesrc: function () {

                        if (this.madoriimage === "") {
                            return "<?php echo asset( Voyager::image( '/rooms/system/images/madoridummy.jpg' ) ) ?>";
                        } else {
                            return "<?php echo config( 'filesystems.disks.admin.url' ) ?>/" + this.madoriimage;

                        }

                    },
                    image1src: function () {

                        if (this.image1 === "") {
                            return "<?php echo asset( Voyager::image( '/rooms/system/images/dummy2.jpg' ) ) ?>";
                        } else {
                            return "<?php echo config( 'filesystems.disks.admin.url' ) ?>/" + this.image1;

                        }

                    },
                    image2src: function () {

                        if (this.image2 === "") {
                            return "<?php echo asset( Voyager::image( '/rooms/system/images/dummy2.jpg' ) ) ?>";
                        } else {
                            return "<?php echo config( 'filesystems.disks.admin.url' ) ?>/" + this.image2;

                        }

                    },
                    image3src: function () {

                        if (this.image3 === "") {
                            return "<?php echo asset( Voyager::image( '/rooms/system/images/dummy2.jpg' ) ) ?>";
                        } else {
                            return "<?php echo config( 'filesystems.disks.admin.url' ) ?>/" + this.image3;

                        }

                    },

                    image4src: function () {

                        if (this.image4 === "") {
                            return "<?php echo asset( Voyager::image( '/rooms/system/images/dummy2.jpg' ) ) ?>";
                        } else {
                            return "<?php echo config( 'filesystems.disks.admin.url' ) ?>/" + this.image4;

                        }

                    },

                    image_check1: function () {

                        if (this.theta != "") {
                            return "image_check1";
                        } else {
                            return "";
                        }
                    },

                    image_check2: function () {

                        if (this.theta == "") {
                            return "image_check2";
                        } else {
                            return "";
                        }
                    },


                    thetasrc: function () {


                        if (this.theta === "") {


                            if (this.image5 === "") {
                                return " <?php echo asset( Voyager::image( '/rooms/system/images/dummy2.jpg' ) );?>";
                            } else {

                                return " <?php echo config( 'filesystems.disks.admin.url' );?>/" + this.image5;
                            }

                        } else {

                            return " <?php echo config( 'filesystems.disks.admin.url' ); ?>/" + this.theta;


                        }

                    },


                    tanimagesrc: function () {

                        var array2 = {
                            tan1: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage1.png?ver=2' ) ) ?>",
                            tan2: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage2.png?ver=2' ) ) ?>",
                            tan3: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage3.png?ver=2' ) ) ?>",
                            tan4: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage4.png?ver=2' ) ) ?>",
                            tan5: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage5.png?ver=5' ) ) ?>",
                            tan6: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage6.png?ver=2' ) ) ?>",
                            tan7: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage7.png?ver=2' ) ) ?>",
                            tan8: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage8.png?ver=2' ) ) ?>",
                            tan10: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage10.png?ver=2' ) ) ?>",
                            tan9: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage20.png?ver=2' ) ) ?>",
                            tan11: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage21.png?ver=2' ) ) ?>",
                            tan22: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage22.png?ver=2' ) ) ?>",
                            tan23: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage23.png?ver=2' ) ) ?>",
                            tan24: "<?php echo asset( Voyager::image( '/rooms/system/images/tanimage24.png?ver=2' ) ) ?>",

                        }

                        if (this.tanimage === "") {
                            return "<?php echo asset( Voyager::image( '/rooms/system/images/dummy1.png' ) ) ?>";
                        } else {
                            return array2[this.tanimage];

                        }

                    },
                    tanimagename: function () {

                        var array2 = {
                            tan1: "大和田 憲彦",
                            tan2: "中村直子",
                            tan4: "髙見丞",
                            tan5: "松田江利子",
                            tan6: "灘明美",
                            tan7: "豊島早苗",
                            tan8: "佐藤",
                            tan9: "芹澤功子",
                            tan10: "大下美和子",
                            tan11: "中村優香",
                            tan22: "江川直美",
                            tan23: "杉本賢介",
                            tan24: "徳永和章",

                        }

                        return array2[this.tanimage];

                    },
                    formatprice1: function () {
                        if (this.roomversionselect === "normalversion") {
                            return String(this.price1).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                        } else if (this.roomversionselect === "eightyversion") {
                            return String(this.price1_80).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                        }

                    },
                    modetype2: function () {

                        if (this.pricemodeselect === "all") {
                            return "";
                        } else if (this.pricemodeselect === "one") {
                            return "modetype2";
                        }

                    },
                    modetype1: function () {

                        if (this.pricemodeselect === "all") {
                            return "";
                        } else if (this.pricemodeselect === "two") {
                            return "modetype1";
                        }

                    },
                    formatprice1manage: function () {
                        return String(this.price1manage).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                    },
                    formatprice1food: function () {
                        return String(this.price1food).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                    },
                    formatprice1total: function () {
                        return String(parseInt(this.price1food) + parseInt(this.price1manage)).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                    },
                    formatprice2: function () {

                        if (this.roomversionselect === "normalversion") {
                            return String(this.price2).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                        } else if (this.roomversionselect === "eightyversion") {
                            return String(this.price2_80).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                        }
                    },
                    formatprice2manage: function () {
                        return String(this.price2manage).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                    },
                    formatprice2food: function () {
                        return String(this.price2food).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                    },
                    formatprice2total: function () {
                        return String(parseInt(this.price2food) + parseInt(this.price2manage)).replace(/(\d)(?=(\d\d\d)+(?!\d))/g, '$1,');
                    },
                    sheetformatname: function () {

                        var array2 = {
                            sheetformat1: "サンシティ神奈川",
                            sheetformat2: "サンシティ町田",
                            sheetformat3: "サンシティ横浜南",
                            sheetformat4: "サンシティ横浜",
                            sheetformat5: "サンシティみなとみらいEAST"
                        }

                        return array2[this.sheetformat];
                    },
                    formatfooterimage: function () {

                        var array2 = {
                            sheetformat1: "<?php echo asset( Voyager::image( '/rooms/system/images/footer-1@3x.png?ver=3' ) ) ?>",
                            sheetformat2: "<?php echo asset( Voyager::image( '/rooms/system/images/footer-2@3x.png?ver=3' ) ) ?>",
                            sheetformat3: "<?php echo asset( Voyager::image( '/rooms/system/images/footer-3@3x.png?ver=3' ) ) ?>",
                            sheetformat4: "<?php echo asset( Voyager::image( '/rooms/system/images/footer-4@3x.png?ver=3' ) ) ?>",
                            sheetformat5: "<?php echo asset( Voyager::image( '/rooms/system/images/footer-5@3x.png?ver=3' ) ) ?>"
                        }
                        return array2[this.sheetformat];
                    },

                    titleimage: function () {

                        var array2 = {
                            sheetformat1: "<?php echo asset( Voyager::image( '/rooms/system/images/top-image-0001@3x.png' ) ) ?>",
                            sheetformat2: "<?php echo asset( Voyager::image( '/rooms/system/images/top-image-0002@3x.png' ) ) ?>",
                            sheetformat3: "<?php echo asset( Voyager::image( '/rooms/system/images/top-image-0003@3x.png' ) ) ?>",
                            sheetformat4: "<?php echo asset( Voyager::image( '/rooms/system/images/top-image-0004@3x.png' ) ) ?>",
                            sheetformat5: "<?php echo asset( Voyager::image( '/rooms/system/images/top-image-0005@3x.png' ) ) ?>"
                        }
                        return array2[this.sheetformat];
                    },


                    formatpricecalc: function () {

                        var array2 = {
                            sheetformat1: "<?php echo asset( Voyager::image( '/rooms/system/images/calc-1@3x.png' ) ) ?>",
                            sheetformat2: "<?php echo asset( Voyager::image( '/rooms/system/images/calc-2@3x.png' ) ) ?>",
                            sheetformat3: "<?php echo asset( Voyager::image( '/rooms/system/images/calc-3@3x.png' ) ) ?>",
                            sheetformat4: "<?php echo asset( Voyager::image( '/rooms/system/images/calc-4@3x.png' ) ) ?>",
                            sheetformat5: "<?php echo asset( Voyager::image( '/rooms/system/images/calc-5@3x.webp' ) ) ?>"
                        }
                        return array2[this.sheetformat];
                    },


                    headerclass: function () {
                        var array2 = {
                            sheetformat1: "headerkanagawa",
                            sheetformat2: "headermachida",
                            sheetformat3: "headeryokohamaminami",
                            sheetformat4: "headeryokohama",
                            sheetformat5: "headerminatomirai"
                        }

                        return array2[this.sheetformat];


                    },
                    tsuikaprice1: function () {
                        var array2 = {
                            sheetformat1: "700",
                            sheetformat2: "1000",
                            sheetformat3: "1000",
                            sheetformat4: "1000",
                            sheetformat5: "1000"
                        }

                        return array2[this.sheetformat];


                    }

                    ,
                    sheetstatus1message: function () {

                        if (this.sheetstatus1 === "status5") {
                            return "";
                        }

                    }
                    ,
                    sheetstatus1message2: function () {

                        if (this.sheetstatus1 === "status5") {
                            return "";
                        }

                    }
                    , sheetstatus1message2boxstyle: function () {

                        if (this.sheetstatus1 === "status5") {
                            return {};
                        } else {
                            return {display: "none"};
                        }

                    }
                }
            });
        })
        ;


    </script>

    <style>

    </style>


</head>
<body>


<div id="sheet1">
    <div id="roomsheetheader">
        <ul class="clearfix">
            <li>
                <a onclick="window.print();">印刷</a>
            </li>
            <li>
                <?php
                if (App\Util\PermissionUtil::isOK( Auth::user()->email, $dataTypeContent->sheetformat )):
                ?>

                @can('edit', $dataTypeContent)
                    <a href="{{ route('voyager.'.$dataType->slug.'.edit', $dataTypeContent->getKey()) }}"
                       class="btn btn-info">
                        {{ __('voyager::generic.edit') }}
                    </a>
                @endcan


                <?php else: ?>

                <a class="btn btn-info" style="background: #9e9e9e;border: 1px solid #000000;">
                    編集不可
                </a>


                <?php endif; ?>

            </li>
            <li>
                <a href="{{ route('voyager.'.$dataType->slug.'.index') }}" class="btn btn-warning">
                    {{ __('voyager::generic.return_to_list') }}
                </a>

            </li>
            {{--            <li>--}}
            {{--                <select id="roomversionselect" v-model="roomversionselect">--}}
            {{--                    <option value="normalversion">通常</option>--}}
            {{--                    <option value="eightyversion">80</option>--}}
            {{--                </select>--}}

            {{--            </li>--}}
            <li>
                <select id="pricemodeselect" v-model="pricemodeselect">
                    <option value="all">入居費用すべて表示</option>
                    <option value="one">入居費用一人用表示</option>
                    <option value="two">入居費用二人用表示</option>
                </select>
                <span style="color: white;display: inline-block;padding: 0 0 0 5px;">
                    印刷バージョンを選択してください。<span style="color:red;font-weight: bold;" v-text="sheetstatus1message"></span>
                </span>
            </li>
        </ul>

    </div>


    <div class="container-fluid print_pages screen_page">
        <div class="row">
            <div class="col-12 top_border">
                &nbsp;
            </div>
        </div>
        <div class="row">
            <div class="col-6 header_border">

                <span class="header_0001" v-text="madori">1LDK</span>

                <div class="header_0002" v-text="roomnumber">1-512号室</div>

                <div class="header_0003" v-text="areasize">00.00m2</div>


            </div>
            <div class="col-3"></div>

            <div class="col-3 text-right pt-1 pr-4">

                <img v-bind:src='titleimage' class="fullimage">

            </div>

        </div>

        <div class="row mt-2">
            <div class="col-4 text-center pr-3">
                <img v-bind:src='madoriimagesrc' style="width: 90%;">
                <div class="text-center p-1 mt-5 text_0001 " style="background-color: #ECF8EA;bottom: 0">
                    実際の間取りは上記と異なる場合がございます。<br>
                    図面との差異がある場合、現況を優先させていただきます。
                </div>
            </div>

            <div class="col-4 text-center p-0 mt-3">
                <div class="container-fluid">
                    <div class="row pb-3">
                        <div class="col-12 p-1">
                            <img v-bind:src='image1src' class="w-100">
                            <div v-text="image1comment" class="text-left pt-2 text_0001">
                                コメントあいうえおかきくけこ
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6 p-1">
                            <img v-bind:src='image2src' class="w-100">
                            <div v-text="imagecomment2" class="text-left pt-2 text_0001">
                                コメントあいうえお
                            </div>
                        </div>
                        <div class="col-6 p-1">
                            <img v-bind:src='image3src' class="w-100">
                            <div v-text="imagecomment3" class="text-left pt-2 text_0001">
                                コメントあいうえお
                            </div>
                        </div>
                    </div>
                    <div class="row pb-3">
                        <div class="col-6 p-1">
                            <img v-bind:src='image4src' class="w-100">
                            <div v-text="imagecomment4" class="text-left pt-2 text_0001">
                                コメントあいうえお
                            </div>
                        </div>


                        <div class="col-6 p-1">

                            {{--画像５表示--}}
                            <div v-bind:class="image_check1">
                                <img v-bind:src='thetasrc' class="w-100">
                                <div v-text="imagecomment5" class="text-left pt-2 text_0001">

                                    コメントあいうえお
                                </div>

                            </div>

                            {{--シータ表示--}}
                            <div v-bind:class="image_check2">
                                <img src="https://www.chienomori.jp/srm//admin/uploads/auth/rooms/sheet_bg@2x.png"
                                     alt="" class="w-100">
                                <img v-bind:src='thetasrc'
                                     style="width: 90px;top:10; left:8;position: absolute;z-index: 99999;">

                            </div>


                        </div>

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


                            <div v-bind:class="modetype1">
                                <div class="pl-3">
                                    <div class="price_0001">お一人さま　合計</div>
                                    <div class="price_0002" v-text="formatprice1">1,234</div>
                                    <div class="price_0003">万円</div>
                                </div>
                            </div>

                            <div v-bind:class="modetype2">
                                <div class="pl-3">
                                    <span class="price_0001">お二人さま　合計</span>
                                    <span class="price_0002" v-text="formatprice2">1,234</span>
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
                            <span class="price_0004" v-text="roomnumber"></span>

                        </div>
                    </div>

                    <div class="row row-border">
                        <div class="col-3 p-0 pt-2 price_0006 text-center font-weight-bold"
                             style="background-color: #DFF4DC;color: #4e3b30;">
                            間取り


                        </div>
                        <div class="col-9 pl-3 text-left">
                            <span class="price_0004" v-text="madori"></span>

                        </div>
                    </div>

                    <div class="row row-border">
                        <div class="col-3 p-0" style="background-color: #DFF4DC;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 78 17">
                                <g id="グループ_54" data-name="グループ 54" transform="translate(-557 -190)">
                                    <rect id="長方形_14" data-name="長方形 14" width="78" height="17"
                                          transform="translate(557 190)" fill="#dff4dc"/>
                                    <text id="居室面積" transform="translate(596 202)" fill="#4e3b30" font-size="9"
                                          font-family=" '游ゴシック体', YuGothic, '游ゴシック Medium', 'Yu Gothic Medium', '游ゴシック', 'Yu Gothic', sans-serif;"
                                          font-weight="700" letter-spacing="0.06em">
                                        <tspan x="-18.81" y="3">居室面積</tspan>
                                    </text>
                                </g>
                            </svg>


                        </div>
                        <div class="col-9 pl-3 text-left">
                            <span class="price_0004" v-text="areasize"></span>

                        </div>
                    </div>


                    <div class="row row-border">
                        <div class="col-3 p-0" style="background-color: #DFF4DC;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 78 17">
                                <g id="グループ_56" data-name="グループ 56" transform="translate(-557 -217)">
                                    <rect id="長方形_13" data-name="長方形 13" width="78" height="17"
                                          transform="translate(557 217)" fill="#dff4dc"/>
                                    <text id="階数" transform="translate(596 229)" fill="#4e3b30" font-size="9"
                                          font-family=" '游ゴシック体', YuGothic, '游ゴシック Medium', 'Yu Gothic Medium', '游ゴシック', 'Yu Gothic', sans-serif;"
                                          font-weight="700" letter-spacing="0.06em">
                                        <tspan x="-9.27" y="3">階数</tspan>
                                    </text>
                                </g>
                            </svg>


                        </div>
                        <div class="col-9 pl-3 text-left">
                            <span class="price_0004" v-text="floornumber"></span> <span class="price_0004">階</span> /
                            <span class="price_0004" v-text="floortotalnumber"></span><span class="price_0004">階建</span>

                        </div>
                    </div>

                    <div class="row row-border">
                        <div class="col-3 p-0" style="background-color: #DFF4DC;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 78 17">
                                <g id="グループ_57" data-name="グループ 57" transform="translate(-557 -244)">
                                    <rect id="長方形_12" data-name="長方形 12" width="78" height="17"
                                          transform="translate(557 244)" fill="#dff4dc"/>
                                    <text id="方角" transform="translate(596 256)" fill="#4e3b30" font-size="9"
                                          font-family=" '游ゴシック体', YuGothic, '游ゴシック Medium', 'Yu Gothic Medium', '游ゴシック', 'Yu Gothic', sans-serif;"
                                          font-weight="700" letter-spacing="0.06em">
                                        <tspan x="-9.27" y="3">方角</tspan>
                                    </text>
                                </g>
                            </svg>


                        </div>
                        <div class="col-9 pl-3 text-left">
                            <span class="price_0004" v-text="directionname"></span>

                        </div>
                    </div>


                    <div class="row row-border p-0">
                        <div class="col-3 p-0" style="background-color: #DFF4DC;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" viewBox="0 0 78 17">
                                <g id="グループ_58" data-name="グループ 58" transform="translate(-557 -271)">
                                    <rect id="長方形_24" data-name="長方形 24" width="78" height="17"
                                          transform="translate(557 271)" fill="#dff4dc"/>
                                    <text id="入居可能時期" transform="translate(596 283)" fill="#4e3b30" font-size="9"
                                          font-family=" '游ゴシック体', YuGothic, '游ゴシック Medium', 'Yu Gothic Medium', '游ゴシック', 'Yu Gothic', sans-serif;"
                                          font-weight="700" letter-spacing="0.06em">
                                        <tspan x="-28.35" y="3">入居可能時期</tspan>
                                    </text>
                                </g>
                            </svg>

                        </div>
                        <div class="col-9 pl-3 text-left">
                            <span class="price_0004" v-text="hikiwatashi"></span>

                        </div>
                    </div>


                    <div class="row row-border_non">
                        <div class="col-12 p-3" style="background-color: #ffffff;">

                            <span class="price_0005 ">

                                                           <img v-bind:src='formatpricecalc' class="fullimage">
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
                                    <text id="担当者コメント" transform="translate(596 394)" fill="#4e3b30" font-size="9"
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
                            <div><img v-bind:src='tanimagesrc' class="w-100"></div>
                            <div class="mt-2 price_0005 text-center font-weight-bold">お客様相談室</div>
                            <div class="mt-0 price_0005 text-center font-weight-bold" v-text="tanimagename">大和田 憲彦</div>
                        </div>
                        <div class="col-9 pl-3 text-left">
                            <span class="price_0005" v-text="tancomment">
                            </span>

                        </div>
                        <div class="col-12 p-0 text-right mt-0">
                            <span class="price_0005" v-text="writedate">
                            </span>
                        </div>

                    </div>


                </div>
            </div>


            <div class="row p-0" style="margin-top: -10px;">
                <div class="col-12 p-0">
                    <img v-bind:src='formatfooterimage' class="fullimage">

                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
