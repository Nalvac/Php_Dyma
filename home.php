<pre>
<?php

print_r($_GET);

?>
</pre>


<form action="" method="POST">

    <div>
        <label for="firstName">Nom</label>
        <input type="text" name="firstName" id="firstName">
    </div>
    <br/>
    <div>
        <label for="lastName">Prenom</label>
        <input type="text" name="lastName" id="lastName">
    </div>
    <br/>
    <div>
        <label for="date">Date</label>
        <input type="date" name="date" id="date">
    </div>
    <br/>
    <div>
        <label for="femme">Femme</label>
        <input type="radio" name="gender" id="femme" value="femme">
        <label for="homme">Homme</label>
        <input type="radio" name="gender" id="homme" value="homme">
    </div>
    <br/>
    <div>
        <label for="cgu">Cgu</label>
        <input type="checkbox" name="cgu" id="cgu">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
    </div>
    <br/>
    <div>
        <label>Favoris</label>
        <select name="favorite" id="favorite">
            <option value="wifi">Wifi</option>
            <option value="Tv">Tv</option>
            <option value="Fibre">Fibre</option>
        </select>
    </div>
    <br/>
    <button type="submit">Submit</button>

</form>

