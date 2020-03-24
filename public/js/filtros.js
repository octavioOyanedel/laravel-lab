$(window).on('load',function(){

    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        return results[1] || 0;
    }


    if(decodeURIComponent($.urlParam('cantidad')) != null && decodeURIComponent($.urlParam('cantidad')) != ''){
        $('#cantidad option:selected').removeAttr('selected');
        $('#cantidad option[value="'+decodeURIComponent($.urlParam('cantidad'))+'"]').attr("selected","selected");
    }

    if(decodeURIComponent($.urlParam('columna')) != ''){
        $('#columna option:selected').removeAttr('selected');
        $('#columna option[value="'+decodeURIComponent($.urlParam('columna'))+'"]').attr("selected","selected");
    }

    if(decodeURIComponent($.urlParam('orden')) != ''){
        $('#orden option:selected').removeAttr('selected');
        $('#orden option[value="'+decodeURIComponent($.urlParam('orden'))+'"]').attr("selected","selected");
    }     

    $('#buscar').click(function(){

        $('#cantidad option:selected').removeAttr('selected');
        $('#columna option:selected').removeAttr('selected');
        $('#orden option:selected').removeAttr('selected');
        $('#cantidad option[value=""]').attr("selected","selected");
        $('#columna option[value=""]').attr("selected","selected");
        $('#orden option[value=""]').attr("selected","selected");
    });

});