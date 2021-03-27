$('.slider').each(function(){
  var $this = $(this);         //current slider
  var $group = $this.find('.slide-group'); 
  var $slides = $this.find('.slide');
  var btnAr = [];
  var curIndex = 0;
  var timeout;         //auto-sliding timer

  function move(newIndex){
    var animateLeft, slideLeft;

    advance();
    if($group.is(':animated') || curIndex === newIndex){
      return;
    }
    
    btnAr[curIndex].removeClass('active');
    btnAr[newIndex].addClass('active');

    if(newIndex > curIndex){
      slideLeft = '100%';
      animateLeft = '-100%';
    }
    else
    {
      slideLeft = '-100%';
      animateLeft = '100%';
    }

    $slides.eq(newIndex).css( {left: slideLeft, display: 'block'});
    
    $group.animate( {left: animateLeft}, function(){
      $slides.eq(curIndex).css({display: 'none'});
      $slides.eq(newIndex).css( {left: 0});
      $group.css({left: 0});
      curIndex = newIndex;
    });
  }

  function advance(){
    clearTimeout(timeout);
    timeout = setTimeout(function(){
      if(curIndex < ($slides.length - 1))
        move(curIndex + 1);
      else
        move(0);
    },4000);
  }

  $.each($slides, function(index) {
    var $btnn = $('<button type="button" class="slide-btn">&bull;</button>');
    if(index === curIndex){
      $btnn.addClass('active');
    }

    $btnn.on('click', function() {
      move(index);
    }).appendTo('.slide-buttons');
    btnAr.push($btnn);
  });

  advance();

});