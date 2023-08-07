import '../scss/main.scss'

//Global

import './global/back-to-top'
import './global/hmaburger'
import './global/match-height'
import './global/append-to-elements'

import './gsap/gsap'




// Templatepage
import './template-page/home-page/accordion'
import './template-page/home-page/swiper-logo'
import './template-page/home-page/swiper-work'
import './template-page/home-page/swiper-clients'
import './template-page/home-page/hp-services'

import './template-page/blog/single-blog'
import './template-page/blog/blog-append-element-mobile'
import './template-page/blog/blog-category-click-more'
import './template-page/blog/blog-change-place'

import './template-page/case-studies/swiper-case-studies'
import './template-page/case-studies/category-boxes'

//Template-parts
import './template-parts/sliders'
import './template-parts/main-menu'


$(document).ready(function(){
    $(window).bind('scroll', function() {
    var navHeight = $( window ).height() + 370;
          if ($(window).scrollTop() > navHeight) {
              $('.services-block-categories').addClass('fixed');
              $('.services-block-categories').appendTo('header');

          }
          else {
              $('.services-block-categories').removeClass('fixed');
              $('.services-block-categories').insertAfter('.services-block-hero');
          }
     });
 });


 $(document).ready(function() {
    $(window).scroll(function() {
        var headerH = $('.services-block-hero').outerHeight(true);
        var scrollVal = $(this).scrollTop() - 55;
         if ( scrollVal > headerH ) {
            $('.services-block-categories').addClass('fixed');
            $('.services-block-categories').appendTo('header');
         } else {
            $('.services-block-categories').removeClass('fixed');
            $('.services-block-categories').insertAfter('.services-block-hero');
         }
     });
  });

  $(function() {
  
    var link = $('.services-block-categories__link');
    
    // Move to specific section when click on menu link
    link.on('click', function(e) {
      var target = $($(this).attr('href'));
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 600);
      $(this).addClass('active');
      e.preventDefault();
    });
    

    $(window).on('scroll', function(){
      scrNav();
    });
    

    function scrNav() {
      var sTop = $(window).scrollTop();
      $('section').each(function() {
        var id = $(this).attr('id'),
            offset = $(this).offset().top-1,
            height = $(this).height();
        if(sTop >= offset && sTop < offset + height) {
          link.removeClass('active');
          $('.services-block-categories').find('[data-scroll="#' + id + '"]').addClass('active');
        }
      });
    }
    scrNav();
  });


  (function($) {

    $(".services-block-categories__items").on('scroll', function() {
        $val = $(this).scrollLeft();
  
        if($(this).scrollLeft() + $(this).innerWidth()>=$(this)[0].scrollWidth){
            $(".services-block-categories__scroll--right").hide();
          } else {
          $(".services-block-categories__scroll--right").show();
        }
  
        if($val == 0){
          $(".services-block-categories__scroll--left").hide();
        } else {
          $(".services-block-categories__scroll--left").show();
        }
      });
    $(".services-block-categories__scroll--right").on("click", function(){
      $(".services-block-categories__items").animate( { scrollLeft: '+=460' }, 200);
      
    });
    $(".services-block-categories__scroll--left").on("click", function(){
      $(".services-block-categories__items").animate( { scrollLeft: '-=460' }, 200);
    });
  
    
  
  })(jQuery);