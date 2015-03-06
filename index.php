<!--load the functions and header php files -->
<?php
include($root."functions.php");
include($root."header.php");
?>

    <div class="projectlist">
        <section class="layout">
            <div class="projects">

                <?php
                connect();
                frontlayout();
                ?>

            </div>
        </section>

    </div>

</body>
</html>