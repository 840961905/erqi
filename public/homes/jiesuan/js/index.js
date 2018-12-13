$(function(){
// top头上的
	// 个人小图片的移入移出效果
		
		$('#meizu-header-user').mouseenter(function(){
			$('#meizu-header-user-box').show();
			$('.meizu-header-user-dropdown').show();
		})
		$('#meizu-header-user').mouseleave(function(){
			$('#meizu-header-user-box').hide();
			$('.meizu-header-user-dropdown').hide();
		})
	
	// 鼠标移出目录

		// 显示
			$('#meizu-header-link li').mouseenter(function(){
				$('.meizu-header-sub').removeClass('meizu-header-sub-animation meizu-header-sub-show');
				$('.meizu-header-container').removeClass('toggle');
			})
			$('.meizu-header-link-product').mouseenter(function(){
				a=$(this).index();
				$('.meizu-header-sub').removeClass('meizu-header-sub-animation meizu-header-sub-show');
				$('.meizu-header-container').removeClass('toggle');
				$('.meizu-header-container').addClass('toggle');
				$('.meizu-header-sub').eq(a).addClass('meizu-header-sub-animation meizu-header-sub-show');
			})
		// 隐藏
			$('#meizu-header-container').mouseleave(function(){
				$('.meizu-header-container').removeClass('toggle');
				$('.meizu-header-sub').removeClass('meizu-header-sub-animation meizu-header-sub-show');
			})
	// 鼠标移出目录结束
	
// 头上的

	// 微信小图标网页底部
	$('.footer #iiWx').hover(
		function(){
		$('.footer #weixinimg').show();
	},function(){
		$('.footer #weixinimg').hide();
	}
	)
	// 底部中英切换footer2
	$('.footerLanguage').hover(
		function(){
			$('.footerLanguageMenu').show();
		},function(){
			$('.footerLanguageMenu').hide();
		})
	// 底部微信footer2
	$('.footerweChat').hover(
		function(){
			$('.wechatPic').show();
		},function(){
			$('.wechatPic').hide();
		})





	// 登录注册页面的js
	// 手机号密码验证码获得焦点的状态
	$('.inpFocus').focus(function(){
		$(this).parent().parent().css({"border":"1px solid #32a5e7"})
	})
	$('.inpFocus').blur(function(){
		$(this).parent().parent().css({"border":"1px solid #dadada"})
	})

	// 注册页面的记住登录状态
	mzchkbox=0;

	$('.mzchkbox').click(function(){
		if(mzchkbox==0){
			$('.checkboxPic').attr({"class":"checkboxPic check_chk"})
			// 选中  修改checked的值prop方法
			$('#remember').prop({checked:true})
			mzchkbox=1;
		
		}else{
			$('.checkboxPic').attr({"class":"checkboxPic check_unchk"})
			$('#remember').prop({checked:false})
			mzchkbox=0;
		}
	})
	// 切换扫码登录和帐号登录的小图标
	qrBtn=0;
	$('.AccountLogin').show();
	$('.AuthenticationLogin').hide();
	$('#qrBtn').click(function(){
		if(qrBtn==0){
			$(this).attr({"class":"qrBtn pcBtn"});
			$('#qrPanel').show()
			qrBtn=1;
		}else{
			$(this).attr({"class":"qrBtn"});
			$('#qrPanel').hide();
			qrBtn=0;
		}
	})
	// 帐号登录和验证码登录切换
		$('#toAccountLogin').click(function(){
			$('.AccountLogin').show()
			$('.AuthenticationLogin').hide();
			$(this).attr({"class":"linkABlue"});
			$('.linkABlue').not($(this)).attr({"class":"linkAGray"});

		})
		$('#toVCodeLogin').click(function(){
			$('.AccountLogin').hide()
			$('.AuthenticationLogin').show();
			$(this).attr({"class":"linkABlue"});
			$('.linkABlue').not($(this)).attr({"class":"linkAGray"});
		})
	// 帐号登录和验证码登录切换结束
	// shop头部的js
		// 购物车小表的js
		
		$('#shopHeaderUser').mouseover(
			function(){$('.shopUserDownmenu').css({'top':'60px','left':'-20px'}).attr({"class":"shopUserDownmenu shopUserDownmenuShow"}) 
			}
		);
		$('#shopHeaderUser').mouseleave(
			function(){$('.shopUserDownmenu').attr({"class":"shopUserDownmenu"})
			// $('.store-cart').attr('class','store-cart');
			}
		);
		// 魅族手机魅蓝手机 魅族声学 智能配件的移入移出效果
		$(".showHeaderNavItem:gt(0):lt(5)").mouseover(function(){
			$(this).attr({'class':'showHeaderNavItem active'})
			$('#shopHeaderNavDownmenu').attr({'class':'shopHeaderNavDownmenu active'})
		})
		$(".showHeaderNavItem").mouseover(function(){
			$(this).attr({'class':'showHeaderNavItem active'})
		})
		$(".showHeaderNavItem").mouseleave(function(){
			$(this).attr({'class':'showHeaderNavItem'})
			$('#shopHeaderNavDownmenu').attr({'class':'shopHeaderNavDownmenu'})
		})
		// 切换手机栏目子菜单的特效
		$('.shopHeaderNavChildItem').mouseenter(function(){
			$('.shopHeadeNavChildList').attr({'class':'shopHeadeNavChildList active'})
		})
		$('.shopHeaderNavChildItem').mouseleave(function(){
			$('.shopHeadeNavChildList').attr({'class':'shopHeadeNavChildList'})
		})

	// shop头部的js结束
	// shop幻灯片
	// 必需品    修改幻灯片的所需要的值
	$('.contentCarouselChild').css({'background-color':'rgb(255, 255, 255)','width':'1349px','left':'0px','top':'0px','z-index':'998','opacity':'0','transition':'opacity 500ms linear','position':'relative'})
	// 修改幻灯片的位置
	$('.homeCarouselImg').css({'width':'1920px','margin-left':'-960px','opacity':'1'})
	// 调用商品幻灯片函数
	shop();
	// 设置幻灯片函数
	function shop(){
		// 当浏览器窗口发生变化时
		$(window).resize(function(){
			// 清除定时器
			clearInterval(timer)
			// 调用商品幻灯片函数
			shop();
		})
		
		clentW=document.body.clientWidth;
		clentWs=$('.slickTrack .contentCarouselChild').length*clentW;
		$('.slickTrack').css({'opacity':'1','width':+clentWs+'px'})
		// 设置每次加减的值
		fixation=-clentW;
		x=0;
		
		 // 调用函数fixeds 当x=多少时执行什么
		fixeds();
		// 调用timers函数定时器
		timers();
		// 调用点击函数
		clicks();
		// 调用鼠标放上去函数
		mouse();
		function shopwidth(){
			// 循环一次加一下
			x+=fixation;
			// 循环1次
			for(i=0;i<1;i++){
				if(x<fixation*4){
					x=0;
				}
			}
			// 调用点击函数
			clicks()
			// 调用鼠标放上去函数
			mouse()
			// 调用固定函数
			fixeds();
		}
		function clicks(){
				// 当鼠标点击两侧按钮
				$('.slickArrow.slickPrev').click(function(){
					// 上一个
					x-=fixation;
					if(x>0){
						x=fixation*4
					}else if(x<fixation*4){
						x=0;
					}
					// 清除定时器
					clearInterval(timer);
					// 调用timers函数定时器
					timers();
					// 调用函数fixeds 当x=多少时执行什么
					fixeds();
					
					
					
				})
				$('.slickArrow.slickNext').click(function(){
					// 下一个
					x+=fixation;
					if(x<fixation*4){
						x=0;
					}else if(x>0){
						x=fixation*4
					}
					// 清除定时器
					clearInterval(timer);
					// 调用timers函数定时器
					timers();
					// 调用函数fixeds 当x=多少时执行什么
					fixeds();
					
				})
			}
		function mouse(){
			// 当鼠标放上去执行  下面的小点点
			$('.contentCarousel ul.slickDots li').mouseenter(function(){
				// 清除定时器
				clearInterval(timer);
				// 调用timers函数定时器
				timers();
				// 调用函数fixeds 当x=多少时执行什么
				fixeds();
			})
			$('.contentCarousel ul.slickDots li').eq(0).mouseenter(function(){
				x=0;
			})
			$('.contentCarousel ul.slickDots li').eq(1).mouseenter(function(){
				x=-clentW*1;
			})
			$('.contentCarousel ul.slickDots li').eq(2).mouseenter(function(){
				x=-clentW*2;
			})
			$('.contentCarousel ul.slickDots li').eq(3).mouseenter(function(){
				x=-clentW*3;
			})
			$('.contentCarousel ul.slickDots li').eq(4).mouseenter(function(){
				x=-clentW*4;
			})	
			$('.contentCarousel ul.slickDots li').eq(5).mouseenter(function(){
				x=-clentW*5;
			})
		}
	
		// 设置幻灯片元素固定值 
		function fixeds(){
				switch(x){
				case 0:
					$('.contentCarouselChild').css({'opacity':'0','width':+clentW+'px','z-index':'998'})
					$('.contentCarouselChild.slickSlide').eq(0).css({'width':+clentW+'px','top':'0','left':'0px','opacity':'1','z-index':'999'});
					$('.slickActive').attr({'class':''})
					$('.contentCarousel ul.slickDots li').eq(0).attr({'class':'slickActive'})
					x=0;
				break;
				case -clentW*1:
					$('.contentCarouselChild').css({'opacity':'0','width':+clentW+'px','z-index':'998'})
					$('.contentCarouselChild.slickSlide').eq(1).css({'width':+clentW+'px','top':'0','left':+-clentW+'px','opacity':'1','z-index':'999'});
					$('.slickActive').attr({'class':''})
					$('.contentCarousel ul.slickDots li').eq(1).attr({'class':'slickActive'})
					x=-clentW*1;
				break;
				case -clentW*2:
					$('.contentCarouselChild').css({'opacity':'0','width':+clentW+'px','z-index':'998'})
					$('.contentCarouselChild.slickSlide').eq(2).css({'width':+clentW+'px','top':'0','left':+-clentW*2+'px','opacity':'1','z-index':'999'});
					$('.slickActive').attr({'class':''})
					$('.contentCarousel ul.slickDots li').eq(2).attr({'class':'slickActive'})
					x=-clentW*2;
				break;
				case -clentW*3:
					
					$('.contentCarouselChild').css({'opacity':'0','width':+clentW+'px','z-index':'998'})
					$('.contentCarouselChild.slickSlide').eq(3).css({'width':+clentW+'px','top':'0','left':+-clentW*3+'px','opacity':'1','z-index':'999'})
					$('.slickActive').attr({'class':''})
					$('.contentCarousel ul.slickDots li').eq(3).attr({'class':'slickActive'})
					x=-clentW*3;
				break;
				case -clentW*4:
					
					$('.contentCarouselChild').css({'opacity':'0','width':+clentW+'px','z-index':'998'})
					$('.contentCarouselChild.slickSlide').eq(4).css({'width':+clentW+'px','top':'0','left':+-clentW*4+'px','opacity':'1','z-index':'999'})
					$('.slickActive').attr({'class':''})
					$('.contentCarousel ul.slickDots li').eq(4).attr({'class':'slickActive'})
					x=-clentW*4;
				break;
				case -clentW*5:
					
					$('.contentCarouselChild').css({'opacity':'0','width':+clentW+'px','z-index':'998'})
					$('.contentCarouselChild.slickSlide').eq(5).css({'width':+clentW+'px','top':'0','left':+-clentW*5+'px','opacity':'1','z-index':'999'})
					$('.slickActive').attr({'class':''})
					$('.contentCarousel ul.slickDots li').eq(5).attr({'class':'slickActive'})
					x=-clentW*5;
				break;
				}
				return;
			}
			// 设置定时器函数
		function timers(){
			// 定时器  2秒执行一下
			timer=setInterval(function(){shopwidth()},5000)}
		}
	// shop幻灯片结束
	// 左侧导航
		$('.homeCategoryItem').mouseenter(function(){
			$(this).find('.homeCategoryChild').show();
			$(this).attr({'class':'homeCategoryItem homeCategoryItemHover'})
		})
		$('.homeCategoryItem').mouseleave(function(){
			$(this).find('.homeCategoryChild').hide();
			$(this).attr({'class':'homeCategoryItem'})
		})
	// 左侧导航结束
	// 热品推荐
		shoprepin();
		function shoprepin(){
		// 调用时间函数
		shoptimer();
		// 随便定义一个变量
			y=1;
		// 把点击的上箭头弄成灰色
			$('#homeHotCtrlPrev').attr({'class':'homeHotCtrlBtn disabled'})
			// 定义函数	
			function shopre(){
				// 等于0的话
				if(y==0){
					// 调用函数prev1
					prev1()
					// 把1赋值给y
					y=1;	
					// 不等于0的话
				}else if(y!==0){
					// 调用下函数next1()
					next1()
					y=0;
				}
			}
			// 定义函数prev1()
			function prev1(){
				// 上一个和下一个按钮css改变
				$('.homeHotCtrlBtn').attr({'class':'homeHotCtrlBtn'})
				// 上一个和下一个按钮css改变
				$('#homeHotCtrlPrev').attr({'class':'homeHotCtrlBtn disabled'})
				// 位置改变
				$('.homeHotList').css({'left':'0px'})
			}
			function next1(){
				$('.homeHotCtrlBtn').attr({'class':'homeHotCtrlBtn'})
				$('#homeHotCtrlNext').attr({'class':'homeHotCtrlBtn disabled'})
				$('.homeHotList').css({'left':'-1240px'})
			}
				// 点击事件
				$('.homeFont.prev1').click(function(){
					// 清除定时器
					clearInterval(timerss)
					// 调用上一个函数  prev1()
					prev1();	
					// 给y赋值1
					y=1;
					// 调用时间函数
					shoptimer()
				})
				$('.homeFont.next1').click(function(){
					clearInterval(timerss)
					next1();
					y=0;
					shoptimer()
				})
				// 定义定时器时间函数
			function shoptimer(){

				timerss=setInterval(function(){
					shopre()
				},5000)
			}
		}
		// 手机周边 三个分类的js
		$('.homeFloorItem:last').find('.homeFloorNavLink').eq(0).addClass('active');
		$('.homeFloorItem:last').eq(0).addClass('active');
		$('.homeFloorItem:last').find('.homeFloorProduct').eq(0).addClass('active')
		$('.homeFloorItem:last').find('.homeFloorNavLink').eq(0).mouseenter(function(){
			$('.homeFloorItem:last').find('.homeFloorNavLink').removeClass('active')
			$('.homeFloorItem:last').find('.homeFloorProduct').removeClass('active')
			$(this).addClass('active')
			$('.homeFloorItem:last').find('.homeFloorProduct').eq(0).addClass('active')
		})
		$('.homeFloorItem:last').find('.homeFloorNavLink').eq(1).mouseenter(function(){
			$('.homeFloorItem:last').find('.homeFloorNavLink').removeClass('active')
			$('.homeFloorItem:last').find('.homeFloorProduct').removeClass('active')
			$(this).addClass('active')
			$('.homeFloorItem:last').find('.homeFloorProduct').eq(1).addClass('active')
		})
		$('.homeFloorItem:last').find('.homeFloorNavLink').eq(2).mouseenter(function(){
			$('.homeFloorItem:last').find('.homeFloorNavLink').removeClass('active')
			$('.homeFloorItem:last').find('.homeFloorProduct').removeClass('active')
			$(this).addClass('active')
			$('.homeFloorItem:last').find('.homeFloorProduct').eq(2).addClass('active')
		})
	// 热品推荐结束
	// 回到顶部
		// 当屏幕滚动时
		$(window).scroll(function(){
			// 得到屏幕的位置
			st=$(window).scrollTop();
			// 大于300的话
			if(st<=300){
				// 显示
				$('.shopMagnet').removeClass('shopMagnetShow');
			}else{
				// 隐藏
				$('.shopMagnet').addClass('shopMagnetShow');
			}
		})
		$('.shopMagnetItemTop').click(function(){
				roll=50
			// 定义定时器向上滚动
			timertop=setInterval(function(){
				$(window).scrollTop(st);
				// 得到现在的高度
				// 每秒减去roll
				st-=roll;
				// 如果小于0
				if(st<0){
					// 清除定时器
				clearInterval(timertop)
			}
			},10)	
		})
	// 回到顶部结束
	// shopBrand特效
		// 鼠标放上和离开shopBrand的商品
		$('.goodsListWrap .glItem').hover(function(){
			$(this).find('.compareBtnList').css({'display':'block'})
		},function(){
			$(this).find('.compareBtnList').css({'display':'none'})
		})
		// 点击小图片换图
		$('.goodsListWrap .glItem').find('.itemSlide dl dd').click(function(){
				$('.goodsListWrap .glItem .itemSlide dl dd').removeAttr('class');
				$(this).attr({'class':'active'})
				yuansrc=$(this).find('img').attr('src')
				$(this).parent().parent().prev().find('img').attr({'src':yuansrc})
		})
		
		
	// shopBrand特效结束
	// details页面开始
		// details页面的固定上方条条开始  加回到顶部
			$(document).scroll(function(){
				detailsfixed=$(document).scrollTop(); //浏览器当前窗口可视区域高度
				// document.title=detailsfixed;
				if(detailsfixed>300){
					$('#detailFast').addClass('fixed');
					$('.siteGotop').show()
					
				}else{
					$('#detailFast').removeClass('fixed');
					$('.siteGotop').hide();
				}
				if(detailsfixed>800){
					$('#detailFast').addClass('floatButton');
				}else{
					$('#detailFast').removeClass('floatButton');
				}
				if(detailsfixed<1100){
					$('#detailFast').removeClass('floatNav');
				}else{
					$('#detailFast').addClass('floatNav');
				}
			})
		// 回到顶部开始
			$('#siteGotop .gotopArrow').click(function(){
				fixedmin=50;
				timesrr=setInterval(function(){
					$(document).scrollTop(detailsfixed);
					detailsfixed-=fixedmin;
					// document.title=detailsfixed;
					if(detailsfixed<-50){
						// 清除定时器
					clearInterval(timesrr)
					}
				},5)
				
			})
			
		// 回到顶部结束
			
		// details页面的固定上方条条结束
			
			// $('#detailFast ul li').eq(0).click(function(){
			// 	$('.detailTab ul li').removeClass('current')
			// 	$('.detailTab ul li').eq(0).addClass('current');
			// 	$(".detailContent ").children().hide();
			// 	$(".detailContent #introduce").show();
			// 	$('#detailTabFixed ul li').eq(0).addClass('current')
				
			// })
			// $('#detailFast ul li').eq(1).click(function(){
			// 	$('.detailTab ul li').removeClass('current')
			// 	$('.detailTab ul li').eq(1).addClass('current');
			// 	$(".detailContent ").children().hide();
			// 	$(".detailContent #standard").show();
			// 	$('#detailTabFixed ul li').eq(1).addClass('current')
			// })
			// $('#detailFast ul li').eq(2).click(function(){
			// 	$('.detailTab ul li').removeClass('current')
			// 	$('.detailTab ul li').eq(2).addClass('current');
			// 	$(".detailContent ").children().hide();
			// 	$(".detailContent #question").show();
			// 	$('#detailTabFixed ul li').eq(2).addClass('current')
			// })

			// $('#detailTabFixed ul li').eq(0).click(function(){
			// 	$('.detailTab ul li').removeClass('current')
			// 	$('.detailTab ul li').eq(0).addClass('current');
			// 	$(".detailContent ").children().hide();
			// 	$(".detailContent #introduce").show();
			// 	$('#detailTabFixed ul li').eq(0).addClass('current')
			// })
			// $('#detailTabFixed ul li').eq(1).click(function(){
			// 	$('.detailTab ul li').removeClass('current')
			// 	$('.detailTab ul li').eq(1).addClass('current');
			// 	$(".detailContent").children().hide();
			// 	$(".detailContent #standard").show();
			// 	$('#detailTabFixed ul li').eq(1).addClass('current')
			// })
			// $('#detailTabFixed ul li').eq(2).click(function(){
			// 	$('.detailTab ul li').removeClass('current')
			// 	$('.detailTab ul li').eq(2).addClass('current');
			// 	$(".detailContent").children().hide();
			// 	$(".detailContent #question").show();
			// 	$('#detailTabFixed ul li').eq(2).addClass('current')
			// })
		
		

	// shopdetails页面结束
	// carty页面
			$('.layoutMember.signin').mouseenter(function(){
				$(this).find('.layoutMemberDownmenu').show();
			})
		<!--
			// 固定窗口  会卡顿
			$(document).ready(function(){
				function footerPosition(){
					contentHeight=$(window).height(),
					cart=$('.cart .cart').height();
					layoutHeader=$('.layoutHeader').height()
					winHeight=parseInt(cart+layoutHeader);
						
					if(contentHeight<winHeight){
						$('.cartFooter').addClass('fixed');
					}else if(contentHeight>=winHeight){
						$('.cartFooter').removeClass('fixed');
					}
					
				}
					footerPosition();
					$(window).resize(function(){
						footerPosition();
					});
				})
			-->
		
	// cart页面结束
	// ordercenteradd页面	
		// 修改订单页面的头头header
			$('.cart.order').find('.layoutHeaderBreadBlock').removeClass('active')
			$('.cart.order').find('.layoutHeaderBreadBlock').eq(1).addClass('active');
		// 修改订单页面的头头header结束
		// 银行名称
			$('.orderTotalPayBanksDetail').find('th').eq(0).css({'width':'150px'})
			$('.orderTotalPayBanksDetail').find('th').eq(1).css({'width':'400px'})
			$('.orderTotalPayBanksDetail').find('th').eq(2).css({'width':'140px'})
			$('.orderTotalPayBanksDetail').find('th').eq(3).css({'width':'140px'})
			$('.orderTotalPayBanksDetail').find('td').eq(0).css({'width':'150px'})
			$('.orderTotalPayBanksDetail').find('td').eq(1).css({'width':'400px'})
			$('.orderTotalPayBanksDetail').find('td').eq(2).css({'width':'140px'})
			$('.orderTotalPayBanksDetail').find('td').eq(3).css({'width':'140px'})
		// 银行名称结束
		// 点击添加新地址添加地址
		




			
		// 点击添加新地址添加地址结束
		// 点击收货人姓名input 错误
		 s=0

		$('.addressAdderName').blur(function(){
			namevalue=this.value;
			if(namevalue==''){
				$(this).parent().addClass('tips')
				s=1;
			}else{
				$(this).parent().removeClass('tips');
				s=0
			}
		})


		$('.addressAdderPhone').blur(function(){

			Phonevalue=this.value;
			pipei=/^1\d{10}$/;
			if(pipei.test(Phonevalue)==false){
				$(this).parent().addClass('tips');
				s=1;
			}else{
				$(this).parent().removeClass('tips');
				s=0;
				
			}

		})
	// ordercenteradd页面	
		// 修改订单页面的头头header
			$('.cart.order').find('.layoutHeaderBreadBlock').removeClass('active')
			$('.cart.order').find('.layoutHeaderBreadBlock').eq(1).addClass('active');
		// 修改订单页面的头头header结束
		// 银行名称
			$('.orderTotalPayBanksDetail').find('th').eq(0).css({'width':'150px'})
			$('.orderTotalPayBanksDetail').find('th').eq(1).css({'width':'400px'})
			$('.orderTotalPayBanksDetail').find('th').eq(2).css({'width':'140px'})
			$('.orderTotalPayBanksDetail').find('th').eq(3).css({'width':'140px'})
			$('.orderTotalPayBanksDetail').find('td').eq(0).css({'width':'150px'})
			$('.orderTotalPayBanksDetail').find('td').eq(1).css({'width':'400px'})
			$('.orderTotalPayBanksDetail').find('td').eq(2).css({'width':'140px'})
			$('.orderTotalPayBanksDetail').find('td').eq(3).css({'width':'140px'})
		// 银行名称结束
		// 点击添加新地址添加地址
			$('.orderAddressCheckbox.add').click(function(){
				$('.mzMask').eq(0).removeClass('hide')
			})
			// // 点击确认保存地址
			// 	$('.mzBtn.success').click(function(){
			// 		$('.mzMask').addClass('hide');
			// 	})
			// // 点击确认保存地址结束
			// 点击×号
				$('.mzDialogClose').click(function(){
					$('.mzMask').addClass('hide');
				})
			// 点击×号结束
			// 点击取消
				$('.mzBtn.cancel').click(function(){
					$('.mzMask').addClass('hide');
				})
			// 点击取消结束
		// 点击添加新地址添加地址结束
		// 点击收货人姓名input 错误
		 	s=0
				$('.addressAdderName').blur(function(){
					namevalue=this.value;
					if(namevalue==''){
						$(this).parent().addClass('tips')
						s=1;
					}else{
						$(this).parent().removeClass('tips');
						s=0
					}
				})
				$('.addressAdderPhone').blur(function(){

					Phonevalue=this.value;
					pipei=/^1\d{10}$/;
					if(pipei.test(Phonevalue)==false){
						$(this).parent().addClass('tips');
						s=1;
					}else{
						$(this).parent().removeClass('tips');
						s=0;
					}
				})
				$('.addressAdderDetail').blur(function(){
					Detailvalue=this.value;
					if(Detailvalue==''){
						$(this).parent().addClass('tips')
					}
				})

		// 点击收货人姓名input 错误结束
		// 点击发票修改
			$('.orderProductInvoiceEdit').click(function(){
				$('.mzMask').eq(1).removeClass('hide')
			})
		// 点击发票修改结束
		// 选择支付方式
			$('.orderTotalPayRadio').click(function(){
				$('.orderTotalPayRadio').parent().removeClass('active')
				$(this).parent().addClass('active')
			})
			$('.orderTotalPayRadio').eq(0).click(function(){
				$('.orderTotalPayHuabei.active').show();
			})
			$('.orderTotalPayRadio:not(:eq(0))').click(function(){
				$('.orderTotalPayHuabei.active').hide()
			})
			$('.orderTotalPayRow.clearfix').eq(2).find('.orderTotalPayRadio').click(function(){
				$('.orderTotalPayBanksDetail').show()
			})
		// 选择支付方式
	// ordercenteradd页面结束
			$('.addressAdderDetail').blur(function(){
				Detailvalue=this.value;
				if(Detailvalue==''){
					$(this).parent().addClass('tips')
				}
			})

		// 点击收货人姓名input 错误结束
		// 点击发票修改
			$('.orderProductInvoiceEdit').click(function(){
				$('.mzMask').eq(1).removeClass('hide')
			})
		// 点击发票修改结束
		// 选择支付方式
			$('.orderTotalPayRadio').click(function(){
				$('.orderTotalPayRadio').parent().removeClass('active')
				$(this).parent().addClass('active')
			})
			$('.orderTotalPayRadio').eq(0).click(function(){
				$('.orderTotalPayHuabei.active').show();
			})
			$('.orderTotalPayRadio:not(:eq(0))').click(function(){
				$('.orderTotalPayHuabei.active').hide()
			})
			$('.orderTotalPayRow.clearfix').eq(2).find('.orderTotalPayRadio').click(function(){
				$('.orderTotalPayBanksDetail').show()
			})
		// 选择支付方式
	// ordercenteradd页面结束

	
})
