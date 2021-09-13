<?php
include_once "conn_db4.php";

?>
<?php       
$i = 1;
// *** Code PHP for table appoimntment cardiology ******************************************
   $query = "SELECT * FROM `patent` WHERE 1 ";
   $result = mysqli_query($conn, $query);
  
  if(mysqli_num_rows($result) > 0){
          echo '<table class="table table-hover">';
          echo '<thead class="thead-primary">';
          echo '<tr  class="table-dark text-dark">
                <th scope="col"></th> 
                <th scope="col">Numbre</th> 
                <th scope="col">ID</th> 
                <th scope="col">Last Name</td> 
                <th scope="col">First Name</th>
                <th scope="col">Birthday</td> 
                <th scope="col">Phone</th>
                </tr>';
          echo '</thead>';
       while($row = mysqli_fetch_assoc($result)){
                echo '<ul class="list-unstyled todo-list">';
                echo '<li>';
                echo 
                '<tr>'.
                '<th> <label class="control-inline fancy-checkbox">
                <input type="checkbox"><span></span>
                </label>   </th>'.
               
                '<th> '.$i++ ."</th>".
                "<td>". $row["ID_pat"]."</td>".
                "<td>". $row["pre_pat"]."</td>".
                "<td>". $row["nom_pat"]."</td>".
                "<td>". $row["date_niss_pat"]."</td>".
                "<td>". $row["tel_pat"]."</td>".
                "<td>"?><a href="../include/delete/delete_pat.php?id_patient=<?php echo $row["ID_pat"] ; ?>"><button type="submit" name="delete" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                <?php echo "</td>".
                "</tr>"; 
                echo '</li>';  
                echo '</ul>';

        }
        echo "</table>"; 
  }
   else {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <i class="fa fa-times-circle"></i> All patients have been removed
        </div>';  
       }
       
?>
