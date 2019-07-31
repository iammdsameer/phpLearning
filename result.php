<html>
    <head>
        <title>PHP is Dynamic</title>
        <style>
            table {
                border-collapse: collapse;
            }
            table, td, th {
                border: 1px solid black;
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <center>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Gender</th>
                        <th>Address</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $_POST['fname']?></td>
                        <td><?php echo $_POST['lname']?></td>
                        <td><?php echo $_POST['gender']?></td>
                        <td><?php echo $_POST['address']?></td>
                    </tr>
                </tbody>
            </table>
        </center>
    </body>
</html>