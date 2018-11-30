
	$(document).ready(function() {
	var NavY = $('.topnav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.topnav').addClass('sticky');
		var x = document.getElementsByClassName("login");
		if(x[0].style.display!="none")x[0].style.display="none";
	} else {
		$('.topnav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
	function log() {
		var x = document.getElementsByClassName("login");
		if(x[0].style.display!="block") x[0].style.display="block";
		else x[0].style.display="none";
		};
	
	function changePage(page){
		window.location.href=page;
		};
