<?php echo "Good morning"."\n";?>
<?php echo "Good morning"."\n";?>
<?php echo "Good morning"."\n";?>
<?php
$num=1;
$num02=123;
$num03=1.23;
$bool01=($num02>$num03);
$bool02=($num02<$num03);
$string_01 ="Hello, World";
$a=["sato","suzuki","takasan"];
$a1=[["kata","ramus"],["tamken","kayle"]];
$a[1]="tanaka";
echo $num;
echo $string_01."\n";
echo gettype($num02)."\n";
echo gettype($num03)."\n";
echo gettype($string_01)."\n";
echo $bool01."\n";
echo gettype($bool01)."\n";
var_dump($num03);
echo ($a[0])."\n";
echo ($a[1])."\n"; 
echo ($a[2])."\n";
echo ($a1[0][0])."\n";
echo ($a1[0][1])."\n";
echo ($a1[1][0])."\n";
echo ($a1[1][1])."\n";
//  vong lap if else if
$age =10;
if($age>=10 && $age <20){
    echo("10代")."\n";
}else if($age >20 && age<30){
    echo ("20代")."\n";
}else if($age >30 && age<40){
    echo ("30代")."\n";
}else{
    echo ("それ以外")."\n";
}
// mang
$arr=[2,4,6,8,10];
$sum =0;
for($j=0;$j<=4;$j++){
    $sum +=$arr[$j];
}
echo $sum."\n";
// vi du: cho chay tu 1->10, neu bien=3 thi bo qua, den 7 thi dung
for($i=1; $i<=10; $i++){
    if($i==2){
        continue;
    }else if($i==7){
        break;
    }else {
        echo $i."\n";
    }
}