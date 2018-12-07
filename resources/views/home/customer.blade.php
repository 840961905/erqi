<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<noscript>
			<meta http-equiv="refresh" content="0;url=about:noscript" />
		</noscript>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
        
        <script src='/customer/js/jquery.min.js'></script>
        <script type="text/javascript">var isHejNewSkin = false;</script>
		<link href="/customer/new_main_v1.css" rel="stylesheet" type="text/css">
        <link href="/customer/skin.css" rel="stylesheet" type="text/css" title="newSkin">
		<link type="text/css" rel="stylesheet" href="/customer/robot.css">


		<style type="text/css">
			#enter:hover {
			    background-color: #AB0009;
			    color: #fff;
			}

			#ReceiveDriverContent,.gac_m{display:none;}
			#track{position:absolute;top:0;left:0;z-index:-1;visibility:hidden;}
		</style>
		<style id="ks-suggest-style">.ks-suggest-container{background:white;border:1px solid #999;z-index:99999}.ks-suggest-shim{z-index:99998}.ks-suggest-container li{list-style-type:none;color:#404040;padding:1px 0 2px;font-size:12px;line-height:25px;float:left;width:100%}.ks-suggest-container .ks-selected{background-color:#3399FF;cursor:default}.ks-suggest-key{float:left;text-align:left;padding-left:5px}.ks-suggest-result{float:right;text-align:right;padding-right:5px;color:green}.ks-suggest-container .ks-selected span{color:#FFF;cursor:default}.ks-suggest-footer{padding:0 5px 5px}.ks-suggest-closebtn{float:right}.ks-suggest-container li,.ks-suggest-footer{overflow:hidden;zoom:1;clear:both}.ks-suggest-container{*margin-left:2px;_margin-left:-2px;_margin-top:-3px}
		</style>
		<title>{{$title}}</title>
	</head>
	<body>
		<div class="ks-suggest-container" id="ks-suggest-container" style="position: absolute; visibility: hidden; left: 31px; top: 463px; width: 950px;">
			<div class="ks-suggest-content"></div>
			<div class="ks-suggest-footer"></div>
		</div>
		<div id="container" style="width: 1366px; height: 610px;">
			<div id="header">
				<div class="h_content">
					<!--头部功能栏、广告、关闭按钮-->
					<div class="lefttop hleft">
						<div id="logo" style="width: 100px; height: 100px;">
							<img src="/customer/imgs/jiqiren1.png" alt="">
						</div>
						<div id="s_content_title" class="s_content_title">智能客服</div>
						<div class="s_content">
							<span id="headerBox">为提升服务质量,聊天记录会被记录!</span>
						</div>
					</div>
					<div class="righttop hright" id="funIcon">
						<div class="leftFunc" style="display: none;" title="更多功能" id="leftfunctions">
							<a href="" class="leftF" onclick="lefFunc();"></a>
						</div>
						<div id="functionContainer" style="width: 540px;">
							<div class="topItemsContainer" style="" sel="0">
								<a class="containerItemsb" id="udButton3" onclick="return false;">
									<em class="udButton">
										<img src="/customer/imgs/icon_wuliu.png" alt="">
									</em>
									<em class="containerItemst">物流查询</em>
								</a>
							</div>
							<div class="topItemsContainer" style="" sel="0">
								<a class="containerItemsb" id="udButton1" onclick="return false;">
									<em class="udButton">
										<img src="/customer/imgs/icon_bangzhu.png" alt="">	
									</em>
									<em class="containerItemst">帮助中心</em>
								</a>
							</div>
							<div class="topItemsContainer" style="" sel="0">
								<a class="containerItemsb" id="udButton5" onclick="return false;">
									<em class="udButton">
										<img src="/customer/imgs/icon_IT1.png" alt="">	
									</em>
									<em class="containerItemst">技术支持</em>
								</a>
							</div>
							<div class="topItemsContainer" style="" sel="0">
								<a class="containerItemsb" id="udButton7" onclick="return false;">
									<em class="udButton">
										<img src="/customer/imgs/icon_wangdian.png" alt="">		
									</em>
									<em class="containerItemst">售后网点</em>
								</a>
							</div>
							<div class="topItemsContainer" style="" sel="0">
								<a class="containerItemsb" id="udButton13" onclick="return false;">
									<em class="udButton">
										<img src="/customer/imgs/icon_app1.png" alt="">		
									</em>
									<em class="containerItemst">客户端</em>
								</a>
							</div>
						</div>
						<div class="rightFunc" style="display: none;" sel="0" title="更多功能" id="rightfunctions">
						</div>
						<div class="clo" style="display: none;" sel="0"></div>
					</div>
				</div>
			</div>
			<div id="cont">
				<div class="mid_l_c">		
					<div class="side" id="side" style="bottom: 160px;">
						<div id="center_left1_container" class="center_left1_container">
							<div id="history">
								<!-- //客服 -->
								<div id="" class="lim_operator lim_clearfloat">
									<div class="lim_radius"></div>
									<div class="chater_info operator_info">
										<span class="lim_name">智能客服</span>
										<span id="sendtime" class="lim_time"></span>
									</div>
									<div class="lim_bubble">
										<div class="lim_dot ">#华为商城12.12年终购机惠# 年终放福利、1212神券助你购新机。还犹豫什么!
											<a target="_blank" href="/">戳我赶快行动吧&gt;</a>
										</div>
										
									</div>
								</div>
								<!-- //客户 -->

							</div>

						</div>
					</div>
					<!--end side-->
					<div class="bottom" id="bottom" style="height: 150px;">
						<div class="center_left">
							<div class="center_left1">
								<!--end tool_wrap -->
							</div>
							<!--end center_left2 -->
							<div class="center_left2">
								<div id="inputarea">
									<div id="toolbar" width="0" height="0"></div>
									<textarea id="inputbox" autocomplete="off"></textarea>
								</div>
							</div>
							<div class="center_left3">
								<div id="tool_wrap" style="margin-right: 180px;">
								</div>
								<span id="footerBox" class="footerBox"></span>
								<div class="closeEnterBar">
									<a href="javascript:void(0);" onclick="return false;" id="exitChat" class="closea">关闭</a>
									<div class="entera">
										<a href="javascript:void(0);" onclick="return false;" id="enter" class="disable">发送</a>
									</div>
								</div>
							</div>
						</div>
						<!--end center_left -->
					</div>
					<!--end bottom-->
				</div>

				<script>

					//获取进入客服的时间
					var today = new Date();
			        var shi = today.getHours(); //时
			        var feng = today.getMinutes(); //分
			        var miao = today.getSeconds(); //秒

			        if (shi <= 9) {
			            shi = "0" + shi;
			        } 
			        if (feng <= 9) {
			            feng = "0" + feng;
			        } 
			        if (miao <= 9) {
			            miao = "0" + miao;
		       		} 

			       	document.getElementById("sendtime").innerHTML =  shi + ':' + feng + ":" + miao;

			       	//聊天框保持在在底部					
			       	$('#center_left1_container').scrollTop($("#center_left1_container")[0].scrollHeight);

					//获取输入的内容
				 	$('#enter').click(function(){

				 	 	var today = new Date();
				        var shi = today.getHours(); //时
				        var feng = today.getMinutes(); //分
				        var miao = today.getSeconds(); //秒

				        if (shi <= 9) {
				            shi = "0" + shi;
				        } 
				        if (feng <= 9) {
				            feng = "0" + feng;
				        } 
				        if (miao <= 9) {
				            miao = "0" + miao;
			       		} 

			       		var time =  shi + ':' + feng + ":" + miao;

				 	 	//获取信息
				 	 	var msg = $('#inputbox').val().trim();

				 	 	if(msg !== ''){

				 	 		var str = ` <div id="" class="lim_visitor lim_clearfloat ">
										<div class="lim_radius"></div>
										<div class="chater_info visitor_info">
											<span class="lim_name">我</span>
											<span class="lim_time">`+time+`</span>
										</div>
										<div class="lim_bubble">
											<div class="lim_dot ">`+msg+`</div>
										</div>
									</div>`;

					  		$('#history').append(str);

					  		$('#inputbox').val('');
				 	 	}
				 	 	
				 	 	//传回回复内容
						$.get('/customer/reply',{msg:msg},function(data){
            
			                var str = ` <div id="" class="lim_operator lim_clearfloat ">
											<div class="lim_radius"></div>
											<div class="chater_info operator_info">
												<span class="lim_name">智能客服</span>
												<span class="lim_time">`+time+`</span>
											</div>
											<div class="lim_bubble">
												<div class="lim_dot ">`+data+`</div>
											</div>
										</div>`;

					  		$('#history').append(str);

							$('#center_left1_container').scrollTop($("#center_left1_container")[0].scrollHeight);
		           		})
				 	})

				 	function sendword(question) {

				 		var today = new Date();
				        var shi = today.getHours(); //时
				        var feng = today.getMinutes(); //分
				        var miao = today.getSeconds(); //秒

				        if (shi <= 9) {
				            shi = "0" + shi;
				        } 
				        if (feng <= 9) {
				            feng = "0" + feng;
				        } 
				        if (miao <= 9) {
				            miao = "0" + miao;
			       		} 

			       		var time =  shi + ':' + feng + ":" + miao;

			       		//聊天框保持在在底部					
			       		$('#center_left1_container').scrollTop($("#center_left1_container")[0].scrollHeight);

					    var str = ` <div id="" class="lim_visitor lim_clearfloat ">
										<div class="lim_radius"></div>
										<div class="chater_info visitor_info">
											<span class="lim_name">我</span>
											<span class="lim_time">`+time+`</span>
										</div>
										<div class="lim_bubble">
											<div class="lim_dot ">`+question+`</div>
										</div>
									</div>`;

					  	$('#history').append(str);

					  	//传回回复内容
						$.get('/customer/replyclick',{question:question},function(data){
            
			                var str = ` <div id="" class="lim_operator lim_clearfloat ">
											<div class="lim_radius"></div>
											<div class="chater_info operator_info">
												<span class="lim_name">智能客服</span>
												<span class="lim_time">`+time+`</span>
											</div>
											<div class="lim_bubble">
												<div class="lim_dot ">`+data+`</div>
											</div>
										</div>`;

					  		$('#history').append(str);

							$('#center_left1_container').scrollTop($("#center_left1_container")[0].scrollHeight);
		           		})

					}

					$('#exitChat').click(function(){
						alert('您确定要关闭对话框吗？');
						location.href = '/';
					})
						 	
				</script>
				
				<div class="main" id="main">
					<div class="center_right" id="banner" style="background-image: url(/customer/imgs/4ee4f3b6-19cd-49a5-9eb7-994dbacdde18.png);">
					    <div id="adArea"></div>
					    <div id="advertisingBar" class="advertisingBar">
			   	            <div class="left_buts">
			  	                <a href="javascript:void(0);" class="click lefta_d checked" id="lefta_d">热门问题</a>
				                <a href="javascript:void(0);" class="click lefta_d" id="righta_d">常见问题</a>
				            </div>

				            <div id="newslist">

				            <div id="main_faq" class="main_hotQ"  hidden="hidden">
							    <div class="content_hotQ"> 
							    	<div class="positionBox_hotQ"> 
							    		<div class="contentBody_hotQ" id="contentBody_faq"> 
							     			<ul id="list_faq" class="faq_hotQ"> 
							      				<li id="149"><h3 id="149"><span class="icon turnOff"></span>如何提高账号安全性</h3>
							      					<div class="answer_hotQ">
								       					 建议您通过以下三步来增强您的账号安全：
												        <br />Step1：及时修改登录密码，建议您使用的密码跟您历史用过的尤其是与在其他网站使用的密码不一样，减少被撞库的机会；
												        <br />Step2：绑定安全手机，如果您有绑定安全邮箱，建议您解除绑定的安全邮箱，优先推荐您使用安全手机绑定方式；
												        <br />Step3：启用账号保护，以提高账号使用过程中安全性。
							       					</div>
							       				</li> 
							      				<li id="115"><h3 id="115"><span class="icon turnOff"></span>支持订单合并吗？</h3>
							       					<div class="answer_hotQ">
							        					您好，很抱歉，订单不支持合并，单笔订单实际支付满48元包邮（代销品除外）。
							       					</div>
							       				</li> 
							      				<li id="151"><h3 id="151"><span class="icon turnOff"></span>商城商品运费是多少，可以免运费吗？</h3>
							      					<div class="answer_hotQ">
							       						 您好，全场单笔订单实际支付满48元免运费。 若使用优惠劵抵扣一部分金额后实际支付未满48元也是要收取部分邮费哦。下订单时系统会自动计算运费，运费金额会在订单“配送方式”处显示
							       					</div>
							       				</li> 
							      				<li id="117"><h3 id="117"><span class="icon turnOff"></span>取消订单退款多久到账？</h3>
												    <div class="answer_hotQ">
												        您好，您点击取消订单后，系统会自动帮您申请退款单，自订单取消日起商城“5个工作日”内完成退款，具体到账时间取决于第三方支付平台或银行的处理速度，支付宝方式一般1-3个工作日左右可到账，网银、信用卡一般3-5个工作日，客户个人账户异常情况除外。
											        </div>
											    </li> 
												<li id="119"><h3 id="119"><span class="icon turnOff"></span>支付提示限额，付不了款怎么办？</h3>
											        <div class="answer_hotQ">
											        	您好，华为商城未设置任何支付限额，您无法支付可能是您的开户银行或者支付宝等第三方支付平台有限额导致，建议您及时联系他们的客服提高限额处理。
											        </div>
											    </li> 
											    <li id="121"><h3 id="121"><span class="icon turnOff"></span>怎么删除套餐中的配件？</h3>
											        <div class="answer_hotQ">
											        	您好，订单提交后无法删除商品，您选择购买的是套餐，不支持单独退配件。
											        </div>
											    </li> 
											    <li id="120"><h3 id="120"><span class="icon turnOff"></span>怎样查询物流信息？</h3>
											        <div class="answer_hotQ">
											       		 您好，您可以登录华为商城点击“我的订单”找到对应产品订单，点击“订单详情”查看订单所处状态。
											        </div>
											    </li> 
											    <li id="136"><h3 id="136"><span class="icon turnOff"></span>退换货时间从什么时候算起？</h3>
											        <div class="answer_hotQ">
											       		 您好，退换货有效期是以您签收后第二天零时起算。
											        </div>
											    </li> 
											    <li id="137"><h3 id="137"><span class="icon turnOff"></span>华为商城付款提醒</h3>
											        <div class="answer_hotQ">
											        	亲爱的华为商城会员朋友：
											        	<br />近期接到若干消费者反馈，有不法分子利用信用卡套现、蚂蚁花呗套现或刷单付款等名义，通过发送二维码截图的方式，骗取消费者扫码付款的情况。在此，华为商城提醒广大的会员朋友注意：
											        	<br />一、华为商城唯一客户服务服务热线是400-088-6888，关于您的订单、交易等信息，我们不会通过微信、QQ等其他聊天工具与您进行联系。
											        	<br />二、华为商城不会与任何机构或个人开展扫码返现或刷单套现活动，如您收到的相关信息未在华为商城官方网站进行公告，请您致电华为商城客服热线400-088-6888进行了解和咨询。
											        	<br />三、若遇到类似情况，遭受损失，华为商城建议及时报警，并通知华为商城客服人员。华为商城将积极配合相关部门对此类行为进行调查处理，并保留追究违法人员法律责任的一切权利。
											        	<br />华为商城将以最真诚、最严谨的态度保护您的购物安全，如您有任何疑问或建议，请拨打华为商城客户服务热线为：400-088-6888。
											        </div>
											    </li> 
											    <li id="138"><h3 id="138"><span class="icon turnOff"></span>关于假冒华为商城网诈骗的声明</h3>
											        <div class="answer_hotQ">
											         	亲爱的华为商城会员朋友：
											       		 <br />近期接到不少用户反馈，有人以华为商城的名义加好友，并以奖品为饵引导用户点击非官方链接。在此，华为商城提醒广大的会员朋友注意：
											        	<br />一、华为商城官方网址为：http://www.vmall.com/ ， 请广大会员朋友认准完整的商城地址，谨防上当受骗，被假冒网址欺诈；
											        	<br />二、华为商城不会通过微信、QQ等其他聊天工具与您进行联系；
											        	<br />三、如您收到的相关信息未在华为商城官方网站进行公告，请您致电华为商城客服热线400-088-6888进行了解和咨询；
											        	<br />
											        	<br />四、若因此遭受损失，华为商城建议及时报警，并通知华为商城客服人员。华为商城将积极配合相关部门对此类行为进行调查处理，
												        <br />并保留追究违法人员法律责任的一切权利。
												    </div>
												</li> 
											</ul> 
									    </div> 
									</div> 
								</div>
							</div>

						 	<div id="main_hotQ" class="main_hotQ">
							    <div class="content_hotQ"> 
							   		<div class="positionBox_hotQ"> 
							    		<div class="contentBody_hotQ" id="contentBody_hotQ"> 
							    			<ul id="list_hotQ" class="faq_hotQ"> 
							      				<li><h3 hasgetanswer="true"><span class="icon turnOff"></span>人工服务</h3>
								       				<div class="answer_hotQ" style="display: none;">
								       					小V始终坚持将每一次服务变成您温暖的回忆！ 1.小V为您初解惑，关键词和答案更配 2.点击此处转
								       					<a onclick="LIM.jumper();return false;" href="javascript:void(0)" class="turnOff">人工</a>，疑难杂症无所畏
							       					</div>
							       				</li> 
							      				<li><h3 hasgetanswer="true"><span class="icon turnOff"></span>华为商城暂停纸质开票公告</h3>
							       					<div class="answer_hotQ" style="display: none;">
							         					亲亲您好，因业务需要，华为公司名称于2018年11月16日进行了公司改名，且在2018年11月22日进行公司税务登记更名，税控切换期间将暂停开具纸质发票，具体影响如下，给您带来了不便非常抱歉~ 纸票普通发票：由于需要重新印刷，预计中断时间为2018年11月19日10:00-12月中下旬，其中预售订单将在13日关闭纸质票选项。 如您在受影响期间无法正常开票，请及时联系我们的客服小姐姐为您解决问题哦~ 
							       					</div>
							       				</li> 
							      				<li><h3><span class="icon turnOff"></span>Mate20系列老用户花币何时发放</h3>
							       					<div class="answer_hotQ" style="display: none;">
							       						老用户花币发放时间：
														1）11月11日前购机用户，花币采取统一发放形式；从11月8日起每周四发放上上周数据，如11月8日发放10月22日-10月28日购买用户花币，每个账号限获得1份；花币可用于购买华为视频、华为阅读会员权益等多种华为系虚拟产品，需要发放后15日内领取。

														2）11月11日0点后购机用户，花币采取登记后统一发放形式；购机用户需在订单支付完成后于老用户活动页面（https://sale.vmall.com/hwmatevip.html）进行花币领取登记，每周一将提取登记用户数据，核实属于老用户身份，且订单签收7天后无退货，将于每周四发放花币，每个账号限获得1份；花币可用于购买华为视频、华为阅读会员权益等多种华为系虚拟产品，需要发放后15日内领取。
														如11月13日购机并进行登记，16日订单签收，26日（签收7天后）将会确认此订单状态正常无退货，花币将于29日发放。

														注：11月11日后下单未登记的老用户无法获得花币，请前往活动页登记。
							       					</div>
							       				</li> 
										        <li><h3><span class="icon turnOff"></span>Mate20系列晒单赠送的自拍杆优惠券如何使用？</h3>
										          	<div class="answer_hotQ" style="display: none;">
										          		您好，您购买mate20系列手机，晒单评价以后满足我们活动条件是会赠送您一张119元华为三脚架自拍杆优惠券，我们会通过短信给您发送购买链接，您点击进入购买使用优惠券就可以了，直接点击优惠券是无法购买的哦。
										          	</div>
										        </li> 
										      	<li><h3><span class="icon turnOff"></span>Mate20系列老用户赠送的100花币如何领取登记？</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			Mate20系列老用户赠送的100花币领取登记方法： mate 20老用户页面（https://sale.vmall.com/hwmatevip.html）点击登记区域，按提示登录华为账号即可完成领取登记。
										       		</div>
										       	</li> 
										     	<li><h3><span class="icon turnOff"></span>荣耀Magic2 3D感光版和普通版有什么区别？</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			荣耀Magic 2 3D感光版（8+512G）与普通版的区别如下：
														1.石墨烯散热技术：3D感光版支持，普通版不支持；
														2.人脸解锁：3D感光版支持3D人脸解锁，普通版支持2D人脸解锁（不支持暗光或无光解锁）；
														3.人脸支付：3D感光版支持支付宝人脸支付、普通版不支持哦；Magic2不支持微信人脸支付。
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>荣耀Magic2是否支持人脸解锁？</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			您好，普通版支持2D人脸解锁（不支持暗光或无光解锁），3D感光版支持3D人脸解锁。
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>荣耀Magic2是否支持屏内指纹？</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			您好，荣耀Magic2所有版本都支持屏内指纹。
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>HUAWEI Mate20系列销售时间</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			您好，现已可在商城购买Mate20与Mate20X哦，您可登陆商城一键点击购买； Mate20 Pro因销售火爆，您可在每天10:08分在商城页面抢购； Mate20 RS保时捷需在周一、周三、周五10:08分购买； 11月26日10:08与11月28日10:08/20:00加售两场； 具体抢购活动可能会根据商品库存情况而调整，购买详情请点击 Mate20系列商品活动页面 没有抢到的亲亲请不要着急，您可以选择Mate20系列优享购全款预订，我们将按照登记顺序和配货情况第一时间发送购买邀请，在您获得邀请后便可直接下单，等待收货啦！
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>什么时候发货</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			感谢您的支持，请耐心等待下，相信我们的产品值得等待
														1.常规订单会在您成功付款后的2天内为您发货哦（部分商品如有特殊注明发货时效，请以购买时页面显示发货时效为准；
														2.优购码（V码）提交的订单会在支付成功后的2天内发货，如使用优购码时页面有特殊注明发货时效，将会在此期间发出；
														3.优享购全款订购以订单提交后显示的预计发货日期为准；免费登记获得购买邀请并下单支付后一般会在2天内发货，特殊商品订单以短信或其他通知为准
														4.订金订单会参照尾款支付顺序7天内发货，如页面特殊标明的除外；
														5.抢购类订单一般按照成功支付的先后顺序7天内安排发货，由于活动期间在短期内产生大量订单，实际发货顺序可能因为支付延时、收货地、第三方物流等原因做出调整；
														责任声明：
														在商品未出库或未签收之前, 若发生以下任一情形，华为商城有权单方面原路退款到支付人账户，并取消订单： 
														1）订单为非正常流程产生。
														2）订单生成后，因该用户的帐号权属产生争议或纠纷，当事人无法就争议达成一致，并且商城收到相关凭证。
														3）同一客户，仅限购买1台；若遇不同账户但具备下列现象之一：批量相同（包括雷同、临近、虚构）的收货地址、同一联系号码或者付款账号、同一收件人（巧合同名除外），均视为同一客户，仅发1台。
														小V贴士：由于某些原因（如活动、缺货等），个别的订单配送可能会有延迟，仓库小伙伴已经在加班加点全力发货啦，请耐心等待一下哦！具体商品出库配送进度，建议您登陆华为商城，在我的订单-订单详情中进行查看。
										       		</div>
										       	</li> 
										     	<li><h3><span class="icon turnOff"></span>如何查看订单状态</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			您好，您登陆华为商城后，在“我的商城”—“我的订单”页面选择您要查看的订单，点击该订单的订单编号，商城网页会自动进入“订单详情”页面；在“订单详情”页面，您可以查看商品信息及所处的状态
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>如何修改发票信息</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			修改发票信息操作方法： 普通订单在未发货前您可直接修改订单信息，若订单已在出库中，则无法修改，可以联系人工客服帮您核实处理。 小V贴士：抢购活动订单及订金订单不支持修改订单信息（收件货人信息、发票信息等）的哦~
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>抢购订单能否修改收货地址</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			您好，为打击黄牛保护普通用户的利益，订单提交后收货地址不能修改，请您在抢购前务必维护好正确的收货地址。
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>发什么快递</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			您好，华为商城从东莞、北京、或上海发货（根据您下单商品系统自动分配），采用顺丰和EMS的优质快递服务（代销品除外），可实现全国覆盖，我们会根据订单填写的地址选择配送方式，由系统自动分配物流公司（不支持指定）。如果您需要查询物流状态，可以随时在“我的订单”-“订单详情”内查看物流信息并跟踪订单物流状态，非常感谢您的理解。 亲亲，如果您对我的服务满意，别忘了点击下方的“解决”进行反馈哦，您的鼓励是我成长路上的不竭动力。
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>下单后从哪发货</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			您好，华为商城自营商品从东莞、北京或上海发货（根据您下单商品系统自动分配），代销商商品请以页面显示为准；您可登陆华为商城，在订单详情中查看物流信息。
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>发货后什么时候才能到货</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			为不断提升消费体验，华为商城提速物流派送时效，推出VMALL即日达、次晨达、次日达、隔日达等物流产品，百城提速；
														1. 当日上午10点前支付的现货订单：广东、河北的部分城市及北京、天津支持即日送达（当日24时前送达）
														2. 当日23点前支付的现货订单：广东、河北、北京、天津、安徽、福建、河南、辽宁、江西、陕西、广西、湖北、湖南、江苏、山东、上海、四川、浙江、重庆等区域近百个城市支持次日24时前送达，派送实现仅限市区；
														3. 全国95%以上乡镇支持隔日达；
														由于业务发展变化、行政区域更名，物流服务产品升级等因素，可能会不时有扩大、变更或调整哦；

														小V贴士：
														• 预售类、预订类、抢购类、第三方发货商品还需考虑货期因素，以页面提示信息为准。 
														• 如遇交通管制、恶劣天气、大雨雪、洪涝、冰灾、地震、节假日、618、双十一活动、停电等不可控制因素，以及由于客户原因地址不详、电话不准确、申请退款等均不在服务范围内。 
														• 以上物流时效为限定范围内的预计送达时间，实际还请以物流信息显示为准。建议您登陆华为商城，在订单详情中进行查看。
										       		</div>
										       	</li> 
										      	<li><h3><span class="icon turnOff"></span>没有发票怎么维保</h3>
										       		<div class="answer_hotQ" style="display: none;">
										       			您好，若没有发票您可以提供SN码我们为您查询预估保修期，或者您可在您的手机“会员服务”APP-我的-电子三包凭证查询您的预估保修期，只要在保修期内、您可带上产品到咱们华为的正规授权售后网点为您核实确认并进行检测保修哦。 小V贴士：如您无法找到发票，产品也未查询到电子三包凭证的话，您还可去到我们华为正规授权售后网点，工作人员会为您核实您的产品是否在保的，不用担心哈。
										       		</div>
										       	</li> 
										    </ul> 
							    		</div> 
							   		</div> 
							  	</div> 
			          		</div>
						</div>
					<div class="clo"></div>
				</div>
			</div>
			<div id="footer">
				<div class="f_content"></div>
			</div>
		</div>
	<div id="pluginWrap"></div>

	 <script>
    	$('.click').click(function(){

    		var b = 'click lefta_d';

    		var a = 'click lefta_d checked';

    		$(this).attr('class',a).siblings().attr('class',b);

    		if($("#main_faq").attr('hidden') == 'hidden'){

    			$("#main_faq").removeAttr('hidden');
    		}else{

    			$("#main_faq").attr('hidden','hidden');
    		}

    	})

    	$('.faq_hotQ li').find('h3').click(function(){

    		if($(this).find('span').attr('class') == 'icon turnOff'){

    			$(this).find('span').attr('class','icon turnOn');

    			$(this).next().attr('style','display: block;');

    		}else{

    			$(this).find('span').attr('class','icon turnOff');

    			$(this).next().attr('style','display: none;');
    		}

    	})

    </script>
    
</body>
</html>