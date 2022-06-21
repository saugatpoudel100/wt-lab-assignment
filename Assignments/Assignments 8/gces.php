<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<?php 
echo "<h1>Gandaki College of Engineering & Science</h1>";

$gcesStaffs = [
	"academic" => [
		[
			"name" => "Saugat Poudel",
			"address" => "Syangja",
			"phones" => ["9800000000","9811111111"],
			"subjects" => ["Micro Processor", "Logic Circuit"]
		],
		[
			"name" => "Bishal Shrestha",
			"address" => "Pokhara",
			"phones" => ["9856022222","983451267"],
			"subjects" => ["Web Technology", "JAVA"]
		],
		[
			"name" => "Asish Baral",
			"address" => "Kathmandu",
			"phones" => ["9856033333",],
			"subjects" => ["Physics", "PST"]
		]
	],
	"non-academic" => [
		[
			"name" => "Pratikshya Aryal",
			"address" => "Syangja",
			"phones" => ["9856044444"],
		],
		[
			"name" => "Ujjwal Gurung",
			"address" => "Humla",
			"phones" => ["9856055555"],
		],
	]
];

//Table START
echo '<table border="3" cellspacing="10" cellpadding="10">';
//Table Header
echo '<tr><th>Type</th><th>Name</th><th>Address</th><th>Phone</th><th>Subjects</th></tr>';
foreach($gcesStaffs as $staffType => $staffDetails){
 
	foreach($staffDetails as $key => $staff ){
		//TR START
	  echo "<tr bgcolor = 'blue'>";
      echo "<td bgcolor = 'red' >$staffType</td>";
      echo "<td bgcolor = 'pink'>$staff[name]</td>";
      echo "<td bgcolor = 'orange'>$staff[address]</td>";
	  echo "<td>";
    foreach ($staff["phones"] as $phone){
      echo "$phone ";
    }
    echo "</td>";
    echo "<td>";
	
    if(array_key_exists('subjects', $staff)){
		
      foreach ($staff["subjects"] as $subject){
        echo "$subject, ";
      }
    }
    echo "</td>";
	echo "</tr>";
	//TR END 
  }
}
echo "</table>";
//Table END

?>
	
</body>
</html>