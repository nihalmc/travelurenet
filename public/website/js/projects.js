var easy="easeOutExpo";var easyN="easeOutExpo";var open=0;var sTimerId=0;var sTimer=100;var sTime=500;var mTime=200;var mTimeC=500;var lSpeed=100;var closeEase="easeOutSine";$(document).ready(function(){function a(){var a=$("#workGrid li").width();var b=a-a*.33;$("#workGrid li").css({height:b+"px"})}$(window).resize(function(){a();var b=$(this).width()});a();$(".xTip").mouseover(function(){var a=$(this).children(".xo").children(".xc").width();var b=$(this).children(".xo").width();var d=b/2*-1+24;$(this).children(".xo").css({left:d}).show().stop(false,false).animate({opacity:1,bottom:"34px"},lSpeed,c)});$(".xTip").mouseleave(function(){$(this).children(".xo").stop(false,false).animate({opacity:0,bottom:"26px"},lSpeed,c,function(){$(this).hide()})});var b=350;var c="easeOutSine";$("#workGrid li").mouseover(function(){$(this).find("img").stop(false,false).animate({opacity:0},b,c)});$("#workGrid li").mouseout(function(){$(this).find("img").stop(false,false).animate({opacity:1},b,c)});$("a#info").fancybox({overlayOpacity:.85,overlayColor:"#000",autoScale:true,scrolling:"no",cyclic:true,centerOnScroll:true,speedIn:600,speedOut:200});var d=1;var e=600;var f=400;$(".svlaInfoClose").click(function(){$("#svlaInfo").stop(false,false).animate({opacity:0},f,c,function(){$("#svlaInfo").hide()});return false});$(".svlaInfo").click(function(){$("#svlaInfo").show().stop(false,false).animate({opacity:d},e,c);return false});$(".hide").click(function(){$("#aboutCopy").fadeOut(function(){$("#ops").fadeIn();$("#sControl").fadeIn()});return false});$(".svlaAbout").click(function(){$("#sControl").fadeOut();$("#ops").fadeOut(function(){$("#aboutCopy").fadeIn()});return false});$("#nextS").click(function(){api.nextSlide()});$("#submit").click(function(){var a=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;var b=false;$("#emailError").fadeOut();$("#nameError").fadeOut();$("#messageError").fadeOut();var c=$("#flInput").val();var d=$("#emailA").val();var e=$("#textA").val();if(c==""){$("#nameError").fadeIn();b=true}if(!a.test(d)||d==""){$("#emailError").fadeIn();b=true}if(e==""){$("#messageError").fadeIn();b=true}if(b==false){$("#cFade").fadeOut();$("#cLoad").fadeIn();$.post("../inc/form/sendemail.php",{nameOf:c,emailOf:d,textOf:e},function(a){$("#cLoad").fadeOut(function(){$("#thankYou").fadeIn()})})}return false})})