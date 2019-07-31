<html>
    <head>
        <title>The Form</title>
    </head>
    <body>
        <form action="result.php" method="POST">
            <label for="fname">First Name: </label>
            <input type="text" name="fname">
            <br>
            <label for="lname">Last Name: </label>
            <input type="text" name="lname">
            <br>
            <label for="age">Age: </label>
            <input type="number" name="age">
            <br>
            <label>Gender: </label>
            <label for="male">Male </label>
            <input type="radio" name="gender" value="Male" id="male">
            <label for="female">Female </label>
            <input type="radio" name="gender" value="Female" id="male">
            <br>
            <label for="address">Address: </label>
            <input type="text" name="address">
            <br>
            <input type="submit" value="Proceed">
        </form>
    </body>
</html>