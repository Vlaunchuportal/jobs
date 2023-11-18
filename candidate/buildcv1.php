  <!-- start banner Area -->
  <section class="banner-area relative" id="home">	
                    <div class="overlay overlay-bg" style=" height: 200px;  " ></div>
                    <div class="container" style=" height: 200px;>
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="about-content col-lg-12">
                                <h1 class="text-white" style="margin-top:-40px;" >
                                    Build Resume		
                                </h1>	
                                
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

body { margin: 0;
       padding: 0;
       background-color: #fff font-size: 12px;
       font-family: 'Source Sans Pro', sans-serif;
       -webkit-font-smoothing: subpixel-antialiased;
}
* { box-sizing: border-box;
    -moz-box-sizing: border-box;
}

/*
 Primary Rules
*/
h1 { font-weight: 300;
     margin: 5px 0 0;
     font-size: 40px;
     color:#ba0018;
     padding: 0 10px 10px;
     border-radius:2px;
    font-family: 'Merriweather', serif;
}
h2 { color: #ba0018;
     width: 150px;
     font-size: 18px;
     padding-left: 20px;
     padding-top: 12px;
     font-weight:700;
     font-family: 'Merriweather', serif;
}
h3 { font-size: 18px;
     font-weight: bold;
     margin-bottom: 0;
     line-height: 28px;
     font-family: 'Merriweather', serif;
}
h2, h3 { margin-top: 5px }
a { color: #ba0018;
    display: inline-block;
    text-decoration: none;
    padding:2px 4px;
    border-radius:2px;
    margin-right:-2px;
}
a:hover {
  background-color:#ba0018;
  color:#fff;
}
.key:first-child { margin-left: 0 }
.key { margin: 0 10px;
       position: relative;
}
.key::before { content: '◆';
               position: absolute;
               left: -15px;
               color: #555;
               font-size: 7pt;
}
.key:first-child::before { content: '' }
.section { border-bottom: 1px solid #ddd;
           padding: 10px 0 15px;
}
.section:last-child { border: none }
.section-text { width: 80%;
                font-size: 18px;
                line-height: 24px;
                margin: 10px 0 10px;
                padding: 0 10px;
}
.subsection { margin: 10px 0 5px }
.desc { font-size: 16px; font-family: 'Source Sans Pro', sans-serif; color:#444;}
.contact-info { font-size: 16px;
                text-align: right;
}
.light { color: #aaa;letter-spacing:1px;
         font-size: 14px;
         line-height:28px;
         font-family: 'Source Sans Pro', sans-serif;
         text-transform:uppercase;
}
ul{
  padding-left:15px;
}

ul.skills{
  float:left;
  width:30%;
  padding-left:0px;
  margin: 0 20px 0 0;
}

ul.skills li{
  list-style: none;
  font-size:16px;
  margin-bottom:10px;
}

ul.skills li:last-child{
  margin:0;
}

/*
 Float Rules
*/
.row:before, .row:after { content: "";
                          display: table;
}
.row:after { clear: both }
.col { float: left }
.col-right { float: right }

/*
 Page Rules
*/
.page { width: 1000px;
        min-height: 29.7cm;
        margin: 1cm auto;

        background: white;
        padding: 20px 50px;
}
.subpage { padding: 1cm;
           border: 1px red solid;
           height: 297mm;
}

@page { size: A4;
        margin: 0;
}

@media print {
    .page { margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
    }
    .page-break{
      page-break-before: always;
      padding-top:30px;
    }

    body { font-size: 12pt;}
    h1{
      font-size: 23pt;
    }

    h2{
      font-size:10pt;
      width: 3cm;
      padding-left: 10px;
    }

    h3 { font-size: 10pt; line-height:11pt}

    .section-text { font-size: 9pt; line-height: 14pt; }

    .light { font-size: 7.5pt; line-height:12pt; color:#ddd; }
    
    .page { width: 21cm }
    ul {margin:5px 0 0}
    .section { padding: 5px 0 8px }
    .section-text { width: 15cm; margin: 5px 0 5px;}
    .subsection { margin: 5px 0 0 }
    .desc { font-size: 9pt }
    
    .contact-info { font-size: 9pt}
    
    ul.skills{margin: 0 10px 0 0;}
    ul.skills li{ font-size: 9pt; margin-bottom:0}

}








    .print-area {
        align-items: center ;
    
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


<div class="print-area" >

<div class="page">
            <div class="section row">
                <h1 class="col"><span style="font-weight:700"><?php echo $row['cname']; ?></span></h1>
                <div class="contact-info col-right">
                    <div>+91 <?php echo $row['cnum']; ?></div>
                    <div><a href="mailto:jugalm@nyu.edu"><?php echo $row['cemail']; ?></a></div>
                    <div><a href="http://jugalm.com">demo.com</a></div>
                </div>
            </div>
            <div class="section row">
                <h2 class="col">Interests</h2>
                <div class="section-text col-right"><span class="key">Intelligent systems</span> <span class="key">Machine learning</span> <span class="key">Data visualization</span> <span class="key">Computer vision &amp; graphics</span> <span class="key">Information networks</span> <span class="key">User experience / interaction design</span> </div>
            </div>
            <div class="section row">
                <h2 class="col">Skills</h2>
                <div class="section-text col-right row">
                    <ul class="skills" style="width:25%">
                        <li><?php echo $row['cskills']; ?></li>
                        <li>Javascript</li>
                        <li>Python, PHP</li>
                        <li>HTML5, CSS3, SVG</li>
                    </ul>
                   
                    
                </div>
            </div>
            <div class="section row">
                <h2 class="col">Education</h2>
                <div class="section-text col-right">
                    <h3><span class="emph"><?php echo $row['ceducation']; ?></span> in Computer Science</h3>
                    <div>New York University, Courant Institute of Mathematical Science</div>
                    <div class="row">
                        <div class="col light">New York, USA</div>
                        <div class="col-right light">September 2013 - May 2015</div>
                    </div>
                </div>
                <div class="section-text col-right">
                    <h3><span class="emph">Bachelor of Engineering</span> in Computer Engineering</h3>
                    <div>University of Pune</div>
                    <div class="row">
                        <div class="col light">Pune, India</div>
                        <div class="col-right light	">September 2008 - July 2012	</div>
                    </div>
                </div>
            </div>
            <div class="section row">
                <h2 class="col">Experience</h2>
                <div class="section-text col-right">
                    <div class="row">
                        <div class="col">
                            <h3>Google</h3>
                        </div>
                    </div>
                    <div class="row subsection">
                        <div class="emph col"><?php echo $row['cexperience']; ?></div>
                        <div class="col-right light">July 2015 - Present</div>
                    </div>
                    <ul class="desc">
                        <li>YouTube Trust and Safety</li>
                </div>
                <div class="section-text col-right">
                    <div class="row">
                        <div class="col">
                            <h3>Emotion - New York University</h3>
                        </div>
                    </div>
                    <div class="row subsection">
                        <div class="emph col">Research Assistant, Full Stack Engineer</div>
                        <div class="col-right light">June 2014 - August 2014</div>
                    </div>
                    <div>
                    </div>
                    <ul class="desc">
                        <li>Designed and developed a mobile-friendly responsive web app from the ground-up that tracks touch events to calibrate and measure the distance between two fingers and detects gestures.</li>
                        <li>Ported the web app as a native mac OS app which involved writing a native node.js module that detects and generates DOM touch events from a mac trackpad.</li>
                        
                </div>
            </div>
            <div class="section row">
                <h2 class="col">Projects</h2>
                <div class="section-text col-right">
                    <h3><a href="https://github.com/nuterian">github.com/nuterian</a></h3>
                </div>
            </div>
            
            <div class="section row">
                <h2 class="col">Honors</h2>
                <div class="section-text col-right">
                    <div class="row">
                        <div class="col">
                            <h3>SEARCC International School's Software Competition</h3>
                        </div>
                    </div>
                    
                    <div class="desc">Organized by the Computer Society of India, was part of a team of three to represent our region at
                        the national level finals. Finished <span class="emph">second</span> by solving the maximum number of problems.
                    </div>
                </div>
            </div>
        </div>
	
</div><br><br><br>
<button class="btn primary-btn " style=" color: #ba0018; left: 690px; " >print cv</button><br><br><br>



<script>
    var btn = document.querySelector('button');
    btn.onclick = () => {
        window.print();
    }
</script>
<?php
include('./footer.php');
?>