<?php
// Demo van Object Oriented Programming in PHP.
class LottoGetallen
{
	var $lottoArray;			// Maak een variabele zonder het bepalen van het type...		

	// De constructor (nieuwste stijl ;-)).
	function __construct()
	{
		$this->lottoArray = array(0, 0, 0, 0, 0, 0);		// Initialiseer op 0.
	}

	// Member function.
	function GenereerLottoGetallen()
	{
		$x = 0;

		while ($x < 6) {
			do {
				$this->lottoArray[$x] = rand(1, 42);		// Zoek een willekeurig getal tussen 1 en 42.

				$gelijk = 0;

				if ($x > 0)								// Als het niet het eerste getal is, zoek gelijken.
				{
					$y = $x - 1;

					while (($y >= 0) && ($gelijk == 0)) {
						if ($this->lottoArray[$x] == $this->lottoArray[$y]) {
							$gelijk = 1;
						}

						$y--;
					}
				}
			} while ($gelijk == 1);

			$x++;
		}

		// De getallen nog sorteren.
		sort($this->lottoArray);
	}

	// Member function.
	function ToonLottoGetallen()
	{
		for ($i = 0; $i < 6; $i++) {
			echo $this->lottoArray[$i] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
		}
	}
}
