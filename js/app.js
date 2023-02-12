$(document).ready(function() {
  $('.header__burger').click(function(event){
    $('.header__burger, .header__nav').toggleClass('active');
    $('body').toggleClass('lock');
  });
}
);
let offset = 0;
const sliderLine= document.querySelector('.slider-line');




document.querySelector('#btn3').addEventListener('click', function(){
  this.classList.add('active');
  document.querySelector('#btn1').classList.remove('active');
  document.querySelector('#btn2').classList.remove('active');
  document.querySelector('#slider_img1').classList.remove('right');
  document.querySelector('#slider_img2').classList.remove('right');
  document.querySelector('#slider_img3').classList.remove('right');
  document.querySelector('#slider_img1').classList.add('left');
  document.querySelector('#slider_img2').classList.add('left');
  document.querySelector('#slider_img3').classList.add('left');

});

document.querySelector('#btn1').addEventListener('click', function(){
  this.classList.add('active');
  document.querySelector('#btn2').classList.remove('active');
  document.querySelector('#btn3').classList.remove('active');
  document.querySelector('#slider_img1').classList.remove('left');
  document.querySelector('#slider_img2').classList.remove('left');
  document.querySelector('#slider_img3').classList.remove('left');
  document.querySelector('#slider_img1').classList.add('right');
  document.querySelector('#slider_img2').classList.add('right');
  document.querySelector('#slider_img3').classList.add('right');

});

document.querySelector('#btn2').addEventListener('click', function(){
  this.classList.add('active');
  document.querySelector('#btn1').classList.remove('active');
  document.querySelector('#btn3').classList.remove('active');
  document.querySelector('#slider_img1').classList.remove('left');
  document.querySelector('#slider_img2').classList.remove('left');
  document.querySelector('#slider_img3').classList.remove('left');
  document.querySelector('#slider_img1').classList.remove('right');
  document.querySelector('#slider_img2').classList.remove('right');
  document.querySelector('#slider_img3').classList.remove('right');
});

document.querySelector('#button__login').addEventListener('click', function(){
  document.querySelector('#login').style.display = "flex";
  document.body.style.overflow = "hidden";
});
document.querySelector('#nav__link').addEventListener('click', function(){
  document.querySelector('#login').style.display = "flex";
  document.body.style.overflow = "hidden";
});
document.querySelector('#login_bg').addEventListener('click', function(){
  document.querySelector('#login').style.display = "none";
  document.querySelector('#login_create').style.display = "none";
  document.querySelector('#login_in').style.display = "block";
  document.body.style.overflow = "auto";
});
document.querySelector('#login_register').addEventListener('click', function(){
  document.querySelector('#login_in').style.display = "none";
  document.querySelector('#login_create').style.display = "block";
});
document.querySelector('#login_logIn').addEventListener('click', function(){
  document.querySelector('#login_in').style.display = "block";
  document.querySelector('#login_create').style.display = "none";
});
document.querySelector('#nav_link_plan').addEventListener('click', function(){
  document.querySelector('#section').scrollIntoView({behavior: 'smooth', block: 'start'});
});
document.querySelector('#nav_link_dest').addEventListener('click', function(){
  document.querySelector('#section_dest').scrollIntoView({behavior: 'smooth', block: 'start'});
});
document.querySelector('#nav_link_stories').addEventListener('click', function(){
  document.querySelector('#section_stories').scrollIntoView({behavior: 'smooth', block: 'start'});
});
document.querySelector('#subscribe__btn').addEventListener('click', function(){
  document.querySelector('#planning_tours').style.display = "block";
	document.querySelector('#planning_bg').style.display = "block";
	document.querySelector('#subscribe__btn').style.display = "none";
	document.body.style.overflow = "hidden";
});
document.querySelector('#planning_bg').addEventListener('click', function(){
  document.querySelector('#planning_tours').style.display = "none";
	document.querySelector('#planning_bg').style.display = "none";
	document.querySelector('#subscribe__btn').style.display = "block";
	document.body.style.overflow = "auto";
});
document.querySelector('#login_sign').addEventListener('click', function(){
  document.querySelector('#login_after').style.display = "block";
  document.querySelector('#login_in').style.display = "none";
  document.querySelector('#login_create').style.display = "none";
});