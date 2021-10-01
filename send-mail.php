<?php
$email = $_POST['email'];
$conn = mysqli_connect("localhost","root","","inspireart");
$sql = "SELECT * FROM registration WHERE email = '$email'";
$result = mysqli_query($conn,$sql) or die("Query Not Run");
if(mysqli_num_rows($result) > 0)
{
        $receiver = $_POST['email'];
        $subject = "To Your Password Change";
        $body = "Hello If You Want to Change Your Password Please Click On this link 
        http://localhost/inspire-art/Log%20in%20page/update-pass.php";
        $sender = "From:harshwadhwani0718@gmail.com";

if(mail($receiver, $subject, $body, $sender)){
    ?>
        <script>
            alert("Mail Sent To Your Mail id Please Check Your Mail Account");
        </script>
    <?php
}else{
    echo "Sorry, failed while sending mail!";
}

}
else{
        ?>
        <script>
            alert("This email is not exist");
			location.replace("http://localhost/inspire-art/Log%20in%20page/recover-pass.php");
        </script>
        <?php 
        
}



?>