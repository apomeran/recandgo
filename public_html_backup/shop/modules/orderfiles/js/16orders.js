function getidorder(text){
    var regex = /id_order\=(\d+)\&/gi;
    match = regex.exec(text);
    return match[1];
}


function filesmanager(id){
    var text = $(".menu").html();
    var regex = /orderfilestab5\&amp\;token\=(\w+)\"\>/gi;
    match = regex.exec(text);
    $('.table  td:last-child').append('<form id="filesmanager'+id+'" action="?controller=orderfilestab5&token='+match[1]+'" method="POST"><input type="hidden" name="filemanager" value="1"/><input type="hidden" name="oid" value="'+id+'" /></form>');
    $('#filesmanager'+id+'').submit();
}

$(document).ready(function() {
    var parts = window.location.search.substr(1).split("&");
    var $_GET = {};
    for (var i = 0; i < parts.length; i++) {
        var temp = parts[i].split("=");
        $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
    }
    if ($_GET.controller=="AdminOrders"){
        $('.table td:last-child').append('<span class="filesicon" onclick="filesmanager(getidorder($(this).parent().html()));"><span>');
    }
});