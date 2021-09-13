<?php
$connect = mysqli_connect("localhost", "root", "", "clinic");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT patent.ID_pat,patent.pre_pat, patent.nom_pat, patent.date_niss_pat,rendez_vous.ID_RDv,rendez_vous.objt_rdv,rendez_vous.ID_sec, rendez_vous.date_rdv,patent.tel_pat
   FROM patent
   INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat
	WHERE nom_pat LIKE '%".$search."%'
	OR pre_pat LIKE '%".$search."%' 
	OR tel_pat LIKE '%".$search."%' 
	OR date_niss_pat LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT patent.ID_pat,patent.pre_pat, patent.nom_pat, patent.date_niss_pat,rendez_vous.ID_RDv,rendez_vous.objt_rdv,rendez_vous.ID_sec, rendez_vous.date_rdv,patent.tel_pat
   FROM patent
   INNER JOIN rendez_vous ON patent.ID_pat = rendez_vous.ID_pat";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	echo '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Fire Name</th>
							<th>Last Name</th>
							<th>Birthday</th>
							<th>Phone</th>
							<th>Appointement</th>
                            <th>Date Appointement</th>
                            <th>Active</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		echo '
			<tr>
				<td>'.$row["nom_pat"].'</td>
				<td>'.$row["pre_pat"].'</td>
				<td>'.$row["date_niss_pat"].'</td>
				<td>'.$row["tel_pat"].'</td>
				<td>'.$row["objt_rdv"].'</td>
                <td>'.$row["date_rdv"].'</td>
                <td>';?>
                 <a href="editApp.php?id_app=<?php  echo $row["ID_RDv"]?>&id_patient=<?php echo $row["ID_pat"] ?>"><button type="button" class="btn btn-success"><i class="fa fa-pencil-square-o"></i></button></a>
                 <a href="../include/appointement/delet.php?id_RDV=<?php echo $row["ID_RDv"]; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                 <?php '</td>
               
			</tr>
		';
	}
	
}
else
{
	echo ' <div class="alert alert-danger"> Data Not Found </div>';
}
?>

          
               