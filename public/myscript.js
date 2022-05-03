//Declaring Memory Variables//
var a = 0;	var l = 0;
var b = 0;	var m = 0;
var c = 0;	var n = 0;
var d = 0;	var o = 0;
var e = 0;	var p = 0;
var f = 0;	var q = 0;
var g = 0;	var r = 0;
var h = 0;	var s = 0;
var i = 0;	var t = 0;
var j = 0;	var u = 0;
var k = 0;	var v = 0;



/*Getting Elements*/
var drop = document.getElementById('drop');
var enter = document.getElementById('enter');
var mobile_menu_nav = document.getElementById('mobile_menu_nav');
var header = document.getElementById('header');
var personalkey = document.getElementById('personalkey');
var personal1 = document.getElementById('personal1');
var businesskey = document.getElementById('businesskey');
var business1 = document.getElementById('business1');
var electronic_key = document.getElementById('electronic_key');
var electronic_banking1 = document.getElementById('electronic_banking1');
var onlinekey = document.getElementById('onlinekey');
var online_banking1 = document.getElementById('online_banking1');
var aboutkey = document.getElementById('aboutkey');
var about_us1 = document.getElementById('about_us1');
var main_login = document.getElementById('main_login');
var mobile_login_nav = document.getElementById('mobile_login_nav');
var personalkey1 = document.getElementById('personalkey1');
var businesskey1 = document.getElementById('businesskey1');
var electronic_key1 = document.getElementById('electronic_key1');
var onlinekey1 = document.getElementById('onlinekey1');
var aboutkey1 = document.getElementById('aboutkey1');


/*Code For Dropdown Menu*/
drop.addEventListener('click',function(){
	a++;
	if (a%2 == 1){
		drop.style.display ="none";
		enter.style.display ="flex";
		mobile_menu_nav.style.height ="270px";}

	else{b = 0;
		c = 0;
		d = 0;
		e = 0;
		f = 0;
		drop.style.display ="flex";
		enter.style.display ="none";
		mobile_menu_nav.style.height ="0px";
		personal1.style.height ="0px";
		business1.style.height ="0px";
		electronic_banking1.style.height ="0px";
		online_banking1.style.height ="0px";
		personalkey.style.backgroundColor ="#EFEFEF";
		personalkey1.style.color ="#581C20";
		businesskey.style.backgroundColor ="#EFEFEF";
		businesskey1.style.color ="#581C20";
		electronic_key.style.backgroundColor ="#EFEFEF";
		electronic_key1.style.color ="#581C20";
		onlinekey.style.backgroundColor ="#EFEFEF";
		onlinekey1.style.color ="#581C20";
		aboutkey.style.backgroundColor ="#EFEFEF";
		aboutkey1.style.color ="#581C20";
		about_us1.style.height ="0px";}
})


enter.addEventListener('click',function(){
	a++;
	if (a%2 == 0){
		b = 0;
		c = 0;
		d = 0;
		e = 0;
		f = 0;
		enter.style.display ="none";
		drop.style.display ="flex";
		mobile_menu_nav.style.height ="0px";
		personal1.style.height ="0px";
		business1.style.height ="0px";
		personalkey.style.backgroundColor ="#EFEFEF";
		personalkey1.style.color ="#581C20";
		businesskey.style.backgroundColor ="#EFEFEF";
		businesskey1.style.color ="#581C20";
		electronic_key.style.backgroundColor ="#EFEFEF";
		electronic_key1.style.color ="#581C20";
		electronic_banking1.style.height ="0px";
		online_banking1.style.height ="0px";
		onlinekey.style.backgroundColor ="#EFEFEF";
		onlinekey1.style.color ="#581C20";
		aboutkey.style.backgroundColor ="#EFEFEF";
		aboutkey1.style.color ="#581C20";
		about_us1.style.height ="0px";}

	else{enter.style.display ="flex";
		drop.style.display ="none";
		mobile_menu_nav.style.height ="270px";}
})


//Code For Screen-Size DropDown

window.addEventListener('resize',function resizeme(){
	if (window.innerWidth <= 1100 && a%2 == 1){
		drop.style.display ="none";
		enter.style.display ="flex";
		mobile_menu_nav.style.height ="270px";

	}
	else if (window.innerWidth <= 1100 && a%2 == 0){
		drop.style.display ="flex";
		enter.style.display = "none";
		mobile_menu_nav.style.height ="0px";
	
		
	}

	else{drop.style.display ="none";
		enter.style.display ="none";
		mobile_menu_nav.style.height ="0px";
	
	}
})


//Code For Each Inner DropDown

personalkey.addEventListener('click',function(){
	b++;
	if (b%2 == 1){
		personal1.style.height ="450px";
		personalkey.style.backgroundColor ="#581C20";
		personalkey1.style.color ="white";
		mobile_menu_nav.style.height ="auto";}

	else{personal1.style.height ="0px";
		personalkey.style.backgroundColor ="#EFEFEF";
		personalkey1.style.color ="#581C20";}
})


window.addEventListener('resize',function resizeme(){
	if (window.innerWidth <= 1100 && b%2 == 1){
		personal1.style.height ="450px";
		mobile_menu_nav.style.height ="auto";
		personalkey.style.backgroundColor ="#581C20";
		personalkey1.style.color ="white";


		
	}

	else{personal1.style.height ="0px";
		personalkey.style.backgroundColor ="#EFEFEF";
		personalkey1.style.color ="#581C20"
	
	}
})




businesskey.addEventListener('click',function(){
	c++;
	if (c%2 == 1){
		business1.style.height ="360px";
		mobile_menu_nav.style.height ="auto";
		businesskey.style.backgroundColor ="#581C20";
		businesskey1.style.color ="white";}

	else{business1.style.height ="0px";
		businesskey.style.backgroundColor ="#EFEFEF";
		businesskey1.style.color ="#581C20";}
})


window.addEventListener('resize',function resizeme(){
	if (window.innerWidth <= 1100 && c%2 == 1){
		business1.style.height ="360px";
		mobile_menu_nav.style.height ="auto";
		businesskey.style.backgroundColor ="#581C20";
		businesskey1.style.color ="white";

		
	}

	else{business1.style.height ="0px";
		businesskey.style.backgroundColor ="#EFEFEF";
		businesskey1.style.color ="#581C20";
	
	}
})




electronic_key.addEventListener('click',function(){
	d++;
	if (d%2 == 1){
		electronic_banking1.style.height ="580px";
		mobile_menu_nav.style.height ="auto";
		electronic_key.style.backgroundColor ="#581C20";
		electronic_key1.style.color ="white";}

	else{electronic_banking1.style.height ="0px";
		electronic_key.style.backgroundColor ="#EFEFEF";
		electronic_key1.style.color ="#581C20";}
})


window.addEventListener('resize',function resizeme(){
	if (window.innerWidth <= 1100 && d%2 == 1){
		electronic_banking1.style.height ="580px";
		mobile_menu_nav.style.height ="auto";
		electronic_key.style.backgroundColor ="#581C20";
		electronic_key1.style.color ="white";

		
	}

	else{electronic_banking1.style.height ="0px";
		electronic_key.style.backgroundColor ="#EFEFEF";
		electronic_key1.style.color ="#581C20";
	
	}
})




onlinekey.addEventListener('click',function(){
	e++;
	if (e%2 == 1){
		online_banking1.style.height ="130px";
		mobile_menu_nav.style.height ="auto";
		onlinekey.style.backgroundColor ="#581C20";
		onlinekey1.style.color ="white";
	}

	else{online_banking1.style.height ="0px";
		onlinekey.style.backgroundColor ="#EFEFEF";
		onlinekey1.style.color ="#581C20";}
})


window.addEventListener('resize',function resizeme(){
	if (window.innerWidth <= 1100 && e%2 == 1){
		online_banking1.style.height ="130px";
		mobile_menu_nav.style.height ="auto";
		onlinekey.style.backgroundColor ="#581C20";
		onlinekey1.style.color ="white";

		
	}

	else{online_banking1.style.height ="0px";
		onlinekey.style.backgroundColor ="#EFEFEF";
		onlinekey1.style.color ="#581C20";
	
	}
})





aboutkey.addEventListener('click',function(){
	f++;
	if (f%2 == 1){
		about_us1.style.height ="450px";
		mobile_menu_nav.style.height ="auto";
		aboutkey.style.backgroundColor ="#581C20";
		aboutkey1.style.color ="white";}

	else{about_us1.style.height ="0px";
		aboutkey.style.backgroundColor ="#EFEFEF";
		aboutkey1.style.color ="#581C20";}
})


window.addEventListener('resize',function resizeme(){
	if (window.innerWidth <= 1100 && f%2 == 1){
		about_us1.style.height ="450px";
		mobile_menu_nav.style.height ="auto";
		aboutkey.style.backgroundColor ="#581C20";
		aboutkey1.style.color ="white";

		
	}

	else{about_us1.style.height ="0px";
		aboutkey.style.backgroundColor ="#EFEFEF";
		aboutkey1.style.color ="#581C20";
	
	}
})




/*Code For Login DropDown*/

main_login.addEventListener('click',function(){
	g++;
	if(g%2 == 1){
	mobile_login_nav.style.display ="block";
	}
	else{mobile_login_nav.style.display ="none";}
})




window.addEventListener('resize',function resizeme(){
	if (window.innerWidth <= 1100 && g%2 == 1){
		mobile_login_nav.style.display ="block";	
	}

	else{mobile_login_nav.style.display ="none";
	
	}
})
