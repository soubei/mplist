<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="/Public/home/images/favicon.ico" />
<!-- External CSS -->
	<link rel="stylesheet" href="/Public/home/css/eops.base.min.css?v=1541078824a18cef" type="text/css"/>
	<link rel="stylesheet" href="/Public/home/css/eops.content.min.css?v=1541078824a18cef" type="text/css"/>
<script  type="text/javascript">
	// $GF { Array } - functions defined in pages which has no module. The collected functions will be defined in page directly.
	$GF = [];

	// 图片加载失败,error设置默认图片也加载失败避免死循环
	window.NoFind = function(src) {
		var img = event.srcElement;
		img.src = src;
		img.onerror = null;
	};
</script>

	
		        <meta name="keywords" content="微医" />
		        <meta name="description" content="微医" />
		
		    <title>医生个人资料 | 微医</title>
	</head>
	
	<body>
		<!-- #g-wrapper -->
		<div id="g-wrapper" class="gc-new">
	 <div class="g-header-new noprint">
    <div class="notice"  id="J_Notify" style="display: none;">
        <div class="center" class="">
            <div class="notice-contain">
                <span class="bell-icon"></span>
                <span class="title">公告：</span>
                <div id="J_NotifyBox" class="wrapper" style="">
                    <div class="move-box" style="" >
                        <span class="content J_Content" href="javascript:;"></span>
                    </div>
                    <div class="move-box2" style="display: none;" >
                        <span class="content J_Content" href="javascript:;"></span>
                    </div>
                </div>
                <span class="close-icon J_NoticeClose"></span>
            </div>
        </div>
    </div>
    <div class="center">
        <a class="logo" href="#">
            <img src="/Public/home/images/header_logo.png?_=123456" alt="logo">
        </a>
        <div class="nav">
                    <span>欢迎您
                            ,&nbsp;<?php echo ($docname); ?>
                    </span>
                <a href="#" target="_blank" class="help" title="联系客服" monitor="doctorweb,menu_top,wy_robot"><b class="border">联系客服</b></a>
                <a href="<?php echo U('home/index/authprofile');?>" class="setting" title="账号设置" monitor="doctorweb,menu_top,accountset"><b class="border">账号设置</b></a>
                <a href="<?php echo U('home/index/docLogout');?>" class="logout j-out-system" title="退出" monitor="doctorweb,menu_top,exit"><b>退出</b></a>
                <input type="hidden" class="j-out-url" value="" />
        </div>
    </div>
    <div class="gm-box-off-out hide">
        <p style="text-align: center;">您还在接诊状态，确定退出登录?</p>
    </div>
</div>
<script type="text/javascript">
    $GF.push(function() {
        //文字跑马灯
        //requestAnimationFrame
        (function() {
            var lastTime = 0;
            var vendors = ['ms', 'moz', 'webkit', 'o'];
            for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
                window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
                window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
            }
            if (!window.requestAnimationFrame){
                window.requestAnimationFrame = function(callback, element) {
                    var currTime = new Date().getTime();
                    console.log(currTime);
                    var timeToCall = Math.max(0, 16 - (currTime - lastTime));
                    var id = window.setTimeout(function() {
                        callback(currTime + timeToCall);
                    }, timeToCall);
                    lastTime = currTime + timeToCall;
                    return id;
                };
            }
            if (!window.cancelAnimationFrame){
                window.cancelAnimationFrame = function(id) {
                    clearTimeout(id);
                };
            }
        }());
        
        $.ajax({
            type: "post",
            url: 'https://api-gateway.guahao.com/common/notice/mainplatformdetail.json',
            //headers : {'weiyi-appid':'d_h5_weiyi'},
            beforeSend: function(xhr) {
                xhr.setRequestHeader("weiyi-appid", "d_web_doctor");
            },
            success: function(res) {
                if(res.flag == 0) {
                    if(res.item) );
                                    box2.css({'left':left2+40+'px'}); 
                                    if(parseInt(item1Left) == difference){
                                        left2 = outWidth;
                                        box2.css({'left':left2+40+'px'}); 
                                    }else if(parseInt(item2Left) == difference){
                                        left1 = outWidth;
                                        box1.css({'left':left1+40+'px'});
                                    }
                                    requestAnimationFrame(move);
                                };
                                move();
                            }
                            box1.css({'visibility': 'visible'});
                            box2.css({'visibility': 'visible'});
                        },0);

                       if (!$('#J_Notify').length) {
                           return;
                       }
                       if(!localStorage.getItem("indexNotice") || localStorage.getItem("indexNotice")!=dataObj.gmtModified){
                           $('#J_Notify').show();
                       }
                       var openFun = function(close) {
                           close();
                           localStorage.setItem("indexNotice",dataObj.gmtModified);
                           $('#J_Notify').hide();
                       };
                       //点击公告
                       $('.J_Content').on('click',function(){
                            //弹窗展示
                           $.confirm({title:"公告",content:"<span style='font-size: 16px;color: #333333;'>"+dataObj.content+"</span>",okText:"知道了",okfun: openFun,cancelfun:openFun,cancelEqualClose:true,className:"new-ok"});
                           localStorage.setItem("indexNotice",dataObj.gmtModified);
                       });
                       //点击关闭按钮
                       $('.J_NoticeClose').click(function(){
                            if(dataObj.gmtModified){
                               localStorage.setItem("indexNotice",dataObj.gmtModified);
                            }
                           $('#J_Notify').hide();
                       })
                    }else{
                        console.log('没有配置公告');
                    }
                }
                else 
            },
            error: function(){
                console.log('公告接口失败');
            }
        });
    });
</script>

            <!-- end of #gh -->
            <div class="g-container">
				
<div class="g-menubar noprint">
	<!-- 医生个人简介 -->
	<div  class="top">
		<div class="head-box">
                        <img src="https://img.guahao.com/portal_upload/userheadpic/pYf27810846_180x180.?timeStamp=1543038657149" alt="李旭峰大夫" class="head-img"/>
		</div>
		<div class="info">
			<div class="basic-info">
				<h1>李旭峰&nbsp;</h1>
				<span></span>
			</div>
			<div class="dept-info">
				         		上海中医药大学附属龙华医院<span class="dept"></span>
				         		<span class="dept">1222室</span>
			</div>
			<a href="#" class="more-info" monitor="doctorweb,menu,personal_data">个人资料</a>
		</div>
	</div>

	<ul class="menu-parent-box">
			<li class="menu-parent "><a href="<?php echo U('home/index/doctorhome');?>" monitor="doctorweb,menu,hmpg"><i class="grsy"></i>个人首页</a></li>
					<li class="menu-parent ">
					<a href="javascript:;"
					
					
					class="hasChild J_ParentMenu">
						<i style="background: url(https://kano.guahao.cn/J5t37110059) no-repeat"></i>
						
					     账号设置
						</a>
									<div class="menu-child-box hide">
									   	<a class="menu-child " href="<?php echo U('home/index/authprofile');?>" monitor="doctorweb,menu,accountset_myinfo"
										  >
										   
								   		个人资料</a>
									   	<a class="menu-child " href="<?php echo U('home/index/head_pic_settings');?>" monitor="doctorweb,menu,accountset_pichead"
										  >
										   
								   		头像设置</a>
									   	<a class="menu-child active" href="<?php echo U('home/index/authaccout');?>" monitor="doctorweb,menu,accountset_info"
										  >
										   
								   		账号信息</a>
									   	<a class="menu-child " href="<?php echo U('home/index/authtomod');?>" monitor="doctorweb,menu,accountset_password"
										  >
										   
								   		修改密码</a>
									</div>
					</li>
					<li class="menu-parent ">
					<a href="javascript:;"
					
					
					class="hasChild J_ParentMenu">
						<i style="background: url(https://kano.guahao.cn/FIU37110407) no-repeat"></i>
						
					     帮助与反馈
						</a>
									<div class="menu-child-box hide">
									   	<a class="menu-child " href="<?php echo U('home/index/authoperation');?>" 
										  >
										   
								   		操作手册</a>
									   	<a class="menu-child " href="#" m>
										   
								   		联系客服</a>
									   	<a class="menu-child " href="<?php echo U('home/index/faqlist');?>" 
										  >
										   
								   		常见问题</a>
									</div>
					</li>
	</ul>
</div>

				<!-- #gc -->
				
<div id="gc" class="gp-consult-list" data-module="consult-manage">
	<div class="gc-mask">
		<div class="content-admin g-clear g-content">
			<div id="g-breadcrumb">
			    <a href="https://doctor.guahao.com/home">首页</a>&gt;
		        <span>账号设置</span>&gt;
		        <span>账号信息</span>
		  	</div>
			<div class="g-content-widget g-tab">
				<div class="config-tab">
					<a href="<?php echo U('home/index/authprofile');?>" monitor="doctorweb,accountset_top,myinfo">个人资料</a>
					<a href="<?php echo U('home/index/head_pic_settings');?>" monitor="doctorweb,accountset_top,headpic">头像设置</a>
					<a href="javascript:;" class="active" monitor="doctorweb,accountset_top,info">账号信息</a>
					<a href="<?php echo U('home/index/authtomod');?>" monitor="doctorweb,accountset_top,password">修改密码</a>
				</div>
				<div class="content-warp" style="margin-top:0px;">
					<div class="gfm-inline">
						<ul class="account-info-box">
							<li class="js-cardName"><label>账号：</label><span class="J_name">
							<?php echo ($docmobile); ?></span></li>
							<li><label>绑定手机号：</label><span class="J_cardName">
							<?php echo ($docmobile); ?></span></li>
							<li class="js-cardId"><label>邮箱地址：</label><span class="J_cardNO"></span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end of .gc-mask -->
</div>
<!-- end of #gc -->
<span id="gi_page_totop" class="gi gi-page-totop"></span>

				<!-- end of #gc -->
				<div class="clear"></div>
			</div>
			<!-- #gf -->
			<div id="gf" class="gf-new">
	<div class="g-container">
		<p>网友、医生言论仅代表其个人观点，不代表本站同意其说法，本站不承担由此引起的法律责任</p>	
		<p>微医提供平台支持 Copyright 2011-2018版权所有。&nbsp;&nbsp;浙ICP备12034511号</p>
	</div>
</div>
			<!-- end of #gf -->
		</div>	
		<!-- end of #g-wrapper -->
		
<script  type="text/javascript">
	//打点日志全局变量
	$GLog = {
		requestMethod:'GET',
		loginId:'Jpdycqdt4wPlFYIhpolDHKljbGEUUtQ8Mtk3U3obwMHKaPnalqOf8A==',
		perSessiionId:'154303338518820178067151',
		shortSessionId:'',
		referurl:'https://doctor.guahao.com/auth/account',
		userAgent:'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.132 Safari/537.36',
		logUrl: 'https://trackweb.guahao.cn/blank.gif',
		debug: false,
		domainEnd: 'guahao.com',
		errorEventName:'portal_eops_js_error',
		token:'!P0MfsMGSMtzR8Y4AEYzglqQocb34CJA1a3YAxjo-AYftrp-xiEhIjKRHL9Qnse_qS5PAwoEtdKex5WZVo5OfKagWMPwraORW-Pj1aMKnhoLnlXUMJG-6ChkCHOE2AKqRBS3Tn4OCxKPuWSKsd3CWUEP3rbogozbuGnbJAkv4Cxq7c',
        monitorLog : false
	}
	// $GC { Object } - globle configure
     $GC = {
		staticServer:"https://img.guahao.com",
		imageServer:"https://img.guahao.com",
		echartServer: "https://im-web.guahao.cn",
		flashIp: "https://tqvedio-hezuo.guahao.com",
		guahaoServer:"http://www.guahao.com",
		eopsServer:"https://doctor.guahao.com",
		isLogined:"true",
		isdocLogined:"true",
		mobilevalidcodepwd : 'lvxian95169124',
		version:"1541078824a18cef",
		jsCPath:"https://img.guahao.com" + "/common/js",
		jsPPath:"https://img.guahao.com" + "/front/hps-pc-static/js",
		isDev: false,
		domainProfix: "doctor",
	 	appServer: "https://api-gateway.guahao.com",
		 snsWebServer:"https://bbs.guahao.com"

	};

	// $GS { Array } - the init parameters for startup
	$GS = [$GC.jsCPath + "/base/jquery-1.8.1.min.js?20170125",
		$GC.jsCPath + "/plugins/datehelper.js",
		$GC.jsCPath + "/plugins/jquery.placeholder.js",
		$GC.jsCPath + "/plugins/json2.js",
		$GC.jsCPath + "/plugins/socket.io.js",
		$GC.jsPPath + "/base/eops.js?_=1541078824a18cef",
		function(){
		 // load common module
			if(GL.Browser.ie6){
				GL.load([$GC.jsPPath + "/hack/ie6.js" + "?_=" + $GC.version]);
			}
			if (!$GC.isDev) {
				GL.load([$GC.jsPPath + "/plugins/raven.js"]);
			}
			var timer = setInterval(function() {
				if(typeof Eops === 'undefined') {
					return false;
				}
				clearInterval(timer);
				GL.load([Eops.adaptModule("common")]);
				 // load the modules defined in page
				 var moduleName = $("#gc").data("module") || $("#gc2").data("module");
				 if(moduleName){
					var module = Eops.modules[moduleName];
					if(!module) {
						module = Eops.adaptModule(moduleName);
					}
					if(module) {
						GL.load([module]);
					}
				}
			});

	}];

	//同盾token 发送
	(function() {
		var name = "_wysid_";
		var sid = getCookie(name);
		if(null !== sid && ''!==sid && undefined !== sid){
			_fmOpt = {
				partner: 'weiyi',
				appName: 'weiyi_web',
				token: sid,
				fmb: true,
				getinfo: function() {
					return "e3Y6ICIyLjUuMCIsIG9zOiAid2ViIiwgczogMTk5LCBlOiAianMgbm90IGRvd25sb2FkIn0=";
				}
						};
			var cimg = new Image(1,1);
			cimg.onload = function() {
				_fmOpt.imgLoaded = true;
			};
			cimg.src = "https://fp.fraudmetrix.cn/fp/clear.png?partnerCode=weiyi&appName=weiyi_web&tokenId=" + _fmOpt.token;
			var fm = document.createElement('script'); fm.type = 'text/javascript'; fm.async = true;
			fm.src = '//static.fraudmetrix.cn/v2/fm.js?ver=0.1&t=' + (new Date().getTime()/3600000).toFixed(0);
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(fm, s);
		}

		function getCookie(c_name)
		{
			if (document.cookie.length>0)
			{
				c_start=document.cookie.indexOf(c_name + "=")
				if (c_start!=-1)
				{
					c_start=c_start + c_name.length+1
					c_end=document.cookie.indexOf(";",c_start)
					if (c_end==-1) c_end=document.cookie.length
					return unescape(document.cookie.substring(c_start,c_end))
				}
			}
			return ""
		}

	})();
</script>

<script type="text/javascript" src="https://img.guahao.com/front/hps-pc-static/js/base/GL.js?_=1541078824a18cef" ></script>
<script src="https://img.guahao.com/front/hps-pc-static/js/plugins/scout.js?_=1541078824a18cef"></script>
<!-- analytics code -->
<div class="hide">
	<script type="text/javascript"> 
	 
		(function() { 
		
			// baidu
			var hm = document.createElement('script'); hm.type = 'text/javascript'; hm.async = true;
			hm.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'hm.baidu.com/h.js?66fcb71a7f1d7ae4ae082580ac03c957';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(hm, s); 
		  
		  
		})();
	</script>   
</div>

	</body>
</html>