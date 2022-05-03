var counter = 1;

setInterval(function () {document.getElementById('radio' + counter).checked = true;
	counter++;
	if(counter > 2){counter = 1;}
},8000);




//background: rgba(26, 76, 90, .5);
var first_image	= document.getElementById('first_image');
var second_image = document.getElementById('second_image');


window.addEventListener('load',function(){
	if (window.innerWidth <= 992){
		first_image.src ="slider/slidern/6.jpg";
		first_image.style.height ="100%";
		second_image.src ="slider/slidern/7.jpg";
		second_image.style.height ="100%";
	}

	else {first_image.src ="slider/slidern/1.jpg";
		first_image.style.height ="100%";
		second_image.src ="slider/slidern/2.jpg";
		second_image.style.height ="100%";}
})


window.addEventListener('resize',function(){
	if (window.innerWidth <= 992){
		first_image.src ="slider/slidern/6.jpg";
		first_image.style.height ="100%";
		second_image.src ="slider/slidern/7.jpg";
		second_image.style.height ="100%";
	}
	else {first_image.src ="slider/slidern/1.jpg";
		first_image.style.height ="100%";
		second_image.src ="slider/slidern/2.jpg";
		second_image.style.height ="100%";}
})