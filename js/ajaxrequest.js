function addCand() {
    var cname = $("#cname").val();
    var cemail = $("#cemail").val();
    var cpassword = $("#cpassword").val();
    var cnum = $("#cnum").val();
    var subscribe = $("#subscribe").val();
    console.log(subscribe);
    var code = $("#code").val(this.props.first);
    console.log(code);
     
    // console.log(cemail);
    // console.log(cpassword);
    // console.log(cnum);



    $.ajax({
        url: 'AddCandidateReg.php',
        method: 'POST',
        dataType: "json",
        data:{
            cname: cname,
            cemail: cemail,
            cpassword: cpassword,
            cnum: cnum,
            subscribe: subscribe,
            code: code
            
        },
        success:function(data){
            console.log(data);
            if (data == "ok") {
                $("#statusLogMsg").html("<span class='alert-success'> Registration Successful ! </span>");
            } else if (data == "failed") {
                $("#statusLogMsg").html("<span> Unable to Registration! </span>");
            }
        },


    });
    
}


// signup for recruiter registration function

function addRecr() {
    var rname = $("#rname").val();
    var remail = $("#remail").val();
    var rpassword = $("#rpassword").val();
    var rnum = $("#rnum").val();
    var subscribe = $("#subscribe").val();
    
    // console.log(rname);
    // console.log(cemail);
    // console.log(cpassword);
    // console.log(cnum);



    $.ajax({
        url: 'AddRecruiterReg.php',
        method: 'POST',
        dataType: "json",
        data:{
            rname: rname,
            remail: remail,
            rpassword: rpassword,
            rnum: rnum,
            subscribe: subscribe,
        },
        success:function(data){
            console.log(data);
            if (data == "ok") {
                $("#statusLogMsg").html("<span class='alert-success'> Registration Successful ! </span>");
            } else if (data == "failed") {
                $("#statusLogMsg").html("<span> Unable to Registration! </span>");
            }
        },


    });
    
}




//login function checkLogin()

function checkLogin() {
    var lemail = $("#lemail").val();
    var lpassword = $("#lpassword").val();
    
    $.ajax({
        url: 'AddCandidateReg.php',
        method: 'POST',
        dataType: "json",
        data:{
            lemail: lemail,
            lpassword: lpassword,
        },
        success: function (data) {

            if (data == "oks") {
                $("#statusLogMsg").html('<div class="spinner-border text-success"></div>');
                setTimeout(() =>{ window.location.href = "candidate/Candidate.php"; }, 500);
                
            } else if (data == "ok")  {
                $("#statusLogMsg").html('<div class="spinner-border text-success"></div>');
                setTimeout(() =>{ window.location.href = "recruiter/Recruiter.php"; }, 500);
            } else if (data == "okss")  {
                $("#statusLogMsg").html('<div class="spinner-border text-success"></div>');
                setTimeout(() =>{ window.location.href = "admin/admin.php"; }, 500);
            } else if (data == "oksss") {
                $("#statusLogMsg").html('<div class="alert alert-danger">Invalid Email Id or Password!</div>');
                   
                }
        },

    });
}






