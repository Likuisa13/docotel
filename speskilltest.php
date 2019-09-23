<?php 

class SpeSkillTest
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }
	public $itung;
	public static function hasilHitung()
	{
		// echo $this->
		echo "No 1<br>";
		echo SpeSkillTest::narcissticNumber("153");
		echo "<br>No 2<br>";
		echo SpeSkillTest::partyOutlier([2,4,0,100,4,11,2602,36]);
		echo SpeSkillTest::partyOutlier([160,3,1719,19,11,13,-21]);
		echo "<br>No 3<br>";
		echo SpeSkillTest::findNeedle(["red","blue","yellow","black","green"],"blue");
		echo "<br>No 4<br>";
		$hasil = SpeSkillTest::blueOcean([1,5,5,5,6],5);
		for ($i=0; $i < count($hasil); $i++) { 
			echo $hasil[$i]." ";
		}

	}

	private static function narcissticNumber($angka)
	{
		$hasil = 0;
		$jml = strlen($angka);
		for ($i=0; $i < $jml; $i++) { 
			$hasil = $hasil + (pow(substr($angka,$i,1),$jml));
		}

		if ($hasil == $angka) 
			return true;
		else
			return false;
	}

	private static function partyOutlier($deret)
	{
		if (count($deret) >= 3) {
			$genap = 0;
			$ganjil = 0;
			$hasil = 0;
			$nGenap = 0;
			$nGanjil = 0;
			for ($i=0; $i < count($deret); $i++) { 
				if ($deret[$i]%2 == 0) {
					$genap++;
					$nGenap = $deret[$i];
				}
				else{
					$ganjil++;
					$nGanjil = $deret[$i];
				}
			}
			if ($genap == 1) {
				echo $nGenap."(the only even number)";
			}
			elseif ($ganjil == 1) {
				echo $nGanjil."(the only odd number)";
			}
			else{
				echo "false (all odd integer or all even number)";
			}
		}
		else
			echo "invalid input";
	}

	private static function findNeedle($color,$cari)
	{
		$indek = 0;
		for ($i=0; $i < count($color); $i++) { 
			if ($color[$i] == $cari) {
				$indek = $i;
			}
		}
		return $indek;
	}

	private static function blueOcean($deret,$hapus)
	{
		$hasil =array();
		$idx = 0;
		for ($i=0; $i < count($deret); $i++) { 
			if ($deret[$i] != $hapus) {
				$hasil[$idx] = $deret[$i];
				$idx++;
			}
		}
		return $hasil;
	}
}


?>