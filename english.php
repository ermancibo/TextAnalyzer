<?php
error_reporting(0);
$a=0; $b=0; $c=0;$d=0;$e=0;$f=0;$g=0;$h=0;$i=0;$j=0;$k=0;$l=0;$m=0;$n=0;$o=0;$p=0;$q=0;$r=0;$s=0;$t=0;$u=0;$v=0;$w=0;$x=0;$y=0;$z=0; $space=0;$pik=0;$presje=0;$DyPika=0;$PikPresje=0;$Cudtse=0;$Pyetse=0;$slesh=0;$thojza=0;$viz=0;$Hkllap=0;$Mkllap=0;$tjera=-2;
function txtArray($txt){
	for($i=0;$i<=strlen($txt);$i++){
		 $dizi[$i] = utf8_encode(substr(utf8_decode($txt),$i,1));
	}
	return $dizi;
}
function MetinHesapla($metin){
	global $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z,$space,$pik,$presje,$DyPika,$PikPresje,$Cudtse,$Pyetse,$slesh,$thojza,$viz,$Hkllap,$Mkllap,$tjera;
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

			case 'b':
				{
					$b = $b + 1;
				}
				break;
			case 'c':
				{
					$c = $c + 1;
				}
				break;
			
			case 'd':
				{
					
					$d = $d + 1;

				}
				break;
			case 'e':
				{
					$e = $e + 1;
				}
				break;

		  
			case 'f':
				{
					$f = $f + 1;
				}
				break;

			case 'g':
				{
					$g = $g + 1;
					
				}
				break;
			case 'h':
				{
					$h = $h + 1;
				}
				break;

			case 'i':
				{
					$i = $i + 1;
				}
				break;
			case 'j':
				{
					$j = $j + 1;
				}
				break;

			case 'k':
				{
					$k = $k + 1;
				}
				break;
			case 'l':
				{
					$l = $l + 1;
					

				}
				break;

			case 'm':
				{
					$m = $m + 1;
				}
				break;


			case 'n':
				{
						$n = $n + 1;
					
				}
				break;

			case 'o':
				{
					$o = $o + 1;
				}
				break;
			case 'p':
				{
					$p = $p + 1;
				}
				break;
			case 'q':
				{
					$q = $q + 1;
				}
				break;
			case 'r':
				{
						$r = $r + 1;

					
				}
				break;
			case 's':
				{
						$s = $s + 1;

					
				}
				break;
			case 't':
				{
						$t = $t + 1;
					
				}
				break;
			case 'u':
				{
					$u = $u + 1;
				}
				break;
			case 'v':
				{
					$v = $v + 1;
				}
				break;
			case 'x':
				{
						$x = $x + 1;
					
				}
				break;
			case 'y':
				{
					$y = $y + 1;
				}
				break;
			case 'z':
				{
						$z = $z + 1;
					
				}
				break;
		   case 'w':
				{
						$w = $w + 1;
					
				}
				break;
			case 'A':
				{
					$a = $a + 1;
				}
				break;

			case 'B':
				{
					$b = $b + 1;
				}
				break;
			case 'C':
				{
					$c = $c + 1;
				}
				break;

			case 'D':
				{

					$d = $d + 1;

				}
				break;
			case 'E':
				{
					$e = $e + 1;
				}
				break;


			case 'F':
				{
					$f = $f + 1;
				}
				break;

			case 'G':
				{
					$g = $g + 1;

				}
				break;
			case 'H':
				{
					$h = $h + 1;
				}
				break;

			case 'I':
				{
					$i = $i + 1;
				}
				break;
			case 'J':
				{
					$j = $j + 1;
				}
				break;

			case 'K':
				{
					$k = $k + 1;
				}
				break;
			case 'L':
				{
					$l = $l + 1;


				}
				break;

			case 'M':
				{
					$m = $m + 1;
				}
				break;


			case 'N':
				{
					$n = $n + 1;

				}
				break;

			case 'O':
				{
					$o = $o + 1;
				}
				break;
			case 'P':
				{
					$p = $p + 1;
				}
				break;
			case 'Q':
				{
					$q = $q + 1;
				}
				break;
			case 'R':
				{
					$r = $r + 1;


				}
				break;
			case 'S':
				{
					$s = $s + 1;


				}
				break;
			case 'T':
				{
					$t = $t + 1;

				}
				break;
			case 'U':
				{
					$u = $u + 1;
				}
				break;
			case 'V':
				{
					$v = $v + 1;
				}
				break;
			case 'X':
				{
					$x = $x + 1;

				}
				break;
			case 'Y':
				{
					$y = $y + 1;
				}
				break;
			case 'Z':
				{
					$z = $z + 1;

				}
				break;
			case 'W':
				{
					$w = $w + 1;

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
		global $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z;
		 echo "a= ".$a;
		echo "\nb= ".$b;
		echo "\nc= ".$c;
		echo "\nd= ".$d;
		echo "\ne= ".$e;
		echo "\nf= ".$f;
		echo "\ng= ".$g;
		echo "\nh= ".$h;
		echo "\ni= ".$i;
		echo "\nj= ".$j;
		echo "\nk= ".$k;
		echo "\nl= ".$l;
		echo "\nm= ".$m;
		echo "\nn= ".$n;
		echo "\no= ".$o;
		echo "\np= ".$p;
		echo "\nq= ".$q;
		echo "\nr= ".$r;
		echo "\ns= ".$s;
		echo "\nt= ".$t;
		echo "\nu= ".$u;
		echo "\nv= ".$v;
		echo "\nw= ".$w;
		echo "\nx= ".$x;
		echo "\ny= ".$y;
		echo "\nz= ".$z;
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
		global $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z;
		$toplam =$a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t+$u+$v+$w+$x+$y+$z;
		echo "a= ".$a/$toplam;
		echo "\nb= ".$b/$toplam;
		echo "\nc= ".$c/$toplam;
		echo "\nd= ".$d/$toplam;
		echo "\ne= ".$e/$toplam;
		echo "\nf= ".$f/$toplam;
		echo "\ng= ".$g/$toplam;
		echo "\nh= ".$h/$toplam;
		echo "\ni= ".$i/$toplam;
		echo "\nj= ".$j/$toplam;
		echo "\nk= ".$k/$toplam;
		echo "\nl= ".$l/$toplam;
		echo "\nm= ".$m/$toplam;
		echo "\nn= ".$n/$toplam;
		echo "\no= ".$o/$toplam;
		echo "\np= ".$p/$toplam;
		echo "\nq= ".$q/$toplam;
		echo "\nr= ".$r/$toplam;
		echo "\ns= ".$s/$toplam;
		echo "\nt= ".$t/$toplam;
		echo "\nu= ".$u/$toplam;
		echo "\nv= ".$v/$toplam;
		echo "\nw= ".$w/$toplam;
		echo "\nx= ".$x/$toplam;
		echo "\ny= ".$y/$toplam;
		echo "\nz= ".$z/$toplam;
	}
	function numriPergjitshemSkronjave($metin){
		global $a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r,$s,$t,$u,$v,$w,$x,$y,$z;
		MetinHesapla($metin);
		$toplam = $a+$b+$c+$d+$e+$f+$g+$h+$i+$j+$k+$l+$m+$n+$o+$p+$q+$r+$s+$t+$u+$v+$w+$x+$y+$z;
		echo "Total number of characters: ".strlen($metin);
        echo "<br>Number of standard letters: ".$toplam;
                    
	}
            
?>