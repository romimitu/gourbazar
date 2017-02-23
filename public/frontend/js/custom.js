$(document).ready(function(){
  var Heightcalculate = $('.sticky-nav').outerHeight() + $('.offset-nav').outerHeight()
  //caches a jQuery object containing the header element
  var header = $(".scrollheader");
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 1 ) {
      header.removeClass('scrollheader').addClass("coverheader");
      $('#phantom').show();
      $('#phantom').css('height', Heightcalculate+'px');
    } else {
      header.removeClass("coverheader").addClass('scrollheader');
      $('#phantom').hide();
    }
  });
  if( $(window).width() < 980) {
    // TDB interaction for mobile
    $(".interactive-pin").click(function(event) {
      event.preventDefault();
      var child = $(".picture-cta" + "." + $(this).attr('id'));
      child.append("<div class='modal-background'></div>")
      child.addClass('mobile-modal')
      child.stop().animate({ opacity: '1'}, 400)
      child.find('.cta-frame').addClass('mobile-modal-tile')
      child.append("<span class='mobile-modal-close'>X</span>")
      $('.mobile-modal-close').click(function() {
        child.removeClass('mobile-modal')
        child.find(".modal-background").remove();
        child.find(".mobile-modal-close").remove();
        $(".picture-cta-container").append($('.template-index').find(child))
        child.stop().animate({ opacity: '0'}, 300)
      })
      $('.template-index').append(child);
    })
  } else {
    //Expand more info button on hover
    $(".interactive-pin").hover(function() {
      var interactiveImageHeight = $(".interactive-picture").height()
      var child = $(".picture-cta" + "." + $(this).attr('id'));
      if($(this).position().top <= (interactiveImageHeight/2 - interactiveImageHeight*0.1)) {
        child.addClass("pin-top");
      } else if ($(this).position().top > interactiveImageHeight/2 - interactiveImageHeight*0.1
          && $(this).position().top < interactiveImageHeight/2 + interactiveImageHeight*0.1) {
        child.addClass("pin-center");
      } else {
        child.addClass("pin-bottom");
      }
      $(this).css('z-index', 999999);
      $(this).append(child);
      child.stop().animate({width: '250px'}, 200).animate({ opacity: '1'}, 300)
    }, function () {
      $(this).css('z-index', 1);
      var children = $(this).children("." + $(this).attr('id'));
      $(".picture-cta-container").append(children);
      children.css({opacity: 0, width: 0});
    });
  }
  $(".underline-animation").closest(".hover-target").hover(function(){
    $(this).addClass("hover-animation")
    $(this).find(".underline-animation").addClass("hover-animation")
  }, function(){
    $(this).removeClass("hover-animation")
    $(this).find(".underline-animation").removeClass("hover-animation")
  })

  $(".third-item").hover(function() {
    $(this).find(".one-third-cta").addClass("cta-hover")
    $(this).find("h3").addClass("hover-animation")
  }, function() {
    $(this).find(".one-third-cta").removeClass("cta-hover")
    $(this).find("h3").removeClass("hover-animation")
  })

});
