<?php

	class MorseCode{
		

		public function api_conv($value){
			$split = str_split($value);
			$array["result"] = array();
			
			foreach($split as $well){
				$well =strtoupper($well);
				array_push($array["result"], $this->data()[$well]."<>");
			}
			return $array;
		}
		public function data(){
			$data = array("A"=>"** ==",
				"B"=>"== ** ** **",
				"C"=>"== ** == **",
				"D"=>"== ** **",
				"E"=>"**",
				"F"=>"** ** == **",
				"G"=>"== == **",
				"H"=>"** ** ** **",
				"I"=>"** **",
				"J"=>"** == == ==",
				"K"=>"== ** ==",
				"L"=>"** == ** **",
				"M"=>"== ==",
				"N"=>"== **",
				"O"=>"== == ==",
				"P"=>"** == == **",
				"Q"=>"== == ** ==",
				"R"=>"** == **",
				"S"=>"** ** **",
				"T"=>"==",
				"U"=>"** ** ==",
				"V"=>"** ** ** ==",
				"W"=>"** == ==",
				"X"=>"== ** == ==",
				"Y"=>"== ** == ==",
				"Z"=>"== == ** **",
				"1"=>"** == == == ==",
				"2"=>"** ** == == ==",
				"3"=>"** ** ** == ==",
				"4"=>"** ** ** ** ==",
				"5"=>"** ** ** ** **",
				"6"=>"== ** ** ** **",
				"7"=>"== == ** ** **",
				"8"=>"== == == ** **",
				"9"=>"== == == == **",
				"0"=>"== == == == ==",
				" "=>"");
			
			
			return $data;
		}
	}

?>