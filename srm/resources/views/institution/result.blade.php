<tr>

    <td>
        <a class="btn btn-sm text-white" style="background-color: orange" href="detail/{{$institutions -> id}}"> 表示</a><br>
        <a class="btn btn-info btn-sm mt-1" href="edit/{{$institutions -> id}}">編集</a><br>
        <a class="btn btn-danger btn-sm mt-1" href="delete/{{$institutions -> id}}">削除</a>

    </td>
    <td>
        {{$institutions -> id}}
    </td>
    <td>
        <div class="">
            <?php
            $filename = 'images/' .$institutions->image1;
            if (file_exists($filename) || $filename !='images/'){ ?>
            <img src="<?php echo asset('images/' . $institutions->image1); ?>"
                 alt="" width="100" >
            <?php } ?>

        </div>
    </td>
    <td class="">
        <?php
        switch ($institutions->sheetformat) {
            case 'sheetformat1':
                echo "神奈川";
                break;
            case 'sheetformat2':
                echo "町田";
                break;
            case 'sheetformat3':
                echo "横浜南";
                break;
            case 'sheetformat4':
                echo "横浜";
                break;
            case 'sheetformat5':
                echo "みなとみらい";
                break;
            default:
                // 処理
        }
        ?>

    </td>
    <td class="">
        <?php
        switch ($institutions->status1) {
            case 'status1':
                echo "販売準備中";
                break;
            case 'status2':
                echo "販売中";
                break;
            case 'status3':
                echo "商談中";
                break;
            case 'status4':
                echo "成約済";
                break;
            case 'status5':
                echo "荷物搬出待ち";
                break;
            default:
                // 処理
        }
        ?></td>
    <td class="">{{$institutions -> roomnumber}}</td>
    <td class="">{{$institutions -> madori}}</td>
    {{--                                    <td class=""><span--}}
    {{--                                            class="legend-circle bg-success"></span>{{$institutions -> madori}}</td>--}}
    <td class="">{{$institutions -> areasize}}㎡</td>

    <td class="">

        <?php
        switch ($institutions->direction) {
            case 'north':
                echo "北";
                break;
            case 'northeast':
                echo "北東";
                break;
            case 'east':
                echo "東";
                break;
            case 'southeast':
                echo "南東";
                break;
            case 'south':
                echo "南";
                break;
            case 'southwest':
                echo "南西";
                break;
            case 'west':
                echo "西";
                break;
            case 'northwest':
                echo "北西";
                break;

            default:
                // 処理
        }
        ?>
    </td>

    <td class=""><?php echo number_format($institutions->price1); ?>万円</td>
    <td class=""><?php echo number_format($institutions->price2); ?>万円</td>

    <td class="">
        <?php
        switch ($institutions->ispetok) {
            case 0:
                echo "✕";
                break;
            case 1:
                echo "○";
                break;
            default:
                // 処理
        }
        ?></td>
    <td class="">
        <?php
        switch ($institutions->reformstatus) {
            case 'rstat1':
                echo "表装替え";
                break;
            case 'rstat2':
                echo "ハーフ改修";
                break;
            case 'rstat3':
                echo "ユニット改修";
                break;
            default:
                // 処理
        }
        ?>
    </td>

    <td class="">
        <?php
        echo mb_strimwidth($institutions->hikiwatashi, 0, 16, "...", "UTF-8");
        ?>


    </td>
</tr>


<style>
    .tablesorter th {
        position: relative;
        cursor: pointer;
        text-align: left;
    }

    .tablesorter th::before, .tablesorter th::after {
        content: '';
        position: absolute;
        z-index: 2;
        right: 7px;
        width: 0;
        height: 0;
        border: 4px dashed;
        border-color: #333 transparent;
        pointer-events: none;
    }

    .tablesorter th::before {
        border-bottom-style: solid;
        border-top: none;
        top: 30%;
    }

    .tablesorter th::after {
        border-top-style: solid;
        border-bottom: none;
        bottom: 30%;
    }

    .tablesorter th.tablesorter-headerAsc:after {
        border: none;
    }

    .tablesorter th.tablesorter-headerAsc:before {
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
    }

    .tablesorter th.tablesorter-headerDesc:before {
        border: none;
    }

    .tablesorter th.tablesorter-headerDesc:after {
        top: 50%;
        transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
    }

    .tablesorter th.sorter-false:before, .tablesorter th.sorter-false:after {
        border: none;
    }


    .table > thead th {

        font-size: 14px;
        color: #0b0c0c;
    }


</style>


