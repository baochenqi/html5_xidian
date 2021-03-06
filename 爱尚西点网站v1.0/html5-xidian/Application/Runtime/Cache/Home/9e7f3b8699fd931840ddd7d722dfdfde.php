<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
 	<meta charset="utf-8">
 	  <link rel="stylesheet" href="__PUBLISH__/home/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLISH__/home/css/amazeui.css"/>
    <script src="__PUBLISH__/home/js/jquery.js"></script>    
    <script src="__PUBLISH__/home/js/bootstrap.min.js"></script>
    <script src="__PUBLISH__/home/js/amazeui.min.js"></script>
    <script src="__PUBLISH__/home/js/homeEdit.js"></script>
    <script src="__PUBLISH__/home/js/register_form.js"></script>
 	<style type="text/css">
 		body{
 			overflow-x: hidden;
      font: normal 100% Helvetica, Arial, sans-serif;
 		}
 		ul li{
 			list-style: none;
 		}
 		.font{
 			writing-mode:tb-rl;
 		}
    .font-a{
      font-size:2em;
      font-family:仿宋;
      font-weight:bold;
      text-align:center;
    }
    .dropdown-menu{
      text-align: right;min-width: 100px;
    }
    .font-b{
      font-size:1.5em;
      font-family:仿宋;
     
      text-align:left;
    }
    .font-c{
      font-size:1.2em;
      font-family:仿宋;
     
      text-align:left;
    }
 		/*.col-md-12 img{
 			width:1360px;
 			height: 480px;
 		}*/
 		.col-md-4 img{
 			width:325px;
 			height: 396px;
 		}
 		
 		.title-a {
 			font-size:1.2em;
      font-family:仿宋;
 			font-weight:bold;
 		}
    .nav navbar-nav navbar-right{
      padding: 15px 10px 15px 0px;
    }
 		.content-a{
 			height:40px;
 			background-color:black;
 			padding:10px;
 			font-weight:bold;
 			color: white;
 		}
 		.col-md-2 img{
 			width:196px;
 			height: 180px;
 		}
 	</style>
</head>
<body>
<!--页头-->
  <div class="header" style="height: 50px;">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-color: white;">
      <div class="navbar-header">
         <a href="#"><img src="__PUBLISH__/home/images/logo1.png"></a>
      </div>
      
      <div class="collapse navbar-collapse" >
        <ul class="nav navbar-nav navbar-left" style="position: absolute;left: 40px;top: -10px;">
          <li>
             <a href="#"><img src="__PUBLISH__/home/images/logo2.png"></a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" >
          <li>
            <a href="/html5-xidian/home.php/Home/login/register.html" >注册</a>
          </li>
          <li>
            <a href="/html5-xidian/home.php/Home/login/login.html" >登录</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!--背景-->
  <div style="background-image: url(__PUBLISH__/home/images/bg.png);">
    <!--内容-->
    <div class="content">
    <!--导航栏-->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-image: url(__PUBLISH__/home/images/bg.png);border-bottom: 1px solid #C0C0C0;">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="font-weight: bold;color: black;">
            <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/index/index.html">首页</a>
            </li>
           <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/food/french_cate.html" class="dropdown-toggle">美食鉴赏</a>
              <ul class="dropdown-menu" >
                <li>
                   <a href="/html5-xidian/home.php/Home/food/french_cate.html">法式菜肴</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/food/uk_cate.html">英式菜肴</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/food/us_cate.html">美式菜肴</a>
                </li>
               
                <li>
                   <a href="/html5-xidian/home.php/Home/food/italy_cate.html">意式菜肴</a>
                </li>
                 <li>
                   <a href="/html5-xidian/home.php/Home/food/russian_cate.html">俄式菜肴</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/PUBLISH/PUBLISH.html" class="dropdown-toggle">美食DIY</a>
              <ul class="dropdown-menu" >
         
                <li>
                   <a href="/html5-xidian/home.php/Home/PUBLISH/PUBLISH.html">发布美食</a>
                </li>

              </ul>
            </li>
           <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/shop/list.html" class="dropdown-toggle">食材商城</a>
              <ul class="dropdown-menu" >
                <li>
                   <a href="/html5-xidian/home.php/Home/shop/list.html">用具</a>
                </li>
                <li>
                   <a href="/html5-xidian/home.php/Home/shop/list.html">食材</a>
                </li>
            
              </ul>
            </li>
          <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/users/index.html" class="dropdown-toggle">个人中心</a>
              <ul class="dropdown-menu" >
                <li>
                   <a href="/html5-xidian/home.php/Home/users/reset_information.html">修改信息</a>
                </li>
              
                <li>
                   <a href="/html5-xidian/home.php/Home/users/reset_password.html">修改密码</a>
                </li>
                 <li>
                   <a href="/html5-xidian/home.php/Home/cart/cart.html">我的购物车</a>
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
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<ul class="breadcrumb">
				<li>
					<a href="/html5-xidian/home.php/Home/index/index.html">首页</a> 
				</li>
				<li>
					<a href="/html5-xidian/home.php/Home/food/french_cate.html">美食鉴赏</a> 
				</li>
				<li>
					<a href="/html5-xidian/home.php/Home/food/french_cate.html">法式美食</a> 
				</li>
				<li class="active">
					当前
				</li>
			</ul>
		</div>
	</div>
	<!-- 美食图片 -->
	<div class="row">
	<br/><br/>	<br/>
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<img alt="Bootstrap Image Preview" src="__PUBLISH__/home/images/food-content-0.png" />
		</div>
		<!-- 制作步骤 -->
		<div class="col-md-7">
			
				<div class="font-a">
					草莓慕斯
			</div>
			
			<br/><br/>
			<div>
				<div class="col-md-11">
        <div class="col-md-1"></div>
            <div class="col-md-3">
					<div class="font-b">
					  菜品食材：
            </div>
				 </div>
         <div class="col-md-8">
			    <div class="font-c">
					 3汤匙糖,2茶杯开水<br/>1盒草莓（洗净切丁）<br/>2盒草莓味果冻粉，1罐炼奶，1罐奶油
				   </div>
            </div>
				</div>
				  <div class="col-md-1"></div>
			    <br /> <br /><br /> <br />
			</div>
			<div>
				<div class="col-md-11">
         <div class="col-md-1"></div>
            <div class="col-md-3">
					<div class="font-b">
					  操作步骤：
				  </div>
          </div>
          <div class="col-md-8">
			    <div class="font-c">
					 1、将糖和草莓混合留用；<br/>2、开水把果冻粉调融，果冻，炼奶，奶油倒进搅拌器。打成浆；<br/>3、在一容器中放入草莓丁，然后倒进奶浆；<br/>4、放进冰箱冷冻3个小时以上即成 
				   </div>
            </div>

				</div>
				  <div class="col-md-1"></div>
			    <br /> <br />
			</div>
			<br/><br/><br/><br/><br/><br/><br/><br/>
				<div class="col-md-2">
				</div>
				<div class="col-md-10">
					
          <div class="title-a">
              <div class="col-md-1"></div>
              <div class="col-md-3 ">
				         收藏
                 </div> <div class="col-md-8">分享</div>
         </div>
        

				</div>;&nbsp;
		</div>
	</div>
	<br/><br/><br/>
	<div class="row">
		<div class="content-a">
			<font face="仿宋" size="5px" >你可能需要：</font>
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
                      	<div class="col-md-1"></div>
                         <div class="col-md-2"> <img src="__PUBLISH__/home/images/food-UK-1.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-2.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-3.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-4.png" ></div>
                           <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-5.png" ></div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>
                  <div class="item">
                       <div class="pic" style="padding-left:18px">
                      	<div class="col-md-1"></div>
                         <div class="col-md-2"> <img src="__PUBLISH__/home/images/food-UK-1.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-2.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-3.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-4.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-5.png" ></div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>
                  <div class="item">
                       <div class="pic" style="padding-left:18px">
                      	<div class="col-md-1"></div>
                         <div class="col-md-2"> <img src="__PUBLISH__/home/images/food-UK-1.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-2.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-3.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-4.png" ></div>
                          <div class="col-md-2"><img src="__PUBLISH__/home/images/food-UK-5.png" ></div>
                          <div class="col-md-1"></div>
                      </div>
                  </div>
              </div>
              <!-- 轮播（Carousel）导航 -->
              <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
              <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>      
          </div>
        </div>
      </div>

	<div class="row">
		<div class="content-a">
			<font face="仿宋" size="5px" >商品评论：</font>
		</div>
	</div>
	<br/><br/><br/><br/>
	<div class="row">
		<div class="col-md-11">
				<ul class="am-comment-list">
		<li class="am-comment am-comment-highlight">
	  		<a href="#">
	    		<img src="__PUBLISH__/home/images/food-UK-1.png" alt="头像" class="am-comment-avatar" width="48" height="48"/>
	  		</a>
	  		<div class="am-comment-main">
	    		<header class="am-comment-hd">
			      	<div class="am-comment-meta">
			        	<a href="#link-to-user" class="am-comment-author">小明</a>
			        	评论于 <time datetime="2016-07-27T04:54:29-07:00">2016-7-12 15:30</time>
			      	</div>
			    </header>
			    <div class="am-comment-bd">
			    	威武！
			    </div>
	  		</div>
		</li>
		<br/>
		<li class="am-comment am-comment-highlight">
	  		<a href="#">
	    		<img src="__PUBLISH__/home/images/food-UK-1.png" alt="头像" class="am-comment-avatar" width="48" height="48"/>
	  		</a>
	  		<div class="am-comment-main">
	    		<header class="am-comment-hd">
			      	<div class="am-comment-meta">
			        	<a href="#link-to-user" class="am-comment-author">xxx</a>
			        	评论于 <time datetime="2016-07-27T04:54:29-07:00">2016-7-12 15:30</time>
			      	</div>
			    </header>
			    <div class="am-comment-bd">
			    	xxxxxxx！
			    </div>
	  		</div>
		</li>
		<br/>
		<li class="am-comment am-comment-highlight">
	  		<a href="#">
	    		<img src="__PUBLISH__/home/images/food-UK-1.png" alt="头像" class="am-comment-avatar" width="48" height="48"/>
	  		</a>
	  		<div class="am-comment-main">
	    		<header class="am-comment-hd">
			      	<div class="am-comment-meta">
			        	<a href="#link-to-user" class="am-comment-author">xxx</a>
			        	评论于 <time datetime="2016-07-27T04:54:29-07:00">2016-7-12 15:30</time>
			      	</div>
			    </header>
			    <div class="am-comment-bd">
			    	不错不错！
			    </div>
	  		</div>
		</li>
	</ul>
	</div>
	<div class="col-md-1"></div>
			
	
	</div>
</div>			
	<br/><br/><br/>
	<div class="row">
		<div class="col-md-8">
		</div>
		<div class="col-md-4">
			<ul class="pagination">
				<li>
					<a href="#">上一页</a>
				</li>
				<li>
					<a href="#">1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li>
					<a href="#">3</a>
				</li>
				<li>
					<a href="#">4</a>
				</li>
				<li>
					<a href="#">5</a>
				</li>
				<li>
					<a href="#">下一页</a>
				</li>
			</ul>
		</div>
	</div>
	<br/>
	<div class="row">
		<div class="footer">
      		<!-- <div class="row clearfix">
        		<div class="col-md-6 column">
       		    </div>
                <div class="col-md-3 column">
                </div>
                <div class="col-md-3 column">
                </div>
            </div> -->
     <div class="row clearfix" style="padding: 30px 30px 10px 30px;">
         	<div class="col-md-3 column" style="padding: 0px 10px 0px 70px;border-right: 1px solid #C0C0C0;">
          		<a href="#"><img src="__PUBLISH__/home/images/qrc.jpg"></a>
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
</div>
</div>

</body>
</html>