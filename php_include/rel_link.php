<?php
    $lesson_dirs = array("essentials", "layout", "accessibility", "advanced");
    $curr_folder = basename(getcwd());
    $add_to_path = in_array($curr_folder, $lesson_dirs) ? "." : "";
    $skip_index = array_search($curr_folder, $lesson_dirs);
?>
