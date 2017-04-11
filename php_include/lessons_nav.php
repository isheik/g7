<?php require_once("rel_link.php") ?>
                <nav id="lessons_nav">
                    <h2>Lessons</h2>
                    <ul id="category_list">
                        <li>
                            <button class="categories">Essentials</button>
                            <ul class="lessons">
                                <li><a href="<?= $add_to_path ?>essentials/focus-and-movement.php">
                                        Focus &amp; Movement</a></li>
                                <li><a href="<?= $add_to_path ?>essentials/selection.php">
                                        Selection</a></li>
                                <li><a href="<?= $add_to_path ?>essentials/editing.php">
                                        Editing</a></li>
                                <li><a href="<?= $add_to_path ?>essentials/quality-of-life.php">
                                        Quality of Life</a></li>
                            </ul>
                        </li>

                        <li>
                            <button class="categories">Layout</button>
                            <ul class="lessons">
                                <li><a href="<?= $add_to_path ?>layout/desktop-access.php">
                                        Desktop Access</a></li>
                                <li><a href="<?= $add_to_path ?>layout/window-switching.php">
                                        Window Switching</a></li>
                                <li><a href="<?= $add_to_path ?>layout/screen-layout.php">
                                        Screen Layout</a></li>
                                <li><a href="<?= $add_to_path ?>layout/virtual-desktops.php">
                                        Virtual Desktops</a></li>
                            </ul>
                        </li>

                        <li>
                            <button class="categories">Accessibility</button>
                            <ul class="lessons">
                                <li><a href="<?= $add_to_path ?>accessibility/language-select.php">
                                        Language Select</a></li>
                                <li><a href="<?= $add_to_path ?>accessibility/narrator.php">
                                        Narrator</a></li>
                                <li><a href="<?= $add_to_path ?>accessibility/zoom.php">
                                        Zoom</a></li>
                            </ul>
                        </li>

 <!--                        <li>
                            <button class="categories">Advanced</button>
                            <ul class="lessons">
                                <li><a href="<?= $add_to_path ?>advanced/run-commands.php">
                                        Run Commands</a></li>
                                <li><a href="<?= $add_to_path ?>advanced/power-user.php">
                                        Power User</a></li>
                            </ul>
                        </li> -->
                    </ul>

                    <script src="<?= $add_to_path ?>script/lessons-nav-exp.js"></script>
<?php
    // elements of the array must be in the same order they appear in html
    $lesson_dirs = array("essentials", "layout", "accessibility"/*, "advanced"*/);
    // $path_array is defined in rel_link.php
    $skip_index = array_search(end($path_array), $lesson_dirs);
    echo "                    "; // indentation, completely unnecessary
    echo "<script>nav_exp_init($skip_index);</script>";
?>

                </nav>
