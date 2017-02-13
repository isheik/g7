function nav_exp_init() {
    // "accordion" expansion for #lessons_nav
    var categories = document.getElementsByClassName("categories");

    for(var i = 0; i < categories.length; i++) {
        // set max-height to 0 here instead of in css so that
        // lesson navigation is expanded by default if JavaScript is disabled
        categories[i].nextElementSibling.style.maxHeight = "0px";
        categories[i].onclick =
            function() {
                var lessons = this.nextElementSibling;
                lessons.style.maxHeight =
                    lessons.style.maxHeight == "0px" ?
                    lessons.scrollHeight + "px" : "0px";
            }
    }
}

function set_main_width() {
    var lessons_nav = document.getElementById("lessons_nav");

    var percent_width = 
        100 / document.getElementById("top_nav").getElementsByTagName("li").length;

    lessons_nav.style.width = percent_width + "%";

    document.getElementById("lesson_content").style.width = 100 - percent_width + "%";
}
