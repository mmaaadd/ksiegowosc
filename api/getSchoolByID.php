<?php 
	require("access_comp.php");
	//--------------odczytywanie parametrów od datatable-------------------------------------
	$schoolID = $_POST["ID"]; // ID recordu
	//--------------Koniec - odczytywanie parametrów od datatable-------------------------------------		
    //check if ID is a number and if yes then proceed
    if (isset($schoolID) && is_numeric($schoolID)){
 				$sql="select * from szkoly where id_szkoly=".$schoolID; 	
		
				$arr=$db->GetArray($sql);
				//			print "<pre>";
				//			var_export($arr);
				//			print "</pre>";
				//rsort($arr);		

				foreach($arr as $k=>$v){
						$st='{"nazwa":"'.$v['nazwa'].'", "ulica":"'.$v['ulica'].'", "miejscowosc":"'.$v['miejscowosc'].'", "kod_pocztowy":"'.$v['kod_pocztowy'].'", "nip":"'.$v['nip'].'", "regon":"'.$v['regon'].'", "aktywna":"'.$v['aktywna'].'"}';
				}
    } else {
            $st='{error:"Niewłaściwe ID elementu"}' ;  
    }
    echo $st; 
?>