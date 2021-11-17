<?php


$tipo = $_GET['tipo']??"cidade";



if ($tipo == "cidade") {
		$stmt = $conn->prepare("SELECT * FROM cidade ORDER BY local");
		$stmt->execute();
		$re = $stmt->fetchALL(PDO::FETCH_ASSOC);
		$editar = "cidade-update.php?";
		$delete = "../config/cidades/delete-cidadealta.php?";
}else{
		$stmt = $conn->prepare("SELECT * FROM local ORDER BY local");
		$stmt->execute();
		$re = $stmt->fetchALL(PDO::FETCH_ASSOC);
		$editar = "muse-update.php?";
		$delete = "../config/ilha/delete-muse.php?";
}
/*switch ($tipo) :
	case "cidade":
		$stmt = $conn->prepare("SELECT * FROM cidade ");
		$stmt->execute();
		$re = $stmt->fetchALL(PDO::FETCH_ASSOC);
		$editar = "cidade-update.php?";
		$delete = "../config/cidades/delete-cidadealta.php?";
		break;
	case "local":
		$stmt = $conn->prepare("SELECT * FROM local ");
		$stmt->execute();
		$re = $stmt->fetchALL(PDO::FETCH_ASSOC);	
		$editar = "muse-update.php?";
		$delete = "../config/ilha/delete-ilha.php?";
		break;
		endswitch;
*/
?>