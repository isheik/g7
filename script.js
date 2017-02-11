// "accordion" expansion for #lessons_nav
function expand_sib() {
    var lessons = this.nextElementSibling;
    lessons.style.maxHeight =
        lessons.style.maxHeight ? null : lessons.scrollHeight + "px";
}

function nav_exp_init() {
    var categories = document.getElementsByClassName("categories");
    for (var i = 0; i < categories.length; i++)
        categories[i].onclick = expand_sib;
}

// main width setters
function set_lessons_width() {
    document.getElementById("lessons_nav").style.width =
        document.getElementById("top_nav")
        .getElementsByTagName("li")[0].offsetWidth + "px";
}

function set_content_width() {
    document.getElementById("lesson_content").style.width =
        (document.getElementsByClassName("centered")[0].offsetWidth
        - document.getElementById("lessons_nav").offsetWidth) + "px";
}

function set_main_width() {
    set_lessons_width();
    set_content_width();
}
