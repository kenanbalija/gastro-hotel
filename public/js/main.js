$(document).ready(function () {
    $(document).on('mouseenter', '.homeButton', function () {
        $('#aboutContainer').show('1000','linear', function () {});
    }).on('mouseleave', '#aboutContainer', function () {
        $('#aboutContainer').hide('1000','linear', function () {});
    });
    $(document).on('click', '.searchButton', function(){
      $('#searchContainer').show('1000','linear', function () {});
    }).on('mouseleave', '#searchContainer', function () {
        $('#searchContainer').hide('1000','linear', function () {});
    });
    if(window.innerWidth<=768){
      $('nav').removeClass('navbar-fixed-top');
      $('nav').css('top:80px');
    } else {
      $('nav').addClass('navbar-fixed-top');
    }
});
/*
if(window.innerWidth>1080){
  $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        document.getElementById('navigation-links').style.marginTop='0';
        document.getElementById('nav-container').style.height='80px';
      } else if($(document).scrollTop() <50) {
        document.getElementById('navigation-links').style.marginTop='28px';
        document.getElementById('nav-container').style.height='136px';
      }
    });
  };*/


  function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
  }
  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
  }
