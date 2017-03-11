// directory names must be in order they appear in html
var lesson_folders = ["essentials", "layout", "accessibility", "advanced"];

function nav_exp_init() {
    // "accordion" expansion for #lessons_nav
    var categories = document.getElementsByClassName("categories");

    // skip is an index of a category which should not be collapsed
    var skip = skip_index();

    for(var i = 0; i < categories.length; i++) {
        // collapse the lesson navigation here instead of in css
        // this way it is expanded by default if JavaScript is disabled
        if(i != skip) {
            categories[i].nextElementSibling.style.maxHeight = "0px";
            categories[i].classList.add("collapsed");
        }
        categories[i].onclick =
            function() {
                var lessons = this.nextElementSibling;
                lessons.style.maxHeight =
                    this.classList.toggle("collapsed") ?
                     "0px" : lessons.scrollHeight + "px";
            }
    }
}

function skip_index() {
    // if current directory is in lesson_folders, return it's index
    // otherwise return -1
    var loc = window.location.pathname;
    var path = loc.substring(0, loc.lastIndexOf("/"));
    var dir_name = path.substring(path.lastIndexOf("/") + 1);

    // lesson_folders is a global array defined at the top
    return lesson_folders.indexOf(dir_name);
}
