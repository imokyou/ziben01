
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
    <title>Capital country Home - Login</title>
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
                
                
                <span>English</span>
                
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
                    <img src="/assets/pic/nav_squar.png">home
                </a>
            </li>
            <li>
                <a href="/aboutus/" >
                    <img src="/assets/pic/nav_squar.png">About
                </a>
            </li>
            <li>
                <a href="/register/" >
                    <img src="/assets/pic/nav_squar.png">Register
                </a>
            </li>
            <li>
                <a href="/login/" class="om">
                    <img src="/assets/pic/nav_squar.png">Login
                </a>
            </li>
            <li>
                <a href="javascript:alert('coming soon')" >
                    <img src="/assets/pic/nav_squar.png">Trading Hall
                </a>
            </li>
            <!--
            <li>
                <a href="/video/" >
                    <img src="/assets/pic/nav_squar.png">Video
                </a>
            </li>
            -->
            <li>
                <a href="/faq/" >
                    <img src="/assets/pic/nav_squar.png">FAQ
                </a>
            </li>
            <li>
                <a href="/support"  >
                    <img src="/assets/pic/nav_squar.png">Support
                </a>
            </li>
        </ul>
    </div>
    <!--end of header_re-->
    <div class="main clearfloat mt20">
    <!--left-->
    <div class="side fl">
        <div class="census bg0a">
            <h1 class="side_tit">STATS</h1>
            <ul class="census_ul">
                <li><p>MEMBERS</p><span><?php echo $member_nums;?></span></li>
                <li><p>ONLINE</p><span><?php echo $member_online;?></span></li>
                <li><p>HITS</p><span><?php echo $member_hit;?></span></li>
                <li><p>TATOL PAID</p><span>$<?php echo $member_paid;?></span></li>
                <li><p>OFFERS</p><span><?php echo $total_offer;?></span></li>
                <li><img src="/assets/pic/border_grey.png"></li>
            </ul>
        </div>
        <div class="diary bg0a mt20">
            <h1 class="side_tit">LAST10 CREDITED</h1>
            <ul class="diary_ul">
                <li>
                    <a href="http://www.gpt1.com" target="_blank"> Clover GPT - International GPT#1</a>
                </li>
                <li>
                    <a href="https://bitday.biz/" target="_blank">High Return on the Capital of Opinions Survey- Advanced</a>
                </li>
                <li>
                    <a href="http://highestpaygpt.com/home?refid=20" target="_blank">Daily Survey+ Highestpaygpt + Daily Pay + Daily Lowest Pay</a>
                </li>
                <li>
                    <a href="http://finosity.com/freeaccess/400in4hours.php?t=13m121115bn468400in4hoursint" target="_blank">Daily Survey+Finosity + Daily Pay+Lowest Bonus</a>
                </li>
                <li>
                    <a href="https://theminers.biz" target="_blank">Capital Router of Opinions Survey- Advanced</a>
                </li>
                <li>
                    <a href="https://freebitco.in" target="_blank">Win Free Bitcoins Every Other Hour</a>
                </li>
                <li>
                    <a href="http://superpay.me/" target="_blank">Capital Router of Opinions Survey- Advanced</a>
                </li>
                <li>
                    <a href="http://myinfinitedownline.com/?ref=christinersilva" target="_blank">Clover GPT - International GPT！</a>
                </li>
                <li>
                    <a href="http://aglocoptr.com/" target="_blank">aglocoptr ***Great Site*** </a>
                </li>
                <li>
                    <a href="http://offernation.com" target="_blank">offernation</a>
                </li>
                <li>
                    <a href="http://point.st" target="_blank">Banners，Click，Facebook Likes，Surveys and so on.</a>
                </li>
                <li>
                    <a href="https://mintvine.com" target="_blank">Use MintVine to get millions of bonus.</a>
                </li>
            </ul>
            <a href="#" class="more">More>></a>
        </div>
    </div><!--end of left-->
    

<!--main content-->
<div class="middle">
    <h1 class="side_tit">Login</h1>
    <div class="login_box">
        <form name="loginform" method="POST">
            <input type='hidden' name='csrfmiddlewaretoken' value='ZNTa7A9LWzf5THU84nRSdUKXJE9jeJNk' />
            <ul class="login_ul">
                <li>
                    <h4>username<a href="#"></a></h4>
                    <input type="text" name="username" id="username" value="" />
                    <!-- <a href="/member/find-username/">Forgot username?</a> -->
                </li>
                <li>
                    <h4>password<a href="#"></a></h4>
                    <input type="password" name="password" id="password" value="" />
                    <!--<a href="/member/find-password/">Forget password?</a>-->
                </li>
                <!--
                <li>
                    <h5>Safety code</h5>
                    <input id="id_reg_captcha_0" name="captcha_0" type="hidden" value="21d6c7a721e9bdbef67ebf8ca1a73c194b7bb787">
                    <input class="w150" type="text" id="id_reg_captcha_1" name="id_reg_captcha_1">
                    <div class="captcha">
                        <a href="#" class="next-captcha">
                            <img src="/captcha/image/21d6c7a721e9bdbef67ebf8ca1a73c194b7bb787/" class="captcha-img" alt="captcha">
                        </a>
                    </div>
                </li>
                -->
                <!-- <li><input type="checkbox">Remember me</li> -->
                <!--
                <li style="padding-left:90px;">
                    <button type="button" class="btn_globe" onclick="login()">Login</button>
                </li>
                -->
            </ul>
        </form>
    </div>
</div><!--end of middle-->

    <!--right-->
    <div class="side fr">
        <div class="sponsor bg0a">
            <h1 class="side_tit">SPONSERS</h1>
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
            <h1 class="side_tit">Message Board</h1>
            <ul class="message_ul">
                
            </ul>
            <a href="/login/" class="more">you must log in to post</a>
        </div>
    </div>
</div>
</div>
<div class="footer_re">
    <div class="footer_re_nav">
        <a href="/risk/disclosure/">Risk Disclosure<img src="/assets/pic/icon_pdf.png"></a>
        <a href="/privacy/">Privacy Policy<img src="/assets/pic/icon_pdf.png"></a>
        <a href="/contract/">Contact<img src="/assets/pic/icon_pdf.png"></a>
        <a href="/support/">Support</a>
    </div>
    <p>Copyright © 2012-2017 capitalrev.com .All rights reserved.<br>
        © Global Action Cash 2011 - 2017 </p>
</div>
<script src="/assets/js/jquery-2.1.3.min.js"></script>
<script src="/assets/js/common.js"></script>

<script type="text/javascript">
$(document).ready(function(){
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
        alert('please enter username');
        return false;
    }
    if ($.trim(password) == '') {
        alert('please enter password');
        return false;
    }
    if ($.trim(captcha_code) == '') {
        alert('please enter safety code');
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
                alert('Login Failed');
            }
        }
    });
}
</script>

</body>
</html>