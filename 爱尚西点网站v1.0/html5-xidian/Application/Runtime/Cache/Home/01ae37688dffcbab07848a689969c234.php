<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <title>我的首页</title>
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
    </style>
  </head>
  <body>
  <!--页头-->
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
            <a href="/html5-xidian/home.php/Home/login/register.html" style="padding: 15px 10px 15px 0px;">注册</a>
          </li>
          <li>
            <a href="/html5-xidian/home.php/Home/login/login.html" style="padding: 15px 50px 15px 0px;">登录</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>

  <!--背景-->
  <div style="background-image: url(/html5-xidian/Public/home/images/bg.png);">
    <!--内容-->
    <div class="content">
    <!--导航栏-->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="background-image: url(/html5-xidian/Public/home/images/bg.png);border-bottom: 1px solid #C0C0C0;">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right" style="font-weight: bold;color: black;">
            <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/index/index.html">首页</a>
            </li>
           <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/food/french_cate.html" class="dropdown-toggle">美食鉴赏</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
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
               <a href="/html5-xidian/home.php/Home/public/public.html" class="dropdown-toggle">美食DIY</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
         
                <li>
                   <a href="/html5-xidian/home.php/Home/public/public.html">发布美食</a>
                </li>

              </ul>
            </li>
           <li class="dropdown">
               <a href="/html5-xidian/home.php/Home/shop/list.html" class="dropdown-toggle">食材商城</a>
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
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
              <ul class="dropdown-menu" style="text-align: right;min-width: 100px;">
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

      <!---->
      <div style="padding: 0px 36px;">
        <img src="/html5-xidian/Public/home/images/personal_banner.jpg">
      </div>
      <div style="position: absolute;top: 370px;left: 100px;">
        <img src="/html5-xidian/Public/home/images/avater.jpeg" class="img-circle" />
        <b style="position: relative;top: 10px;left: 5px;">这里放昵称</b>
      </div>
      <!---->
      <div class="row clearfix" style="padding: 40px 0px;">
        <div class="col-md-3 column">
           <ul style="list-style-type: none;text-align: center;font-size: 17px;">
             <li style="padding: 10px;background-color: #C0C0C0;">个人中心</li>
             <li style="padding: 10px;background-color: white;"><a href="/html5-xidian/home.php/Home/users/index.html">我的首页</a></li>
             <li style="padding: 10px;background-color: white;"><a href="/html5-xidian/home.php/Home/users/reset_information.html">修改信息</a></li>
             <li style="padding: 10px;background-color: white;"><a href="/html5-xidian/home.php/Home/users/reset_password.html">修改密码</a></li>
           </ul>
        </div>
        <div class="col-md-9 column">
        <!--我的收藏-->
          <div style="background-color: white;border-radius: 1px;margin: 0px 45px 0px 20px;height: 260px;">
            <div style="padding: 15px 20px;">
              <label style="font-size: 16px;">我的收藏</label>
            </div>
            <div style="padding: 0px 20px;">
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
            </div>
            </br>
          </div>
          </br>

          <!--我的发布-->
          <div style="background-color: white;border-radius: 1px;margin: 0px 45px 0px 20px;height: 260px;">
            <div style="padding: 15px 20px;">
              <label style="font-size: 16px;">我的发布</label>
            </div>
            <div style="padding: 0px 20px;">
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
              <div class="col-sm-2">
                <img src="/html5-xidian/Public/home/images/personal_pic1.jpg">
                <div style="padding: 3px 25px;">
                  <h5>餐点</h5>
                  <p>by&nbsp;作者</p>
                </div>
              </div>
            </div>
            </br>
          </div>
          </br>

          <!--我的购物车-->
          <div style="background-color: white;border-radius: 1px;margin: 0px 45px 0px 20px;height: 180px;">
            <div style="padding: 15px 20px;">
              <label style="font-size: 16px;">我的购物车</label>
            </div>
            <div style="padding: 0px 20px;">
              <div class="col-sm-4">
                <img src="/html5-xidian/Public/home/images/personal_pic2.jpg">
                <div style="display: inline;">
                  <b>【菲力牛排套装8份装】</b>
                </div>
              </div>
              <div class="col-sm-4">
                <img src="/html5-xidian/Public/home/images/personal_pic2.jpg">
                <div style="display: inline;">
                  <b>【菲力牛排套装8份装】</b>
                </div>
              </div>
              <div class="col-sm-4">
                <img src="/html5-xidian/Public/home/images/personal_pic2.jpg">
                <div style="display: inline;">
                  <b>【菲力牛排套装8份装】</b>
                </div>
              </div>
            </div>
            </br>
          </div>
        </div>
      </div>

  <!--页脚-->
    <div class="footer">
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