
<?php 
//6,8,14

if(isset($_POST)){
	
	$post = $_POST;
	if ($post['light']=='on') {
		echo "lighiton";
		// echo exec('sudo /home/pi/Document/Raspi/2_light_on.py');
		
		exec("sudo ./2_light_on.py", $output, $return);
        if(!$return){
            echo "<br>Berhasil";
            echo "<br>";
            print_r($output);
            echo "<br>";
	        print_r($return);
	        echo "<br>";
	        // echo exec("whoami");
        }else{
        	echo "Gagal Nyala";
        	echo "<br>";
	        print_r($output);
	        echo "<br>";
	        print_r($return);
	        echo "<br>";
	        // echo exec("whoami");
        }

	}elseif ($post['light']=='flash') {
		echo "flash";
		exec("sudo ./3_blink.py", $output, $return);
        if(!$return){
            echo "<br>Berhasil";
            echo "<br>";
            print_r($output);
            echo "<br>";
	        print_r($return);
	        echo "<br>";
	        echo exec("whoami");
        }else{
        	echo "Gagal Nyala";
        	echo "<br>";
	        print_r($output);
	        echo "<br>";
	        print_r($return);
	        echo "<br>";
	        echo exec("whoami");
        }
	}elseif ($post['light']=='ff') {
		echo "ff";
		exec("sudo ./3_blink_forever.py", $output, $return);
        if(!$return){
            echo "<br>Berhasil";
            echo "<br>";
            print_r($output);
            echo "<br>";
	        print_r($return);
	        echo "<br>";
	        echo exec("whoami");
        }else{
        	echo "Gagal Nyala";
        	echo "<br>";
	        print_r($output);
	        echo "<br>";
	        print_r($return);
	        echo "<br>";
	        echo exec("whoami");
        }
	}elseif($post['light']=='off'){
		echo "lighitOff";
		exec("sudo ./2_light_off.py", $output, $return);
		exec("sudo ^c");
        if(!$return){
            echo "<br>Berhasil";
            echo "<br>";
            print_r($output);
            echo "<br>";
	        print_r($return);
	        echo "<br>";
	        // echo exec("whoami");
        }else{
        	echo "Gagal Nyala";
        	echo "<br>";
	        print_r($output);
	        echo "<br>";
	        print_r($return);
	        echo "<br>";
	        // echo exec("whoami");
        }
	}else{
		NULL;
	}
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Raspberry PI - Project LED</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	<table>
 		<caption>LED Light Command</caption>
 		<thead>
 			<tr>
 				<th>Turn On Light</th>
 				<th>Turn On Flash Light</th>
 				<th>Turn On FlipFlopLight</th>
 				<th>Turn Off Light</th>
 			</tr>
 		</thead>
 		<tbody>
 			<tr>
 				<td>
 					<form action="lampu.php" method="post" accept-charset="utf-8">
 						<input type="hidden" name="light" value="on">
 						<button type="submit">Turn On</button>
 					</form>
 				</td>
 				<td>
 					<form action="lampu.php" method="post" accept-charset="utf-8">
 						<input type="hidden" name="light" value="flash">
 						<button type="submit">Turn On Flash Light</button>
 					</form>
 				</td>
 				<td>
 					<form action="lampu.php" method="post" accept-charset="utf-8">
 						<input type="hidden" name="light" value="ff">
 						<button type="submit">Turn On FlipFlop</button>
 					</form>
 				</td>
 				<td>
 					<form action="lampu.php" method="post" accept-charset="utf-8">
 						<input type="hidden" name="light" value="off">
 						<button type="submit">Turn Off</button>
 					</form>
 				</td>
 			</tr>
 		</tbody>
 	</table>
 </body>
 </html>
