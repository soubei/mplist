<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="/Public/home/images/favicon.ico" />
<!-- External CSS -->
    <link rel="stylesheet" href="/Public/home/css/eops.base.min.css?v=1541078824a18cef" type="text/css"/>
    <link rel="stylesheet" href="/Public/home/css/eops.content.min.css?v=1541078824a18cef" type="text/css"/>
<!--[if IE 6]>
<link rel="stylesheet" type="text/css" href="https://img.guahao.com/front/hps-pc-static/css/hack/ie6.css?v=1.3"/>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="https://img.guahao.com/front/hps-pc-static/css/hack/ie7.css?v=1.3"/>
<![endif]-->
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

	
				<link rel="stylesheet" href="/Public/home/css/home-new.css?v=1541078824a18cef" type="text/css"/>
		        <meta name="keywords" content="李旭峰" />
		        <meta name="description" content="李旭峰" />
		
		    <title>李旭峰大夫的个人网站 | 微医</title>
	</head>
	
	<body>
		<!-- #g-wrapper -->
		<div id="g-wrapper" class="gc-new">
			<!-- #gh -->
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
				
<div class="g-menubar noprint" style="margin-top:82px;">
	<!-- 医生个人简介 -->
	<div  class="top">
		<div class="head-box">
                        <img src="/Public/home/images/pYf27810846.png?timeStamp=1543037600522" alt="李旭峰大夫" class="head-img"/>
		</div>
		<div class="info">
			<div class="basic-info">
				<h1><?php echo ($docname); ?>&nbsp;</h1>
				<span></span>
			</div>
			<div class="dept-info">
				         		<?php echo ($hospital); ?><span class="dept"></span>
				         		<span class="dept"></span>
			</div>
			<a href="#" class="more-info" monitor="doctorweb,menu,personal_data">个人资料</a>
		</div>
	</div>

	<ul class="menu-parent-box">
			<li class="menu-parent active"><a href="<?php echo U('home/index/doctorhome');?>" monitor="doctorweb,menu,hmpg"><i class="grsy"></i>个人首页</a></li>
					<li class="menu-parent ">
					<a href="javascript:;"
					
					
					class="hasChild J_ParentMenu">
						<i style="background: url(/Public/home/images/J5t37110059.png) no-repeat"></i>
						
					     账号设置
						</a>
									<div class="menu-child-box hide">
									   	<a class="menu-child " href="<?php echo U('home/index/authprofile');?>" monitor=""
										  >
										   
								   		个人资料</a>
									   	<a class="menu-child " href="<?php echo ('home/index/head_pic_settings');?>" monitor="doctorweb,menu,accountset_pichead"
										  >
										   
								   		头像设置</a>
									   	<a class="menu-child " href="<?php echo U('home/index/authaccout');?>" monitor="doctorweb,menu,accountset_info"
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
						<i style="background: url(/Public/home/images/FIU37110407.png) no-repeat"></i>
						
					     帮助与反馈
						</a>
									<div class="menu-child-box hide">
									   	<a class="menu-child " href="<?php echo U('home/index/authoperation');?>" 
										  >
										   
								   		操作手册</a>
									   	<a class="menu-child " href="#" >
										   
								   		联系客服</a>
									   	<a class="menu-child " href="<?php echo U('home/index/faqlist');?>" 
										  >
										   
								   		常见问题</a>
									</div>
					</li>
	</ul>
</div>

				<!-- #gc -->
				


<!-- .gp-home -->
<div class="g-header2-new">
    <div class="center">
        <div class="item">
            <h1>个人网站访问量</h1>
            <div class="info">
                <i class="fangwen"></i>
                	<h4>暂无数据</h4>
            </div>
        </div>
        <div class="item">
            <h1>我的问诊量</h1>
            <div class="info">
	            <i class="wen"></i>
	            	<h4>暂无数据</h4>
            </div>
        </div>
        <div class="item">
            <h1>我的预约量</h1>
            <div class="info">
                <i class="yuyue"></i>
	            	<h4>暂无数据</h4>
            </div>
        </div>
        <div class="item">
            <h1>我的收入</h1>
            <div class="info">
                <i class="rmb"></i>
	            	<h4>暂无数据</h4>
            </div>
        </div>
    </div>
</div>
<div id="gc" class="gp-home-new gp-home-index" data-module="home">
    <input type="hidden" id="falseExceptionFlag" name="falseExceptionFlag" value="">
    <input type="hidden" id="initiAlexceptionFlag" name="initiAlexceptionFlag" value="">
    <input type="hidden" id="bizId" name="bizId" value="">
    <div class="gc-mask">
        <div class="g-content">
            <input type="hidden" name="isOpenHealthyNum" id="isOpenHealthyNum" value="0" />
            <input type="hidden" name="jkhUrl" id="jkhUrl" value="https://jkh.guahao.com/register/doctor_info">
		             <div class="g-tab g-apply J_DoctorVerify">
                <form id="J_VerifyForm" name="verifyForm" method="post" enctype="multipart/form-data" action="/auth/doctor/verify/submit">
                    <div class="tab-title">认证申请
                            <span class="small-title">认证后您将可以使用咨询、对症预约等功能</span>
                                <button class="J_Submit" type="button">提交审核</button>
                    </div>
                    <div class="tab-body verify-main">
                            <div class="action">
                                <p class="tip">请提交真实信息（以下证件一种或多种），我们将对您的信息严格保密    格式要求：支持.jpg .jpeg .bmp .gif .png格式照片，大小不超过2M</p>
                                <div class="input-line">
                                    身份证号：<input type="text" name="certNo" maxlength="18" data-required="1" pattern="^(\d{15}$|\d{18}$|\d{17}(\d|X|x))$" data-message="请输入正确的身份证号码"><span></span>
                                </div>

                                <div class="img-box">
                                    <div class="box">
                                        <div class="box-title">
                                            <p>身份证正反面照</p>
                                            <img class="icon-img J_Show" src="https://img.guahao.com/front/hps-pc-static/img/icon-explain.png">
                                            <div class="example J_Example">
                                                <p>示例：身份证正反面照</p>
                                                <img src="https://img.guahao.com/front/hps-pc-static/img/example-card1.jpg" alt="">
                                            </div>
                                        </div>

                                        <input type="hidden" class="hiddenValue" name="idCardImg" value="">
                                        <div class="img-wrapper">
                                            <div class="button-box">
                                                <a href="javascript:;" class="J_Btn updateImg select-file">
                                                    <i class="addImg"></i>
                                                    <input type="file" name="certificate1" class="upload-input J_CertUpload sfz">
                                                    <p class="box-text">点击上传身份证正面照</p>
                                                </a>
                                                <a href="javascript:;" class="del J_Del">删除</a>
                                                <div class="cert-preview g-clear J_CertPreview"></div>
                                            </div>
                                        </div>
                                        <div class="img-wrapper">
                                            <div class="button-box">
                                                <a href="javascript:;" class="J_Btn updateImg select-file">
                                                    <i class="addImg"></i>
                                                    <input type="file" name="certificate1" class="upload-input J_CertUpload sfz">
                                                    <p class="box-text">点击上传身份证反面照</p>
                                                </a>
                                                <a href="javascript:;" class="del J_Del">删除</a>
                                                <div class="cert-preview g-clear J_CertPreview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <div class="box-title">
                                            <p>医师执业证(首页+个人信息页)</p>
                                            <img class="icon-img J_Show" src="https://img.guahao.com/front/hps-pc-static/img/icon-explain.png">
                                            <div class="example J_Example">
                                                <p>示例：医师执业证照</p>
                                                <img src="https://img.guahao.com/front/hps-pc-static/img/example-card2.jpg" alt="">
                                            </div>
                                        </div>
                                        <input type="hidden" class="hiddenValue" name="doctorRegImg" value="">
                                        <div class="img-wrapper">
                                            <div class="button-box">
                                                <a href="javascript:;" class="J_Btn updateImg select-file">
                                                    <i class="addImg"></i>
                                                    <input type="file" name="certificate1" class="upload-input J_CertUpload">
                                                    <p class="box-text">点击上传证件照</p>
                                                </a>
                                                <a href="javascript:;" class="del J_Del">删除</a>
                                                <div class="cert-preview g-clear J_CertPreview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <input type="hidden" class="hiddenValue" name="doctorQualifImg" value="">
                                        <div class="box-title">
                                            <p>医师资格证(首页+毕业院校页)</p>
                                            <img class="icon-img J_Show" src="https://img.guahao.com/front/hps-pc-static/img/icon-explain.png">
                                            <div class="example J_Example">
                                                <p>示例：医师资格证照</p>
                                                <img src="https://img.guahao.com/front/hps-pc-static/img/example-card3.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="img-wrapper">
                                            <div class="button-box">
                                                <a href="javascript:;" class="J_Btn updateImg select-file">
                                                    <i class="addImg"></i>
                                                    <input type="file" name="certificate1" class="upload-input J_CertUpload">
                                                    <p class="box-text">点击上传证件照</p>
                                                </a>
                                                <a href="javascript:;" class="del J_Del">删除</a>
                                                <div class="cert-preview g-clear J_CertPreview"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box">
                                        <input type="hidden" name="jobCertImg" class="hiddenValue" value="">
                                        <div class="box-title">
                                            <p>专业技术资格证（职称证）</p>
                                            <img class="icon-img J_Show" src="https://img.guahao.com/front/hps-pc-static/img/icon-explain.png">
                                            <div class="example J_Example">
                                                <p>示例：专业技术资格证照</p>
                                                <img src="https://img.guahao.com/front/hps-pc-static/img/example-card4.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="img-wrapper">
                                            <div class="button-box">
                                                <a href="javascript:;" class="J_Btn updateImg select-file">
                                                    <i class="addImg"></i>
                                                    <input type="file" name="certificate1" class="upload-input J_CertUpload">
                                                    <p class="box-text">点击上传证件照</p>
                                                </a>
                                                <a href="javascript:;" class="del J_Del">删除</a>
                                                <div class="cert-preview g-clear J_CertPreview"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </form>
            </div>
            <div class="g-tab g-pending ">
                <div class="tab-title">待处理事项<i><a href="javascript:;" class="J_RefreshData" monitor="doctorweb,hmpg_willdo,refresh"><b></b>刷新</a></i></div>
                <div class="tab-body ">
                    <div class="tab-menu qkzx">
                        <a target="_blank" href="javascript:;" monitor="doctorweb,hmpg_eventmod,alldept_ask">
                            <div class="top"><i class="icon-i"></i><span class="title">全科咨询</span></div>
                            <div class="content">
                                    <p class="not-open">暂未开通</p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-menu twwz">
                        <a target="_blank" href="javascript:;" monitor="doctorweb,hmpg_eventmod,picask">
                            <div class="top"><i class="icon-i"></i><span class="title">图文问诊</span></div>
                            <div class="content">
                                        <p class="not-open">暂未开通</p>
                            </div>
                        </a>
                    </div>
                    <div class="tab-menu spwz">
                        <a target="_blank" href="javascript:;" monitor="doctorweb,hmpg_eventmod,vpask">
                            <div class="top"><i class="icon-i"></i><span class="title">视话问诊</span></div>
                            <div class="content">
                                    <p class="not-open">暂未开通</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
				            <div class="g-tab gp-qkcollege">
                <div class="tab-title">全科学院<i><a target="_blank" href="https://doctor.guahao.com/webqk/index" monitor="doctorweb, institute, enter">进入全科学院&gt;&gt;</a></i></div>
                <div class="tab-body">
                    <ul class="qk-teacher">
                            <li class="list-teacher">
                            <a href="https://doctor.guahao.com/webqk/lesson/detail?lessonId=CFADB90728479F32" target="_blank" class="t-box" monitor="doctorweb, institute, lesson" monitor-lesson-id="CFADB90728479F32" monitor-click-rank="0" >
                                <div class="search-banner">
                                    <img src="https://kano.guahao.cn/b1t13486599?resize=240x160" alt="">
                                    <div class="tips">全科医生岗位胜任力提升全科思维训练和实践</div>
                                </div>
                                <p class="t-header"><i class="icon-teacher"></i>全科学院特约讲师</p>
                                <p class="t-detail">
								扈峻峰	副主任医师	杭州市江干区凯旋街道社区卫生服务中心

                                </p>
                            </a>
                        </li>
                                <!-- 第二个li增加margin -->
                            <li class="list-teacher" style="margin:0 30px;">
                            <a href="https://doctor.guahao.com/webqk/lesson/detail?lessonId=D3FB2C8D4F997566" target="_blank" class="t-box" monitor="doctorweb, institute, lesson" monitor-lesson-id="D3FB2C8D4F997566" monitor-click-rank="1" >
                                <div class="search-banner">
                                    <img src="https://kano.guahao.cn/kks13532979?resize=240x160" alt="">
                                    <div class="tips">全科医学的人文精神</div>
                                </div>
                                <p class="t-header"><i class="icon-teacher"></i>全科学院特约讲师</p>
                                <p class="t-detail">
								杨秉辉  教授  复旦大学附属中山医院全科医学科
                                </p>
                            </a>
                        </li>
                            <li class="list-teacher">
                            <a href="https://doctor.guahao.com/webqk/lesson/detail?lessonId=83B3309E26837D53" target="_blank" class="t-box" monitor="doctorweb, institute, lesson" monitor-lesson-id="83B3309E26837D53" monitor-click-rank="2" >
                                <div class="search-banner">
                                    <img src="https://kano.guahao.cn/MGu13501897?resize=240x160" alt="">
                                    <div class="tips">上海全科住院医师规范化培训督导结果与改进</div>
                                </div>
                                <p class="t-header"><i class="icon-teacher"></i>全科学院特约讲师</p>
                                <p class="t-detail">
								张勘 	处长 	上海市卫生计生委科教处

                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="g-tab g-insurance">
                <div class="tab-title">行医保障<i><a href="https://doctor.guahao.com/auth/xywy/index" monitor="doctorweb,hmpg_guarantee,more">更多</a></i></div>
                <div class="tab-body">
                    <div class="insurance-detail">
                        <div class="title title-1">
                            <h1 class="name">医生职业风险保障</h1>
                            <p class="tip">——弥补传统医责险不足</p>
                        </div>
                        <div class="detail">
                            <p>门诊、手术及线上咨询因医疗责任发生的经济赔偿</p>
                            <b>年度最高累计责任限额可至200万</b>
                            <span>￥20/份</span>
                        </div>
                        <a href="https://doctor.guahao.com/auth/xywy/buyindex" class="new-common-btn buy-button" monitor="doctorweb,hmpg_guarantee,buy_careersafe" monitor-click-rank="0">购买</a>
                    </div>
                    <div class="insurance-detail">
                        <div class="title title-2">
                            <h1 class="name">法律咨询及律师费用保障</h1>
                            <p class="tip">——为您全家提供综合性法律保障</p>
                        </div>
                        <div class="detail">
                            <p>对个人及其家庭成员因发生特定保险情形而产生的一审民事诉讼或总裁的法律风险，提供全面综合的法律保障6，000元起。</p>
                            <b>免赔率15%，含2次免费法律咨询</b>
                            <span>￥60/份</span>
                        </div>
                        <a href="https://doctor.guahao.com/auth/xywy/buyindex" class="new-common-btn buy-button" monitor="doctorweb,hmpg_guarantee,purchase" monitor-click-rank="1">购买</a>
                    </div>
                    <div class="insurance-detail">
                        <div class="title title-3">
                            <h1 class="name">意外伤害保障</h1>
                            <p class="tip">——贴心相随</p>
                        </div>
                        <div class="detail">
                            <p>因遭受意外伤害而残疾或者身故的损失赔偿2.5万元起</p>
                            <b>年度最高累计至125万 (50份）</b>
                            <span>￥20/份</span>
                        </div>
                        <a href="https://doctor.guahao.com/auth/xywy/buyindex" class="new-common-btn buy-button" monitor="doctorweb,hmpg_guarantee,purchase" monitor-click-rank="2">购买</a>
                    </div>
                </div>
            </div>
            <!-- start practiceModal -->
            <div class="new-common-modal practice-modal hide">
                <div class="confirm-mask"></div>
                <div class="container J_Container">
                    <h1>
                        <div class="header">医师执业证书</div>
                        <i class="close-btn"></i>
                    </h1>
                    <div class="content">
                        <div class="norm-style">
                            <div class="norm-detail">
                                <p style="color:#333;">规范样式</p>
                                <p>1.需满足上传规范1、2内的所需内容</p>
                                <p>2.资料各项信息清晰可见，便于识别</p>
                                <p>3.建议横屏拍摄，以满足照片上传效果</p>
                                <p>4.最多可上传4张相关认证材料</p>
                            </div>
                            <div class="norm-photo">
                                <div class="photo-box">
                                    <img src="https://img.guahao.com/front/hps-pc-static/img/personal-web/index/example-photo-04.png" alt="医师执业证书" class="J_PreviewImg">
                                    <span>规范样式1</span>
                                </div>
                                <div class="photo-box">
                                    <img src="https://img.guahao.com/front/hps-pc-static/img/personal-web/index/example-photo-05.png" alt="医师执业证书" class="J_PreviewImg">
                                    <span>规范样式2</span>
                                </div>
                            </div>
                        </div>
                        <div class="upload-photo">
                            <p style="color:#333;">请上传您的医师执业证</p>
                            <div class="upload-operate">
                                <div class="add-box">
                                    <i class="icon-add J_Icon"></i>
                                    <input type="file" name="upload_file" class="upload-file J_AddPhoto">
                                </div>
                                <div class="add-detail">
                                    <p class="info">选择你需要上传的图片</p>
                                    <p class="type">仅支持JPG、GIF、PNG、JPEG、BMP格式，建议小于2M。（最多可上传4张图片）</p>
                                </div>
                                <div class="photo-box">
                                    <div class="list-photo"></div>
                                    <div class="list-photo"></div>
                                    <div class="list-photo"></div>
                                    <div class="list-photo"></div>
                                    <div class="add-list J_Insertphoto"></div>
                                </div>
                            </div>
                        </div>
                        <div class="submit J_SubmitPra">提交认证</div>
                    </div>
                </div>
                <div id="big-img" class="hide">
                    <a href="javascript:;" class="gm-close"></a>
                    <ul id="slider3" >
                        <li><span><img src="" /></span></li>
                    </ul>
                </div>
            </div>
            <!-- end practiceModal -->
        </div>
    </div>
    <!-- end of .gc-mask -->
</div>



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
		loginId:'DK5vQrU2ewNdSlDVH8u54tDaWKQpCMfwf0XiUR8i/MCw7xc22bjSMw==',
		perSessiionId:'154303338518820178067151',
		shortSessionId:'',
		referurl:'https://doctor.guahao.com/auth/doctor/improveinfo',
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