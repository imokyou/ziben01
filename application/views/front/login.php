
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1,IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="keywords" content="your tags">
    <meta name="description" content="150 words">
    <meta name="renderer" content="webkit">
    <meta name="x5-orientation" content="portrait">
    <meta http-equiv="pragma" content="no-cache">  
    <meta http-equiv="cache-control" content="no-cache">    
    <meta http-equiv="expires" content="0">  
    <link rel="stylesheet" href="/assets/css/stage.css">
    <title>资本国度-会员登陆</title>
    <!--[if lt IE 9]>
        <script src="/assets/js/html5shiv.min.js"></script>
    <![endif]-->
    <style type="text/css">
        p.err-msg {
            margin-left:  110px;
            margin-top: 5px;
            color: red;
        }
    </style>
</head>
<body>
<div class="container_re bg_hei">
    <div class="top_ad"><a href="#"><img src="/assets/pic/support001.png"></a></div>
    <div class="top_pic"></div>
    <div class="header_re clearfloat">
        <a href="#" class="logo_re"><img src="/assets/pic/logo_re.png"> </a>
        <div class="language_box">
            <h5 id="language">
                
                <span>中文</span>
                
                
                <img src="/assets/images/sjx.png">
            </h5>
            <span class="pointer"></span>
            <ul class="language_list">
                <li data="cn">中文</li>
                <li data="en">English</li>
                <!-- <li data="en-us">韩文</li> -->
            </ul>
        </div>
        <ul class="nav_bar_re">
            <li>
                <a href="/" >
                    <img src="/assets/pic/nav_squar.png">家
                </a>
            </li>
            <li>
                <a href="/aboutus/" >
                    <img src="/assets/pic/nav_squar.png">关于我们
                </a>
            </li>
            <li>
                <a href="/register/" >
                    <img src="/assets/pic/nav_squar.png">寄存器
                </a>
            </li>
            <li>
                <a href="/login/" class="om">
                    <img src="/assets/pic/nav_squar.png">登录
                </a>
            </li>
            <li>
                <a href="javascript:alert('尽请期待')" >
                    <img src="/assets/pic/nav_squar.png">资产交易中心
                </a>
            </li>
            <!--
            <li>
                <a href="/video/" >
                    <img src="/assets/pic/nav_squar.png">视频
                </a>
            </li>
            -->
            <li>
                <a href="/faq/" >
                    <img src="/assets/pic/nav_squar.png">常见问题
                </a>
            </li>
            <li>
                <a href="/support"  >
                    <img src="/assets/pic/nav_squar.png">支持
                </a>
            </li>
        </ul>
    </div>
    <!--end of header_re-->
    <div class="main clearfloat mt20">
    <!--left-->
    <div class="side fl">
        <div class="census bg0a">
            <h1 class="side_tit">统计</h1>
            <ul class="census_ul">
                <li><p>会员</p><span><?php echo $member_nums;?></span></li>
                <li><p>线上</p><span><?php echo $member_online;?></span></li>
                <li><p>命中</p><span><?php echo $member_hit;?></span></li>
                <li><p>总支付</p><span>$<?php echo $member_paid;?></span></li>
                <li><p>报价</p><span><?php echo $total_offer;?></span></li>
                <li><img src="/assets/pic/border_grey.png"></li>
                <li><p>PTS值</p><span>$3.81和62186.95</span></li>
                <li><p>PTC值</p><span>$0.04</span></li>
            </ul>
        </div>
        <div class="diary bg0a mt20">
            <h1 class="side_tit">去年10记</h1>
            <ul class="diary_ul">
                <li>
                    <a href="http://www.gpt1.com" target="_blank">四叶草GPT - 国际GPT#1</a>
                </li>
                <li>
                    <a href="https://bitday.biz/" target="_blank">意见调查资金高回报 - 高级版</a>
                </li>
                <li>
                    <a href="http://highestpaygpt.com/home?refid=20" target="_blank">日报调查+ highestpaygpt +每日支付+低每日最低支付</a>
                </li>
                <li>
                    <a href="http://finosity.com/freeaccess/400in4hours.php?t=13m121115bn468400in4hoursint" target="_blank">日报调查+ finosity +每日支付+低奖金最低</a>
                </li>
                <li>
                    <a href="https://theminers.biz" target="_blank">意见调查资金路由器 - 高级版</a>
                </li>
                <li>
                    <a href="https://freebitco.in" target="_blank">赢取免费比特币每隔一小时</a>
                </li>
                <li>
                    <a href="http://superpay.me/" target="_blank">意见调查资金路由器 - 高级版</a>
                </li>
                <li>
                    <a href="http://myinfinitedownline.com/?ref=christinersilva" target="_blank">四叶草GPT - 国际GPT！</a>
                </li>
                <li>
                    <a href="http://aglocoptr.com/" target="_blank">aglocoptr ***大***网站</a>
                </li>
                <li>
                    <a href="http://offernation.com" target="_blank">offernation</a>
                </li>
                <li>
                    <a href="http://point.st" target="_blank">横幅，点击，Facebook喜欢，调查等</a>
                </li>
                <li>
                    <a href="https://mintvine.com" target="_blank">加入使用MintVine赚取成千上万奖励</a>
                </li>
            </ul>
            <a href="#" class="more">点击查看更多>></a>
        </div>
    </div><!--end of left-->
    

<!--main content-->
<div class="middle">
    <h1 class="side_tit">登录</h1>
    <div class="login_box">
        <form name="loginform" method="POST">
            <input type='hidden' name='csrfmiddlewaretoken' value='ZNTa7A9LWzf5THU84nRSdUKXJE9jeJNk' />
            <ul class="login_ul">
                <li>
                    <h4>用户名<a href="#"></a></h4>
                    <input type="text" name="username" id="username" value="" />
                    <!--<a href="/member/find-username/">忘记用户名?</a>-->
                </li>
                <li>
                    <h4>密码<a href="#"></a></h4>
                    <input type="password" name="password" id="password" value="" />
                    <!--<a href="/member/find-password/">忘记密码?</a> -->
                </li>
                <!--
                <li>
                    <h5>安全码</h5>
                    <input id="id_reg_captcha_0" name="captcha_0" type="hidden" value="40643de85a3094b91b887b1390479a6bf14add41">  
                    <input class="w150" type="text" id="id_reg_captcha_1" name="id_reg_captcha_1">
                    <div class="captcha">
                        <a href="#" class="next-captcha">
                            <img src="/captcha/image/40643de85a3094b91b887b1390479a6bf14add41/" class="captcha-img" alt="captcha">
                        </a>
                    </div>
                </li>
                -->
                <!-- <li><input type="checkbox">记住我</li> -->
                <li style="padding-left:90px;display:none">
                    <button type="button" class="btn_globe" onclick="login()">登录</button>
                </li>
            </ul>
        </form>
    </div>
</div><!--end of middle-->

    <!--right-->
    <div class="side fr">
        <div class="sponsor bg0a">
            <h1 class="side_tit">赞助商</h1>
            <ul class="sponsor_ul">
                <li>
                    <a href="http://www.racehost.com/" target="_blank">
                        <img src="/assets/pic/sponsors001.gif">
                    </a>
                </li>
                <li>
                    <a href="http://poker.williamhill.com/" target="_blank">
                        <img src="/assets/pic/sponsors002.gif">
                    </a>
                </li>
                <li>
                    <a href="https://www.skinnybodycare.com/" target="_blank">
                        <img src="/assets/pic/sponsors003.gif">
                    </a>
                </li>
            </ul>
        </div>
        <!--在线留言-->
        <div class="message mt20 bg0a">
            <h1 class="side_tit">在线留言板</h1>
            <ul class="message_ul">
                
            </ul>
            <a href="/login/" class="more">你必须先登录才能发帖</a>
        </div>
    </div>
</div>
</div>
<div class="footer_re">
    <div class="footer_re_nav">
        <a href="/risk/disclosure/">风险披露<img src="/assets/pic/icon_pdf.png"></a>
        <a href="/privacy/">隐私政策<img src="/assets/pic/icon_pdf.png"></a>
        <a href="/contract/">条款和条件<img src="/assets/pic/icon_pdf.png"></a>
        <a href="/support/">支持</a>
    </div>
    <p>Copyright © 2012-2017 capitalrev.com .All rights reserved.<br>
        © Global Action Cash 2011 - 2017 </p>
</div>
<script src="/assets/js/jquery-2.1.3.min.js"></script>
<script src="/assets/js/common.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    // 刷新验证码  
    $(".next-captcha").click(function(event){  
        refresh_code();
        event.preventDefault();
    });
});

function refresh_code() {
    $.getJSON("/member/refresh-captcha/", function(json) {  
        // This should update your captcha image src and captcha hidden input  
        // debugger;  
        var status = json['status'];  
        var new_cptch_key = json['new_cptch_key'];  
        var new_cptch_image = json['new_cptch_image'];  
        id_captcha_0 = $("#id_reg_captcha_0");  
        img = $(".captcha-img");  
        id_captcha_0.attr("value", new_cptch_key);  
        img.attr("src", new_cptch_image);  
    });
}

function login() {
    var username = $('#username').val();
    var password = $('#password').val();
    var captcha_code = $('#id_reg_captcha_1').val();

    if ($.trim(username) == '') {
        alert('请输入用户名');
        return false;
    }
    if ($.trim(password) == '') {
        alert('请输入密码');
        return false;
    }
    if ($.trim(captcha_code) == '') {
        alert('请输入安全码');
        return false;
    }

    var params = {
        username: username,
        password: password,
        captcha_code: captcha_code,
        captcha_code_key: $('#id_reg_captcha_0').val()
    }
    $.ajax({
        url: '/login/',
        type: 'POST',
        dataType: 'json',
        data: params,
        success: function(resp) {
            if (resp.c == 0) {
                location.href='/member/'
            } else {
                refresh_code();
                alert(resp.m);
            }
        }
    });
}
</script>

</body>
</html>