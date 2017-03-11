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
