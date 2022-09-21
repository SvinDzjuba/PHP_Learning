<style>
    .group_container {
        width: 85%;
        margin: 0 auto;
        margin-top: 40px;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .student {
        width: 25%;
        margin-bottom: 100px;
    }
    h3 {
        width: 100%;
        margin: 0;
    }
    .student_list {
        text-align: center;
        font-size: 26px;
        border-bottom: 1px solid #ccc;
    }
    .teacher {
        border-bottom: 1px solid;
    }
    .student_name {
        text-align: center;
    }
    .img_container {
        width: 80%;
        margin: 0 auto;
    }
    img {
        width: 100%;
        object-fit: cover;
        border-radius: 5px;
    }
    footer {
        width: 100%;
        position: absolute;
        bottom: 0;
        padding-bottom: 20px;
        text-align: center;
    }
</style>

<?php

include_once 'groups.php';
$text = "<div class='group_container'>";
foreach ($school as $group_name => $info) {
    $text .= '<h3>' . $group_name . '</h3>';
    $text .= '<p class="teacher"><b>Teacher: </b>' . $info['classroomTeacher'] . '</p>';
    $text .= '<h3 class="student_list">Students list</h3>';
    foreach ($info['students'] as $student) {
        $text .= '<div class="student">';
        $text .= '<p class="student_name">' . $student['name'] . '</p>';
        $text .= '<div class="img_container"><img src="images/' . $student['photo'] . '"></div>';
        $text .= '</div>';
    }
}
$text .= '</div>';
echo $text;

?>
<footer>Dzjubenko 2022</footer>