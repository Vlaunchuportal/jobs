<?php
require("DBConnect.php");



if(isset($_GET['cemail']) && isset($_GET['vcode']))
{
    $sql = "SELECT * FROM recruiter WHERE remail = '{$_GET['cemail']}' AND verificationCode = '{$_GET['vcode']}'";
    $result = $conn->query($sql);
    if($result)
    {
        if($result->num_rows == 1) 
        {
            $row = $result->fetch_assoc();
            if($row['isVerified'] == 0)
            {
                $sql = "UPDATE recruiter SET isVerified = '1' WHERE remail = '$row[remail]' ";
                if($result = $conn->query($sql))
                {
                    echo " <script>
                    alert('Registration successfull');
                    window.location.href='signin.php';
                    </script>"; 
                }
                else
                {
                    echo " <script>
                    alert('already verified');
                    window.location.href='index.php';
                    </script>";
                }

            }
            else
            {
                echo " <script>
                alert('already registered');
                window.location.href='index.php';
                </script>";
            }
            
            
            
            

        }
    }
    else
    {
        echo " <script>
        alert('cannot run query');
        window.location.href='index.php';
        </script>";
    }
}

?>