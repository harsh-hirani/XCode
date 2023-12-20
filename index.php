<?php
include 'add.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XCoDe - The Best</title>
    <link rel="stylesheet" href="prism.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../globle/Bootstrap/css/bootstrap.min.css">
    <style>
   <?php include 'style.css'?>
    </style>
</head>
<body>
<?php include 'nav.php'?>
    <section>
        <div class="container-fluid cursor-pointer">
            <div class="row">
                <?php
                for ($i=1; $i < 11; $i++) { 
                    echo '<div class="col-lg-4 col-12" onclick=change("code.php?prob='.$i.'&type='.$typearr[($i-1)].'");>';echo "\n\t\t\t\t\t";
                    echo '<div class="card" style="user-select: auto;">';echo "\n\t\t\t\t\t\t";
                    echo '<div class="row g-0">';echo "\n\t\t\t\t\t\t\t";
                    echo '<div class="col-md-4">';echo "\n\t\t\t\t\t\t\t";
                    echo '</div>';echo "\n\t\t\t\t\t\t\t";
                    echo '<div class="col-md-8">';echo "\n\t\t\t\t\t\t\t\t";
                    echo '<div class="card-body">';echo "\n\t\t\t\t\t\t\t\t\t";
                    echo '<h5 class="card-title"> Problem '.$i.'</h5>';echo "\n\t\t\t\t\t\t\t\t\t";
                    echo '<p class="card-text">'.$data[($i-1)].'</p>';echo "\n\t\t\t\t\t\t\t\t\t";
                    echo '<a class="btn btn-primary" href="code.php?prob='.$i.'&type='.$typearr[($i-1)].'"> Go there </a>';echo "\n\t\t\t\t\t\t\t\t";
                    echo '</div>';echo "\n\t\t\t\t\t\t\t";
                    echo '</div>';echo "\n\t\t\t\t\t\t";
                    echo '</div>';echo "\n\t\t\t\t\t";
                    echo '</div>';echo "\n\t\t\t\t";
                    echo '</div>';echo "\n\t\t\t\t";
                }
                ?>
            </div>
        </div>
    </section>
    <pre>
        <code class="language-javascript line-numbers">
             var btn_color_pre_code = "E";
             //////////////////   slider buttons var   //////////////////////
             let circle = document.getElementById('player_slayer');
             let slide_permission = false;
             let firstTimeOpen = true;
             let clicked = false;
             let current_speed = 1.00;
             ////////////////////////////////////////////////////////////////
             var btn_color_pre_code = "E";
             //////////////////   slider buttons var   //////////////////////
             let circle = document.getElementById('player_slayer');
             let slide_permission = false;
             let firstTimeOpen = true;
             let clicked = false;
             let current_speed = 1.00;
             ////////////////////////////////////////////////////////////////
             var btn_color_pre_code = "E";
             //////////////////   slider buttons var   //////////////////////
             let circle = document.getElementById('player_slayer');
             let slide_permission = false;
             let firstTimeOpen = true;
             let clicked = false;
             let current_speed = 1.00;
             ////////////////////////////////////////////////////////////////
             var btn_color_pre_code = "E";
             //////////////////   slider buttons var   //////////////////////
             let circle = document.getElementById('player_slayer');
             let slide_permission = false;
             let firstTimeOpen = true;
             let clicked = false;
             let current_speed = 1.00;
             ////////////////////////////////////////////////////////////////
             var btn_color_pre_code = "E";
             //////////////////   slider buttons var   //////////////////////
             let circle = document.getElementById('player_slayer');
             let slide_permission = false;
             let firstTimeOpen = true;
             let clicked = false;
             let current_speed = 1.00;
             ////////////////////////////////////////////////////////////////
        </code>
    </pre>
    <script src="prism.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" 
    integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous"></script>  -->
    <script src="http://localhost/globle/JQ/jquery-3.6.0.js"></script>
    <script>
        
    var threeBarClickedStatus = false;  
    function threeBarClicked(e = ""){
        // var sectionBar = document.getElementById("sideBar");
        if(threeBarClickedStatus || e == "default"){
            e.classList.remove("active");
            // sectionBar.style.height = "0vh";
            // sectionBar.style.opacity = 0;
            threeBarClickedStatus = false;
        }else{
            e.classList.add("active");
            // sectionBar.style.height = "80vh";
            // sectionBar.style.opacity = 1;
            threeBarClickedStatus = true;
        }
    }
    function change(a){
        location.replace(a);
    }
    </script>
</body>
</html>