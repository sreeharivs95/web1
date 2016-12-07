function question()
{
    document.getElementById('qust1').style.display="none";
    document.getElementById('ans1').style.display="none";
    document.getElementById('ans2').style.display="none";
    document.getElementById('ans3').style.display="none";
    document.getElementById('ans4').style.display="none";
    document.getElementById('next1').style.display="block";
    document.getElementById('f1').style.display="none";
    document.getElementById('aaa').style.display="none";
    document.getElementById('bbb').style.display="block";
    


}

function go()
{
    document.getElementById('aaa').style.display="none";
    document.getElementById('bbb').style.display="block";
}

function one_quest1()
{
//    document.getElementById('one').style.display="block";
//    document.getElementById('two').style.display="none";
//    document.getElementById('three').style.display="none";
//    document.getElementById('four').style.display="none";

alert("correct");
var a=1;
document.getElementById('total').innerHTML = a;
}
function one_quest2()
{
//    document.getElementById('one').style.display="none";
//    document.getElementById('two').style.display="block";
//    document.getElementById('three').style.display="none";
//    document.getElementById('four').style.display="none";
alert("incorrect");



}
function one_quest3()
{
//    document.getElementById('one').style.display="none";
//    document.getElementById('two').style.display="none";
//    document.getElementById('three').style.display="block";
//    document.getElementById('four').style.display="none";
alert("incorrect");
}
function one_quest4()
{
//    document.getElementById('one').style.display="none";
//    document.getElementById('two').style.display="none";
//    document.getElementById('three').style.display="none";
//    document.getElementById('four').style.display="block";
alert("incorrect");
}