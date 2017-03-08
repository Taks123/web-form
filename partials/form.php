<form action="index.php" method="POST">

  <label for="name"> Full Name: <?= !empty($errors['name']) ? $errors['name'] : '' ?></label>
  <input id="name" name="name" type="text" placeholder="Full Name" value="<?= !empty($name) ? $name : '' ?>"></br>

  <label for="email"> Email: <?= !empty($errors['email']) ? $errors['email'] : '' ?></label>
  <input id="email" name="email" type="text" placeholder="Email" value="<?= !empty($email) ? $email : '' ?>"></br>

  <label for="Address"> Address: <?= !empty($errors['address']) ? $errors['address'] : '' ?></label>
  <input id="address" name="address" placeholder="Address" value="<?= !empty($address) ? $address : '' ?>"></br>

  <label for="dateofbirth">Date of Birth: <?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : '' ?></label>
  <input id="dateofbirth" name="dateofbirth" type="date" max="3/20/2017" placeholder="dd/mm/yyyy" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>"></br>

  <label for>Age: <?= !empty($errors['age']) ? $errors['age'] : '' ?></label>
  <input id="age" name="age" type="number" min="1" max="100" placeholder="Age" value="<?= !empty($age) ? $age : '' ?>"></br>




  <label for="gender">Gender: <?= !empty($errors['gender']) ? $errors['gender'] : '' ?></label>
  <input type="radio" name="gender" value="male" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"'; ?>> Male
  <input type="radio" name="gender" value="Female" <?php if (!empty($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"'; ?>>Female </br>





  <label for="movie">Favourite Movie: <?= !empty($errors['movie']) ? $errors['movie'] : '' ?></label>
  <select id="movie" name="movie">
    <option value="movie1" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie1') echo 'selected="selected"'; ?>>Select Movie</option>
    <option value="movie2" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie2') echo 'selected="selected"'; ?>>Movie 1</option>
    <option value="movie3" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie3') echo 'selected="selected"'; ?>>Movie 2</option>
    <option value="movie4" <?php if (!empty($_POST['movie']) && $_POST['movie'] == 'movie4') echo 'selected="selected"'; ?>>Movie 3</option>
  </select>
</br>

<input type="submit" value="Submit">  <input type="reset" value="Reset">
</form>




<!-- <div class="container">
<h2>Tell us some info!</h2>
  <form onsubmit="return validate()">
      <label for="name">Full name:</label>
    <input type="text" name="name" id="name">
    <div id="nameError"></div>

    <br>
    <label for="address">Address:</label>
    <input type="text" name="address" id="address">
    <div id="addressError"></div>

    <br>

  <label for="email">Email address:</label>
    <input type="text" name="email" id="email">
    <div id="emailError"></div>

    <br>

  <label for="Date of Birth">Date of Birth:</label>
 <input type="Date" name="DateofBirth" min="1867-1-31" max= "2017-3-25">
<div id="DateofBirthError"></div>
 <br>
    <label for="age">Age:</label>
    <input type="text" name="age" id="age" max="150">
    <div id="ageError"></div>
   <br>

    <label for="movie">Fave Movie:</label>
    <select id="movie" name="movie">
      <option>Select one...</option>
      <option>The Notebook</option>
      <option>The Matrix</option>
      <option>The Unborn</option>
    </select>
    <div id="movieError"></div>

    <br>

    <label>Gender:</label>
    <input type="radio" name="gender" id="male"><label for="male">Male</label>
    <input type="radio" name="gender" id="female"><label for="female">Female</label>
    <div id="genderError"></div>

    <button type="submit">Validate</button>
  </form>
</div>
 -->
