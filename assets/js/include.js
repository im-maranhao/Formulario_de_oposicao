// document.addEventListener('DOMContentLoaded', function() {
//     var hamburger = document.getElementById('hamburger');
//     var menu = document.getElementById('menu');

//     hamburger.addEventListener('click', function() {
//         hamburger.classList.toggle('open');
//         menu.classList.toggle('open');
//     });
// });


// $('.toggle').on('click', function() {
//     $('.menu').toggleClass('expanded');  
//     $('span').toggleClass('hidden');  
//     $('.container , .toggle').toggleClass('close');  
//   });
  
$(function() {

    $('.drop-box').click (function() {
      $('#ul')
        .fadeToggle();
    });
    
    $('.drop-box').on('click', function() {
      $(this).toggleClass('marked');
      $('.drop-text').toggleClass('marked1');
    });
    
    $(".drop-box").click(function(){
        $('.rotate').toggleClass("down"); 
    });
    
    
    
    
    
    
    });