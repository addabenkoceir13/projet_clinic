<?php
include_once "conn_db4.php";

?>
<?php       
$i = 1;
// *** Code PHP for table appoimntment cardiology ******************************************
   $query = "SELECT patent.ID_pat,patent.pre_pat,patent.nom_pat,patent.tel_pat,rendez_vous.ID_RDv,rendez_vous.objt_rdv, rendez_vous.date_rdv
   FROM patent
   INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat  ; ";
   $result = mysqli_query($conn, $query);
  
  if(mysqli_num_rows($result) > 0){
          echo '<table class="table table-hover">';
          echo '<thead class="thead-primary">';
          echo '<tr  class="table-dark text-dark">
                <th scope="col"></th> 
                <th scope="col">Numbre</th> 
                <th scope="col">Last Name</td> 
                <th scope="col">First Name</th>
                <th scope="col">Appointment</td> 
                <th scope="col">Date Appointment</th>
                <th scope="col">Time Appointment</th>
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
               
                '<p><th> '.$i++ ."</th></p>".
                "<td>". $row["pre_pat"]."</td>".
                "<td>". $row["nom_pat"]."</td>".
                "<td>". $row["objt_rdv"]."</td>".
                "<td>". $row["date_rdv"]."</td>".
                "<td>". $row["tel_pat"]."</td>".
                "<td>"?><a href="../include/delete/delete_app.php?id_RDv=<?php echo $row["ID_RDv"] ; ?>"><button type="submit" name="delete" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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
        <i class="fa fa-times-circle"></i> All appointement have been removed
        </div>';  
       }
       
?>

