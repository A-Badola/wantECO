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
    onclick: 'windows.location.href="#serviceList"',
    click: function(){
        $(this).addClass('active btn').siblings().removeClass('active');
        $links.hide().filter(tagged[tagName]).show();
      }
    }).appendTo($buttons);
   });
   
   $links.filter(tagged['popular']).show();
}());

