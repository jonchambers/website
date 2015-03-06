

<?php

function connect(){
    //$con = mysql_connect('localhost', 'jnchmbrs', 'Bztzh7b5');
    $con = mysql_connect('localhost', 'root', 'root');
    if (!$con) {
        die('Could not connect: ' . mysql_error());
    }

    mysql_select_db("new_site", $con);
}

function frontlayout(){
    $query = "select Id, Img_lg FROM projects order by rand()";
    $result = mysql_query($query) or die("Cannot execute $query");

    while ($row = mysql_fetch_array($result)) {
        $Id = $row['Id'];
        $Image = $row['Img_lg'];

        echo "<article class= 'project'><a href= page.php?Id=".$Id."><img class='proj' src= images/thumbnail/".$row['Img_lg']." ></a>";
        echo "</article>";
    }

}

function projectlayout()
{
    if (isset($_GET['Id']) and is_numeric($_GET['Id']) and ($_GET['Id'] > 0)) {

        $query = "select Img_1, title, medium, about, Img_2, Img_3, Img_4, Img_5, Img_6, date, dimensions, video FROM projects where id=" . $_GET['Id'];
        $result = mysql_query($query) or die("Cannot execute $query");
        if ($row = mysql_fetch_array($result)) {
            $Image = $row['Img_1'];
            $Image_2 = $row['Img_2'];
            $Image_3 = $row['Img_3'];
            $Image_4 = $row['Img_4'];
            $Image_5 = $row['Img_5'];
            $Image_6 = $row['Img_6'];
            $title = $row['title'];
            $medium = $row['medium'];
            $about = $row['about'];
            $date = $row['date'];
            $dimensions = $row['dimensions'];
            $video = $row['video'];

            echo "<h1><b>" . $title . "</b></h1>";
            echo "<p><b>" . $medium . "</b></p>";
            echo "<p><b>" . $date . "</b></p>";
            echo "<p><b>" . $dimensions . "</b></p>";
            echo "<p>" . $about . "</p>";


            //if there is a video available, show it
            if ($video != null) {
                echo "<div class='video' >" . $row['video'] . " </div>";
            }

            //show multiple images
            if ($Image != null) {
                echo "<img class='proj'  src= images/full/" . $row['Img_1'] . " >";
            }
            //show multiple images
            if ($Image_2 != null) {
                echo "<img class='proj'  src= images/full/" . $row['Img_2'] . " >";
            }

            //show multiple images
            if ($Image_3 != null) {
                echo "<img class='proj'  src= images/full/" . $row['Img_3'] . " >";
            }

            //show multiple images
            if ($Image_4 != null) {
                echo "<img class='proj'  src= images/full/" . $row['Img_4'] . " >";
            }

            //show multiple images
            if ($Image_5 != null) {
                echo "<img class='proj'  src= images/full/" . $row['Img_5'] . " >";
            }

            //show multiple images
            if ($Image_6 != null) {
                echo "<img class='proj'  src= images/full/" . $row['Img_6'] . " >";
            }


        } else {
            $output = '<p>No results were found with that query.</p>';
        }
    } else {
        $output = '<p>Invalid input supplied.</p>';
    }
}

function title()
{
    if (isset($_GET['Id']) and is_numeric($_GET['Id']) and ($_GET['Id'] > 0)) {
        $query = "select title FROM projects where id=" . $_GET['Id'];
        $result = mysql_query($query) or die("Cannot execute $query");

        if ($row = mysql_fetch_array($result)) {
            $title = $row['title'];
            echo "<title>" . $title . "</title>";
        }

    }
    if($_SERVER['REQUEST_URI'] == "/newresponsivesite/index.php"){
        echo "<title>Jon Chambers</title>";
    }
    if($_SERVER['REQUEST_URI'] == "/newresponsivesite/about.php"){
        echo "<title>About Jon Chambers</title>";
    }
    if($_SERVER['REQUEST_URI'] == "/newresponsivesite/cv.php"){
        echo "<title>Jon Chambers CV</title>";
    }
}

?>