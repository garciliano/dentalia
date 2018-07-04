<!DOCTYPE html>
<html lang="en">
<head>
		
		<title>Dentalia</title>
  <meta charset="UTF-8">


</head>

<body>

	<h1>Examen de Lógica de Adrian Garciliano Jimenez</h1>
	<?php 

		$letras = array ('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z');
		$lm = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z');
		$numeros = array (0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
		$especial = array ('@','.');
		$h = "dentalia.com";

		$array_final = array();

		$c1 = "1ee7b2c95024bf2a3a5b645676875f72";
		$c2 = "af97c725eca5ea2e7ae4a6b18dd9f608";
		$c3 = "aaf180b66f6282f65168c30c1c5e5466";
		$c4 = "0aaa8fb0c5b4fa52c0d06ed55d02fcc9";
		$c5 = "5e35b5a6a854db008cb8a677dfff030b";
		$c6 = "35306f43e19f6826a5df7937e71d228c";
		$c7 = "b2917b47913c83618903a4e564822836";
		$c8 = "34e4cf70388e9477677aa3013494ba1c";
		$c9 = "3d116007775d60a0d5781d2e35d747b5";
		$c10 = "dece2e0e3d79d272e40c8c66555f5525";



		$c = "";
		$c_l = count($letras);
		$c_n = count($numeros);
		$c_e = count($especial);
		$c_lm = count($lm);

		//Letra con letra

		for($i=0; $i<$c_l; $i++)
		{
			//saco el valor de cada elemento
			$c = $letras[$i];

			for ($j = 0; $j < $c_l; $j++) {
				$f = $c.$letras[$j];
				$final = md5(md5($f).$f.md5($f));


				switch ($final) {
					case $c1:
						echo '<h1>1 => '.$f.' </h1>';
						$a = array('1' => $f);
						array_push ($array_final,$a);
						break;

					case $c2:
						echo '<h1>2 => '.$f.' </h1>';
						$a = array('2' => $f);
						array_push ($array_final,$a);

						break;
					case $c3:
						echo '<h1>3 => '.$f.' </h1>';
						$a = array('3' => $f);
						array_push ($array_final,$a);

						break;
					case $c4:
						echo '<h1>4 => '.$f.' </h1>';
						$a = array('4' => $f);
						array_push ($array_final,$a);

						break;
					case $c5:
						echo '<h1>5 => '.$f.' </h1>';
						$a = array('5' => $f);
						array_push ($array_final,$a);

						break;
					case $c6:
						echo '<h1>6 => '.$f.' </h1>';
						$a = array('6' => $f);
						array_push ($array_final,$a);

						break;
					case $c7:
						echo '<h1>7 => '.$f.' </h1>';
						$a = array('7' => $f);
						array_push ($array_final,$a);

						break;
					case $c8:
						echo '<h1>8 => '.$f.' </h1>';
						$a = array('8' => $f);
						array_push ($array_final,$a);

						break;
					case $c9:
						echo '<h1>9 => '.$f.' </h1>';
						$a = array('9' => $f);
						array_push ($array_final,$a);

						break;
					case $c10:
						echo '<h1>10 => '.$f.' </h1>';
						$a = array('10' => $f);
						array_push ($array_final,$a);

						break;

				}
				

			}
		}


		//Letra con letraMayuscula

		for($i=0; $i<$c_l; $i++)
		{
			//saco el valor de cada elemento
			$c = $letras[$i];

			for ($j = 0; $j < $c_lm; $j++) {
				$f = $c.$lm[$j];
				$final = md5(md5($f).$f.md5($f));
				$final2 = md5(md5($f) + $f + md5($f));


				switch ($final) {
					case $c1:
						echo '<h1>1 =>'.$f.'</h1>';
						$a = array('1' => $f);
						array_push ($array_final,$a);
						break;

					case $c2:
						echo '<h1>2 =>'.$f.'</h1>';
						$a = array('2' => $f);
						array_push ($array_final,$a);

						break;
					case $c3:
						echo '<h1>3 =>'.$f.'</h1>';
						$a = array('3' => $f);
						array_push ($array_final,$a);

						break;
					case $c4:
						echo '<h1>4 =>'.$f.'</h1>';
						$a = array('4' => $f);
						array_push ($array_final,$a);

						break;
					case $c5:
						echo '<h1>5 =>'.$f.'</h1>';
						$a = array('5' => $f);
						array_push ($array_final,$a);

						break;
					case $c6:
						echo '<h1>6 =>'.$f.'</h1>';
						$a = array('6' => $f);
						array_push ($array_final,$a);

						break;
					case $c7:
						echo '<h1>7 =>'.$f.'</h1>';
						$a = array('7' => $f);
						array_push ($array_final,$a);

						break;
					case $c8:
						echo '<h1>8 =>'.$f.'</h1>';
						$a = array('8' => $f);
						array_push ($array_final,$a);

						break;
					case $c9:
						echo '<h1>9 =>'.$f.'</h1>';
						$a = array('9' => $f);
						array_push ($array_final,$a);

						break;
					case $c10:
						echo '<h1>10 =>'.$f.'</h1>';
						$a = array('10' => $f);
						array_push ($array_final,$a);

						break;

				}
			}
		}



		//Letra con numero
		for ($i = 0; $i < $c_l; $i++) {
			$c = $letras[$i];

			for ($j = 0; $j <$c_n; $j++) {
				$f = $c.$numeros[$j];

				switch ($final) {
					case $c1:
						echo '<h1>1 =>'.$f.'</h1>';
						$a = array('1' => $f);
						array_push ($array_final,$a);
						break;

					case $c2:
						echo '<h1>2 =>'.$f.'</h1>';
						$a = array('2' => $f);
						array_push ($array_final,$a);

						break;
					case $c3:
						echo '<h1>3 =>'.$f.'</h1>';
						$a = array('3' => $f);
						array_push ($array_final,$a);

						break;
					case $c4:
						echo '<h1>4 =>'.$f.'</h1>';
						$a = array('4' => $f);
						array_push ($array_final,$a);

						break;
					case $c5:
						echo '<h1>5 =>'.$f.'</h1>';
						$a = array('5' => $f);
						array_push ($array_final,$a);

						break;
					case $c6:
						echo '<h1>6 =>'.$f.'</h1>';
						$a = array('6' => $f);
						array_push ($array_final,$a);

						break;
					case $c7:
						echo '<h1>7 =>'.$f.'</h1>';
						$a = array('7' => $f);
						array_push ($array_final,$a);

						break;
					case $c8:
						echo '<h1>8 =>'.$f.'</h1>';
						$a = array('8' => $f);
						array_push ($array_final,$a);

						break;
					case $c9:
						echo '<h1>9 =>'.$f.'</h1>';
						$a = array('9' => $f);
						array_push ($array_final,$a);

						break;
					case $c10:
						echo '<h1>10 =>'.$f.'</h1>';
						$a = array('10' => $f);
						array_push ($array_final,$a);

						break;

				}
			}
			
		}

		//LetraMayuscula con numero
		for ($i = 0; $i < $c_lm; $i++) {
			$c = $lm[$i];

			for ($j = 0; $j <$c_n; $j++) {
				$f = $c.$numeros[$j];

				$final = md5(md5($f).$f.md5($f));

				switch ($final) {
					case $c1:
						echo '<h1>1 => '.$f.'</h1>';
						$a = array('1' => $f);
						array_push ($array_final,$a);
						break;

					case $c2:
						echo '<h1>2 => '.$f.'</h1>';
						$a = array('2' => $f);
						array_push ($array_final,$a);

						break;
					case $c3:
						echo '<h1>3 => '.$f.'</h1>';
						$a = array('3' => $f);
						array_push ($array_final,$a);

						break;
					case $c4:
						echo '<h1>4 => '.$f.'</h1>';
						$a = array('4' => $f);
						array_push ($array_final,$a);

						break;
					case $c5:
						echo '<h1>5 => '.$f.'</h1>';
						$a = array('5' => $f);
						array_push ($array_final,$a);

						break;
					case $c6:
						echo '<h1>6 => '.$f.'</h1>';
						$a = array('6' => $f);
						array_push ($array_final,$a);

						break;
					case $c7:
						echo '<h1>7 => '.$f.'</h1>';
						$a = array('7' => $f);
						array_push ($array_final,$a);

						break;
					case $c8:
						echo '<h1>8 => '.$f.'</h1>';
						$a = array('8' => $f);
						array_push ($array_final,$a);

						break;
					case $c9:
						echo '<h1>9 => '.$f.'</h1>';
						$a = array('9' => $f);
						array_push ($array_final,$a);

						break;
					case $c10:
						echo '<h1>10 => '.$f.'</h1>';
						$a = array('10' => $f);
						array_push ($array_final,$a);

						break;

				}


			}
			
		}


		//Letras con espcial
		for ($i = 0; $i < $c_l; $i++) {
			$c = $letras[$i];

			for ($j = 0; $j <$c_e; $j++) {
				$f = $c.$especial[$j];


				$final = md5(md5($f).$f.md5($f));

				switch ($final) {
					case $c1:
						echo '<h1>1 =>'.$f.'</h1>';
						$a = array('1' => $f);
						array_push ($array_final,$a);
						break;

					case $c2:
						echo '<h1>2 =>'.$f.'</h1>';
						$a = array('2' => $f);
						array_push ($array_final,$a);

						break;
					case $c3:
						echo '<h1>3 =>'.$f.'</h1>';
						$a = array('3' => $f);
						array_push ($array_final,$a);

						break;
					case $c4:
						echo '<h1>4 => '.$f.'</h1>';
						$a = array('4' => $f);
						array_push ($array_final,$a);

						break;
					case $c5:
						echo '<h1>5 =>'.$f.'</h1>';
						$a = array('5' => $f);
						array_push ($array_final,$a);

						break;
					case $c6:
						echo '<h1>6 =>'.$f.'</h1>';
						$a = array('6' => $f);
						array_push ($array_final,$a);

						break;
					case $c7:
						echo '<h1>7 =>'.$f.'</h1>';
						$a = array('7' => $f);
						array_push ($array_final,$a);

						break;
					case $c8:
						echo '<h1>8 =>'.$f.'</h1>';
						$a = array('8' => $f);
						array_push ($array_final,$a);

						break;
					case $c9:
						echo '<h1>9 =>'.$f.'</h1>';
						$a = array('9' => $f);
						array_push ($array_final,$a);

						break;
					case $c10:
						echo '<h1>10 =>'.$f.'</h1>';
						$a = array('10' => $f);
						array_push ($array_final,$a);

						break;

				}

			}
			
		}



		//Especial con letra
		for ($i = 0; $i < $c_e; $i++) {
			$c = $especial[$i];

			for ($j = 0; $j <$c_l; $j++) {
				$f = $c.$letras[$j];


				$final = md5(md5($f).$f.md5($f));

				switch ($final) {
					case $c1:
						echo '<h1>1 =>'.$f.'</h1>';
						$a = array('1' => $f);
						array_push ($array_final,$a);
						break;

					case $c2:
						echo '<h1>2 =>'.$f.'</h1>';
						$a = array('2' => $f);
						array_push ($array_final,$a);

						break;
					case $c3:
						echo '<h1>3 =>'.$f.'</h1>';
						$a = array('3' => $f);
						array_push ($array_final,$a);

						break;
					case $c4:
						echo '<h1>4 =>'.$f.'</h1>';
						$a = array('4' => $f);
						array_push ($array_final,$a);

						break;
					case $c5:
						echo '<h1>5 =>'.$f.'</h1>';
						$a = array('5' => $f);
						array_push ($array_final,$a);

						break;
					case $c6:
						echo '<h1>6 =>'.$f.'</h1>';
						$a = array('6' => $f);
						array_push ($array_final,$a);

						break;
					case $c7:
						echo '<h1>7 =>'.$f.'</h1>';
						$a = array('7' => $f);
						array_push ($array_final,$a);

						break;
					case $c8:
						echo '<h1>8 =>'.$f.'</h1>';
						$a = array('8' => $f);
						array_push ($array_final,$a);

						break;
					case $c9:
						echo '<h1>9 => '.$f.'</h1>';
						$a = array('9' => $f);
						array_push ($array_final,$a);

						break;
					case $c10:
						echo '<h1>10 =>'.$f.'</h1>';
						$a = array('10' => $f);
						array_push ($array_final,$a);

						break;

				}

			}
			
		}





		//LetrasMayuscula con espcial
		for ($i = 0; $i < $c_lm; $i++) {
			$c = $lm[$i];

			for ($j = 0; $j <$c_e; $j++) {
				$f = $c.$especial[$j];

				$final = md5(md5($f).$f.md5($f));

				switch ($final) {
					case $c1:
						echo '<h1>1 =>'.$f.'</h1>';
						$a = array('1' => $f);
						array_push ($array_final,$a);
						break;

					case $c2:
						echo '<h1>2 =>'.$f.'</h1>';
						$a = array('2' => $f);
						array_push ($array_final,$a);

						break;
					case $c3:
						echo '<h1>3 =>'.$f.'</h1>';
						$a = array('3' => $f);
						array_push ($array_final,$a);

						break;
					case $c4:
						echo '<h1>4 =>'.$f.'</h1>';
						$a = array('4' => $f);
						array_push ($array_final,$a);

						break;
					case $c5:
						echo '<h1>5 =>'.$f.'</h1>';
						$a = array('5' => $f);
						array_push ($array_final,$a);

						break;
					case $c6:
						echo '<h1>6 =>'.$f.'</h1>';
						$a = array('6' => $f);
						array_push ($array_final,$a);

						break;
					case $c7:
						echo '<h1>7 =>'.$f.'</h1>';
						$a = array('7' => $f);
						array_push ($array_final,$a);

						break;
					case $c8:
						echo '<h1>8 =>'.$f.'</h1>';
						$a = array('8' => $f);
						array_push ($array_final,$a);

						break;
					case $c9:
						echo '<h1>9 =>'.$f.'</h1>';
						$a = array('9' => $f);
						array_push ($array_final,$a);

						break;
					case $c10:
						echo '<h1>10 =>'.$f.'</h1>';
						$a = array('10' => $f);
						array_push ($array_final,$a);

						break;

				}


			}
			
		}



		//numeros con especial
		for ($i = 0; $i < $c_l; $i++) {
			$c = $numeros[$i];

			for ($j = 0; $j <$c_e; $j++) {
				$f = $c.$especial[$j];

				$final = md5(md5($f).$f.md5($f));

				switch ($final) {
					case $c1:
						echo '<h1>1 =>'.$f.'</h1>';
						$a = array('1' => $f);
						array_push ($array_final,$a);
						break;

					case $c2:
						echo '<h1>2 =>'.$f.'</h1>';
						$a = array('2' => $f);
						array_push ($array_final,$a);

						break;
					case $c3:
						echo '<h1>3 =>'.$f.'</h1>';
						$a = array('3' => $f);
						array_push ($array_final,$a);

						break;
					case $c4:
						echo '<h1>4 =>'.$f.'</h1>';
						$a = array('4' => $f);
						array_push ($array_final,$a);

						break;
					case $c5:
						echo '<h1>5 =>'.$f.'</h1>';
						$a = array('5' => $f);
						array_push ($array_final,$a);

						break;
					case $c6:
						echo '<h1>6 =>'.$f.'</h1>';
						$a = array('6' => $f);
						array_push ($array_final,$a);

						break;
					case $c7:
						echo '<h1>7 =>'.$f.'</h1>';
						$a = array('7' => $f);
						array_push ($array_final,$a);

						break;
					case $c8:
						echo '<h1>8 =>'.$f.'</h1>';
						$a = array('8' => $f);
						array_push ($array_final,$a);

						break;
					case $c9:
						echo '<h1>9 =>'.$f.'</h1>';
						$a = array('9' => $f);
						array_push ($array_final,$a);

						break;
					case $c10:
						echo '<h1>10 =>'.$f.'</h1>';
						$a = array('10' => $f);
						array_push ($array_final,$a);

						break;

				}


			}
			
		}




		//signo con signo
		for($i=0; $i<$c_e; $i++)
		{
			//saco el valor de cada elemento
			$c = $especial[$i];

			for ($j = 0; $j < $c_e; $j++) {
				$f = $c.$especial[$j];
				$final = md5(md5($f).$f.md5($f));


				switch ($final) {
					case $c1:
						echo '<h1>1 =>'.$f.'</h1>';
						$a = array('1' => $f);
						array_push ($array_final,$a);
						break;

					case $c2:
						echo '<h1>2 =>'.$f.'</h1>';
						$a = array('2' => $f);
						array_push ($array_final,$a);

						break;
					case $c3:
						echo '<h1>3 =>'.$f.'</h1>';
						$a = array('3' => $f);
						array_push ($array_final,$a);

						break;
					case $c4:
						echo '<h1>4 =>'.$f.'</h1>';
						$a = array('4' => $f);
						array_push ($array_final,$a);

						break;
					case $c5:
						echo '<h1>5 =>'.$f.'</h1>';
						$a = array('5' => $f);
						array_push ($array_final,$a);

						break;
					case $c6:
						echo '<h1>6 =>'.$f.'</h1>';
						$a = array('6' => $f);
						array_push ($array_final,$a);

						break;
					case $c7:
						echo '<h1>7 =>'.$f.'</h1>';
						$a = array('7' => $f);
						array_push ($array_final,$a);

						break;
					case $c8:
						echo '<h1>8 =>'.$f.'</h1>';
						$a = array('8' => $f);
						array_push ($array_final,$a);

						break;
					case $c9:
						echo '<h1>9 =>'.$f.'</h1>';
						$a = array('9' => $f);
						array_push ($array_final,$a);

						break;
					case $c10:
						echo '<h1>10 =>'.$f.'</h1>';
						$a = array('10' => $f);
						array_push ($array_final,$a);

						break;

				}

			}
		}


		print_r($array_final);
		echo '<br>';
		echo '<br>';
		echo '<br>';
	?>



	</div>

</body>
</html>
