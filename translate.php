<?php 
$sl = $_GET['sl'];
$tl = $_GET['tl'];
$q = $_GET['q'];


?>
<script>
/*

*/
var r = new XMLHttpRequest();
	r.open("GET", "https://translate.googleapis.com/translate_a/single?client=gtx&tl="+"<?php echo $tl,"&sl=".$sl; ?>"+"&dt=t&q="+"<?php echo $q;?>", false);
	r.send();
	var data = JSON.parse(r.responseText);
	dt1 = data[0][0][0];
   dt2= data[0][0][1];
   len1 = dt1.length;
   len2 = dt2.length;

document.write('{'+"'data'"+':'+"'"+dt1+"'"+','+"'source'"+':'+"'"+dt2+"'"+','+"'len'"+':'+'['+'{'+"'len1'"+':'+"'"+len1+"'"+','+"'len2'"+':'+"'"+len2+"'"+'}'+']'+'}');

//{"data":"text",}
</script>