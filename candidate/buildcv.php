  <!-- start banner Area -->
  <section class="banner-area relative" id="home">	
                    <div class="overlay overlay-bg"></div>
                    <div class="container">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white">
                                    Build Resume		
                                </h1>	
                                <p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="elements.html"> CV</a></p>
                            </div>											
                        </div>
                    </div>
            </section>
                <!-- End banner Area -->

<?php
include('./header.php');

if(isset($_SESSION['is_login'])) {
    $canLogEmail = $_SESSION['lemail'];
} else {
    echo "<script> location.href='../home.php';</script>";
}

$sql = "SELECT * FROM candidate WHERE cemail = '$canLogEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
}
?>


<style type="text/css">
body{
    
    background:#DCDCDC;
}
/*profile page*/

.left-profile-card .user-profile {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin: auto;
    margin-bottom: 20px;
}

.left-profile-card h3 {
    font-size: 18px;
    margin-bottom: 0;
    font-weight: 700;
}

.left-profile-card p {
    margin-bottom: 5px;
}

.left-profile-card .progress-bar {
    background-color: var(--main-color);
}

.personal-info {
    margin-bottom: 30px;
}

.personal-info .personal-list {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

.personal-list li {
    margin-bottom: 5px;
}

.personal-info h3 {
    margin-bottom: 10px;
}

.personal-info p {
    margin-bottom: 5px;
    font-size: 14px;
}

.personal-info i {
    font-size: 15px;
    color: var(--main-color);
    ;
    margin-right: 15px;
    width: 18px;
}

.skill {
    margin-bottom: 30px;
}

.skill h3 {
    margin-bottom: 15px;
}

.skill p {
    margin-bottom: 5px;
}

.languages h3 {
    margin-bottom: 15px;
}

.languages p {
    margin-bottom: 5px;
}

.right-profile-card .nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background-color: var(--main-color);
}

.right-profile-card .nav>li {
    float: left;
    margin-right: 10px;
}

.right-profile-card .nav-pills .nav-link {
    border-radius: 26px;
}

.right-profile-card h3 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 15px;
}

.right-profile-card h4 {
    font-size: 16px;
    margin-bottom: 15px;
}

.right-profile-card i {
    font-size: 15px;
    margin-right: 10px;
}

.right-profile-card .work-container {
    border-bottom: 1px solid #eee;
    margin-bottom: 20px;
    padding: 10px;
}


/*timeline*/

.img-circle {
    border-radius: 50%;
}

.timeline-centered {
    position: relative;
    margin-bottom: 30px;
}

.timeline-centered:before,
.timeline-centered:after {
    content: " ";
    display: table;
}

.timeline-centered:after {
    clear: both;
}

.timeline-centered:before,
.timeline-centered:after {
    content: " ";
    display: table;
}

.timeline-centered:after {
    clear: both;
}

.timeline-centered:before {
    content: '';
    position: absolute;
    display: block;
    width: 4px;
    background: #f5f5f6;
    /*left: 50%;*/
    top: 20px;
    bottom: 20px;
    margin-left: 30px;
}

.timeline-centered .timeline-entry {
    position: relative;
    /*width: 50%;
        float: right;*/
    margin-top: 5px;
    margin-left: 30px;
    margin-bottom: 10px;
    clear: both;
}

.timeline-centered .timeline-entry:before,
.timeline-centered .timeline-entry:after {
    content: " ";
    display: table;
}

.timeline-centered .timeline-entry:after {
    clear: both;
}

.timeline-centered .timeline-entry:before,
.timeline-centered .timeline-entry:after {
    content: " ";
    display: table;
}

.timeline-centered .timeline-entry:after {
    clear: both;
}

.timeline-centered .timeline-entry.begin {
    margin-bottom: 0;
}

.timeline-centered .timeline-entry.left-aligned {
    float: left;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner {
    margin-left: 0;
    margin-right: -18px;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-time {
    left: auto;
    right: -100px;
    text-align: left;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-icon {
    float: right;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label {
    margin-left: 0;
    margin-right: 70px;
}

.timeline-centered .timeline-entry.left-aligned .timeline-entry-inner .timeline-label:after {
    left: auto;
    right: 0;
    margin-left: 0;
    margin-right: -9px;
    -moz-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}

.timeline-centered .timeline-entry .timeline-entry-inner {
    position: relative;
    margin-left: -20px;
}

.timeline-centered .timeline-entry .timeline-entry-inner:before,
.timeline-centered .timeline-entry .timeline-entry-inner:after {
    content: " ";
    display: table;
}

.timeline-centered .timeline-entry .timeline-entry-inner:after {
    clear: both;
}

.timeline-centered .timeline-entry .timeline-entry-inner:before,
.timeline-centered .timeline-entry .timeline-entry-inner:after {
    content: " ";
    display: table;
}

.timeline-centered .timeline-entry .timeline-entry-inner:after {
    clear: both;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time {
    position: absolute;
    left: -100px;
    text-align: right;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time>span {
    display: block;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time>span:first-child {
    font-size: 15px;
    font-weight: bold;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-time>span:last-child {
    font-size: 12px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon {
    background: #fff;
    color: #737881;
    display: block;
    width: 40px;
    height: 40px;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    text-align: center;
    -moz-box-shadow: 0 0 0 5px #f5f5f6;
    -webkit-box-shadow: 0 0 0 5px #f5f5f6;
    box-shadow: 0 0 0 5px #f5f5f6;
    line-height: 40px;
    font-size: 15px;
    float: left;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-primary {
    background-color: #303641;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-secondary {
    background-color: #ee4749;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-success {
    background-color: #00a651;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-info {
    background-color: #21a9e1;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-warning {
    background-color: #fad839;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-icon.bg-danger {
    background-color: #cc2424;
    color: #fff;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label {
    position: relative;
    background: #f5f5f6;
    padding: 1em;
    margin-left: 60px;
    -webkit-background-clip: padding-box;
    -moz-background-clip: padding;
    background-clip: padding-box;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label:after {
    content: '';
    display: block;
    position: absolute;
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 9px 9px 9px 0;
    border-color: transparent #f5f5f6 transparent transparent;
    left: 0;
    top: 10px;
    margin-left: -9px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2,
.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p {
    color: #737881;
    font-size: 12px;
    margin: 0;
    line-height: 1.428571429;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label p+p {
    margin-top: 15px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 {
    font-size: 16px;
    margin-bottom: 10px;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 a {
    color: #303641;
}

.timeline-centered .timeline-entry .timeline-entry-inner .timeline-label h2 span {
    -webkit-opacity: .6;
    -moz-opacity: .6;
    opacity: .6;
    -ms-filter: alpha(opacity=60);
    filter: alpha(opacity=60);
}











    .print-area {
        
    
}


@media print {
    body *{
        visibility: hidden;
    }
    .print-area *{
        visibility: visible;
    }

}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/@icon/entypo@1.0.3/entypo.css" rel="stylesheet">

<div class="print-area" >


<div class="container">
<br><br>
<div class="row">
<div class="col-lg-3 ">
<div class="card left-profile-card">
<div class="card-body">
<div class="text-center">
<img src="../img/<?php echo $row['cimage']; ?>" alt="" class="user-profile">
<h3><?php echo $row['cname']; ?></h3>
<p>World of Internet</p>
<div class="d-flex align-items-center justify-content-center mb-3">
<i class="fas fa-star text-info"></i>
<i class="fas fa-star text-info"></i>
<i class="fas fa-star text-info"></i>
<i class="fas fa-star text-info"></i>
<i class="fas fa-star text-info"></i>
</div>
</div>
<div class="personal-info">
<h3>Personal Information</h3>
<ul class="personal-list">
<li><i class="fas fa-briefcase "></i><span>Web Designer</span></li>
<li><i class="fas fa-map-marker-alt "></i><span> <?php echo $row['ccity']; ?></span></li>
<li><i class="far fa-envelope "></i><span><?php echo $row['cemail']; ?></span></li>
<li><i class="fas fa-mobile "></i><span><?php echo $row['cnum']; ?></span></li>
</ul>
</div>
<div class="skill">
<h3>Skills</h3>
<p><?php echo $row['cskills']; ?></p>
<div class="progress mb-3">
<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>HTML5 &amp; CSS3</p>
<div class="progress mb-3">
<div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Javascript &amp; Jquery</p>
<div class="progress mb-3">
<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Angular &amp; React</p>
<div class="progress mb-3">
<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
<div class="languages">
<h3>Languages</h3>
<p>English</p>
<div class="progress mb-3">
<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>German</p>
<div class="progress mb-3">
<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<p>Hindi</p>
<div class="progress mb-3">
<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-9">
<div class="card right-profile-card">

<div class="card-body">
<div class="tab-content" id="pills-tabContent">
<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
<div class="work-container">
<h3>Tech Lead :- World of Internet</h3>
<h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="work-container">
<h3>Senior UI Developer :- Pixel Factory</h3>
<h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="work-container">
<h3>Jr. Front End Developer :- Graphics Media</h3>
<h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</div>
<div class="tab-pane fade" id="pills-education" role="tabpanel">
<div class="work-container">
<h3>The Art Institute :- New Yourk</h3>
<h4><i class="far fa-calendar-alt"></i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="work-container">
<h3>Eitech :- New Jersy</h3>
<h4><i class="material-icons">date_range</i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div class="work-container">
<h3>School of Visual Arts :- Chicago</h3>
<h4><i class="material-icons">date_range</i>Jan 2017 to <span class="badge badge-info">Current</span></h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
</div>
<div class="tab-pane fade" id="pills-timeline" role="tabpanel">
<div class="row">
<div class="timeline-centered">
<div class="timeline-entry">
 <div class="timeline-entry-inner">
<div class="timeline-icon bg-success">
<i class="entypo-feather"></i>
</div>
<div class="timeline-label">
<h2><a href="#">Art Ramadani</a> <span>posted a status update</span></h2>
<p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
</div>
</div>
</div>
<div class="timeline-entry">
<div class="timeline-entry-inner">
<div class="timeline-icon bg-secondary">
<i class="entypo-suitcase"></i>
</div>
<div class="timeline-label">
<h2><a href="#">Job Meeting</a></h2>
<p>You have a meeting at <strong>Laborator Office</strong> Today.</p>
</div>
</div>
</div>
<div class="timeline-entry">
<div class="timeline-entry-inner">
<div class="timeline-icon bg-info">
<i class="entypo-location"></i>
</div>
<div class="timeline-label">
<h2><a href="#">Arlind Nushi</a> <span>checked in at</span> <a href="#">Laborator</a></h2>
<blockquote>Great place, feeling like in home.</blockquote>
</div>
</div>
</div>
<div class="timeline-entry">
<div class="timeline-entry-inner">
<div class="timeline-icon bg-warning">
<i class="entypo-camera"></i>
</div>
<div class="timeline-label">
<h2><a href="#">Arber Nushi</a> <span>changed his</span> <a href="#">Profile Picture</a></h2>
<blockquote>Pianoforte principles our unaffected not for astonished travelling are particular.</blockquote>
</div>
</div>
</div>
<div class="timeline-entry begin">
<div class="timeline-entry-inner">
<div class="timeline-icon" style="-webkit-transform: rotate(-90deg); -moz-transform: rotate(-90deg);">
<i class="entypo-flight"></i> +
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

	
</div><br><br><br>
<button class="primary-btn " style=" left: 690px; " >print cv</button><br><br><br>



<script>
    var btn = document.querySelector('button');
    btn.onclick = () => {
        window.print();
    }
</script>
<?php
include('./footer.php');
?>