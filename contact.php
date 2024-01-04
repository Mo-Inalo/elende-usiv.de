

<?php

include "templates/header.php";
?>


<?php
include "templates/nav.php"
?>




<div class="containercontact" style="background: url('/images/entfer.png')">

    <form action="https://formsubmit.co/musicelend@hotmail.com" method="POST" class="p-md-5" style="max-width: 1000px ; margin-left: auto; margin-right: auto"">

        <select name="title" required>
            <option>Select a Title </option>
            <option>Mr </option>
            <option>Mrs</option>
            <option>Mx</option>
            <option>Dr</option>
            <option>Prof</option>
            <option>Prof Dr</option>
            <option>Other ..</option>
        </select>



        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Please insert your given name.." required>

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Please insert your sure/last name.." required>

        <label for="tele">Phone</label>
        <input type="text" id="tele" name="tele" placeholder="Please insert your phone number.." required>

        <label for="email">E-Mail</label>
        <input type="text" id="email" name="email" placeholder="Please insert your E-Mail .." required>

        <label for="adress">Adress</label>
        <input type="text" id="adress" name="adress" placeholder="Please insert your Adress ..">

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Please write here your message .. " style="height:200px" required></textarea>

        <input type="submit" value="Submit" style="background: rgba(44,44,44,0.78)">

    </form>
</div>

<?php
include "templates/footer.php"
?>

