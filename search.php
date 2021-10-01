<?php
include "header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .search_column {
            height: 30px;
            width: 130px;
            padding: 5px;
            width: 15%;
            border: 2px solid #fd79a8;
            border-radius: 5px;
            border-width: 2px;
            background-color: white;
            font-size: 1rem;
        }

        .search-input {
            font-size: 16px;
            width: 20%;
            display: inline-block;
            padding: 5px;
            margin: 0 10px;
            background-color: white;
            border-width: 2px;
        }

        .submit {
            font-size: 17px;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 5px 10px;
            color: #fff;
            background-color: #fd79a8;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .submit:hover {
            box-shadow: 0 0 5px #555;
        }
        .empty{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>

</head>

<body>
    <div id="main-content">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
            <div class="form-group">
                <select class="form-control search_column" name="search_column">
                    <option value="id">Id</option>
                    <option value="email">Email</option>
                    <option value="username">Username</option>
                    <option value="password">Password</option>
                    <option value="number">Mobile Number</option>
                </select>
                <input type="text" name="search_value" placeholder="Search" class="search-input" />
                <input class="submit" type="submit" name="search" value="Submit">
            </div>
        </form>
        <h2>All Records</h2>
        <?php
        if (isset($_GET['search'])) {
        ?>
            <?php
            if (error_reporting(E_ERROR | E_PARSE)) {
            }
            $conn = mysqli_connect("localhost", "root", "", "inspireart") or die("Databse is not connect");
            $name_column = $_GET['search_column'];
            $name_value = $_GET['search_value'];
            $query = "select * from registration where $name_column LIKE '%$name_value%'";
            $result = mysqli_query($conn, $query) or die("No Records Found");
            if (mysqli_num_rows($result) > 0) {
            ?>




                <table cellpadding="7px">
                    <thead>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Mobile Number</th>
                        <th>Role</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        <?php
                        if (error_reporting(E_ERROR | E_PARSE)) {
                        }

                        while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                            <tr>
                                <td> <?php echo $row['id'] ?> </td>
                                <td> <?php echo $row['email'] ?> </td>
                                <td> <?php echo $row['username'] ?> </td>
                                <td> <?php echo $row['password'] ?> </td>
                                <td> <?php echo $row['number'] ?> </td>
                                <td> <?php echo $row['role'] ?> </td>
                                <td>
                                    <a href='edit.php?id=<?php echo $row['id'] ?>'>Edit</a>
                                    <a href="delete-inline.php?id=<?php echo $row['id'] ?>">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
        <?php }
        else{
            echo "<h2 class ='empty'> No Records Found";
        }
        } ?>
    </div>
</body>

</html>