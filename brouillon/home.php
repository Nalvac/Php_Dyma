<?php

$_POST = filter_input_array(INPUT_POST, [
    'firstname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'lastname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'email' => FILTER_SANITIZE_EMAIL,
    'date' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'gender' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'cgu' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    'favoris' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
  ]);

  $error = [
    'firstname' => '',
    'email' => ''
    ];
    
    $firstname = '';


  if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $_POST = filter_input_array(INPUT_POST, [
        'firstname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'lastname' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'email' => FILTER_SANITIZE_EMAIL,
        'date' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'gender' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'cgu' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'favoris' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    ]);

    define('ERROR_REQUIRED', "Veuillez renseigner ce champ");
    define('ERROR_LENGTH', "Le champ doit faire entre 2 et 10 caractères");
    define('ERROR_EMAIL', "L'email n'est pa valide");




    $firstname = $_POST['firstname'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $cgu = $_POST['cgu'];
    $favoris = $_POST['favoris'] ?? '';


    if(!$firstname) {
        $error['firstname'] = ERROR_REQUIRED;
    }elseif(mb_strlen($firstname) < 2 || mb_strlen($firstname) > 10) {
        $error['firstname'] = ERROR_LENGTH;
    }
    if(!$email) {
        $error['email'] = ERROR_REQUIRED;
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error['email'] = ERROR_EMAIL;
    }


  }

?>


<form action="home.php" method="POST">

    <div>
        <label for="firstname">Nom</label>
        <input type="text" name="firstname" id="firstname" value=<?= isset($firstname) ? "$firstname" : " " ?> >
        <?= $error['firstname'] ? '<p style="color: red">' .$error['firstname']. '</p>' : '' ?>
    </div>
    <br/>
    <div>
        <label for="lastname">Prenom</label>
        <input type="text" name="lastname" id="lastname">
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
        <select name="favoris[]" id="favorite">
            <option value="wifi">Wifi</option>
            <option value="Tv">Tv</option>
            <option value="Fibre">Fibre</option>
        </select>
    </div>
    <br/>
    <button type="submit">Submit</button>

</form>

