<?php
include 'connection.php';
?>
<html>
    <head>
        <title></title>
        <script>
            
            function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
    document.getElementById('a').style.display = "none";
}

            </script>
    </head>
    <body>
        <?php
        
        
$r=mysql_query("select * from addquestion where id=2");
while($r1=mysql_fetch_array($r))
{
$a=$r1['question'];

$ans1=$r1['answer1'];
$ans2=$r1['answer2'];
$ans3=$r1['answer3'];
$ans4=$r1['answer4'];
}
        ?>
        <div id="welcomeDiv"  style="display:none; background-color: blue;" class="answer_list" > <label>WELCOME</label></div>
        <form method="post">
            <label><?php echo $a; ?></label>
            <input  id="a" type="button" name="answer1" value="<?php echo $ans1; ?>" onclick="showDiv()" />
        <input  id="b" type="submit" name="answer2" value="<?php echo $ans2; ?>" onclick="showDiv()" />
        <input  id="c" type="submit" name="answer3" value="<?php echo $ans3; ?>" onclick="showDiv()" />
        <input  id="d" type="submit" name="answer4" value="<?php echo $ans4; ?>" onclick="showDiv()" />
        
        
        </form>    
    </body>
</html>