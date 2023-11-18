<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Update jobs
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html">Jobs</a></p>
						</div>											
					</div>
				</div>
</section>

<?php
include('./header.php');
include('../DBConnect.php');


if(isset($_REQUEST['requpdate'])){
    // checking if any field is empty
    if(($_REQUEST['jTitle'] == "") || ($_REQUEST['jOpenings'] == "") || ($_REQUEST['jLocation'] == "") || ($_REQUEST['jSalary'] == "") || ($_REQUEST['jDescription'] == "") || ($_REQUEST['jCompany'] == "")) 
    {
        $Msg ='<div class="alert alert-warning col-sm-6 ml-5 mt-2">FIll all the fields </div>';
    } else 
    {
        $jUpdateId = $_REQUEST['jid'];
        $jUpdateTitle = $_REQUEST['jTitle'];
        $jUpdateOpenings = $_REQUEST['jOpenings'];
        $jUpdateLocation = $_REQUEST['jLocation'];
        $jUpdateSalary = $_REQUEST['jSalary'];
        $jUpdateDescription = $_REQUEST['jDescription'];
        $jUpdateCompany = $_REQUEST['jCompany'];
        $jUpdateImage = $_FILES['jImage']['name'];    
           

        $sql = "UPDATE jobs SET jid = '$jUpdateId' , jTitle = '$jUpdateTitle' , jOpenings = '$jUpdateOpenings' , jLocation = '$jUpdateLocation' , jSalary = '$jUpdateSalary' , jDescription = '$jUpdateDescription' , jCompany = '$jUpdateCompany' , jImage = '$jUpdateImage' WHERE jid = '$jUpdateId'";

        if($conn->query($sql) == TRUE) {
            //msg on display form submiy success
            $Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated successfully </div>';
        } else {
            $Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Updation failed </div>';
        }

    }
}




?>
<section class="home">
<div class="container mt-5" style="backdrop-filter: blur(10px);">
    <div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Update Job</h3>
    <?php
    if(isset($_REQUEST['update'])){
    $sql = "SELECT * FROM jobs WHERE jid = {$_REQUEST['id']} ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    }
    ?>

    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="jid">Job Id</label>
            <input type="text" class="form-control" id="jid" name="jid" value="<?php if(isset($row['jid'])){ echo $row['jid'];}?>" readonly>
        </div>
        <div class="form-group">
            <label for="job_title">Job Title</label>
            <input type="text" class="form-control" id="jTitle" name="jTitle" value="<?php if(isset($row['jTitle'])){ echo $row['jTitle'];}?>">
        </div>
        <div class="form-group">
            <label for="jOpenings">Job Openings</label>
            <input type="text" class="form-control" id="jOpenings" name="jOpenings" value="<?php if(isset($row['jOpenings'])){ echo $row['jOpenings'];}?>">
        </div>
        <div class="form-group">
            <label for="jLocation">Job Location</label>
            <input type="text" class="form-control" id="jLocation" name="jLocation" value="<?php if(isset($row['jLocation'])){ echo $row['jLocation'];}?>">
        </div>
        <div class="form-group">
            <label for="jSalary">Salary</label>
            <input type="text" class="form-control" id="jSalary" name="jSalary" value="<?php if(isset($row['jSalary'])){ echo $row['jSalary'];}?>">
        </div>
        <div class="form-group">
            <label for="jDescription">Job Description</label>
            <textarea class="form-control" id="jDescription" name="jDescription" row=2><?php if(isset($row['jDescription'])){ echo $row['jDescription'];}?>
            </textarea>
        </div>
        <div class="form-group">
            <label for="jCompany">Company</label>
            <input type="text" class="form-control" id="jCompany" name="jCompany" value="<?php if(isset($row['jCompany'])){ echo $row['jCompany'];}?>">
        </div><br>
        <div class="form-group">
            <img src="../image/<?php if(isset($row['jImage'])){ echo $row['jImage'];}?>" alt="" class="img-thumbnail"><br>
            
            <label for="jImage">Upload Image :</label><br><br>
            <input type="file" class="form-control-file" id="jImage" name="jImage">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary" id="requpdate" name="requpdate">Update</button>
            
            <a href="cor.php" class="btn btn-danger">Close</a>
        </div>
        <?php
        if(isset($Msg)) {
            echo $Msg;
        }
        
         ?>
    </form>


</div>
</div>
</section>




<?php
include('./footer.php');
?>
