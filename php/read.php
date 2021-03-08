<?php 
	require('conexion.php');
	$req="SELECT * FROM `registros` WHERE id!=0";
	$query=mysqli_query($conexion,$req);
	while($res=mysqli_fetch_array($query)){
		$val;
		 if($res['type']==0){
      		$val="Transferencia";
      	 }else{
      	 	$val="Mercado Pago";
      	 }
      		
		echo "<tr>
      <th scope='row'>".$res['name']."</th>
      <td>".$res['cell']."</td>
      <td>".$res['code']."</td>
      <td>".$val."</td>
    </tr>";
	}
 ?>