function nav_exp_init() {
    // "accordion" expansion for #lessons_nav
    var categories = document.getElementsByClassName("categories");

    for(var i = 0; i < categories.length; i++) {
        // collapse the lesson navigation here instead of in css
        // this way it is expanded by default if JavaScript is disabled
        categories[i].nextElementSibling.style.maxHeight = "0px";
        categories[i].classList.add("collapsed");
        categories[i].onclick =
            function() {
                var lessons = this.nextElementSibling;
                lessons.style.maxHeight =
                    this.classList.toggle("collapsed") ?
                     "0px" : lessons.scrollHeight + "px";
            }
    }
}

function set_lessons_width() {
    // set #lessons_nav width to 100%/(number of li elements in #top_nav)
    // let #lesson_content fill the remaining width
    var percent_width = 
        100 / document.getElementById("top_nav").getElementsByTagName("li").length;

    document.getElementById("lessons_nav").style.width = percent_width + "%";

    document.getElementById("lesson_content").style.width = 100 - percent_width + "%";
}
