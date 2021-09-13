<?php
include_once "counct_db.php";
include_once "date.php";

   
    
// *** Code PHP for table appoimntment cardiology ******************************************
   $query = "SELECT patent.ID_pat,patent.pre_pat, patent.nom_pat,rendez_vous.ID_RDv,rendez_vous.ID_sec,rendez_vous.objt_rdv, rendez_vous.date_rdv,patent.tel_pat
   FROM patent
   INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat WHERE `objt_rdv` = 'Dental Surgery' AND `date_rdv2`= '$dateRdv';  ";
   $result = mysqli_query($conn, $query);
  
   if(mysqli_num_rows($result) > 0){
      echo '<table class="table table-hover">';
      echo '<thead class="thead-primary">';
      echo '<tr  class="thead-primary"><th scope="col"></th> 
            <th scope="col">Numbre</th> 
            <th scope="col">Last Name</td> 
            <th scope="col">First Name</th>
            <th scope="col">Appointment</td> 
            <th scope="col">Date Appointment</th>
            <th scope="col">Phone</th>
            <th scope="col">Confirmed</th>
            <th scope="col">Active</th>
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
                "<td>". $row["pre_pat"]."</td>".
                "<td>". $row["nom_pat"]."</td>".
                "<td>". $row["objt_rdv"]."</td>".
                "<td>". $row["date_rdv"]."</td>".
                "<td>". $row["tel_pat"]."</td>".
                "<td>";
                if ($row["ID_sec"] == 0) {?>
                   <a href="../include/appointement/confirmed.php?id_rdv=<?php echo $row["ID_RDv"];?>&id_sce=<?php echo $id_sec; ?>">
                   <button type="button" class="btn btn-warning"> No Confirmed</button></a></td>
                   <?php
                }else {?>
                        <button type="button" class="btn btn-success"> Confirmed</button>
                        <?php
                }
                ?>
                <td>
                <a href="editApp.php?id_app=<?php echo $row["ID_RDv"]; ?>&id_patient=<?php echo $row["ID_pat"]; ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                 <a href="../include/appointement/delet.php?id_RDV=<?php echo $row["ID_RDv"]; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
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
      <i class="fa fa-times-circle"></i> No an appointment today.
      </div>';   }


  

?>