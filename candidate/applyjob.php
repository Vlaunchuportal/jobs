        <!-- start banner Area -->
        <section class="banner-area relative" id="home">	
                    <div class="overlay overlay-bg"></div>
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                    Apply Job		
                                </h1>	
                                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> apply</a></p>
                            </div>											
                        </div>
                    </div>
            </section>
                <!-- End banner Area -->
<?php
include('./header.php');

if(isset($_REQUEST['apply'])){
    $sql = "SELECT * FROM jobs WHERE jid = {$_REQUEST['applyid']} ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    $row['jid'];
    
    $row['posted'];
    $row['jTitle'];
    $x = $row['q1'];
    $y = $row['q2'];
    $z = $row['q3'];
    
    
    
    // <!-- text value can't be taken in a variable that's why i have directly from $row variable -->
    // $row['cimage'];
    
}
?>






<?php


// the code is for not to go directly to the specified file in typing in URL! 

// unfortantely we were having proglems accessing below if loop function this data coudn't be directly inserted to my knowledge  and has to first give this data to a hidden form first and then we can access through that BY JAWAD USAID

?>






<section class="home">
    <div class="container mt-5" style="backdrop-filter: blur(10px);"><h2>Apply for  the Job</h2>
        <div class="col-sm-10 mt-3">
            <div class="row mx-7 text-center">
                <div class="col-sm-9 mt-5 text-center ">
                    
                    <form action="" method="POST" enctype="multipart/form-data">
                    

                    <!-- // usaid defined data where we are indirectly storing the data here from form button and then we can accessing the date below from here and giving to database -->
                        
                        
                        <!-- text value can't be taken in a variable that's why i have directly from $row variable -->
                        <!-- <input type="hidden" id="cimage" name="cimage" value="<?php //echo $row['cimage']; ?>"> -->

                        <div class="form-group" style="text-align: left;">
                        

                            <input type="hidden" id="jobid" name="jobid" value="<?php echo $row['jid']; ?>">
                            <input type="hidden" id="recemail" name="recemail" value="<?php echo $row['posted']; ?>">
                            <input type="hidden" id="jobname" name="jobname" value="<?php echo  $row['jTitle']; ?>">

                            

                            <input type="hidden" id="x" name="x" value="<?php if(isset($x)) { echo $x;} ?>">
                            <input type="hidden" id="y" name="y" value="<?php if(isset($y)) { echo $y;} ?>">
                            <input type="hidden" id="z" name="z" value="<?php if(isset($z)) { echo $z;} ?>">
                            
                        


                        <?php
                        


                        // if we implement session start() one of the biggest problem that is it can take the id from a previous page to this page


                        if(isset($_SESSION['is_login'])) {
                            $canemail = $_SESSION['lemail'];
                        } 





                        if(isset($_SESSION['is_login'])) {
                            $canemail = $_SESSION['lemail'];
                            $sql = "SELECT * FROM candidate WHERE cemail = '$canemail'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                        }



                        if(isset($_REQUEST['applysubmit'])) {
                            // checking of emptly field
                             $sql = "SELECT * FROM applyjob where aemail = '{$_REQUEST['cemail']}' AND jobid = '{$_REQUEST['jobid']}' ";
                            $result = $conn->query($sql);
                             
                            if($result->num_rows == 1) 
                            {
                                echo "<script>
                                alert('Already this job is applied by you!');
                                window.location.href='Candidate.php'; </script>";
                            }
                            else
                            {

                            if(($_REQUEST['cname'] == "") || ($_REQUEST['cskills'] == "") || ($_REQUEST['cexperience'] == "") || ($_REQUEST['ceducation'] == "") || ($_REQUEST['cnum'] == ""))
                            {
                                $Msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">FIll all the fields </div>';
                            } 
                            else if(isset($_SESSION['is_login'])) 
                            {
                                $canemail = $_SESSION['lemail'];
                                
                            
                            
                                $joid = $_REQUEST['jobid'];
                                $reemail = $_REQUEST['recemail'];
                                $jName = $_REQUEST['jobname'];

                                $x1 = $_REQUEST['x'];
                                $x2 = $_REQUEST['y'];
                                $x3 = $_REQUEST['z'];
                                
                                $a1 = $_REQUEST['a1'];
                                $a2 = $_REQUEST['a2'];
                                $a3 = $_REQUEST['a3'];
                            
                                

                                $aname = $_REQUEST['cname'];
                                $askills = $_REQUEST['cskills'];
                                $aexperience = $_REQUEST['cexperience'];
                                $aeducation = $_REQUEST['ceducation'];
                                $aemail = $_REQUEST['cemail'];
                                $anum = $_REQUEST['cnum'];
                                $acity = $_REQUEST['ccity'];
                                
                                $aresume = $_FILES['cresume']['name'];
                                $jImage_temp = $_FILES['cresume']['tmp_name'];
                                $img_folder = '../resume/'.$aresume;
                                move_uploaded_file($jImage_temp, $img_folder);

                                

                                $sql = "INSERT INTO applyjob (aname, askills, aexperience, aeducation, aemail, anum, acity, aresume, cemail, recemail, jobid, jobname, q1, q2, q3, a1, a2, a3) VALUES('$aname', '$askills', '$aexperience', '$aeducation', '$aemail', '$anum', '$acity', '$aresume', '$canemail', '$reemail', '$joid', '$jName', '$x1', '$x2', '$x3', '$a1', '$a2', '$a3')";

                                if($conn -> query($sql) == TRUE) {
                                    $Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Job Applied successfully </div>';
                                } else {
                                    $Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">job didnt added successfull </div>';
                                }


                            }
                            }

                        }




                        ?>


                            <label for="job_ti">Candidates Name :</label>
                            <input type="text" class="form-control" id="cname" name="cname" value="<?php if(isset($row['cname'])){ echo $row['cname'];}?>"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="job_skills">Skills :</label>
                            <input type="text" class="form-control" id="cskills" name="cskills" value="<?php if(isset($row['cskills'])){ echo $row['cskills'];}?>"><br>
                        </div>
                        <div class="form-group " style="text-align: left;">
                            <label for="jOpenings">Experience :</label>
                            <input type="text" class="form-control" id="cexperience" name="cexperience" value="<?php if(isset($row['cexperience'])){ echo $row['cexperience'];}?>"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="jLocation">Education : </label>
                            <input type="text" class="form-control" id="ceducation" name="ceducation" value="<?php if(isset($row['ceducation'])){ echo $row['ceducation'];}?>"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="jSalary">Email :</label>
                            <input type="text" class="form-control" id="cemail" name="cemail" value="<?php if(isset($row['cemail'])){ echo $row['cemail'];}?>"><br>
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="jSalary">Phone Number :</label>
                            <input class="form-control" id="cnum" name="cnum" value="<?php if(isset($row['cnum'])){ echo $row['cnum'];}?>"><br>    
                        </div>
                        <div class="form-group" style="text-align: left;">
                            <label for="jSalary">Location :</label>
                            <input type="text" class="form-control" id="ccity" name="ccity" value="<?php if(isset($row['ccity'])){ echo $row['ccity'];}?>"><br>
                        </div><br>

                        <?php
                        if(isset($x))
                        {
                        if(($x != '' )) 
                        { 
                        echo '<hr>';

                        echo '<h5>Additional Questions from HR:</h5><br><br>';
                        echo '<div class="form-group" style="text-align: left;">';
                        echo '<label for="jSalary"> '.$x.' :</label>';
                        echo  '<input type="text" class="form-control" id="a1" name="a1" ><br>
                        </div><br>';
                        }


                        if(($y != '' )) 
                        { 
                        

                       
                        echo '<div class="form-group" style="text-align: left;">';
                        echo '<label for="jSalary"> '.$y.' :</label>';
                        echo  '<input type="text" class="form-control" id="a2" name="a2" ><br>
                        </div><br>';
                        }

                        if(($z != '' )) 
                        { 
                        

                       
                        echo '<div class="form-group" style="text-align: left;">';
                        echo '<label for="jSalary"> '.$z.' :</label>';
                        echo  '<input type="text" class="form-control" id="a3" name="a3" ><br>
                        </div><br>';
                        }
                        }
                        ?>
                        <div class="form-group">
                            
                            <label for="jSalary">Upload Resume :</label><br><br>
                            <div><p><?php if(isset($row['cresume'])){ echo $row['cresume'];}?>
                            <br> Continue with the vlaunchu RESUME</p></div>
                            <input type="file" class="form-control-file" id="cresume" name="cresume" value="<?php if(isset($row['cresume'])){ echo $row['cresume'];}?>"><br>
                        </div>
                        <div class="text-center">
                        <br><button type="submit" class="btn btn-primary" id="applysubmit" name="applysubmit">Submit</button>
                            
                            <a href="Candidate.php" class="btn btn-danger">Close</a> <div><br></div><br>
                        </div>
                        <?php
                        if(isset($Msg)) {
                            echo $Msg;
                            }
                            
                        ?>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php
include('./footer.php');
?>