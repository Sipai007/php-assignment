<?php
require_once 'connect.php';
?>

<table border=1 cellpadding=10 cellspacing=0>
    <tr>
        <th>#id</th>
        <th>name</th>
        <th>contact</th>
        <th>age</th>
        <th>rating</th>
        <th>comments</th>
    </tr>
    <?php
    $sql="SELECT * FROM tbl_res";
    $sata=mysqli_query($con,$sql);
    while($result=mysqli_fetch_array($sata))
    {

    
    


    ?>
    <tr>
        <td><?php  echo $result['id'];?></td>
        <td><?php  echo $result['name'];?></td>
        <td><?php  echo $result['contact'];?></td>
        <td><?php  echo $result['age'];?></td>
        <td><?php  echo $result['rating'];?></td>
        <td><?php  echo $result['comments'];?></td>
    </tr>
<?php
    }
?>

</table>