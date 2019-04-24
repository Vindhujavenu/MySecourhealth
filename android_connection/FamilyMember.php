<?php
include("connection.php");
$response=array();

	$jsonElements = file_get_contents('php://input');
	$input = json_decode($jsonElements, true);
	$is_family=$input['is_family'];
	if($is_family=="ok"){
		
		$response["res"]=array();
		foreach($input['family'] as $v){
		
			$fid=$v["fid"];
            $p_id=$v["p_id"];
            $house_no=$v["house_no"];
            $house_name=$v["house_name"];
            $owner_name=$v["owner_name"]; 
            $annual_income=$v["annual_income"]; 
            $no_of_members=$v["no_of_members"]; 
			
			$qry="insert into family(house_no,house_name,owner_name,annual_income,no_of_members,pid)values('$house_no','$house_name','$owner_name','$annual_income','$no_of_members','$p_id')";
			$res=mysql_query($qry);
			$family_id=mysql_insert_id();
			
			$is_member=$v["is_member"];
            if($is_member=="ok"){
			
             	foreach($v['members'] as $v1){            
							 $mid=$v1["mid"];
                             $house_no2=$v1["house_no"];
                             $name=$v1["name"];
                             $age=$v1["age"];
                             $gender=$v1["gender"];
                             $relation=$v1["relation"];
                             $adhar_no=$v1["adhar_no"];
							 $logid="";
;							 $oo=mysql_query("select * from login where username=' $house_no2' and password='$adhar_no'");
							if(mysql_num_rows($oo)>0)
							{
							}

							 
													 
							 else
							 {
							  
							 $asd=mysql_query("insert into login values(null,'$house_no2','$adhar_no','member')");
							 $logid=mysql_insert_id();
							 $qry1="insert into member(f_id,name,age,gender,relation,adhar_no,log_id)values('$family_id','$name','$age','$gender','$relation','$adhar_no','$logid')";
							 $res1=mysql_query($qry1);
							 $member_id=mysql_insert_id();
							 
							 $arr=array();
							 $arr["mid"]=$mid;
							 $arr["mem_id"]=$member_id;
							 array_push($response["res"],$arr);
	
							 }
				}
			}
		}
	}
	echo json_encode($response);
	?>