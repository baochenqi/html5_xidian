<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>商城列表页</title>    
  <link href="/html5-xidian/Public/home/css/Shopping_list.css" charset="UTF-8" rel="stylesheet" type="text/css" media="screen">
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
            <a href="login.html" style="padding: 15px 10px 15px 0px;">注册</a>
          </li>
          <li>
            <a href="register.html" style="padding: 15px 50px 15px 0px;">登录</a>
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
  <div class="one clearfix">
    <div class="two clearfix">
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="百钻 法国黄油 200g 无盐发酵 黄油 烘焙原料" src="/html5-xidian/Public/home/images/Shopping_list_1.jpg">
                </a>       
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="百钻 法国黄油 200g 无盐发酵 黄油 烘焙原料">
                    <h3>百钻 法国黄油 200g 无盐发酵 黄油 烘焙原料</h3>
                </a>
                <div class="six">
                    <span>￥16.80</span>                   
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>

        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="鲜动生活 新西兰进口羔羊腿4斤单只装 整只生羊腿" src="/html5-xidian/Public/home/images/Shopping_list_2.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="鲜动生活 新西兰进口羔羊腿4斤单只装 整只生羊腿">
                    <h3>鲜动生活 新西兰进口羔羊腿4斤单只装 整只生羊腿</h3>
                </a>
                <div class="six">
                    <span>￥159.00</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="COOK100奥尔良腌料70g*5包每包可腌制2斤食材" src="/html5-xidian/Public/home/images/Shopping_list_3.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="COOK100奥尔良腌料70g*5包每包可腌制2斤食材">
                    <h3>COOK100奥尔良腌料70g*5包每包可腌制2斤食材</h3>
                </a>
                <div class="six">
                    <span>￥29.90</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>         
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="澳洲菲力牛排组合套餐10片装130g/片 澳洲原料进口" src="/html5-xidian/Public/home/images/Shopping_list_4.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="澳洲菲力牛排组合套餐10片装130g/片 澳洲原料进口">
                    <h3>澳洲菲力牛排组合套餐10片装130g/片 澳洲原料进口</h3>
                </a>
                <div class="six">
                    <span>￥109.00</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>     
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="雀巢 淡奶油 鲜奶油250ml 烘焙原料" src="/html5-xidian/Public/home/images/Shopping_list_5.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="雀巢 淡奶油 鲜奶油250ml 烘焙原料">
                    <h3>雀巢 淡奶油 鲜奶油250ml 烘焙原料</h3>
                </a>
                <div class="six">
                    <span>￥12.00</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>          
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="西厨贝可 蛋挞皮72个装 KFC蛋挞半成品 送保温袋 顺丰包邮" src="/html5-xidian/Public/home/images/Shopping_list_6.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="西厨贝可 蛋挞皮72个装 KFC蛋挞半成品 送保温袋 顺丰包邮">
                    <h3>西厨贝可 蛋挞皮72个装 KFC蛋挞半成品 送保温袋 顺丰包邮</h3>
                </a>
                <div class="six">
                    <span>￥49.00</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="德国大卫 吉利丁片100片分装 鱼胶片 凝胶片 琼脂片 每片约2.5克" src="/html5-xidian/Public/home/images/Shopping_list_7.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="德国大卫 吉利丁片100片分装 鱼胶片 凝胶片 琼脂片 每片约2.5克">
                    <h3>德国大卫 吉利丁片100片分装 鱼胶片 凝胶片 琼脂片 每片约2.5克</h3>
                </a>
                <div class="six">
                    <span>￥13.80</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="俄罗斯鹅肝酱250g/罐*2" src="/html5-xidian/Public/home/images/Shopping_list_8.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="俄罗斯鹅肝酱250g/罐*2">
                    <h3>俄罗斯鹅肝酱250g/罐*2</h3>
                </a>
                <div class="six">
                    <span>￥32.00</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="大西冷 菲力牛排 1300g 顺丰包邮" src="/html5-xidian/Public/home/images/Shopping_list_9.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="大西冷 菲力牛排 1300g 顺丰包邮">
                    <h3>大西冷 菲力牛排 1300g 顺丰包邮</h3>
                </a>
                <div class="six">
                    <span>￥109.00</span>                     
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="安琪 9寸披萨套餐" src="/html5-xidian/Public/home/images/Shopping_list_10.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="安琪 9寸披萨套餐">
                    <h3>安琪 9寸披萨套餐</h3>
                </a>
                <div class="six">
                    <span>￥49.80</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="爱乐薇 铁塔 美国奶油干酪 奶酪奶油芝士 原装1.36kg" src="/html5-xidian/Public/home/images/Shopping_list_11.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="爱乐薇 铁塔 美国奶油干酪 奶酪奶油芝士 原装1.36kg">
                    <h3>爱乐薇 铁塔 美国奶油干酪 奶酪奶油芝士 原装1.36kg</h3>
                </a>
                <div class="six">
                    <span>￥59.00</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="意大利巧意Liguori螺丝型通心粉500g/包*2方便意大利面通心粉" src="/html5-xidian/Public/home/images/Shopping_list_12.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="意大利巧意Liguori螺丝型通心粉500g/包*2方便意大利面通心粉">
                    <h3>意大利巧意Liguori螺丝型通心粉500g/包*2方便意大利面通心粉</h3>
                </a>
                <div class="six">
                    <span>￥43.00</span>                     
                </div>
             </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="大西冷 菲力牛排10片 1500顺丰包邮" src="/html5-xidian/Public/home/images/Shopping_list_13.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="大西冷 菲力牛排10片 1500顺丰包邮">
                    <h3>大西冷 菲力牛排10片 1500g顺丰包邮</h3>
                </a>
                <div class="six">
                    <span>￥126.00</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="意大利彼得Pozzi牛奶曲奇饼干500g" src="/html5-xidian/Public/home/images/Shopping_list_14.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="意大利彼得Pozzi牛奶曲奇饼干500g">
                    <h3>意大利彼得Pozzi牛奶曲奇饼干500g</h3>
                </a>
                <div class="six">
                    <span>￥27.80</span>                     
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="可茜 加州偏桃仁片 杏仁薄片 原装100g" src="/html5-xidian/Public/home/images/Shopping_list_15.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="可茜 加州偏桃仁片 杏仁薄片 原装100g">
                    <h3>可茜 加州偏桃仁片 杏仁薄片 原装100g</h3>
                </a>
                <div class="six">
                    <span>￥14.80</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
        <div class="three">
            <div class="four">
                <a href="Shopping_content.html" target="_blank">
                    <img alt="云舍 意大利披萨酱300g" src="/html5-xidian/Public/home/images/Shopping_list_16.jpg">
                </a>
            </div>
            <div class="five">
                <a href="Shopping_content.html" target="_blank" title="云舍 意大利披萨酱300g">
                    <h3>云舍 意大利披萨酱300g</h3>
                </a>
                <div class="six">
                    <span>￥9.90</span>
                </div>
            </div>
            <div class="seven">月售 1288 件</div>
            <div class="eight">包邮</div>            
        </div>
    </div>
  </div>
  <div class="container-fluid" style="padding-left:750px">
    <div class="row-fluid">
        <div align="right">
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
                    <a href="#">...</a>
                </li>
                <li>
                    <a href="#">98</a>
                </li>
                <li>
                    <a href="#">99</a>
                </li>
                <li>
                    <a href="#">100</a>
                </li>
                <li>
                    <a href="#">下一页</a>
                </li>
            </ul>
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
      </div>

      <div style="border-top: 1px solid #C0C0C0;border-bottom: 1px solid #C0C0C0;text-align: center;">
        <a>Home</a> | <a>About</a> | <a>Service</a> | <a>Products</a> | <a>Contact</a>
      </div>
    </div>
  </div>
<!--<div class="ajifenshow"><a class="yshfootbg" href="/mall/contact" target="_blank"></a></div> -->
</body>
</html>