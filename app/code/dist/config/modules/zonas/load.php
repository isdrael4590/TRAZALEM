<?php
 $servername="localhost";
 $username="root";
 $password="";
 $db_rumed="rumed_code";
 
 /* Creando una nueva conexión a la base de datos. */
 $conn = new mysqli($servername, $username, $password, $db_rumed);

 /* Comprobando si hay un error de conexión. */
 if ($conn->connect_error) {
     die('Error de conexion ' . $conn->connect_error);
 }                                                                                 
$columns =['ID','CODE','DESCRIPTION'];
$columnswhere = ['CODE','DESCRIPTION'];
$table_code_rumed ="coderumed";
$code_rumed=isset($_POST['rumed_code']) ? $conn->real_escape_string($_POST['rumed_code']) : null;

$where ='';
if($code_rumed != null){
    $where="WHERE (";
    $cont= count($columnswhere);
    for ($i=0; $i<$cont; $i++){
        $where .=$columnswhere[$i]."LINK '%".$code_rumed."%' OR";
        }
        $where = substr_replace($where,"",-3);
        $where .= ")";
}

$sql = "SELECT " . implode(", ", $columns). "
FROM $table_code_rumed
$where ";

$resultado =$conn->query($sql);
$num_rows= $resultado->num_rows;
$output['data']='';

if($num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        $output['data'] .= '<tr>';
        $output['data'] .= '<td>' . $row["ID"] . '</td>';
        $output['data'] .= '<td>' . $row["CODE"] . '</td>';
        $output['data'] .= '<td>' . $row["DESCRIPTION"] . '</td>';
        $output['data'] .= '<td></td>';
        $output['data'] .= '<td></td>';
        $output['data'] .= '</tr>';
    }
} else{
    $output['data'] .= '<tr>';
    $output['data'] .= '<td colspan="5">SIN RESULTADOS</td>';
    $output['data'] .= '</tr>';
}

echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>