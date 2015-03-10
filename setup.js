// Initial JS
var sample = "";

$(document).ready(function() {
    $("#menu").css("height", $(window).height());
    $("#content").css("height", $(window).height());

    var api_url = "sample.json";
    $.get(api_url, "", function(data) {
        sample = data;
        $.each(sample.menu, function(i, item) {
            $("#menu ul").append("<li>" + item + "</li>");
        });
    $("#menu li").click(function(){
        console.log($(this).html());
    });

    });
});
