$('.big').mousemove(function(e){
	$('.box').show();
	$('.pho').show();
	$('.box').css({'left':e.clientX-200+'px','top':e.clientY-200+'px'});
	var x=e.pageX-$(this).offset().left;
	var y=e.pageY-$(this).offset().top;
	if(y<=100){
		y=100;
	}
    if(y>=430){
		y=430
	}
	if(x<=100){
		x=100;
	}
	if(x>=430){
		x=430;
	}
$('.box').css({'left':x-100+'px','top':y-100+'px'});
$('.pho>img').css({'left':-2*(x-100)+'px','top':-2*(y-100)+'px'});
})
$('.big').mouseleave(function(e){
	$('.box').hide();
	$('.pho').hide();
})
//头部导航栏下拉选框
$('header>ul li').hover(function(){
        $(this).children().show();
        if($(this).index()==0) return;
        $(this).addClass('current');
    },function(){
        $(this).children('ol').hide();
        $(this).removeClass('current');
       
    })
    $('header ul li').eq(0).hover(function(){
                $('.search').hide();
                $('header .nav .s .find').stop().animate({'left':'0px'},600);
                
            },function(){})

    $('header ul li').eq(0).click(function(){
         return false;
    })
    $('body').click(function(){
        $('.search').show();
         $('header .nav .s .find').css({'left':'213px'});
       
    })
//鼠标经过商品展示
$('main .center .left li').hover(function(){
    $(this).css('border','1px solid red');
    var index=$(this).index();
    $('main .photo img').eq(index).show().siblings().hide();
    $('main .pho img').eq(index).show().siblings().hide();
},function(){
    $(this).css('border','1px solid #e0e0e0');
})
//点击按钮
$('main .right .section_8 .plus_1').click(function(){
    var n=$('main .right .section_8 input').val();
    if(n==5) return;
    n++;
    $('main .right .section_8 input').val(n);

})
$('main .right .section_8 .minus_1').click(function(){
    var i=$('main .right .section_8 input').val();
    if(i==1) return;
    i--;
    $('main .right .section_8 input').val(i);

})



//计时器
var endtime=new Date('2020.02.30');
setInterval(function(){
	var nowtime=new Date();
	var time=endtime-nowtime;
	var day=parseInt(time/1000/60/60/24);
	var hour=parseInt(time/1000/60/60%24);
	var minute=parseInt(time/1000/60%60);
	var seconds=parseInt(time/1000%60);
	$('main .section_1>.up .timer').html('距活动结束:'+day+'天'+hour+'小时'+minute+'分'+seconds+'秒');
})
$('main .right .section_9 .icon7').click(function(){
    $('.tab').toggle();
    $(this).css('display','none');
    $('main .right .section_9 .icon8').css('display','inline-block');

})
$('main .right .section_9 .icon8').click(function(){
    $('.tab').toggle();
    $(this).css('display','none');
    $('main .right .section_9 .icon7').css('display','inline-block');

})
