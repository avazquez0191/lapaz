$(document).ready(function() {
    $('.members').hover(function(){
       var srchome = $(this).attr("src"); 
       console.log(srchome);
       var src = $(this).attr("src").split('/');
       var name = src[src.length - 1].split('_');
       $(this).attr("src", srchome.replace(name[0] + '_bn.png',name[0] + '.png'));
       
    },function(){
       var srchome = $(this).attr("src"); 
       var src = $(this).attr("src").split('/');
       var name = src[src.length - 1].split('.');
       $(this).attr("src", srchome.replace(name[0] + '.png',name[0] + '_bn.png'));
    }); 

    $('.collapse').on('shown.bs.collapse', function(){
    $(this).parent().find(".glyphicon-plus").removeClass("glyphicon-plus").addClass("glyphicon-minus");
    }).on('hidden.bs.collapse', function(){
    $(this).parent().find(".glyphicon-minus").removeClass("glyphicon-minus").addClass("glyphicon-plus");
    });    
});