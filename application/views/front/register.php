
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
    <title>资本国度-会员注册</title>
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
                <a href="/register/" class="om">
                    <img src="/assets/pic/nav_squar.png">寄存器
                </a>
            </li>
            <li>
                <a href="/login/" >
                    <img src="/assets/pic/nav_squar.png">登录
                </a>
            </li>
            <li>
                <a href="javascript:alert('尽请期待')" >
                    <img src="/assets/pic/nav_squar.png">资产交易中心
                </a>
            </li>
            <li>
                <a href="/video/" >
                    <img src="/assets/pic/nav_squar.png">视频
                </a>
            </li>
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
    <h1 class="side_tit">寄存器</h1>
    <p></p>
    <form name="regform" method="POST">
        <input type='hidden' name='csrfmiddlewaretoken' value='ZNTa7A9LWzf5THU84nRSdUKXJE9jeJNk' />
        <ul class="setting_ul mt30" style="padding-left:15px;">
            <li>
                <span>名</span>
                <input id="first_name" maxlength="64" name="first_name" type="text" />
            </li>
            <li>
                <span>姓</span>
                <input id="last_name" maxlength="64" name="last_name" type="text" />
            </li>
            <li>
                <span>用户名</span>
                <input id="username" maxlength="64" name="username" type="text" />
            </li>
            <li>
                <span>密码</span>
                <input id="password" maxlength="64" name="password" type="password" />
            </li>
            <li>
                <span>确认密码</span>
                <input id="confirm_password" maxlength="64" name="confirm_password" type="password" />
            </li>
            <li>
                <span>电子邮件</span>
                <input id="email" maxlength="64" name="email" type="text" />
            </li>
            <li>
                <span>电话号码</span>
                <input id="phone" maxlength="64" name="phone" type="text" />
            </li>

            <li class="mt30">
                <span></span>
                <h2>邮寄地址</h2>
            </li>
            <li>
                <span>地址1</span>
                <input id="address1" name="address1" type="text" />
            </li>
            <li>
                <span>地址2</span>
                <input id="address2" name="address2" type="text" />
            </li>
            <li>
                <span>市</span>
                <select id="city" name="city" class="dfinput" style="width:114px;"></select>
            </li>
            <li>
                <span>州/省</span>
                <select id="provincy" name="provincy" class="dfinput" style="width:114px;"></select>
            </li>
            <li>
                <span>国家</span>
                <select id="country" name="country" class="dfinput" style="width:114px;"></select>
            </li>
            <li>
                <span>邮政编码</span>
                <input id="zip_code" maxlength="64" name="zip_code" type="text" />
            </li>
            <li class="mt30">
                <span></span>
                <h2>附加字段</h2>
            </li>
            <li>
                <span>性别</span>
                <select id="sexal" name="sexal">
                    <option value="male">男</option>
                    <option value="female">女</option>
                </select>
            </li>
            <li>
                <span>年龄</span>
                <select id="age" name="age">
                
                    <option value="18">18</option>
                
                    <option value="19">19</option>
                
                    <option value="20">20</option>
                
                    <option value="21">21</option>
                
                    <option value="22">22</option>
                
                    <option value="23">23</option>
                
                    <option value="24">24</option>
                
                    <option value="25">25</option>
                
                    <option value="26">26</option>
                
                    <option value="27">27</option>
                
                    <option value="28">28</option>
                
                    <option value="29">29</option>
                
                    <option value="30">30</option>
                
                    <option value="31">31</option>
                
                    <option value="32">32</option>
                
                    <option value="33">33</option>
                
                    <option value="34">34</option>
                
                    <option value="35">35</option>
                
                    <option value="36">36</option>
                
                    <option value="37">37</option>
                
                    <option value="38">38</option>
                
                    <option value="39">39</option>
                
                    <option value="40">40</option>
                
                    <option value="41">41</option>
                
                    <option value="42">42</option>
                
                    <option value="43">43</option>
                
                    <option value="44">44</option>
                
                    <option value="45">45</option>
                
                    <option value="46">46</option>
                
                    <option value="47">47</option>
                
                    <option value="48">48</option>
                
                    <option value="49">49</option>
                
                    <option value="50">50</option>
                
                    <option value="51">51</option>
                
                    <option value="52">52</option>
                
                    <option value="53">53</option>
                
                    <option value="54">54</option>
                
                    <option value="55">55</option>
                
                    <option value="56">56</option>
                
                    <option value="57">57</option>
                
                    <option value="58">58</option>
                
                    <option value="59">59</option>
                
                    <option value="60">60</option>
                
                </select>
            </li>
            <li>
                <span>您的真实信息</span>
                <label><input id="is_info_real" name="is_info_real" type="checkbox" /><i>是的，我明白，如果我不使用自己的真实信息，我将不<br>会支付和付款被发送之前所有账户都Verifyed</i></label>
            </li>
            <li>
                <span>选择区域</span>
                <dl class="area_dl">
                    <dd class="zuo seled" data='left'>左</dd>
                    <dd class="you" data='right'>右</dd>
                </dl>
                <input type='hidden' id='member_area' value="left" />
            </li>
            <li>
                <span>推荐人会员#</span>
                <input id="recommend_user" maxlength="64" name="recommend_user" readonly="readonly" type="text" value="" />
            </li>
            <!--
            <li>
                <span>安全码</span>
                <input id="id_reg_captcha_0" name="captcha_0" type="hidden" value="7dfefa6d6b3936e1109647fcef15285e8f41fe3c">  
                <input class="w120" type="text" id="id_reg_captcha_1" name="id_reg_captcha_1">
                <div class="verfiry_code">
                    <a href="#" class="next-captcha">
                        <img src="/captcha/image/7dfefa6d6b3936e1109647fcef15285e8f41fe3c/" class="captcha" alt="captcha">
                    </a>
                </div>
            </li>
            -->
            <li>
                <span></span>
                <label><input id="is_agree" name="is_agree" type="checkbox" /><i>我已阅读并同意 条款和条件与全球行动现金</i></label>
            </li>
        </ul>
        
    </form>
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

<script type="text/javascript" src="/assets/js/pc.js"></script>    
<script type="text/javascript" src="/assets/js/pcEn.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    new PCAS("country","provincy","city");
    // new PCASEN("c_countryEn","c_provinceEn","c_cityEn");

    // 刷新验证码  
    $(".next-captcha").click(function(event){  
        $.getJSON("/member/refresh-captcha/", function(json) {  
            // This should update your captcha image src and captcha hidden input  
            // debugger;  
            var status = json['status'];  
            var new_cptch_key = json['new_cptch_key'];  
            var new_cptch_image = json['new_cptch_image'];  
            id_captcha_0 = $("#id_reg_captcha_0");  
            img = $(".captcha");  
            id_captcha_0.attr("value", new_cptch_key);  
            img.attr("src", new_cptch_image);  
        });
        event.preventDefault();
    });
});

function reg() {
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var username = $('#username').val();
    var password = $('#password').val();
    var confirm_password = $('#confirm_password').val();
    var email = $('#email').val();
    var phone = $('#phone').val();
    var address1 = $('#address1').val();
    var address2 = $('#address2').val();
    var city = $('#city').val();
    var provincy = $('#provincy').val();
    var country = $('#country').val();
    var zip_code = $('#zip_code').val();
    var age = $('#age').val();
    var sexal = $('#sexal').val();
    var recommend_user = $('#recommend_user').val();
    var captcha_code = $('#id_reg_captcha_1').val();

    if ($.trim(first_name) == '') {
        alert('请输入名');
        return false;
    }
    if ($.trim(last_name) == '') {
        alert('请输入姓');
        return false;
    }
    if ($.trim(username) == '') {
        alert('请输入用户名');
        return false;
    }
    if ($.trim(password) == '' || $.trim(confirm_password) == '') {
        alert('请输入密码');
        return false;
    }
    if ($.trim(password) != $.trim(confirm_password)) {
        alert('两次密码输入不一致');
        return false;
    }
    if ($.trim(age) == '') {
        alert('请选择年龄');
        return false;
    }
    if ($.trim(email) == '') {
        alert('请输入电子邮件');
        return false;
    }
    if ($.trim(phone) == '+86' || $.trim(phone) == '') {
        alert('请输入手机号码');
        return false;
    }
    if ($.trim(city) == '') {
        alert('请输入市');
        return false;
    }
    if ($.trim(country) == '') {
        alert('请输入国家');
        return false;
    }
    if ($.trim(zip_code) == '') {
        alert('请输入邮政编码');
        return false;
    }
    if ($.trim(captcha_code) == '') {
        alert('请输入验证码');
        return false;
    }
    if (!$('#is_info_real').is(':checked')) {
        alert('请勾选确认真实信息按钮');
        return false;
    }
    if (!$('#is_agree').is(':checked')) {
        alert('请勾选同意条款按钮');
        return false;
    }

    var params = {
        first_name: first_name,
        last_name: last_name,
        username: username,
        password: password,
        confirm_password: confirm_password,
        email: email,
        phone: phone,
        address1: address1,
        address2: address2,
        city: city,
        provincy: provincy,
        country: country,
        zip_code: zip_code,
        age: age,
        sexal: sexal,
        recommend_user: recommend_user,
        captcha_code: captcha_code,
        captcha_code_key: $('#id_reg_captcha_0').val(),
        member_area: $('#member_area').val()
    }
    $.ajax({
        url: '/register/',
        type: 'POST',
        dataType: 'json',
        data: params,
        success: function(resp) {
            if (resp.c == 0) {
                alert('注册成功，请登陆')
                // location.reload();
            } else {
                alert(resp.m);
            }
        }
    });
}
</script>

</body>
</html>