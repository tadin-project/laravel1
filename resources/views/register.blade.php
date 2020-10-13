<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>

<body>
  <h2>Buat Account Baru!</h2>
  <h4>Sign Up Form</h4>
  <form action="{{ url('welcome') }}" method="GET">
    <label for="first_name">First name:</label>
    <br>
    <input type="text" name="first_name" id="first_name">
    <br>
    <label for="last_name">Last name:</label>
    <br>
    <input type="text" name="last_name" id="last_name">
    <br>
    <label for="gender">Gender:</label>
    <br>
    <input type="radio" name="gender">Male
    <br>
    <input type="radio" name="gender">Female
    <br>
    <input type="radio" name="gender">Other
    <br>
    <label for="nationality">Nationality</label>
    <br>
    <select name="nationality" id="nationality">
      <option value="1">Indonesian</option>
      <option value="2">Malaysian</option>
    </select>
    <br>
    <label for="language">Language Spoken</label>
    <br>
    <input type="checkbox" name="language">Bahasa Indonesia
    <br>
    <input type="checkbox" name="language">English
    <br>
    <input type="checkbox" name="language">Other
    <br>
    <label for="bio">Bio</label>
    <br>
    <textarea name="bio" id="bio" cols="30" rows="5"></textarea>
    <br>
    <button type="submit">Sign Up</button>
  </form>
</body>

</html>