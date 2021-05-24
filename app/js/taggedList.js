(function(){
  var $links = $('#serviceList a');      //store all a
  var $buttons = $('#searchTags');
  var tagged={};

  $links.each(function(){
    var linkk = this;
    var tags = $(this).data('tags');

    if(tags){
      tags.split(',').forEach(function(tagName){
        if(tagged[tagName]==null){
          tagged[tagName]=[];
        }
        tagged[tagName].push(linkk)
      });
    }
  });
  $links.hide();
    
 $.each(tagged, function(tagName){

   $('<button />', {
    text: tagName ,
    onclick: 'window.location.href="#serviceList"',
    click: function(){
        $(this).addClass('active-btn').siblings().removeClass('active-btn');
        $links.hide().filter(tagged[tagName]).show();
      }
    }).appendTo($buttons);
   });
   
   $links.show();
   for(var i=0; i< $('.rl-btns').length; i++){
        element= $('.rl-btns')[i].parentElement;
        scrollLeftMax = element.scrollWidth - element.clientWidth;
        if(element.scrollLeft===0)
            element.children[0].children[0].style.display='none';
          else
            element.children[0].children[0].style.display='block';
          if(element.scrollLeft==scrollLeftMax)
            element.children[0].children[1].style.display='none';
          else
            element.children[0].children[1].style.display='block';
   }
}());

function sideScroll(element,direction,speed,distance,step){
        scrollAmount = 0;
        var slideTimer = setInterval(function(){
            if(direction == 'left'){
                element.scrollLeft -= step;
            } else {
                element.scrollLeft += step;
            }
            let scrollLeftMax = element.scrollWidth - element.clientWidth;
            if(element.scrollLeft===0)
            element.children[0].children[0].style.display='none';
          else
            element.children[0].children[0].style.display='block';
          if(element.scrollLeft==scrollLeftMax)
            element.children[0].children[1].style.display='none';
          else
            element.children[0].children[1].style.display='block';
            scrollAmount += step;
            if(scrollAmount >= distance){
                window.clearInterval(slideTimer);
            }
        }, speed);
}

