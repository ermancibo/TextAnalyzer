<?php
error_reporting(0);
//a	b	c	ç	d	dh	e	ë	f	g	gj	h	i	j	k	l	ll	m
//n	nj	o	p	q	r	rr	s	sh	t	th	u	v	x	xh	y	z	zh
 $a = 0;  $b = 0;  $c = 0;  $ç = 0;  $d = 0; $dh = 0;  $e = 0; $ë = 0; $f = 0;
 $g = 0;  $gj = 0;  $h = 0;  $i = 0;   $j = 0;  $k = 0;  $l = 0;$ll = 0; 
 $m = 0;  $n = 0;$nj = 0;$o = 0;   $p = 0; $q = 0; $r = 0;$rr = 0;  $s = 0;  $sh = 0; 
$t = 0; $th = 0; $u = 0;  $v = 0;$x = 0;$xh = 0;  $y = 0; $z = 0;$zh = 0; $space=0;$pik=0;$presje=0;$DyPika=0;$PikPresje=0;$Cudtse=0;$Pyetse=0;$slesh=0;$thojza=0;$viz=0;$Hkllap=0;$Mkllap=0;$tjera=-2;
function txtArray($txt){
	for($i=0;$i<=strlen($txt);$i++){
		 $dizi[$i] = utf8_encode(substr(utf8_decode($txt),$i,1));
	}
	return $dizi;
}
function MetinHesapla($metin){
			global $a,$b,$c,$ç,$d,$dh,$e,$ë,$f,$g,$gj,$h,$i,$j,$k,$l,$ll,$m,$n,$nj,$o,$p,$q,$r,$rr,$s,$sh,$t,$th,$u,$x,$xh,$v,$y,$z,$zh,$space,$pik,$presje,$DyPika,$PikPresje,$Cudtse,$Pyetse,$slesh,$thojza,$viz,$Hkllap,$Mkllap,$tjera;
	$metin1 = txtArray($metin);
	for ($say = 0; $say <= count($metin1); $say++)
	{
		switch ($metin1[$say])
		{
	
			case 'a':
				{
					$a = $a + 1;
				}
				break;
			case 'A':
				{
					$a = $a + 1;
				}
				break;
	
			case 'b':
				{
					$b = $b + 1;
				}
				break;
			case 'B':
				{
					$b = $b + 1;
				}
				break;
			case 'c':
				{
					$c = $c + 1;
				}
				break;
			case 'C':
				{
					$c = $c + 1;
				}
				break;
			case 'ç':
				{
					$ç = $ç + 1;
				}
				break;
			case 'Ç':
				{
					$ç = $ç + 1;
				}
				break;
			case 'd':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'h')
						{
							$dh = $dh + 1;
							$say = $say + 1;
						}
						else
						{
							$d = $d + 1;
						}
					}
					else
					{
						$d = $d + 1;
					}
	
				}
				break;
			case 'D':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'h' || ($metin1[$say+1] == 'H'))
						{
							$dh = $dh + 1;
							$say = $say + 1;
						}
						else
						{
							$d = $d + 1;
						}
					}
					else
					{
						$d = $d + 1;
					}
	
				}
				break;
			case 'e':
				{
					$e = $e + 1;
				}
				break;
			case 'E':
				{
					$e = $e + 1;
				}
				break;
	
			case 'ë':
				{
					$ë = $ë + 1;
				}
				break;
			case 'Ë':
				{
					$ë = $ë + 1;
				}
				break;
			case 'f':
				{
					$f = $f + 1;
				}
				break;
			case 'F':
				{
					$f = $f + 1;
				}
				break;
	
			case 'g':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'j')
						{
							$gj = $gj + 1;
							$say = $say + 1;
						}
						else
						{
							$g = $g + 1;
						}
					}
					else
					{
						$g = $g + 1;
					}
				}
				break;
			case 'G':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'j' || ($metin1[$say + 1] == 'J'))
						{
							$gj = $gj + 1;
							$say = $say + 1;
						}
						else
						{
							$g = $g + 1;
						}
					}
					else
					{
						$g = $g + 1;
					}
				}
				break;
			case 'h':
				{
					$h = $h + 1;
				}
				break;
			case 'H':
				{
					$h = $h + 1;
				}
				break;
	
			case 'i':
				{
					$i = $i + 1;
				}
				break;
			case 'I':
				{
					$i = $i + 1;
				}
				break;
			case 'j':
				{
					$j = $j + 1;
				}
				break;
	
			case 'J':
				{
					$j = $j + 1;
				}
				break;
			case 'k':
				{
					$k = $k + 1;
				}
				break;
			case 'K':
				{
					$k = $k + 1;
				}
				break;
			case 'l':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'l')
						{
							$ll = $ll + 1;
							$say = $say+ 1;
						}
						else
						{
							$l = $l + 1;
						}
					}
					else
					{
						$l = $l + 1;
					}
	
				}
				break;
			case 'L':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'l' || ($metin1[$say + 1] == 'L'))
						{
							$ll = $ll + 1;
							$say = $say + 1;
						}
						else
						{
							$l = $l + 1;
						}
					}
					else
					{
						$l = $l + 1;
					}
	
				}
				break;
	
			case 'm':
				{
					$m = $m + 1;
				}
				break;
			case 'M':
				{
					$m = $m + 1;
				}
				break;
	
	
			case 'n':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] === 'j')
						{
							$nj = $nj + 1;
							$say = $say + 1;
						}
						else
						{
							$n = $n + 1;
						}
					}
					else
					{
						$n = $n + 1;
					}
				}
				break;
			case 'N':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'j' || ($metin1[$say + 1] == 'J'))
						{
							$nj = $nj + 1;
							$say = $say + 1;
						}
						else
						{
							$n = $n + 1;
						}
					}
					else
					{
						$n = $n + 1;
					}
				}
				break;
	
			case 'o':
				{
					$o = $o + 1;
				}
				break;
			case 'O':
				{
					$o = $o + 1;
				}
				break;
			case 'p':
				{
					$p = $p + 1;
				}
				break;
			case 'P':
				{
					$p = $p + 1;
				}
				break;
			case 'q':
				{
					$q = $q + 1;
				}
				break;
			case 'Q':
				{
					$q = $q + 1;
				}
				break;
			case 'r':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] =='r')
						{
							$rr = $rr + 1;
							$say = $say + 1;
						}
						else
						{
							$r = $r + 1;
						}
					}
					else
					{
						$r = $r + 1;
	
					}
				}
				break;
			case 'R':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] =='r' || ($metin1[$say + 1] == 'R'))
						{
							$rr = $rr + 1;
							$say = $say + 1;
						}
						else
						{
							$r = $r + 1;
						}
					}
					else
					{
						$r = $r + 1;
	
					}
				}
				break;
			case 's':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] === 'h')
						{
							$sh = $sh + 1;
							$say = $say + 1;
						}
						else
						{
							$s = $s + 1;
						}
					}
					else
					{
						$s = $s + 1;
	
					}
				}
				break;
			case 'S':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'h' || ($metin1[$say + 1] == 'H'))
						{
							$sh = $sh + 1;
							$say = $say + 1;
						}
						else
						{
							$s = $s + 1;
						}
					}
					else
					{
						$s = $s + 1;
	
					}
				}
				break;
			case 't':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'h')
						{
							$th = $th + 1;
							$say = $say + 1;
						}
						else
						{
							$t = $t + 1;
						}
					}
					else
					{
						$t = $t + 1;
					}
				}
				break;
			case 'T':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'h' || ($metin1[$say + 1] == 'H'))
						{
							$th = $th + 1;
							$say = $say + 1;
						}
						else
						{
							$t = $t + 1;
						}
					}
					else
					{
						$t = $t + 1;
					}
				}
				break;
			case 'u':
				{
					$u = $u + 1;
				}
				break;
			case 'U':
				{
					$u = $u + 1;
				}
				break;
			case 'v':
				{
					$v = $v + 1;
				}
				break;
			case 'V':
				{
					$v = $v + 1;
				}
				break;
			case 'x':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'h')
						{
							$xh = $xh + 1;
							$say = $say + 1;
						}
						else
						{
							$x = $x + 1;
						}
					}
					else
					{
						$x = $x + 1;
					}
				}
				break;
			case 'X':
				{
				   if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'h' || ($metin1[$say + 1] == 'H'))
						{
							$xh = $xh + 1;
							$say = $say + 1;
						}
						else
						{
							$x = $x + 1;
						}
					}
					else
					{
						$x = $x + 1;
					}
				}
				break;
			case 'y':
				{
					$y = $y + 1;
				}
				break;
			case 'Y':
				{
					$y = $y + 1;
				}
				break;
			case 'z':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'h')
						{
							$zh = $zh + 1;
							$say = $say + 1;
						}
						else
						{
							$z = $z + 1;
						}
					}
					else
					{
						$z = $z + 1;
					}
				}
				break;
			case 'Z':
				{
					if (count($metin1) > $say + 1)
					{
						if ($metin1[$say+1] == 'h' || ($metin1[$say + 1] == 'H'))
						{
							$zh = $zh + 1;
							$say = $say + 1;
						}
						else
						{
							$z = $z + 1;
						}
					}
					else
					{
						$z = $z + 1;
					}
				}
				break;

			//------------Shenjat e piksimit---------
			case ' ':
				{
					$space = $space + 1;
				}
				break;
			case '.':
				{
					$pik = $pik + 1;
				}
				break;
			case ',':
				{
					$presje = $presje + 1;
				}
				break;
			case ':':
				{
					$DyPika = $DyPika + 1;
				}
				break;
			case ';':
				{
					$PikPresje = $PikPresje + 1;
				}
				break;
			case '!':
				{
					$Cudtse = $Cudtse + 1;
				}
				break;
			case '?':
				{
					$Pyetse = $Pyetse + 1;
				}
				break;
			case '\'':
				{
					$slesh = $slesh + 1;
				}
				break;
			case '\"':
				{
					$thojza = $thojza + 1;
				}
				break;
			case '-':
				{
					$viz = $viz + 1;
				}
				break;
			case '(':
				{
					$Hkllap = $Hkllap + 1;
				}
				break;
			case ')':
				{
					$Mkllap = $Mkllap + 1;
				}
				break;
			default:
				{
					$tjera = $tjera + 1;

				}
				break;

		}
	}
}

	function harfSayisi($metin){
		MetinHesapla($metin);
		global $a,$b,$c,$ç,$d,$dh,$e,$ë,$f,$g,$gj,$h,$i,$j,$k,$l,$ll,$m,$n,$nj,$o,$p,$q,$r,$rr,$s,$sh,$t,$th,$u,$x,$xh,$v,$y,$z,$zh;
		echo "a= ".$a;
		echo "\nb= ".$b;
		echo "\nc= ".$c;
		echo "\nç= ".$ç;
		echo "\nd= ".$d;
		echo "\ndh= ".$dh;
		echo "\ne= ".$e;
		echo "\në= ".$ë;
		echo "\nf= ".$f;
		echo "\ng= ".$g;
		echo "\ngj= ".$gj;
		echo "\nh= ".$h;
		echo "\ni= ".$i;
		echo "\nj= ".$j;
		echo "\nk= ".$k;
		echo "\nl= ".$l;
		echo "\nll= ".$ll;
		echo "\nm= ".$m;
		echo "\nn= ".$n;
		echo "\nnj= ".$nj;
		echo "\no= ".$o;
		echo "\np= ".$p;
		echo "\nq= ".$q;
		echo "\nr= ".$r;
		echo "\nrr= ".$rr;
		echo "\ns= ".$s;
		echo "\nsh= ".$sh;
		echo "\nt= ".$t;
		echo "\nth= ".$th;
		echo "\nu= ".$u;
		echo "\nv= ".$v;
		echo "\nx= ".$x;
		echo "\nxh= ".$xh;
		echo "\ny= ".$y;
		echo "\nz= ".$z;
		echo "\nzh= ".$zh;
	}
	function DigerKarakterler($metin){
		MetinHesapla($metin);
		global $space,$pik,$presje,$DyPika,$PikPresje,$Cudtse,$Pyetse,$slesh,$thojza,$viz,$Hkllap,$Mkllap,$tjera;	
		echo "' '= ".$space;
		echo "\n . = ".$pik;
		echo "\n , = ".$presje;
		echo "\n : = ".$DyPika;
		echo "\n ; = ".$PikPresje;
		echo "\n ! = ".$Cudtse;
		echo "\n ? = ".$Pyetse;
		echo "\n \ = ".$slesh;
		echo "\n \" = ".$thojza;
		echo "\n - = ".$viz;
		echo "\n ( = ".$Hkllap;
		echo "\n ) = ".$Mkllap;
		echo "\ntjera = ".$tjera;	
	}
	function KullanimSikligi($metin){
		MetinHesapla($metin);
		global $a,$b,$c,$ç,$d,$dh,$e,$ë,$f,$g,$gj,$h,$i,$j,$k,$l,$ll,$m,$n,$nj,$o,$p,$q,$r,$rr,$s,$sh,$t,$th,$u,$x,$xh,$v,$y,$z,$zh;
		$toplam = $a+$b+$c+$ç+$d+$dh+$e+$ë+$f+$g+$gj+$h+$i+$j+$k+$l+$ll+$m+$n+$nj+$o+$p+$q+$r+$rr+$s+$sh+$t+$th+$u+$x+$xh+$v+$y+$z+$zh;
		echo "a= ".$a/$toplam;
		echo "\nb= ".$b/$toplam;
		echo "\nc= ".$c/$toplam;
		echo "\nç= ".$ç/$toplam;
		echo "\nd= ".$d/$toplam;
		echo "\ndh= ".$dh/$toplam;
		echo "\ne= ".$e/$toplam;
		echo "\në= ".$ë/$toplam;
		echo "\nf= ".$f/$toplam;
		echo "\ng= ".$g/$toplam;
		echo "\ngj= ".$gj/$toplam;
		echo "\nh= ".$h/$toplam;
		echo "\ni= ".$i/$toplam;
		echo "\nj= ".$j/$toplam;
		echo "\nk= ".$k/$toplam;
		echo "\nl= ".$l/$toplam;
		echo "\nll= ".$ll/$toplam;
		echo "\nm= ".$m/$toplam;
		echo "\nn= ".$n/$toplam;
		echo "\nnj= ".$nj/$toplam;
		echo "\no= ".$o/$toplam;
		echo "\np= ".$p/$toplam;
		echo "\nq= ".$q/$toplam;
		echo "\nr= ".$r/$toplam;
		echo "\nrr= ".$rr/$toplam;
		echo "\ns= ".$s/$toplam;
		echo "\nsh= ".$sh/$toplam;
		echo "\nt= ".$t/$toplam;
		echo "\nth= ".$th/$toplam;
		echo "\nu= ".$u/$toplam;
		echo "\nv= ".$v/$toplam;
		echo "\nx= ".$x/$toplam;
		echo "\nxh= ".$xh/$toplam;
		echo "\ny= ".$y/$toplam;
		echo "\nz= ".$z/$toplam;
		echo "\nzh= ".$zh/$toplam;
	}
	function numriPergjitshemSkronjave($metin){
		global $a,$b,$c,$ç,$d,$dh,$e,$ë,$f,$g,$gj,$h,$i,$j,$k,$l,$ll,$m,$n,$nj,$o,$p,$q,$r,$rr,$s,$sh,$t,$th,$u,$x,$xh,$v,$y,$z,$zh;
		MetinHesapla($metin);
		$standart = $a + $b + $c + $ç + $d + $e + $ë + $f + $g + $h + $i + $j + $k + $l + $m + $n + $o + $p + $q + $r + $s + $t + $u + $v + $x + $y + $z;
		$dyfishe =  $dh + $gj + $ll + $nj + $rr + $sh + $th + $xh + $zh;
		$pergjitshem = $a + $b + $c + $ç + $d + $e + $ë + $f + $g + $h + $i + $j + $k + $l + $m + $n + $o + $p + $q + $r + $s + $t + $u + $v + $x + $y + $z + $dh + $gj + $ll + $nj + $rr + $sh + $th + $xh + $zh;
		echo "Numri i pergjithshem i karaktereve: ". strlen($metin);
		echo "<br>Numri i shkronjave standarde: ".$standart;
		echo "<br>Numri i pergjithshem i dyftongjeve: ".$dyfishe;
		echo "<br>Numri i pergjithshem i shkronjave: ".$pergjitshem;
	}
            
?>