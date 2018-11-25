@extends('layout.admins')

@section('title',$title)

@section('content')
    <h3>现在是北京时间：</h3>
    <p id="box" style=" color:#f00"></p>
@endsection


@section('js')
<script>
    function time() {
        var today = new Date();
        var nian = today.getFullYear(); //年
        var yue = (today.getMonth() + 1); //月
        var ri = today.getDate(); //日
        var shi = today.getHours(); //时
        var feng = today.getMinutes(); //分
        var miao = today.getSeconds(); //秒
        var xingqi = today.getDay();

        var v;
        if (shi >= 12) {
            v = "PM";
        } else {
            v = "AM";
        }

        var xingqis;
        switch (xingqi) {
            case 1:
                xingqis = "星期一";
                break;
            case 2:
                xingqis = "星期二";
                break;
            case 3:
                xingqis = "星期三";
                break;
            case 4:
                xingqis = "星期四";
                break;
            case 5:
                xingqis = "星期五";
                break;
            case 6:
                xingqis = "星期六";
                break;
            default:
                xingqis = "星期日";
        }

        document.getElementById("box").innerHTML = nian + "年" + yue + '月' + ri + "日 " +
            shi + ':' + feng + ":" + miao + " " + v + " " + xingqis;
    }
    setInterval("time()", 1000);    
</script>

@endsection