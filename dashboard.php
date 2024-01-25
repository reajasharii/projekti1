<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userat</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class ="container">
        <h2>list of user</h2>
        <a class ="buton" href="signup.php" role="button">New user</a>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>email</th> 
                    <th>username</th>
                    <th>password</th>
                    <th>date of birth</th>
                    <th>gender</th>
                    <th>created</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "userat";

                $connection = new mysqli($servername, $username, $password, $database);

                if($connection->connect_error){
                    die("connection failed: " . $connection->connect_error);
                }

                $sql = "SELECT * FROM clients";
                $result = $connection->query($sql);

                if(!$result){
                    die("invalid query: " . $connection->error);
                }

                while($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>{$row['id']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['username']}</td>
                        <td>{$row['password']}</td>
                        <td>{$row['dateBirth']}</td>
                        <td>{$row['Gender']}</td>
                        <td>{$row['created_at']}</td>
                        <td>
                            <a class='buton1' href='edit.php?id={$row['id']}'>EDIT</a>
                            <a class='buton2' href='delete.php?id={$row['id']}'>DEL</a>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
