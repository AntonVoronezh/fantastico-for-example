
<?php
//ini_set('display_errors',0);
set_time_limit(0);

/*
 if (!defined("PATH_SEPARATOR"))
  define("PATH_SEPARATOR", getenv("COMSPEC")? ";" : ":");
ini_set("include_path", ini_get("include_path").PATH_SEPARATOR.dirname(__FILE__));
*/


/*
include("my_wordz.php");
include("idiomz.php");
include("sokrasheniya.php");
include("slang.php");
include("synonimize.php");
include("glagol.php");
include("prilagatelnie.php");
include("sochetaniya.php");
include("abbr.php");
*/

ini_set('include_path',ini_get('include_path').'');



include '/home/fsservero1/sexy-traffic.com/fantastico/my_wordz.php';
include '/home/fsservero1/sexy-traffic.com/fantastico/idiomz.php';
include '/home/fsservero1/sexy-traffic.com/fantastico/sokrasheniya.php';
include '/home/fsservero1/sexy-traffic.com/fantastico/slang.php';
include '/home/fsservero1/sexy-traffic.com/fantastico/synonimize.php';
include '/home/fsservero1/sexy-traffic.com/fantastico/glagol.php';
include '/home/fsservero1/sexy-traffic.com/fantastico/prilagatelnie.php';
include '/home/fsservero1/sexy-traffic.com/fantastico/sochetaniya.php';
include '/home/fsservero1/sexy-traffic.com/fantastico/abbr.php';


//$f = file('1/svoi-slova.txt'); print_r($f);


$obolochka = file("obolochka.txt");

$obolochka[0] = trim($obolochka[0]);

if ($obolochka[0]=="1")
{


$svoi_slova = file('svoi-slova.txt');
if(count($svoi_slova)>'0'){$o_slovax = '('.count($svoi_slova).' ваших слов для замены)';}
if(count($svoi_slova)=='0'){$o_slovax = '(нет ваших слов для замены)';}

$out = <<<TEXT
<html><head><title>Рерайтер Fantastico под инглиш от seoboxer.ru</title>
<meta http-equiv="content-type" content="text/html; charset=Windows-1251">

<STYLE type="text/css">
html,body{background:#EDF4F9;padding-top:5px;}
body{font: 76% arial,sans-serif;text-align:center}
div#container{text-align:left;background:#ffffff;}

div#container{width:1000px;padding:15px; margin:0px auto; border: 3px solid #0054A6}
div#content{float:left;width:900px;border: 1px solid #E8E8E8}
div#navigation{float:right;width:495px;border: 1px solid #E8E8E8}

.text{
	border:1px #0054A6 solid;
	font-family:verdana;
	font-size:12px;
	padding-left:3px;
	background-image:url("textbg.jpg");
	background:#F5F6F8;
	height:300px;
	color:#696B6E;

scrollbar-3dlight-color: #ffffff;
scrollbar-arrow-color: #000000;
scrollbar-base-color: #ffffff;
scrollbar-darkshadow-color: #ffffff;
scrollbar-face-color: #00000;
scrollbar-highlight-color: #000000;
scrollbar-shadow-color: #000000;
scrollbar-track-color: #cccccc;
}

</STYLE>

<script type="text/javascript" src="mootools.js"></script>

<SCRIPT language=JavaScript type=text/javascript>
window.addEvent("domready",function(){
	var button = $('click');
	var docBody = $$('body');
	var boxW = docBody[0].getStyle('width').toInt();
	var boxWCenter = boxW/2;
	var boxH = docBody[0].getStyle('height').toInt();
	var boxHCenter = boxH/2;
	button.addEvent("click", function(){
		var E1 = new Element('div', {
			'id':'wrapper'})
		E1.setStyles({'width':'100%',
		'height':boxH,
		'backgroundColor':'#000000',
		'zIndex':'1000',
		'opacity':0.8,
		'position':'absolute',
		'top':0,
		'left':0});
		E1.inject(docBody[0], 'top');
		var E = new Element('', {'' : ''});
		E.setStyles({'position':'absolute',
			'left':boxWCenter-27.5,
			'top':boxHCenter-27.5,
			'textAlign':'center'})
		E.inject(docBody[0], 'top');
	})
})
</SCRIPT>


</head>
<body>
<div id="container">
<table><tr valign="top"><td>
<img src="fantastico.jpg" border="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<form action="index2.php" method="POST">
<font size="-1">
<input type="checkbox" name="chb[1]" value="1" checked>Идиоматические выражения (Fantom)<br>
<input type="checkbox" name="chb[2]" value="2" checked>Прилагательные (Fantom)<br>
<input type="checkbox" name="chb[3]" value="3" checked>Общепринятые сокращения (Fantom)<br>
<input type="checkbox" name="chb[4]" value="4" checked>Слэнговые выражения (Fantom)<br>
<input type="checkbox" name="chb[8]" value="8">Свои слова в формате слово|замена,замена,замена<br>
</font>
<font color="#696B6E" size="-1">$o_slovax</font>
</td>
<td>
<form action="index2.php" method="POST">
<font size="-1">
<input type="checkbox" name="chb[5]" value="5" checked>Прилагательные (MyMonster)<br>
<input type="checkbox" name="chb[6]" value="6" checked>Глаголы (MyMonster)<br>
<input type="checkbox" name="chb[7]" value="7" checked>Cочетания слов (MyMonster)<br>
<input type="checkbox" name="chb[9]" value="9" checked>Аббревиатуры (NEW)<br>
</td>
</tr>
</font>
</table>

<center>

<br>


<center>
<form name=form action="index2.php" method="POST">
<table><tr><td>
<font size="-1">Исходный текст</font><br><textarea class=text cols=75 rows=10 wrap=virtual name=text value="Здесь исходник"></textarea><br>
</td><td>
TEXT;
print $out;

$text  = @$_POST['text'];
$text = stripcslashes($text);
$text_isx = $text;
//print $text;




$chb = $_POST['chb'];

//echo 'Вывод элементов массива:<br />';
//for ($i=1; $i<4; $i++)
//{

//echo '$chb['.$i.'] - '.$chb[$i].'<br />';
//if ($chb[1]=='1'){$text = idiomz($text);}
if ($chb[2]=='2'){$text = my_wordz($text);}
if ($chb[3]=='3'){$text = sokrasheniya($text);}
if ($chb[4]=='4'){$text = slang($text);}
if ($chb[5]=='5'){$text = prilagatelnie($text);}
if ($chb[6]=='6'){$text = glagol($text);}
if ($chb[7]=='7'){$text = sochetaniya($text);}
if ($chb[8]=='8'){$text = synonimize($text);}
if ($chb[9]=='9'){$text = abbr($text);}
//}

$text_out = $text;

//$text_idiomz = idiomz($text);
//$text_out = my_wordz($text_idiomz);

$text_prosmotr = $text;
$text_prosmotr = stripcslashes($text_prosmotr);


$text_out = str_replace('<font color="#1059C4">','',$text_out);
$text_out = str_replace('<font color="#00A650">','',$text_out);
$text_out = str_replace('<font color="#EC83B5">','',$text_out);
$text_out = str_replace('<font color="#AD278F">','',$text_out);
$text_out = str_replace('<font color="#AED136">','',$text_out);
$text_out = str_replace('<font color="#FDB714">','',$text_out);
$text_out = str_replace('<font color="#FFA500">','',$text_out); //abbr
$text_out = str_replace('<font color="red">','',$text_out);
$text_out = str_replace('</font>','',$text_out);
$text_out = str_replace('^^',' ',$text_out);
$text_out = stripcslashes($text_out);


$text_prosmotr = str_replace('^^',' ',$text_prosmotr);


$text_prosmotr_ex = explode(' ',$text_out);
$text_prosmotr_count = count($text_prosmotr_ex);
$text_ex = explode(' ',$text);
$text_count = count($text_ex);

$raznisa = (($text_prosmotr_count*100)/$text_count)-100;
$raznisa_ex = explode('.',$raznisa);


$out2 = <<<TEXT
<font size="-1">Полученный текст</font><br><textarea class=text cols=75 rows=10 wrap=virtual name=text2>$text_out</textarea><br>
</td></tr></table>

<p><input type="submit" id="click" value="       Начинаем рерайтинг       "></p>

</form>
</center>





<table>
<tr>
<td colspan="2" style="text-align:center">
&darr; Визуальное сравнение &darr;
</td>
</tr>
<tr>
<td>
<font size="-1">Исходный текст</font> <br>
<div style="border: solid 1px #cccccc; height: 200px; overflow: auto; text-align:left; padding:5px;">
<font color="#696B6E" size="-1">
$text_isx
</font>
</div>
<br><font color="#696B6E" size="-1">$text_count слов</font>
</td>
<td>
<font size="-1">Полученный текст</font> <br>
<div style="border: solid 1px #cccccc; height: 200px; overflow: auto; text-align:left;padding:5px;">
<font color="#696B6E" size="-1">
$text_prosmotr
</font>
</div>
<br><font color="#696B6E" size="-1">$text_prosmotr_count слов, разница с исходным текстом $raznisa_ex[0]% </font>
</td>
</tr>
</table>

</div>
TEXT;
print $out2;

$file = file('http://seoboxer.ru/news.txt');
$file = array_reverse($file);
for ($i=0; $i<1; $i++)
{
print '<font color="#696B6E">Новости сервиса SEOboxer.ru:</font> '.$file[$i];

}


$out3 = <<<TEXT
<br>&copy;2008-2009
<br>
<a href="http://seoboxer.ru" target="_blank"><font color="#316ac5">SEOboxer.ru</font></a>
<br>
<a href="http://seoboxersoft.com" target="_blank"><font color="#316ac5">seoboxersoft.com</font></a>
<br>
</body></html>
TEXT;
print $out3;


}







if ($obolochka[0]=="2")
{

$out = <<<TEXT
<html><head><title>Рерайтер Fantastico под инглиш от seoboxer.ru</title>
<meta http-equiv="content-type" content="text/html; charset=Windows-1251">

<STYLE type="text/css">
html,body{background:#EDF4F9;padding-top:5px;}
body{font: 76% arial,sans-serif;text-align:center}
div#container{text-align:left;background:#ffffff;}

div#container{width:1000px;padding:15px; margin:0px auto; border: 3px solid #0054A6}
div#content{float:left;width:900px;border: 1px solid #E8E8E8}
div#navigation{float:right;width:495px;border: 1px solid #E8E8E8}

.text{
	border:1px #0054A6 solid;
	font-family:verdana;
	font-size:12px;
	padding-left:3px;
	background-image:url("textbg.jpg");
	background:#F5F6F8;
	height:300px;
	color:#696B6E;

scrollbar-3dlight-color: #ffffff;
scrollbar-arrow-color: #000000;
scrollbar-base-color: #ffffff;
scrollbar-darkshadow-color: #ffffff;
scrollbar-face-color: #00000;
scrollbar-highlight-color: #000000;
scrollbar-shadow-color: #000000;
scrollbar-track-color: #cccccc;
}

</STYLE>


</head>
<body>
<div id="container">
<img src="fantastico.jpg" border="0">



<br>



TEXT;
print $out;



$settings = file("settings.txt");

print 'Текущие настройки';

if (trim($settings[0])=='yes'){print '<br><font color="#696B6E">Идиомы включены</font>';}
else{print '<br><font color="#696B6E">Идиомы выключены</font>';}

if (trim($settings[1])=='yes'){print '<br><font color="#696B6E">Свои слова включена</font>';}
else{print '<br><font color="#696B6E">Свои слова выключены</font>';}

if (trim($settings[2])=='yes'){print '<br><font color="#696B6E">Сокращения включены</font>';}
else{print '<br><font color="#696B6E">Сокращения выключены</font>';}

if (trim($settings[3])=='yes'){print '<br><font color="#696B6E">Слэнг включены</font>';}
else{print '<br><font color="#696B6E">Слэнг выключены</font>';}

if (trim($settings[4])=='yes'){print '<br><font color="#696B6E">Прилагательные включены</font>';}
else{print '<br><font color="#696B6E">Прилагательные выключены</font>';}

if (trim($settings[5])=='yes'){print '<br><font color="#696B6E">Глаголы включены</font>';}
else{print '<br><font color="#696B6E">Глаголы выключены</font>';}

if (trim($settings[6])=='yes'){print '<br><font color="#696B6E">Сочетания включен</font>';}
else{print '<br><font color="#696B6E">Сочетания выключен</font>';}

if (trim($settings[7])=='yes'){print '<br><font color="#696B6E">Синонимы включен</font>';}
else{print '<br><font color="#696B6E">Синонимы выключен</font>';}

if (trim($settings[8])=='yes'){print '<br><font color="#696B6E">Аббревиатуры включен</font>';}
else{print '<br><font color="#696B6E">Аббревиатуры выключен</font>';}

print '<br><br>';



/*
*******************************************************************
          Получаем содержимое папки
*******************************************************************
*/
 unlink("in/nazvanie.txt");

if ($handle = opendir('in'))
{
    while (false !== ($file = readdir($handle)))
    {
        if ($file != "." && $file != "..")
        {
            echo "$file<br>";
            $file = str_replace(".txt","",$file).'^';

            $file_out_slova = "in/nazvanie.txt";
			$out_slova = fopen($file_out_slova,"a+");
 				 if (!fputs($out_slova, str_replace("^","\r\n",$file)))
			$out_slova = fclose($out_slova);


        }
    }
    closedir($handle);
}



$nazvanie = file("in/nazvanie.txt");

for($i=0;$i<count($nazvanie);$i++)
{
$nazvanie[$i] = trim($nazvanie[$i]);

$text[$i] = file_get_contents("in/".$nazvanie[$i].".txt");



//echo '$chb['.$i.'] - '.$chb[$i].'<br />';
if (trim($settings[0])=='yes'){$text[$i] = idiomz($text[$i]);}
if (trim($settings[1])=='yes'){$text[$i] = my_wordz($text[$i]);}
if (trim($settings[2])=='yes'){$text[$i] = sokrasheniya($text[$i]);}
if (trim($settings[3])=='yes'){$text[$i] = slang($text[$i]);}
if (trim($settings[4])=='yes'){$text[$i] = prilagatelnie($text[$i]);}
if (trim($settings[5])=='yes'){$text[$i] = glagol($text[$i]);}
if (trim($settings[6])=='yes'){$text[$i] = sochetaniya($text[$i]);}
if (trim($settings[7])=='yes'){$text[$i] = synonimize($text[$i]);}
if (trim($settings[8])=='yes'){$text[$i] = abbr($text[$i]);}


$text[$i] =  str_replace("^^"," ",$text[$i]);
$text[$i] =  str_replace(" , ",", ",$text[$i]);
$text[$i] =  str_replace(" .",".",$text[$i]);

$text[$i] = strip_tags($text[$i]);

//print  $text[$i];

$file_out_slova = "out/".$nazvanie[$i].".txt";
$out_slova = fopen($file_out_slova,"a+");
  if (!fputs($out_slova,$text[$i]))
$out_slova = fclose($out_slova);



print $nazvanie[$i].'<br>';


flush();

}


$out2 = <<<TEXT


</div>
TEXT;
print $out2;

$file = file('http://seoboxer.ru/news.txt');
$file = array_reverse($file);
for ($i=0; $i<1; $i++)
{
print '<font color="#696B6E">Новости сервиса SEOboxer.ru:</font> '.$file[$i];

}


$out3 = <<<TEXT
<br>&copy;2008-2009
<br>
<a href="http://seoboxer.ru" target="_blank"><font color="#316ac5">SEOboxer.ru</font></a>
<br>
<a href="http://seoboxersoft.com" target="_blank"><font color="#316ac5">seoboxersoft.com</font></a>
<br>
</body></html>
TEXT;
print $out3;


}






if ($obolochka[0]=="3")
{

$out = <<<TEXT
<html><head><title>Рерайтер Fantastico под инглиш от seoboxer.ru</title>
<meta http-equiv="content-type" content="text/html; charset=Windows-1251">

<STYLE type="text/css">
html,body{background:#EDF4F9;padding-top:5px;}
body{font: 76% arial,sans-serif;text-align:center}
div#container{text-align:left;background:#ffffff;}

div#container{width:1000px;padding:15px; margin:0px auto; border: 3px solid #0054A6}
div#content{float:left;width:900px;border: 1px solid #E8E8E8}
div#navigation{float:right;width:495px;border: 1px solid #E8E8E8}

.text{
	border:1px #0054A6 solid;
	font-family:verdana;
	font-size:12px;
	padding-left:3px;
	background-image:url("textbg.jpg");
	background:#F5F6F8;
	height:300px;
	color:#696B6E;

scrollbar-3dlight-color: #ffffff;
scrollbar-arrow-color: #000000;
scrollbar-base-color: #ffffff;
scrollbar-darkshadow-color: #ffffff;
scrollbar-face-color: #00000;
scrollbar-highlight-color: #000000;
scrollbar-shadow-color: #000000;
scrollbar-track-color: #cccccc;
}

</STYLE>


</head>
<body>
<div id="container">
<img src="fantastico.jpg" border="0">



<br>



TEXT;
print $out;



$settings = file("settings.txt");

print 'Текущие настройки';

if (trim($settings[0])=='yes'){print '<br><font color="#696B6E">Идиомы включены</font>';}
else{print '<br><font color="#696B6E">Идиомы выключены</font>';}

if (trim($settings[1])=='yes'){print '<br><font color="#696B6E">Свои слова включена</font>';}
else{print '<br><font color="#696B6E">Свои слова выключены</font>';}

if (trim($settings[2])=='yes'){print '<br><font color="#696B6E">Сокращения включены</font>';}
else{print '<br><font color="#696B6E">Сокращения выключены</font>';}

if (trim($settings[3])=='yes'){print '<br><font color="#696B6E">Слэнг включены</font>';}
else{print '<br><font color="#696B6E">Слэнг выключены</font>';}

if (trim($settings[4])=='yes'){print '<br><font color="#696B6E">Прилагательные включены</font>';}
else{print '<br><font color="#696B6E">Прилагательные выключены</font>';}

if (trim($settings[5])=='yes'){print '<br><font color="#696B6E">Глаголы включены</font>';}
else{print '<br><font color="#696B6E">Глаголы выключены</font>';}

if (trim($settings[6])=='yes'){print '<br><font color="#696B6E">Сочетания включен</font>';}
else{print '<br><font color="#696B6E">Сочетания выключен</font>';}

if (trim($settings[7])=='yes'){print '<br><font color="#696B6E">Синонимы включен</font>';}
else{print '<br><font color="#696B6E">Синонимы выключен</font>';}

if (trim($settings[8])=='yes'){print '<br><font color="#696B6E">Аббревиатуры включен</font>';}
else{print '<br><font color="#696B6E">Аббревиатуры выключен</font>';}

print '<br><br>';




$nazvanie = file("in/answers.txt");

unlink("out/answers.txt");


for($i=0;$i<count($nazvanie);$i++)
{
$nazvanie[$i] = trim($nazvanie[$i]);

$text[$i] = $nazvanie[$i];


if (trim($settings[0])=='yes'){$text[$i] = idiomz($text[$i]);}
if (trim($settings[1])=='yes'){$text[$i] = my_wordz($text[$i]);}
if (trim($settings[2])=='yes'){$text[$i] = sokrasheniya($text[$i]);}
if (trim($settings[3])=='yes'){$text[$i] = slang($text[$i]);}
if (trim($settings[4])=='yes'){$text[$i] = prilagatelnie($text[$i]);}
if (trim($settings[5])=='yes'){$text[$i] = glagol($text[$i]);}
if (trim($settings[6])=='yes'){$text[$i] = sochetaniya($text[$i]);}
if (trim($settings[7])=='yes'){$text[$i] = synonimize($text[$i]);}
if (trim($settings[8])=='yes'){$text[$i] = abbr($text[$i]);}


$text[$i] =  str_replace("^^"," ",$text[$i]);
$text[$i] =  str_replace(" , ",", ",$text[$i]);
$text[$i] =  str_replace(" .",".",$text[$i]);

$text[$i] = strip_tags($text[$i]).'^';




$file_out_slova = "out/answers.txt";
$out_slova = fopen($file_out_slova,"a+");
  if (!fputs($out_slova, str_replace("^","\r\n",$text[$i])))
$out_slova = fclose($out_slova);



print 'строка '.$i.'<br>';


flush();

}





$out2 = <<<TEXT


</div>
TEXT;
print $out2;

$file = file('http://seoboxer.ru/news.txt');
$file = array_reverse($file);
for ($i=0; $i<1; $i++)
{
print '<font color="#696B6E">Новости сервиса SEOboxer.ru:</font> '.$file[$i];

}


$out3 = <<<TEXT
<br>&copy;2008-2009
<br>
<a href="http://seoboxer.ru" target="_blank"><font color="#316ac5">SEOboxer.ru</font></a>
<br>
<a href="http://seoboxersoft.com" target="_blank"><font color="#316ac5">seoboxersoft.com</font></a>
<br>
</body></html>
TEXT;
print $out3;


}



?>