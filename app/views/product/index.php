<h3> Products </h3>
<pre>

<ul>
<?php
foreach($products as $key=> $val){
    foreach($val as $keyy=>$value){
        
  echo  "<li>$value</li>";
  
    }
}

//echo $_SERVER['REQUEST_X_REQUESTED_WITH'];
?>
</ul>
</pre>