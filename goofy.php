<?php
echo 'nick' . 'james';



?>
<form action="" method="post">

<input type="password" name="passwordFieldErnie">

<input type="submit" name="hi" value="show me piggy">



</form>

<?php
//echo $_POST['passwordFieldErnie'];

if ($_POST['passwordFieldErnie'] == 'nick' || $_POST['passwordFieldErnie'] == 'james'){ 

?>




<img style="width:200px;" onclick="run()"
src="http://images4.wikia.nocookie.net/__cb20120406195953/muppet/images/9/9a/Piggy-Hat.jpg">


<script type="text/javascript">

function run(){
alert("hi");
}


</script>
<?php
}

?>
