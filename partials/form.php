<form action="index.php" method="POST">

<label for="name"> Full Name: <?= !empty($errors['name']) ? $errors['name'] : '' ?></label>
  <input id="name" name="name" type="text" placeholder="Full Name" value="<?= !empty($name) ? $name : '' ?>"</br>

<label for="email">Email: <?= !empty($errors['email']) ? $errors['email'] : '' ?></label>
<input type="text" name="email" placeholder="Email" id="email" value="<?= !empty($email) ? $email : '' ?>"</br>

<label for="address">Address:<?= !empty($errors['address']) ? $errors['address'] : '' ?></label>
<input type="text" name="address" placeholder="Address" id="address" value="<?= !empty($address) ? $address : '' ?>"</br>

<label for="dateofbirth">Date of Birth:<?= !empty($errors['dateofbirth']) ? $errors['dateofbirth'] : '' ?></label>
<input type="date" name="dateofbirth" placeholder="Date of Birth" id="dateofbirth" value="<?= !empty($dateofbirth) ? $dateofbirth : '' ?>"</br>

<label for="age">Age:<?= !empty($errors['age']) ? $errors['age'] : '' ?></label>
<input type="text" name="age" placeholder="age" id="age" value="<?= !empty($age) ? $age : '' ?>"</br>

<label for="Gender">Gender:<?= !empty($errors['gender']) ? $errors['gender'] : '' ?> </label>
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" id="female">Female <input value="<?= !empty($gender) ? $gender : '' ?>"</br>

    <label for="movie">Favourite Movie:<?= !empty($errors['movie']) ? $errors['movie'] : '' ?></label>
<select id="movie" name="movie">
<option value="-------">------</option>
<option value="movie 1">movie 1</option>
<option value="movie 2">movie 2</option>
<option value="movie 3">movie 3</option>
<input value="<?= !empty($movie) ? $movie : '' ?>"</br></select>

<br>
<input type="submit" value="Submit"><input type="reset" value="Reset">
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
