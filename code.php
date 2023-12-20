<?php
include "add.php";
$prob = $_GET['prob'];
$type = $_GET['type'];
if ($type == 'java') {
    $lang = "javascript";
    $alltype = $type;
}else if($type == 'html'){
    $lang = "markup";    
    $alltype = "txt";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="prism.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../globle/Bootstrap/css/bootstrap.min.css">
   <style>
       <?php include 'style.css';?>
   </style>
</head>
<body>
<?php include 'nav.php';?>
<div id="sideBar">
    <div class="container text-white">
        <div class="row">
        <?php
            for ($i=1; $i < 11; $i++) { 
                echo '<a href="code.php?prob='.$i.'&type='.$typearr[($i-1)].'">';
                echo '<div class="col-10 bg-dark offset-1">';
                if ($i == $prob) {
                    echo '<h4 class="text-primary">'.$i.'. '.$data[($i-1)].'</h4>';                   
                }else{
                    echo '<h4 class="text-white" style="text-decoration: none; ">'.$i.'. '.$data[($i-1)].'</h4>';
                }
                echo '</div></a>';
                echo "\n\t\t";
            }
        ?>
        </div>
    </div>
</div>

    <pre>
        <code class="language-<?php echo $lang;?> line-numbers">
            <?php 
            $filename =  './sources/p'.$prob.'.'.$type;
            $openfile = fopen($filename,"r") or die("Can't open file'".$openfile."';");
            echo fread($openfile,filesize($filename));
            fclose($openfile);
            ?>
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
        var sectionBar = document.getElementById("sideBar");
        if(threeBarClickedStatus || e == "default"){
            e.classList.remove("active");
            sectionBar.style.height = "0vh";
            sectionBar.style.opacity = 0;
            threeBarClickedStatus = false;
        }else{
            e.classList.add("active");
            sectionBar.style.height = "40vh";
            sectionBar.style.opacity = 1;
            threeBarClickedStatus = true;
        }
    }
    </script>

</body>
</html>