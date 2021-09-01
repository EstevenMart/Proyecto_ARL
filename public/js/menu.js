/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
$(document).ready(function(){
	$('.nav-links li:has(ul)').click(function(e){
		e.preventDefault();

		if ($(this).hasClass('activado')){
			$(this).removeClass('activado');
			$(this).children('ul').slideUp();
		} else {
			$('.nav-links li ul').slideUp();
			$('.nav-links li').removeClass('activado');
			$(this).addClass('activado');
			$(this).children('ul').slideDown();
		}
	});

	$('.btn-nav-links').click(function(){
		$('.sidebar .nav-links').slideToggle();
	});

	$(window).resize(function(){
		if ($(document).width() > 450){
			$('.sidebar .nav-links').css({'display' : 'block'});
		}

		if ($(document).width() < 450){
			$('.sidebar .nav-links').css({'display' : 'none'});
			$('.nav-links li ul').slideUp();
			$('.nav-links li').removeClass('activado');
		}
	});

	$('.nav-links li ul li a').click(function(){
		window.location.href = $(this).attr("href");
	});
});
 

