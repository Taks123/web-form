<div class="container">
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
