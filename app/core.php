<?php
function getName(){
    return ''.$_GET['name'];
}
$nome = "Francine Resende";

echo "<div class='btn btn-primary'>".getName()."</div>";