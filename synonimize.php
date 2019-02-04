
<?php


function synonimize($cnt)
			{
				$f = file("svoi-slova.txt");
				for ($i=0;$i<count($f);$i++)
				{
				$a = explode("|",$f[$i]);
				$b = explode(",",$a[1]);
				mt_srand((double)microtime()*1000000);
				$n = mt_rand(0,(count($b)-1));

				$b[$n] = trim($b[$n]);
                $a[0] = trim($a[0]);


//$b[$n] = ''.$b[$n].'';
$b[$n] = '<font color="red">'.$b[$n].'</font>';

				$cnt = str_replace(" ".$a[0]." "," ".$b[$n]." ",$cnt);
				$cnt = str_replace(" ".$a[0].","," ".$b[$n].",",$cnt);
				$cnt = str_replace(" ".$a[0]."."," ".$b[$n].".",$cnt);
				$cnt = str_replace(" ".$a[0].";"," ".$b[$n].";",$cnt);
				$cnt = str_replace(" ".$a[0].":"," ".$b[$n].":",$cnt);
				$cnt = str_replace("(".$a[0]." ","(".$b[$n]." ",$cnt);
				$cnt = str_replace("(".$a[0].",","(".$b[$n].",",$cnt);
				$cnt = str_replace(" ".$a[0].")"," ".$b[$n].")",$cnt);
				}
				Return $cnt;
			}

?>

