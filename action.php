<?php
 include 'config.php';
if(isset($_POST['query'])){
    $inpText=$_POST['query'];
    $query="SELECT last_name FROM live_search WHERE last_name LIKE '%$inpText%'";
    $result = $conn->query($query);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row[last_name]."</a>";
        }
    }
    else{
        echo "<p class='list-group-item border-1'>No Records";
    }
}
?>
