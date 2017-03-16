<div class="form">
<form action="index.php" method="POST" onsubmit="return validate()">

  <label for="name"> Full Name: <?= !empty($errors['name']) ? $errors['name'] : '' ?></label>
  <input id="name" name="name" type="text" placeholder="Full Name" value="<?= !empty($name) ? $name : '' ?>">
  <div id="nameError"></div>
  </br>

  <label for="email"> Email: <?= !empty($errors['email']) ? $errors['email'] : '' ?></label>
  <input id="email" name="email" type="text" placeholder="Email" value="<?= !empty($email) ? $email : '' ?>">
  <div id="emailError"> </div>
  </br>

  <label for="address"> Address: <?= !empty($errors['address']) ? $errors['address'] : '' ?></label>
  <textarea input id="address" name="address" placeholder="Address"><?= !empty($address) ? $address : '' ?></textarea>
  <div id="addressError"></div>
  </br>

  <label for="dob">Date of Birth: <?= !empty($errors['dob']) ? $errors['dob'] : '' ?></label>
  <input id="dob" name="dob" type="date" placeholder="mm/dd/yyyy"onchange="calculateAge(dob)" value=""<?= !empty($dob) ? $dob : '' ?>">
<div id="dobError"></div>
</br>


  <label for="age"> Age: <?= !empty($errors['age']) ? $errors['age'] : '' ?></label>
  <input id="age" name="age" type="number" min="1" max="150" placeholder="Age" value="<?= !empty($age) ? $age : '' ?>"> <div id="ageError"></div> </br>



  <label for="gender">Gender: <?= !empty($errors['gender']) ? $errors['gender'] : '' ?></label>
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
    <option value="movie2" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie2') echo 'selected="selected"'; ?>>Movie 1</option>
    <option value="movie3" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie3') echo 'selected="selected"'; ?>>Movie 2</option>
    <option value="movie4" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie4') echo 'selected="selected"'; ?>>Movie 3</option>
  </select>
  <div id="movieError"></div>
</br>

<button id="submitForm" type="submit"> Submit </button>
<button id="clearForm" type="reset" value="reset">Clear </button>
</form>
</div>







