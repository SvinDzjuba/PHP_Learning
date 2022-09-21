<style>
.movies_container {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}
h1, h2, h3, h4, h5, h6 {
    margin: 0;
}
.movie {
    width: 550px;
    /* height: 600px; */
    display: flex;
    justify-content: space-between;
    border: 1px solid #000;
    margin: 15px;
}
.movie__left_side {
    width: 60%;
    border-right: 1px solid #000;
    padding: 10px
}
.movie__left_side p {text-align: center}
.movie__right_side {
    width: 40%;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}
.plot {text-align: justify !important;}
.actor {
    border: 1px solid #000;
    margin: 15px;
}
h3 {
    padding: 20px;
    font-size: 30px;
    background-color: chocolate;
    color: #fff;
}
h4 {
    text-align: center;
    font-size: 26px;
    margin-top: 15px;
}
h5 {
    font-size: 16px;
    text-align: center;
}
img {
    width: 100%;
    object-fit: cover;
}
</style>

<div class="movies_container">
<?php
include_once 'movies.php';
$text = '';
foreach ($movies as $movie => $info) {
    $text.='<div class="movie">';
        $text.='<div class="movie__left_side">';
            $text.='<h3>' . $movie . '</h3>';
            $text.='<div class="img_container"><img src="images/' . $info['Poster'] . '"></div>';
            $text.='<p>Release date: ' . $info['Release'] . '</pRelease>';
            $text.='<p>' . $info['Running Time'] . '</p>';
            $text.='<p class="plot">' . $info['Plot'] . '</p>';
        $text.='</div>';
        $text.='<div class="movie__right_side">';
            $text.='<h4>Actors</h4>';
            foreach ($info['Actors'] as $actor) {
                $text.='<div class="actor">';
                    $text.='<h5>' . $actor['name'] . '</h5>';
                    $text.='<div class="img_container">';
                        $text.='<img src="images/' . $actor['photo'] . '">';
                    $text.='</div>';
                $text.='</div>';
            }
        $text.='</div>';
    $text.='</div>';
}
echo $text;
?>
</div>