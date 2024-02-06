




    <style>
        * {
            box-sizing: border-box;
        }

        /* Create two equal columns that floats next to each other */
        .column {
            float: left;
            width: 50%;
            padding: 10px;
            height: 300px; /* Should be removed. Only for demonstration */
        }

        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }






    </style>

    <?php
    include "templates/header.php";
    ?>



    <?php
    include "templates/nav.php"
    ?>



    <main  style=" background-image: url('images/entfer.png') " >

        <div    style=" ; max-width: 1400px ; margin-left: auto; margin-right: auto" >



    <div class=" p-5   ">
        <div class="p-5">
            <h4 style="text-align: justify" class="Elendeauswahl">
                Film music has always been the main subject of many fundamental questions, as it is an essential element of a film.
                Film music could always play an important role in shaping the final version of the film, in addition to carrying
                the film's narrative context.
                To understand and appreciate the role of music in the process of film's dramatic construction, we need only watch a
                film without a soundtrack.
                Several times I tried not to separate music and image in the works I presented and to find artistic connections between
                the two elements, by composing pieces of music inspired by the image.
                 This element wasn't missing from the pop songs
                I worked on either.
                Through my work, I strive to create a new state of harmony between organic music which created by humans and electronic
                music (synthesizers), incorporating them into music pieces that serve the narrative context of my compositions.
                Being familiar with oriental music, I have used ethnic instruments such as duduk and oud partly, along with classical
                orchestra and electronic contexts.

            </h4>
        </div>
        <div style="text-align: center;">
            <img src="images/unterschrift.png" style="height=20% ; width=20%">
        </div>

        <br>
        <div align="center" class="mx-5 my-5">
            <?php
            include "templates/slider.php"
            ?>

        </div>


        </div>


</div>
    </main>


<?php
include "templates/footer.php"
?>