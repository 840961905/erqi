@extends('home.person.info.index')

@section('title',$title)


@section('content')
	<!-- 中间部分 -->
<form id="forms" action="/home/person/dochangeimg" method="post" enctype="multipart/form-data">
	<div class="wp">
		<div class="pannel account-panel">
			<div class="ptitle2 account_column">修改头像</div>
		    <div class="uc-account-des">用于个人信息。如有更换，请及时更新。</div>
            <div class="line" style="padding:0 20%">
				<p class="title" style="margin-top: 20px">头像</p>
            	<div class="dinput-UI5" style="display:block;margin-bottom:10px;margin-top:10px;width: 100px;float:left;" id="forumnicknameBox">
            		<img class="pic house-a" onclick="houseImgOne(this)" name="house_img_one" id="house_img_one" src="{{session('img')}}" width="100px" height="100px">
                        <input type="file" name="img" id="house_img_one1"  multiple="multiple" style="display:none;">
            	</div>
            </div>
            <div style="clear: both;"></div>
            <div class="line" style="padding:0 20%">
            	<input style="" id="but" type="submit" class="btn" value="提交">
            </div>
		</div>
	</div>
      {{csrf_field()}}
</form>
@endsection

@section('script')
<script>
    var _btnId = '';
    function houseImgOne(_this){
        _btnId = $(_this).attr('id');
        $('#house_img_one1').click();
        $("#house_img_one1").change(function () {
            var objUrl = getObjectURL(this.files[0]); //获取图片的路径，该路径不是图片在本地的路径
            if (objUrl) {
                $("#" + _btnId).attr("src", objUrl); //将图片路径存入src中，显示出图片ai
            }
        });
    }
    //建立一个可存取到该file的url
    function getObjectURL(file) {
        var url = null;
        if (window.createObjectURL != undefined) { 
            url = window.createObjectURL(file);
        } else if (window.URL != undefined) { 
            url = window.URL.createObjectURL(file);
        } else if (window.webkitURL != undefined) { 
            url = window.webkitURL.createObjectURL(file);
        }
        return url;
    }

</script>
@endsection