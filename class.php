<?php

	// 1. Atskirame faile sukurkite klasę Test, kurioje būtų konstruktorius, kuris kuriant objektą išvestų į ekraną Jūsų vardą.


class Test {

	// 1. Atskirame faile sukurkite klasę Test, kurioje būtų konstruktorius, kuris kuriant objektą išvestų į ekraną Jūsų vardą.

	public $name;

	  public function __construct ($name) {
	    $this->name = $name;
	  }

	  public function sakykVarda() {
	  		echo $this->name . "<br />";
	  }

	public $data;

	// 4. Klasėje Test sukurkite metodą dayToday() , kuris į ekraną išvestų šios dienos datą formatu "2017-11-09".

	public function dayToday(){
		$currentDate = date('Y-m-d', time());
		echo $currentDate . "<br />";
		$this->data = $currentDate;

	}

	// 3. Klasėje Test sukurkite metodą storeToCookie(), kuris sukurtų Cookie pavadinimu test_today ir į jį įrašytų rezultatą gautą iš dayToday(). Cookie turėtų galioti savaitę.

	public function storeToCookie(){
		$cookie_name = "test_today";
		$cookie_value = $this->data;
		setcookie($cookie_name, $cookie_value, time() + (60*60*24*7), "/"); 
	}

	// 4. Klasėje Test sukurkite metodą isEven(), kuris grąžintų TRUE, jei paduotas jam skaičius yra lyginis.

	public function isEven($a) {
		if (($a % 2) == 0){
			return TRUE ;
		} else {
			return FALSE;
		}
	}

	// 5. Klasėje Test sukurkite atributą $language, kurio reikšmė pagal nutylėjimą būtų "LT".
	public $language = "LT";


	// 6. Klasėje Test sukurkite metodą setLanguage(), kuriam padavus reikšmes "Lithuania", "Russia" arba "Poland", klasės atributui $language būtų priskirimi šalių kodai atitinkamai "LT", "RU" arba "PL".

	public function setLanguage($countryCode) {
		if ($countryCode == "LT") {
			$this->language = "LT";	
		} elseif ($countryCode == "RU") {
			$this->language = "RU";	
		} elseif ($countryCode == "PL") {
			$this->language = "PL";
		}
	}

	// 7. Klaseje Test sukurkite metodą discount(), kuris tris didziausias reikšmes, paduotame jam masyve, sumažintų 10% ir gražintų. Grąžinamame masyve eilės tvarka(rikiavimas) yra nesvarbi.		
	//		Paduodamo masyvo pvz.: [148, 244, 52, 49, 55, 19, 1]		
	//		Grąžinamo masyvo pvz.: [219.6, 133.2, 49.5, 52, 49, 19, 1]

	public function discount($array) {
		$result = [];

		rsort($array);
		$top3 = array_reverse(array_slice($array, 0, 3));

		foreach ($top3 as $arr) {
			$result[] = $arr * 0.9;
		}

		unset($array[0]);
		unset($array[1]);
		unset($array[2]);
		$output = $result + $array;

		return $output;
	}

	// 8. Klasėje Test parašykite metoda storeRandom(), kurį iškvietus, būtų sukuriamas failas "random.txt", į kurį pridedama nauja eilutė su atsitiktiniu skaičiumi tarp 1990 ir 2017.		

	public function storeRandom() {
		$myfile = fopen("random.txt", "w") or die("Unable to open file!");
		$txt = rand(1990, 2017) . "\n";
		fwrite($myfile, $txt);
		fclose($myfile);
	}
	
	// 9. Klasėje Test parašykite metodą glueText(), kuriam padavus string su sakiniu, jame esantys žodžiai būtų apjungiami į vieną CamelCase būdu (pirmos žodžiū raidės didžiosios).		
	//	Paduodamo teksto pvz.: "this is a very simple sentence"		
	//  Grąžinamo teksto pvz.: "ThisIsAVerySimpleSentence"

	public function glueText($text) {
		$upperCase = ucwords($text);  
		return str_replace(' ','',$upperCase);
	
	}

	// 10. Klasėje Test parašykite metodą textGen(), kuris sugeneruotų 100 atsitiktinių žodžių sakinį. Žodžiai imami iš 5-10 žodžių masyvo. Rezultatas gražinamas.

	public function textGen($words) {
		$textArray=[];

		for ($i = 0; $i <= 100; $i++) {
				$textArray[] = $words[array_rand($words,1)];
			} 


		return implode(" ", $textArray);

	}

}

	// 11. Remiantis klase Test sukurkite objektą $myTest ir kviesdami jo metodus pademonstruokite jų veikimą.





















