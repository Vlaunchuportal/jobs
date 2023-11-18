<?php
if(!isset($_SESSION)) {
    session_start();
}
include_once('./DBConnect.php');




if(isset($_POST['cname']) && isset($_POST['cemail']) && isset($_POST['cpassword']) && isset($_POST['cnum']))
{
    $cname = $_POST['cname'];
    $cemail = $_POST['cemail'];
    $cpassword = $_POST['cpassword'];
    $cnum = $_POST['cnum'];
    $subscribe = $_POST['subscribe'];
    
    $vcode = bin2hex(random_bytes(16));

    $sql = "INSERT INTO candidate(cname,cemail,cpassword,cnum, usertype, verificationCode, isVerified, news) VALUES('$cname','$cemail','$cpassword','$cnum', 'candidate', '$vcode', '0', '$subscribe')";

    //  sendmail($_POST['cemail'],$vcode)

    if($conn-> query($sql) == TRUE )   {
    
    echo  json_encode("ok");
    } else {
    
    echo json_encode("failed");
    }
}


//student login verify

// if(!isset($_SESSION['is_login'])){
//     if(isset($_POST['lemail']) && isset($_POST['lpassword'])) 
//     {
//         $lemail = $_POST['lemail'];
//         $lpassword = $_POST['lpassword'];

//         $sql = "SELECT cemail, cpassword from candidate where cemail = '".$lemail."' AND cpassword = '".$lpassword."'";
//         $result = $conn->query($sql);
//         $row = $result->num_rows;
//         if($row === 1 ) {
//             $_SESSION['is_login'] = true;
//             $_SESSION['lemail'] = $lemail;
//             echo json_encode($row);

//         } else if ($row === 0) {
//             echo json_encode($row);
//         }
//     }
// }


//login verify for candidate

if(isset($_POST['lemail']) && isset($_POST['lpassword'])) 
    {
            if(!isset($_SESSION['is_login']))
            {
            
                $lemail = $_POST['lemail'];
                $lpassword = $_POST['lpassword'];
        
                $sql = "SELECT * FROM candidate where cemail = '$lemail' AND cpassword = '$lpassword' AND usertype = 'candidate' AND isVerified ='1'";
                
                $result = $conn->query($sql);
                $row = $result->num_rows;
                if($row === 1 ) 
                {
                $_SESSION['is_login'] = true;
                $_SESSION['lemail'] = $lemail;
                echo json_encode("oks");
                
                } 
            }  
            
        
    }
   
        
    



//login verify for recruiter

//
if(isset($_POST['lemail']) && isset($_POST['lpassword'])) 
    {
        if(!isset($_SESSION['is_login']))
        {

            $remail = $_POST['lemail'];
            $rpassword = $_POST['lpassword'];
            
            $sql = "SELECT * FROM recruiter where remail = '$remail' AND rpassword = '$rpassword' AND usertype = 'recruiter' AND isVerified ='1' ";
            $result = $conn->query($sql);
            $row = $result->num_rows;
            if($row === 1 ) 
            {
            $_SESSION['is_login'] = true;
            $_SESSION['remail'] = $remail;
            echo json_encode("ok");
            
            
            } 


        }
    }
 






//login verify for admin

//
if(isset($_POST['lemail']) && isset($_POST['lpassword'])) 
    {
        if(!isset($_SESSION['is_login']))
        {

            $aemail = $_POST['lemail'];
            $apassword = $_POST['lpassword'];
            
            $sql = "SELECT * FROM admin1 where aemail = '$aemail' AND apassword = '$apassword' AND usertype = 'admin'";
            $result = $conn->query($sql);
            $row = $result->num_rows;
            if($row === 1 ) 
            {
            $_SESSION['is_login'] = true;
            $_SESSION['aemail'] = $aemail;
            echo json_encode("okss");
            
            
            } 
            else 
            {
                echo json_encode("oksss");
            }


        }
    }




 

?>
