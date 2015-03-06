<!--load the functions and header php files -->
<?php
include($root."functions.php");
include($root."header.php");
?>

<div class="projectlist">

    <div class="leftside">
        <section class="layout">
        </br>
        </section>
    </div>

    <div class="singleproject">
        <section class="layout">
            <article class= "fullproject">

                <?php
                projectlayout();
                ?>

            </article>
        </section>
    </div>

    <div class="rightside">
        <section class="layout">
        </br>
        </section>
    </div>

</div>

<script src="js/script.js"></script>
<script src="http://localhost:35729/livereload.js"></script>


</body>
</html>