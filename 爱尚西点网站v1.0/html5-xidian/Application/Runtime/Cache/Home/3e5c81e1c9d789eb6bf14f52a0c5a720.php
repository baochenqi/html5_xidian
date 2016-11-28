<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>商城内容页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta charset="utf-8">
    <link rel="stylesheet" href="/html5-xidian/Public/home/css/bootstrap.min.css">
    <script src="/html5-xidian/Public/home/js/jquery.js"></script>    
    <script src="/html5-xidian/Public/home/js/bootstrap.min.js"></script>
    <script src="/html5-xidian/Public/home/js/homeEdit.js"></script>
    <style type="text/css">
      *{
        font-family: "微软雅黑";
      }
      .one{
        height:50px;
        width:1170px;
        background-image:url(/html5-xidian/Public/home/images/Shopping_content_bg2.png);
        margin-top:30px;
      }
      body{
      	background-image:url(/html5-xidian/Public/home/images/bg.png);
      }
    </style>
  </head>
  <body>
   <div class="header" style="height: 50px;">
  
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: white;">
      <div class="navbar-header">
         <a href="#"><img src="/html5-xidian/Public/home/images/logo1.png"></a>
      </div>
      
      <div class="collapse navbar-collapse" >
        <ul class="nav navbar-nav navbar-left" style="position: absolute;left: 40px;top: -10px;">
          <li>
             <a href="#"><img src="/html5-xidian/Public/home/images/logo2.png"></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" >
          <li>
            <a href="#" style="padding: 15px 10px 15px 0px;">注册</a>
          </li>
          <li>
            <a href="#" style="padding: 15px 50px 15px 0px;">登录</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

   <div>
    <!--内容-->
    <div class="content">
    <!--导航栏-->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-image: url(/html5-xidian/Public/home/images/bg.png);border-bottom: 1px solid #C0C0C0;">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="font-weight: bold;color: black;">
            <li class="dropdown">
               <a href="#">首页</a>
            </li>
           <li class="dropdown">
               <a href="#" class="dropdown-toggle">美食鉴赏</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
                <li>
                   <a href="#">法式菜肴</a>
                </li>
                <li>
                   <a href="#">英式菜肴</a>
                </li>
                <li>
                   <a href="#">美式菜肴</a>
                </li>
               
                <li>
                   <a href="#">意式菜肴</a>
                </li>
                 <li>
                   <a href="#">俄式菜肴</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle">美食DIY</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
         
                <li>
                   <a href="#">发布美食</a>
                </li>

              </ul>
            </li>
           <li class="dropdown">
               <a href="#" class="dropdown-toggle">食材商城</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
                <li>
                   <a href="#">用具</a>
                </li>
                <li>
                   <a href="#">食材</a>
                </li>
            
              </ul>
            </li>
          <li class="dropdown">
               <a href="#" class="dropdown-toggle">个人中心</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
                <li>
                   <a href="#">修改信息</a>
                </li>
              
                <li>
                   <a href="#">修改密码</a>
                </li>
                 <li>
                   <a href="#">我的购物车</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle">关于我们</a>
            </li>
            <li>
              <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" />
                </div>
                <button type="submit" class="btn btn-default">搜索</button>
              </form>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="row-fluid">
        <div class="span4">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">首页</a>
                </li>
                <li class="active">
                   食材商城
                </li>
            </ul>
        </div>
    </div>
 </div>
 <div style="background-image: url(/html5-xidian/Public/home/images/Shopping_content_bg1.jpg);padding-top:80px">
 	<div class="container" >
  		<div class="row clearfix">
    		<div class="col-md-12 column">
      			<div class="row clearfix">
        			<div class="col-md-6 column">
          				<img alt="140x140" src="/html5-xidian/Public/home/images/Shopping_content.jpg" style="padding-left:50px"/>
        			</div>
        			<div class="col-md-6 column">
           				<font style="font-size:20px;font-weight:bold;">百钻 法国黄油200g无盐发酵黄油 烘焙原料</font>
          				<div class="form-group" style="padding-top:20px">
                            <label >相关信息：</label>
                                <span>法国进口，巴士灭菌，未添加食用盐 【温馨提示：周末节假日期间暂停发货，敬请谅解哦！若有其他疑问可致电服务热线400-8858-560】</span>
                        </div>
          				<div class="form-group" style="padding-top:20px;">
                            <label>价格：</label>
                            <span>￥16.80</span> 
                        </div>   
                        <div class="form-group" style="padding-top:20px">
                            <label>数量：</label>
                            <input id="min" name="" type="button" value="-" />  
                            <input id="text_box" name="" type="text" value="1"style="width:30px;"/>  
                            <input id="add" name="" type="button" value="+" />  
  
                            <script>
								$(document).ready(function(){
								//获得文本框对象
   									var t = $("#text_box");
									//初始化数量为1,并失效减
									$('#min').attr('disabled',true);
    								//数量增加操作
   			 							$("#add").click(function(){    
        									t.val(parseInt(t.val())+1)
        									if (parseInt(t.val())!=1){
            									$('#min').attr('disabled',false);
        									}
      
    								}) 
    								//数量减少操作
    								$("#min").click(function(){
        								t.val(parseInt(t.val())-1);
        								if (parseInt(t.val())==1){
            								$('#min').attr('disabled',true);
        								}
      
   	 								})
   
								});
							</script>  
                            </div>                                
          					<div class="row clearfix">
            					<div class="col-md-6 column">
               						<button type="button" class="btn btn-default">立即购买</button>
            					</div>
            					<div class="col-md-6 column">
               						<button type="button" class="btn btn-default">加入购物车</button>
            					</div>
          					</div>
        				</div>
      				</div>
   		 		</div>
      			<div class="row clearfix">
        			<div class="col-md-12 column">
              			<div class="one">
              				<span style="font-size:20px;font-weight:bold;color:white">食品商城</span>
              			</div>
        			</div>
      			</div>
      			<div class="row clearfix">
        			<div class="col-md-12 column">
                      <div id="myCarousel" class="carousel slide pad_010 b_k" data-ride="carousel">
              		  <!-- 轮播（Carousel）指标 -->
              		  <ol class="carousel-indicators">
                	  	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  		<li data-target="#myCarousel" data-slide-to="1"></li>
                  		<li data-target="#myCarousel" data-slide-to="2"></li>
              		  </ol>   
              		  <!-- 轮播（Carousel）项目 -->
              		  <div class="carousel-inner bor_btm">
                  	  	<div class="item active" >
                      		<div class="pic" style="padding-left:18px">
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_1.jpg" >
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_2.jpg" >
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_3.jpg" >
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_4.jpg" >
                      		</div>
                  		</div>
                  		<div class="item">
                      		<div class="pic" style="padding-left:18px">
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_1.jpg" >
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_2.jpg" >
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_3.jpg" >
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_4.jpg" >
                      		</div>
                  		</div>
                  		<div class="item">
                      		<div class="pic" style="padding-left:18px">
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_1.jpg" >
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_2.jpg" >
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_3.jpg" >
                          		<img src="/html5-xidian/Public/home/images/Shopping_content_4.jpg" >
                      		</div>
                  		</div>
              		</div>
              <!-- 轮播（Carousel）导航 -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>      
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<div class="footer" style="background-image: url(/html5-xidian/Public/home/images/bg.png);">
      <div class="row clearfix">
        <div class="col-md-6 column">
        </div>
        <div class="col-md-3 column">
        </div>
        <div class="col-md-3 column">
        </div>
      </div>
      <div class="row clearfix" style="padding: 30px 30px 10px 30px;">
        <div class="col-md-3 column" style="padding: 0px 10px 0px 70px;border-right: 1px solid #C0C0C0;">
          <a href="#"><img src="/html5-xidian/Public/home/images/qrc.jpg"></a>
        </div>
        <div class="col-md-5 column" style="padding: 0px 50px;line-height: 260%;">
        </br>
          <p>爱尚美食，西餐美食菜谱分享网站。850000道菜谱，625000条美食日记，7500000位美食达人，每天都有新分享，拥有最实用的美食、菜谱、食谱的做法，同是还有聚餐百万美食爱好者的美食家社区，欢迎加入！</p>
        </div>
        <div class="col-md-4 column" style="padding: 10px 20px;">
        </br>
          <p style="line-height: 260%;">联系方式：xxxx</br>邮箱：xxxx</br>地址：xxxx</br></p>
        </div>
      </div>

      <div style="border-top: 1px solid #C0C0C0;border-bottom: 1px solid #C0C0C0;text-align: center;">
        <a>Home</a> | <a>About</a> | <a>Service</a> | <a>Products</a> | <a>Contact</a>
      </div>
    </div>
  </div>
 </body>
</html>