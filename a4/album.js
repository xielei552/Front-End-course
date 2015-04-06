$(document).ready(function() {
    var num= 0;
    var library;
    $.getJSON("library.json", function(count) {
        var object;
        for (object in count) {
            num++;
        }
        library= count;
    });
    $("#click").click(function() {
        $("#click").hide();

        $("#head").append("<h2> This page contented " + num + " albums. Please select one:</h2>");

        $.each(library, function(lib_name, rest_1) {
            $("#head").append("<ul><li  id=" + lib_name + "><a href='#'>" + lib_name + "</a></li></ul>");

            $("#" + lib_name).click(function() {
                $("#pic_info").empty();

                $.each(rest_1, function(need, rest_2){
                    if (need== "photos") {
                        $("#table_1").empty();

                        $.each(rest_2, function(id, img) {
                            $("#table_1").append("<td>" + "<img id=p" + id + " src='" + img.url + "' height=100px width=100px></img>");
                            $("#p" + id).click(function() {
                                $("#photo").empty();
                                $("#photo").append("<img src='" + img.url + "'></img>");
                                $("#photo").append("<tr><td>" + img.title +" - " + img.date + "</td></tr>");
                            });
                        });

                    }
                    else {
                        $("#pic_info").append("<tr><td>" + need + ":</td><td>" + rest_2 + "</td></tr>");
                    }
                });
            });
        });
    });
});
