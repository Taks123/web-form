<div id="form">
<h1> Web Form </h1>
<form action="index.php" method="POST" onsubmit="return validate()">
</br>
  <label for="name"> Full Name:</label>
  <input id="name" name="name" type="text" placeholder="Full Name" value="<?= !empty($name) ? $name : ''?>">
  <div id="nameError" class="error"><?= !empty($errors['name']) ? $errors['name'] : '' ?></div>
  </br>

  <label for="email"> Email:</label>
  <input id="email" name="email" type="text" placeholder="Email" value="<?= !empty($email) ? $email : '' ?>">
  <div id="emailError" class="error"><?= !empty($errors['email']) ? $errors['email'] : "" ?> </div>
  </br>

 <label for="address"> Address: </label>
  <textarea input id="address" name="address" placeholder="Address"><?= !empty($address) ? $address : '' ?></textarea>
  <div id="addressError" class="error"><?= !empty($errors['address']) ? $errors['address'] : '' ?> </div>
  </br>

  <label for="dob">Date of Birth:</label>
  <input id="dob" name="dob" type="date" onchange="calculateAge(dob)" value="<?= !empty($dob) ? $dob : '' ?>">
<div id="dobError" class="error"><?= !empty($errors['dob']) ? $errors['dob'] : '' ?> </div>
</br>


  <label for="age"> Age: </label>
  <input id="age" name="age" type="number" min="1" max="150" placeholder="Age" value="<?= !empty($age) ? $age : '' ?>"> <div id="ageError" class="error"> <?= !empty($errors['age']) ? $errors['age'] : '' ?></div> </br>


  <label for="gender">Gender: </label>
  <select id="gender" name="gender">
   <option value="select gender" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'select gender') echo 'selected="selected"'; ?>>Select gender</option>
  <option value="male" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'selected="selected"'; ?>> Male </option>
  <option value="female" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo ' selected="selected"'; ?>> Female </option>
  </select>
  <div id="genderError" class="error"><?= !empty($errors['gender']) ? $errors['gender'] : '' ?></div>
  </br>
 <label for="movie">Favourite Movie:</label>
  <select id="movie" name="movie">
    <option value="movie1" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie1') echo 'selected="selected"'; ?>>Select Movie</option>
    <option value="The Conjuring" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'The Conjuring') echo 'selected="selected"'; ?>>The Conjuring</option>
    <option value="The Notebook" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'The Notebook') echo 'selected="selected"'; ?>>The Notebook</option>
    <option value="Max" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'Max') echo 'selected="selected"'; ?>>Max</option>
  </select>
  <div id="movieError" class="error"><?= !empty($errors['movie']) ? $errors['movie'] : '' ?></div>
</br>


<div id="buttons"> <button id="submitForm" class="btn btn-success" type="submit"> Submit </button>
<button id="clearForm" class="btn btn-warning" type="reset" value="reset">Clear </button> </div>
<br>
<p> © Copyright Takara Rodrigues 2017 </p> </div>
</form>
</div>