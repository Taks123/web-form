<<<<<<< HEAD
<div id="form">

<form action="index.php" method="POST" onsubmit="return validate()">
</br>
  <label for="name"> Full Name: <?= !empty($errors['name']) ? $errors['name'] : "" ?></label>
  <input id="name" name="name" type="text" placeholder="Full Name" value="<?= !empty($name) ? $name : ''?>">
  <div id="nameError"></div>
  </br>

  <label for="email"> Email: <?= !empty($errors['email']) ? $errors['email'] : "" ?></label>
  <input id="email" name="email" type="text" placeholder="Email" value="<?= !empty($email) ? $email : '' ?>">
  <div id="emailError"> </div>
  </br>

 <label for="address"> Address: <?= !empty($errors['address']) ? $errors['address'] : '' ?></label>
  <textarea input id="address" name="address" placeholder="Address"><?= !empty($address) ? $address : '' ?></textarea>
  <div id="addressError"></div>
  </br>

  <label for="dob">Date of Birth: <?= !empty($errors['dob']) ? $errors['dob'] : '' ?></label>
  <input id="dob" name="dob" type="date" onchange="calculateAge(dob)" value="<?= !empty($dob) ? $dob : '' ?>">
<div id="dobError"></div>
</br>


  <label for="age"> Age: <?= !empty($errors['age']) ? $errors['age'] : '' ?></label>
  <input id="age" name="age" type="number" min="1" max="150" placeholder="Age" value="<?= !empty($age) ? $age : '' ?>"> <div id="ageError"></div> </br>
=======
<form action="index.php" method="POST">

  <label for="name"> Full Name: <?= !empty($errors['name']) ? $errors['name'] : '' ?></label>
  <input id="name" name="name" type="text" placeholder="Full Name" value="<?= !empty($name) ? $name : '' ?>">
  <div id="nameError"></div>
  </br>

  <label for="email"> Email: <?= !empty($errors['email']) ? $errors['email'] : '' ?></label>
  <input id="email" name="email" type="text" placeholder="Email" value="<?= !empty($email) ? $email : '' ?>">
  <div id="emailError"></div>
  </br>

  <label for="address"> Address: <?= !empty($errors['address']) ? $errors['address'] : '' ?></label>
  <input id="address" name="address" placeholder="Address" value="<?= !empty($address) ? $address : '' ?>"></br>
  <div id="addressError"></div>
  </br>

  <label for="dateofbirth">Date of Birth: <?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : '' ?></label>
  <input id="dateofbirth" name="dateofbirth" type="date" placeholder="dd/mm/yyyy" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>"><div id="dateofbirthError"></div>
  </br>

  <label for>Age: <?= !empty($errors['age']) ? $errors['age'] : '' ?></label>
  <input id="age" name="age" type="number" placeholder="Age" value="<?= !empty($age) ? $age : '' ?>"> <div id="ageError"> </div> </br>
>>>>>>> refs/heads/form



  <label for="gender">Gender: <?= !empty($errors['gender']) ? $errors['gender'] : '' ?></label>
<<<<<<< HEAD
  <select id="gender" name="gender">
   <option value="select gender" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'select gender') echo 'selected="selected"'; ?>>Select gender</option>
  <option value="male" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'selected="selected"'; ?>> Male </option>
  <option value="female" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo ' selected="selected"'; ?>> Female </option>
  </select>
  <div id="genderError"></div>
  </br>
 <label for="movie">Favourite Movie: <?= !empty($errors['movie']) ? $errors['movie'] : '' ?></label>
  <select id="movie" name="movie">
    <option value="movie1" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie1') echo 'selected="selected"'; ?>>Select Movie</option>
    <option value="The Conjuring" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'The Conjuring') echo 'selected="selected"'; ?>>The Conjuring</option>
    <option value="The Notebook" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'The Notebook') echo 'selected="selected"'; ?>>The Notebook</option>
    <option value="Max" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'Max') echo 'selected="selected"'; ?>>Max</option>
  </select>
  <div id="movieError"></div>
</br>


 <button id="submitForm"  class="btn btn-success" type="submit" a href="thanks.php"> Submit </button>
<button id="clearForm" class="btn btn-warning" type="reset" value="reset">Clear </button>
</form>
</div>
=======
  <input type="radio" name="gender" value="male" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>> Male
  <input type="radio" name="gender" value="Female" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>Female </br>
  <div id="genderError"></div>
  </br>
>>>>>>> refs/heads/form




<<<<<<< HEAD
=======
<label for="movie">Favourite Movie: <?= !empty($errors['movie']) ? $errors['movie'] : '' ?></label>
  <select id="movie" name="movie">
    <option value="movie1" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie1') echo 'selected="selected"'; ?>>Select Movie</option>
    <option value="movie2" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie2') echo 'selected="selected"'; ?>>Movie 1</option>
    <option value="movie3" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie3') echo 'selected="selected"'; ?>>Movie 2</option>
    <option value="movie4" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie4') echo 'selected="selected"'; ?>>Movie 3</option>
  </select>
  <div id="movieError"></div>
</br>

<button id="submitForm" type="submit" onclick="return validate()">Submit </button>
<button id="clearForm" type="reset" value="reset">Clear </button>
</form>





>>>>>>> refs/heads/form



