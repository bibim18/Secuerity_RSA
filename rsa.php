<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RSA </title>
  </head>
  <body>
    <?php
    //--------------- function gcd ---------------------
    function gcd($a, $b){
        $r = $a%$b;
        while ($r!=0){
            $a = $b;
            $b = $r;
            $r = $a%$b;
        }
        return $b;
    }
    //------------- valiable --------------------------
    $text = "STRONG";
    $i=1;
    $new=0;

    $data=array();
    $e=array();
      echo "1-100 ค่าจำนวนเฉพาะ ";
        while($i<=20)
        {
          $c=0;
            for($j=1;$j<=$i;$j++){
                if($i%$j==0)$c++;
            }
            if($c==2||$i==1) {
            echo  $i."  ";
            $data[$new]=$i;
            $new++;
            }
              $i++;
        }
        $num1=rand(0,count($data)-1);
        $num2=rand(0,count($data))-1;

echo "<br>>>>>".$num1."   -    ".$num2."<br>";


$p=$data[$num1];
$q=$data[$num2];

$n=$p*$q;
$z=($p-1)*($q-1);
$count=0;

//$d1=7;
// for ($row=0; $row <count($data) ; $row++) {
//   for ($i2=0; $i2 <100 ; $i2++) {
//     if ((($data[$row]*$i2) % $z) == 1) {
//         $e[$count]=$i2;
//         echo $data[$row]."    ตัวคูณที่ใช้ได้     ".$e[$count]."<br>";
//         $d2[$row] = $data[$row];
//         $e1[$row] = $e[$count];

//         $count++;
//     }
//     else continue;
//   }
// }

   echo "---------------------------------<br>";

//e ค่าที่หาจากตำนวนเฉพาะ
//d ค่าที่หาได้จากจำนวนรอบ*ค่าจำนวนเฉพาะ mod z แล้วเท่ากับ 1

    echo "p  = ".$p."<br>" ;
    echo "q  = ".$q."<br>" ;
    echo "n  = ".$n."<br>" ;
    echo "z  = ".$z."<br>" ;

   echo "---------------------------------<br>";
// find e value ------e < n and gcd(e,z)=1
    for($i=2;$i<$n;$i++){
      if(gcd($i,$z)==1){$e[$i-2] = $i;}
    }

    echo "<br>";

    for($k=0;$k<$n;){
      for($j=0;$j<$n;){
        if($e[$j] != null){ $e1[$k] = $e[$j]; $k++;$j++;}
        else $j++;
      }
     
    }

    for($l=0;$l<count($e);$l++){
       echo "ค่า e1[".$l."] :: ".$e1[$l]."<br>";
    }
//--------------------------------------

//find d value ------ d*e mod z = 1
    echo "<br>";
    $count=0;
    for($a=1;$a<100;$a++){
      for($l=0;$l<count($e);$l++){
        if(($a*$e1[$l])%$z == 1){
          $d[$l] = $a;
          
           $d1[$count] = $d[$l];
           $e2[$count] = $e1[$l];
           $count++;
        }
      }
    }

echo "<br>";
      for($l=0;$l<count($d1);$l++){
        echo "ค่า d1 :: ".$d1[$l]." ค่า e2 :: ".$e2[$l]."<br>";
      }
//--------------------------------------
   echo "---------------------------------<br>";
?>
RSA Algorithm
<table  border="2">
    <tr>
      <td>Symbolic</td>
      <td>Numeric</td>
      <td>P ยกกำลัง E</td>
      <td>P mod N</td>
      <td>C ยกกำลัง D</td>
      <td>C mod N</td>
      <td>Symbolic</td>
    </tr>
<?



        echo "<br>";
        echo "text >> ".$text;
        echo "<br> จำนวนตัวอักษร  ";
        echo strlen($text);
        echo "<br>";
        $argu;

        //$t = rand(1,count($d1));
        $t=2;
        /*if($t!=1)
        echo $t." ".$d3[$t]." ".$e2[$t];
        else $t++;*/
        echo "ค่า T ".$t."<br>";
echo "<br>เลือกแม่". $d1[$t]." <br>";
      for ($r=0;$r<=strlen($text)-1;$r++){
         $check1=ord(substr($text, $r, 1));

         if ($check1==97||$check1==65) {
            $argu=1;
         }
         if ($check1==98||$check1==66) {
            $argu=2;
         }
         if ($check1==99||$check1==67) {
            $argu=3;
         }
         if ($check1==100||$check1==68) {
            $argu=4;
         }
         if ($check1==101||$check1==69) {
            $argu=5;
         }
         if ($check1==102||$check1==70) {
            $argu=6;
         }
         if ($check1==103||$check1==71) {
            $argu=7;
         }
         if ($check1==104||$check1==72) {
            $argu=8;
         }
         if ($check1==105||$check1==73) {
            $argu=9;
         }
         if ($check1==106||$check1==74) {
            $argu=10;
         }
         if ($check1==107||$check1==75) {
            $argu=11;
         }
         if ($check1==108||$check1==76) {
            $argu=12;
         }
         if ($check1==109||$check1==77) {
            $argu=13;
         }
         if ($check1==110||$check1==78) {
            $argu=14;
         }
         if ($check1==111||$check1==79) {
            $argu=15;
         }
         if ($check1==112||$check1==80) {
            $argu=16;
         }
         if ($check1==113||$check1==81) {
            $argu=17;
         }
         if ($check1==114||$check1==82) {
            $argu=18;
         }
         if ($check1==115||$check1==83) {
            $argu=19;
         }
         if ($check1==116||$check1==84) {
            $argu=20;
         }
         if ($check1==117||$check1==85) {
            $argu=21;
         }
         if ($check1==118||$check1==86) {
            $argu=22;
         }
         if ($check1==119||$check1==87) {
            $argu=23;
         }
         if ($check1==120||$check1==88) {
            $argu=24;
         }
         if ($check1==121||$check1==89) {
            $argu=25;
         }
         if ($check1==122||$check1==90) {
            $argu=26;
         }




         echo "<tr>";
         echo "<td>".substr($text, $r, 1)."</td>";
         echo "<td>".$argu."</td>";
         $powE = number_format(pow($argu,$e2[$t]),0,'.','');
         echo "<td>".$powE."</td>";

         $PmodN = fmod($powE,$n);
         echo "<td>".$PmodN." ".$d1[$t]."</td>";
         $powD = number_format(pow($PmodN,$d1[$t]),0,'.','');

         echo "<td>".$powD."</td>";
         echo "<td>";
         echo $cip=fmod($powD,$n);
         echo "</td>";
         if ($cip==1) {
           echo "<td>A</td>";
         }
         if ($cip==2) {
           echo "<td>B</td>";
         }
         if ($cip==3) {
           echo "<td>C</td>";
         }
         if ($cip==4) {
           echo "<td>D</td>";
         }
         if ($cip==5) {
           echo "<td>E</td>";
         }
         if ($cip==6) {
           echo "<td>F</td>";
         }
         if ($cip==7) {
           echo "<td>G</td>";
         }
         if ($cip==8) {
           echo "<td>H</td>";
         }
         if ($cip==9) {
           echo "<td>I</td>";
         }
         if ($cip==10) {
           echo "<td>J</td>";
         }
         if ($cip==11) {
           echo "<td>K</td>";
         }
         if ($cip==12) {
           echo "<td>L</td>";
         }
         if ($cip==13) {
           echo "<td>M</td>";
         }
         if ($cip==14) {
           echo "<td>N</td>";
         }
         if ($cip==15) {
           echo "<td>O</td>";
         }
         if ($cip==16) {
           echo "<td>P</td>";
         }
         if ($cip==17) {
           echo "<td>Q</td>";
         }
         if ($cip==18) {
           echo "<td>R</td>";
         }
         if ($cip==19) {
           echo "<td>S</td>";
         }
         if ($cip==20) {
           echo "<td>T</td>";
         }
         if ($cip==21) {
           echo "<td>U</td>";
         }
         if ($cip==22) {
           echo "<td>V</td>";
         }
         if ($cip==23) {
           echo "<td>W</td>";
         }
         if ($cip==24) {
           echo "<td>X</td>";
         }
         if ($cip==25) {
           echo "<td>Y</td>";
         }
         if ($cip==26) {
           echo "<td>Z</td>";
         }
            echo"</tr>";
    }
     ?>
     </table>
  </body>
</html>