<?php
function search ($search)
{
	$array= {10,21,25,70,90};
	for ($i=0;$i<sizeof($array);$i++)
	{
		if($array[$i]==$search)
		{
			echo "Number " $search "was found in the array.";
			return 0;
		}
	}
	echo "Number " $search "was not found in the array.";
	
}
search (90);
?>