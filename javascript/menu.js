// Wait for the page to load first
$(document).ready(function () {
    var a = document.getElementById("photographyLink");
    var imgnr = 0;
    //Set code to run when the link is clicked
    // by assigning a function to "onclick"
    a.onclick = function () {
        if (imgnr === 0) {
            $(".content").fadeToggle(400);
            var folder = "images/photography/";
            $.ajax({
                url: folder,
                success: function (data) {
                    $(data).find("a").attr("href", function (i, val) {
                        if (val.match(/\.(jpe?g|png|gif)$/)) {
                            imgnr = imgnr + 1;
                            var image = $("<div id='image" + imgnr + "' class='content half'><img src='" + folder + val + "'></div>").hide().fadeIn(400);
                            $("#flex-container").prepend(image);
                        }
                    });
                }
            });
        } else {
            $(".content").fadeToggle(400);
        }
        return false;
    };
});