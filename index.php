<?php

use function PHPSTORM_META\type;

include 'header.php';
?>
<div id="main-content">
    
    <h2>All Records</h2>
    <?php
        
        $conn = mysqli_connect("localhost","root","","inspireart") or die("Databse is not connect");
        $limit = 3;
        if(isset($_GET['page']))
        {
            $page = $_GET['page'];
        }
        else{
            $page = 1;
        }   
        $offset = ($page-1)*$limit;

        $query = "SELECT * FROM registration LIMIT {$offset},{$limit}";

        $result = mysqli_query($conn,$query) or die("");
       
        if(mysqli_num_rows($result)>0){
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

                while($row=mysqli_fetch_assoc($result)){

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
    echo "No record found";
}
    $sql1="SELECT * FROM registration";
    $result1 = mysqli_query($conn,$sql1) or die("Query not run");
    if(mysqli_num_rows($result1))
    {
        $total_record = mysqli_num_rows($result1);
        $total_page = ceil($total_record/$limit);
        echo '<ul class="pagination">';
        if($page>1)
        {
            echo '<li><a href="index.php?page='.($page-1).'">Prev</a></li>';
            
        }
        for($i=1;$i<=$total_page;$i++)
        {
            if($i==$page)
            {
                $active = "active";
            }
            else{
                $active = "";

            }
            echo '<li class="'.$active.'"><a href = "index.php?page='.$i.'">'.$i.'</a></li>';


        }
        if($total_page>$page)
        {
            echo '<li><a href="index.php?page='.($page+1).'">Next</a></li>';
            
        }

    }

 ?>
</div>

</body>
</html>
