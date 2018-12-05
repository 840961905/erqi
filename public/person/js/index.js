$(function(){
  $('#header_navviga_1').mouseenter(function(){
    $('#buoy').animate({
      'left':'0px'
    },500);
  });
  $('#header_navviga_2').mouseenter(function(){
    $('#buoy').animate({
      'left':'100px'
    },500);
  });
  $('#header_navviga_3').mouseenter(function(){
    $('#buoy').animate({
      'left':'200px'
    },500);
  });
  $('#header_navviga_4').mouseenter(function(){
    $('#buoy').animate({
      'left':'300px'
    },500);
  });
  $('#navviga').mouseleave(function(){
    $('#buoy').animate({
      'left':'-100px'
    },500);
  });

  // 搜索框
  function id(id){
    return document.getElementById(id);
  }
  id('SimpleSearchForm_SearchTerm').onfocus=function(){
    this.value='';
  };
  id('SimpleSearchForm_SearchTerm').onblur=function(){
    this.value=this.value?this.value:'格力空调 玫瑰'
  };

  // 左右浮动和回到顶部
  $(window).scroll(function(){
    st=$(window).scrollTop();
    if(st>=500){
      $('.left_nav').show();
    }else{
      $('.left_nav').hide();
    }
  });
  $(window).scroll(function(){
    st=$(window).scrollTop();
    if(st>=500){
      $('.float').show();
    }else{
      $('.float').hide();
    }
  });


  $(window).scroll(function(){
    st=$(window).scrollTop();
    if(st>=500){
      $('.toTop').show();
    }else{
      $('.toTop').hide();
    }
  });
  $('.toTop').click(function(){
    sh=$(window).scrollTop();
    v=10;
    sobj=setInterval(function(){
      sh-=v;

      if(sh<=0){
        sh=0;
        clearInterval(sobj);
      }
      $(window).scrollTop(sh);
    },20);
  });
  // 右浮动条
  $('.an_1').mouseenter(function(){
    $(this).css({'background-position':'-111px 0'});
  });
  $('.an_1').mouseleave(function(){
    $(this).css({'background-position':'-000px 0'});
  });

  $('.an_2').mouseenter(function(){
    $(this).css({'background-position':'-333px 0'});
  });
  $('.an_2').mouseleave(function(){
    $(this).css({'background-position':'-222px 0'});
  });

  $('.an_3').mouseenter(function(){
    $(this).css({'background-position':'-555px 0'});
  });
  $('.an_3').mouseleave(function(){
    $(this).css({'background-position':'-444px 0'});
  });

  $('.an_4').mouseenter(function(){
    $(this).css({'background-position':'-777px 0'});
  });
  $('.an_4').mouseleave(function(){
    $(this).css({'background-position':'-666px 0'});
  });

  $('.an_5').mouseenter(function(){
    $(this).css({'background-position':'-999px 0'});
  });
  $('.an_5').mouseleave(function(){
    $(this).css({'background-position':'-888px 0'});
  });

  $('.an_6').mouseenter(function(){
    $(this).css({'background-position':'-1221px 0'});
  });
  $('.an_6').mouseleave(function(){
    $(this).css({'background-position':'-1110px 0'});
  });

  $('.an_7').mouseenter(function(){
    $(this).css({'background-position':'-1443px 0'});
  });
  $('.an_7').mouseleave(function(){
    $(this).css({'background-position':'-1332px 0'});
  });

  $('.an_8').mouseenter(function(){
    $(this).css({'background-position':'-1665px 0'});
  });
  $('.an_8').mouseleave(function(){
    $(this).css({'background-position':'-1554px 0'});
  });

  $('.an_10').mouseenter(function(){
    $(this).css({'background-position':'-2109px 0'});
  });
  $('.an_10').mouseleave(function(){
    $(this).css({'background-position':'-1998px 0'});
  });


  $('.title').mouseenter(function(){
    $(this).css({'color':'#f00'});
  });
  $('.title').mouseleave(function(){
    $(this).css({'color':''});
  });

  // 点击标题切换内容
  $('.xiangQing').hide();
  $('.xiangQing').eq(0).show();
  $('.ProTabTitle  li').click(function(){
    $('.xiangQing').hide();

    idx=$(this).index('.ProTabTitle  li');
    $('.xiangQing').eq(idx).show();
  });


  // 点击标题换标题样式
  $('.ProTabTitle  li').click(function(){
  $(this).addClass('hit');
  $('.ProTabTitle  li').not($(this)).removeClass('hit');
  });

  $(".ProTabTitle  li:first").addClass("hit");

  // 幻灯片下面的切换栏
  $('.paging a').click(function(){
  $(this).addClass('active');
  $('.paging a').not($(this)).removeClass('active');
  });

  $(".paging a").show();
  $(".paging a:first").addClass("active");

  var imageWidth = $(".window").width();
  var imageSum=$(".image_reel img").size();
  var imageReelWidth=imageWidth * imageSum;

  $(".image_reel").css({'width':imageReelWidth});
  // 第二步
  rotate = function(){
    var triggerID = $active.attr("rel") - 1;
    var image_reelPosition = triggerID * imageWidth;

    $(".paging a").removeClass('active');
    $active.addClass('active');
    $(".image_reel").animate({
      left:-image_reelPosition
    },500);
  };

  rotateSwitch = function(){
    play = setInterval(function(){
      $active = $('.paging a.active').next();
      if( $active.length === 0){
        $active = $('.paging a:first');
      }
      rotate();
    },2000);
  };

  rotateSwitch();
  // // 第三步
  $(".image_reel a").hover(function(){
    clearInterval(play);
  },function(){
    rotateSwitch();
  });

  $(".paging a").click(function(){
    $active=$(this);
    clearInterval(play);
    rotate();
    rotateSwitch();
    return false;
  });


  // a链接划入划出
  // $('a').mouseenter(function(){
  //   $(this).css({'color':'#c00'});
  // });
  // $('a').mouseleave(function(){
  //   $(this).css({'color':''});
  // });



  // 手机商城和全部商品分类隐藏与显示
  $('.hd_mobile').mouseenter(function(){
    $(this).css({'background':'#fff'});
    $(this).find('.hd_mobile_show').show();
  });
  $('.hd_mobile').mouseleave(function(){
    $(this).css({'background':'#f5f5f5'});
    $(this).find('.hd_mobile_show').hide();
  });

  $('.fenLei').mouseenter(function(){
    $(this).find('.categorysCon').show();
  });
  $('.fenLei').mouseleave(function(){
    $(this).find('.categorysCon').hide();
  });

  $('.shuoMingShu').mouseenter(function(){
    $(this).find('.shuoming').show();
  });
  $('.shuoMingShu').mouseleave(function(){
    $(this).find('.shuoming').hide();
  });



  // 个人中心我的订单
  $('#first').mouseenter(function(){
    $('#magic-line').animate({
      'left':'0px'
    },500);
  });
  $('#second').mouseenter(function(){
    $('#magic-line').animate({
      'left':'109px'
    },500);
  });
  $('#third').mouseenter(function(){
    $('#magic-line').animate({
      'left':'218px'
    },500);
  });
  $('#forth').mouseenter(function(){
    $('#magic-line').animate({
      'left':'327px'
    },500);
  });
  $('#fifth').mouseenter(function(){
    $('#magic-line').animate({
      'left':'436px'
    },500);
  });
  $('.group').mouseleave(function(){
    $('#magic-line').animate({
      'left':'0px'
    },500);
  });

});

  // 放大镜
  // 1 当鼠标在小图上移动时，move  和  big 这两个区域显示
  $('#small').mousemove(function(e) {
      $('#move').show();
      $('#big').show();

      // 鼠标的坐标
      var mx = e.pageX;
      var my = e.pageY;

      // 2 设置鼠标的合理移动范围
      var sl = $('#small').offset().left; //计算small距离页面左边的距离
      var st = $('#small').offset().top; //计算small距离页面左边的距离

      var mw = $('#move').width() / 2; //move宽度的一半
      var mh = $('#move').height() / 2; //move 高度的一半

      var newLeft = mx - sl - mw;
      var newTop = my - st - mh;


      var minleft = 0;
      var maxleft = $('#small').width() - $('#move').width();
      var mintop = 0;
      var maxtop = $('#small').height() - $('#move').height();

      if (newLeft < minleft) {
          newLeft = 0;
      }

      if (newLeft > maxleft) {
          newLeft = maxleft;
      }

      if (newTop < mintop) {
          newTop = 0;
      }

      if (newTop > maxtop) {
          newTop = maxtop;
      }

      // 3 控制蒙版层跟着鼠标移动
      $('#move').css('left', newLeft + 'px').css('top', newTop + 'px');


      // 4 让大图随着蒙版层的移动而移动
      var sw = $('#small').width();
      var bw = $('#bigPic').width();
      var sh = $('#small').height();
      var bh = $('#bigPic').height();



      var x = bw * newLeft / sw;
      var y = bh * newTop / sh;

      $('#bigPic').css('left', -x + 'px').css('top', -y + 'px');



  })

  $('#small').mouseout(function() {
      $('#move').hide();
      $('#big').hide();
  })


  $('#spec-list img').each(function() {
      $(this).click(function() {
          var s = $(this).attr('src');
          // 赋值给大图和small中的图片
          $('#bigPic').attr('src', s);
          $('.zoomPad img').attr('src', s);
          $('.zoomPad img').css({'width':'400px','height':'400px'});

      });
  });


  // 弹出框
  function showdiv() {
      document.getElementById("bj").style.display = "block";
      document.getElementById("addSuccess").style.display = "block";
  }

  function hidediv() {
      document.getElementById("bj").style.display = 'none';
      document.getElementById("addSuccess").style.display = 'none';
  }


  // 取消订单弹出框
  function showcancel() {
      document.getElementById("bJ").style.display = "block";
      document.getElementById("topBox").style.display = "block";
  }

  function closePrompt() {
      document.getElementById("bJ").style.display = 'none';
      document.getElementById("topBox").style.display = 'none';
  }


$(function () { //调用插件
            $.fn.citySelect();
        });
        $(function () {
            form1 = $('form[name=form1]'),
            prev = $('input[name=cho_Province]', form1),
            city = $('input[name=cho_City]', form1),
            area = $('input[name=cho_Area]', form1),
            value = ['请选择省份', '请选择城市', '请选择地区'];
            form1.submit(function () {
                if (prev.val() == value[0]) {
                    alert(value[0]);
                    return false;
                };
                if (city.val() == value[1]) {
                    alert(value[1]);
                    return false;
                };
                if (area.val() == value[2]) {
                    alert(value[2]);
                    return false;
                }
            });
        });



        $('.newAddressBtn').click(function(){
          $('.addressinfoaddoredit').show();
        });