<?php
//include 'connection.php';
//$r=mysql_query("select * from addquestion");
//while($r1=mysql_fetch_array($r))
//{
//$a=$r1['question'];
//echo $a;
//$a=$r1['answer1'];
//$a=$r1['answer2'];
//$a=$r1['answer3'];
//$a=$r1['answer4'];
//}

?>

<html>
    <head>
        <script type="text/javascript" src="question.js"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

        <script>
$(document).ready(function()
{
    $("#ans1").click(function(){
        $("qust1").hide();
        $("ans1").hide();
        $("ans2").hide();
        $("ans3").hide();
        $("ans4").hide();
        $("next1").show();
    });
    $("#ans2").click(function(){
        $("qust1").hide();
        $("ans1").hide();
        $("ans2").hide();
        $("ans3").hide();
        $("ans4").hide();
        $("next1").show();
    });
    $("#ans3").click(function(){
        $("qust1").hide();
        $("ans1").hide();
        $("ans2").hide();
        $("ans3").hide();
        $("ans4").hide();
        $("next1").show();
    });
    $("#ans4").click(function(){
        $("qust1").hide();
        $("ans1").hide();
        $("ans2").hide();
        $("ans3").hide();
        $("ans4").hide();
        $("next1").show();
    });
    
});
</script>

       
    </head>
    <body>
        
        <?php
        include 'connection.php';
        
$r=mysql_query("select * from addquestion where id=2");
while($r1=mysql_fetch_array($r))
{
$a=$r1['question'];

$ans1=$r1['answer1'];
$ans2=$r1['answer2'];
$ans3=$r1['answer3'];
$ans4=$r1['answer4'];

        ?>
        
        <div id="view1" style="width: 100%; height: 200px; background-color: darkgray;">
        <form method="post">
            <label id="qust1"><?php echo $a; ?></label>
            <input type="hidden" id="h_an1" name="an1" value="<?php echo $ans3; ?>">
            <input type="submit" id="ans1" name="sub1" onclick="return question();" value="<?php echo $ans1; ?>">
            <input type="submit" id="ans2" name="sub2" onclick="return question();" value="<?php echo $ans2; ?>">
            <input type="submit" id="ans3" name="sub3" onclick="return question();" value="<?php echo $ans3; ?>">
            <input type="submit" id="ans4" name="sub4" onclick="return question();" value="<?php echo $ans4; ?>">    
            
                    </form>
        
        
      
        <?php
}


        ?>
        
        <?php
        
        $count=0;
        if (isset($_POST['sub1']))
        {
            $true_ans=$_POST['an1'];
            
            $r=mysql_query("select * from addquestion where id=2");
while($r1=mysql_fetch_array($r))
{

$ans1=$r1['answer1'];
$ans2=$r1['answer2'];
$ans3=$r1['answer3'];
$ans4=$r1['answer4'];
            
        }
        
        if($true_ans==$ans1)
        {
          echo "True";  
        }
 else {
     echo "false";
 }
 }
 
 
 //2
 
 if (isset($_POST['sub2']))
        {
            $true_ans=$_POST['an1'];
            
            $r=mysql_query("select * from addquestion where id=2");
while($r1=mysql_fetch_array($r))
{

$ans1=$r1['answer1'];
$ans2=$r1['answer2'];
$ans3=$r1['answer3'];
$ans4=$r1['answer4'];
            
        }
        
        if($true_ans==$ans2)
        {
          echo "True";  
        }
 else {
     echo "false";
 }
 }
 
 //3
 
 if (isset($_POST['sub3']))
        {
            $true_ans=$_POST['an1'];
            
            
            $r=mysql_query("select * from addquestion where id=2");
while($r1=mysql_fetch_array($r))
{

$ans1=$r1['answer1'];
$ans2=$r1['answer2'];
$ans3=$r1['answer3'];
$ans4=$r1['answer4'];
            
        }
        
        if($true_ans==$ans3)
        {
          echo "True";
          $count=$count+1;
        }
 else {
     echo "false";
 }
 }
 
 
 //4
 
 if (isset($_POST['sub4']))
        {
            $true_ans=$_POST['an1'];
            
            $r=mysql_query("select * from addquestion where id=2");
while($r1=mysql_fetch_array($r))
{

$ans1=$r1['answer1'];
$ans2=$r1['answer2'];
$ans3=$r1['answer3'];
$ans4=$r1['answer4'];
            
        }
        
        if($true_ans==$ans4)
        {
          echo "True"; 
            
        }
 else {
     echo "false";
 }
 
 }
 
        ?>
        
        
            <label id="count1" style="float: right;"><?php echo $count; ?></label>
            <button id="next1" style="display: none;">Next</button>
        </div>
        
        
    </body>
</html>
