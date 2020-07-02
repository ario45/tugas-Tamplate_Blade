<!DOCTYPE html>
<html>
    <head>
        <title>SanberBook</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>Buat Account Baru!</h1>
        <h3>Sign Up Form</h3>
        <form action="/welcome2" method="POST">
       
        @csrf
            <p>Firs Name:</p>
            
            <input type="text" name="first-name">
            <p>Last Name:</p>
            <input type="text" name="last-name">
            <p>Gender:</p>
            <input type="radio" name="gender" value="0">Male
            <input type="radio" name="gender" value="1">Female
            <input type="radio" name="gender" value="3">Other  
            <p>Nationality</p>
            <select>
                <option value="0">Indonesia</option>
                <option value="1">Malaysia</option>
                <option value="2">Singapura</option>
                <option value="3">Thaland</option>
                <option value="4">Filiphina</option>
            </select>
            <p>Language Spoken:</p>
            <input type="checkbox" name="bahasa" value="0">Bahasa Indonesia
            <input type="checkbox" name="bahasa" value="0">English
            <input type="checkbox" name="bahasa" value="0">Other
            <p>Bio:</p>
            <textarea cols="40" rows="9"></textarea><br>
            
            <input type="submit" value="sign up">
            </form>
            
    </body>

</html>