<?php
	class field{
		
		function input($type="",$name="",$class="",$id="",$data=""){
			$input = '<input type="'.$type.'" name="'.$name.'" class="'.$class.'" id="'.$id.'">';
			return $input;
		}

		function textarea($type="",$name="",$class="",$id="",$data=""){
			$input = '<textarea name="'.$name.'" class="'.$class.'" id="'.$id.'"></textarea>';
			return $input;
		}

		function select($type="",$name="",$class="",$id="",$data=""){
			$input = '<select name="'.$name.'" class="'.$class.'" id="'.$id.'">';
			$input .='</select>';
			return $input;
		}

	}
?>