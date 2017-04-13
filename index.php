<!doctype html>
<html lang="en">
<head>
	
	<title>Comming soon</title>
	
<style>
.author a,.color,.color2,.color3,.warning{position:absolute;text-align:center}a,abbr,acronym,address,article,aside,audio,b,big,blockquote,canvas,caption,center,cite,code,dd,del,details,dfn,dl,dt,em,embed,fieldset,figcaption,figure,footer,form,h1,h2,h3,h4,h5,h6,header,hgroup,i,img,ins,kbd,label,legend,li,mark,menu,nav,ol,output,p,pre,q,ruby,s,samp,section,small,strike,strong,sub,summary,sup,table,tbody,td,tfoot,th,thead,time,tr,tt,u,ul,var,video{margin:0;padding:0;border:0;font:inherit;vertical-align:baseline;font-family:Helvetica Neue,Helvetica,Arial,sans-serif}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{padding:0; margin:0;line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:after,blockquote:before,q:after,q:before{content:'';content:none}table{border-collapse:collapse;border-spacing:0}.color{float:left;height:67%;width:14.29%}.color:nth-child(1){left:0}.color:nth-child(2){left:14.28%}.color:nth-child(3){left:28.57%}.color:nth-child(4){left:42.85%}.color:nth-child(5){left:57.14%}.color:nth-child(6){left:71.42%}.color:nth-child(7){left:85.71%}.color2{float:left;height:75%;width:14.2857142857%}.color2:nth-child(1){left:0}.color2:nth-child(2){left:14.2857142857%}.color2:nth-child(3){left:28.5714285714%}.color2:nth-child(4){left:42.8571428571%}.color2:nth-child(5){left:57.1428571428%}.color2:nth-child(6){left:71.4285714285%}.color2:nth-child(7){left:85.7142857142%}.color3{float:left;height:100%;width:16.68%}.color3:nth-child(1){left:0}.color3:nth-child(2){left:16.66%}.color3:nth-child(3){left:33.33%}.color3:nth-child(4){left:50%}.color3:nth-child(5){left:66.66%}.color3:nth-child(6){left:83.33%}.white{background-color:#fff}.yellow{background-color:#dcdc09}.teal{background-color:#21cece}.green{background-color:#10d210}.pink{background-color:#cf12cf}.red{background-color:#d31212}.blue{background-color:#2323d5}.black{background-color:#000}.blue2{background-color:#03295b}.purple{background-color:#3e057e}.gray{background-color:#131313}.gray2{background-color:#1d1d1d}.gray3{background-color:#d5d2d2}.warning{z-index:1000;width:100%;top:35%}.warning h1{color:#fff;text-transform:uppercase;letter-spacing:2px;font-size:5em;padding:5px 25px 50px;font-weight:700;text-shadow:0 1px 3px rgba(0,0,0,.12)}.warning h2{color:#fff;letter-spacing:1px;font-size:1.9em;padding:9px 25px 9px;font-weight:400;text-shadow:0 1px 2px rgba(0,0,0,.13)}.warning h3{color:#fff;text-transform:uppercase;letter-spacing:2px;font-size:2.6em;font-weight:600;}
</style>

<script>
var end = new Date('02/22/2019 10:1 AM');
    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;
    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {
            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'Comming soon!';
            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);
        document.getElementById('countdown').innerHTML = days + ' days ';
        document.getElementById('countdown').innerHTML += hours + ' hours ';
        document.getElementById('countdown').innerHTML += minutes + ' minutes and ';
        document.getElementById('countdown').innerHTML += seconds + ' seconds';
    } timer = setInterval(showRemaining, 1000);
</script>
</head>

<body>
	<div class="warning">
		<h1>Please Stand By</h1>
<h3><div id="countdown"></div></h3>
	</div>
	<div id="color3">
		<div class="color3 blue2"></div>
		<div class="color3 white"></div>
		<div class="color3 purple"></div>
		<div class="color3 black"></div>
		<div class="color3 gray"></div>
		<div class="color3 gray2"></div>
	</div> 
	<div id="color2">
		<div class="color2 blue"></div>
		<div class="color2 black"></div>
		<div class="color2 pink"></div>
		<div class="color2 black"></div>
		<div class="color2 teal"></div>
		<div class="color2 black"></div>
		<div class="color2 gray3"></div>
	</div> 
	<div id="color">
		<div class="color gray3"></div>
		<div class="color yellow"></div>
		<div class="color teal"></div>
		<div class="color green"></div>
		<div class="color pink"></div>
		<div class="color red"></div>
		<div class="color blue"></div>
	</div>

</body>
</html>
