/**
 * Created by sin on 2016/11/21.
 */
$(function () {
/*    $(".nav_bar a").on("click", function () {
        $(this).addClass("on").parents("li").siblings("li").find("a").removeClass("on");
        $(this).children("i").removeClass("icon_nav01").addClass("icon_nav02").parents("li").siblings("li").find("i").removeClass("icon_nav02").addClass                ("icon_nav01")
    });
    $(".dashboard_tab > li").on("click",function(){
        $(this).find("span").addClass("blue").end().siblings("li").find("span").removeClass("blue")
    });*/
   /* 左侧导航*/
    $(".left_nav li").on("click",function(){
        $(this).find("h5").addClass("in").end().siblings("li").find("h5").removeClass("in");
        $(this).find("dl").slideDown().end().siblings("li").find("dl").slideUp()
    });
    $(".left_nav li dl dd").on("click",function(){
        $(this).find("a").addClass("ck").end().siblings("dd").find("a").removeClass("ck");
        $(this).parents("li").siblings("li").find("a").removeClass("ck")
    });
    <!--点击投票按钮弹出层-->
    $(".vote_before").on('click',function(){
        $(this).parents(".vote_item").find(".vote_tip").show()
    });
    $('.close_voteTip').on('click',function(){
        $('.vote_tip').hide()
    });

   // 选择语言
$('#language').on('click',function(){
    $('.language_list,.pointer').show()
});
$('.language_list li').on('click',function(){
    var $text =$(this).text();
    $('#language span').text($text);
    $('.language_list,.pointer').hide();
    delCookie('clang');
    addCookie('clang', $(this).attr('data'));
    location.reload();
});

$(".area_dl dd").on("click",function(){
    $('#member_area').val($(this).attr('data'));
    $(this).addClass("seled").siblings("dd").removeClass("seled")
})

var clang = getCookie('clang');
if (clang == '') {
    addCookie('clang', 'en');
}

});

function addCookie(name,value,expireHours){ 
    var v = getCookie(name);
    if (v) {
        delCookie(name); 
    }
    var cookieString=name+"="+escape(value)+";path=/"; 
    if(expireHours>0){ 
        var date=new Date(); 
        date.setTime(date.getTime+expireHours*3600*1000); 
        cookieString=cookieString+"; expire="+date.toGMTString(); 
    } 
    document.cookie=cookieString; 
} 

function getCookie(name){ 
    var strCookie=document.cookie; 
    var arrCookie=strCookie.split("; "); 
    for(var i=0;i<arrCookie.length;i++){ 
        var arr=arrCookie[i].split("="); 
        if(arr[0]==name)return arr[1]; 
    } 
    return ""; 
} 

function delCookie(name) 
{ 
    var exp = new Date(); 
    exp.setTime(exp.getTime() - 1); 
    var cval=getCookie(name); 
    if(cval!=null) 
        document.cookie= name + "="+cval+";expires="+exp.toGMTString(); 
} 

