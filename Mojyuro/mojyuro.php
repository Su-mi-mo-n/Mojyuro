<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mojyuro</title>
</head>
<body>
<?php
//年の受け取りをするぜ
if(is_numeric($_POST["nen"]))
{
    $nen = $_POST["nen"];
}

//月の受け取り
if(is_numeric($_POST["gatsu"]))
{
    $m = $_POST["gatsu"];
}

//日の受け取り
if(is_numeric($_POST["hi"]))
{
    $J = $_POST["hi"];
}

//月が1.2月の場合の処理
if($m == 1 || $m == 2)
{
    $nen = $nen -1;
    $nen = str_split($nen,2);
    $q = $nen[0];
    $K = $nen[1];

    if($m == 1)
    {
        $m = 13;
    }
    elseif($m == 2)
    {
        $m = 14;
    }
}
else
{
    $nen = str_split($nen,2);
    $q = $nen[0];
    $K = $nen[1];
}

//以上の数値を代入していく
$h = ($J + floor(($m  + 1) * 26 / 10) + $K + floor($K/4) + floor($q/4) - 2 * $q) % 7;

//$hが負の値になった場合の処理
if(strpos($h,'-') !== false)
{
    $h = $h + 7;
}

//$hの値別の処理
if($h == 0)
{
    print "あなたの生まれた曜日は土曜日ですよ</br>";
}
elseif($h == 1)
{
    print "あなたの生まれた曜日は日曜日です</br>";
}
elseif($h == 2)
{
    print "あなたの生まれた曜日は月曜日です</br>";
}
elseif($h == 3)
{
    print "あなたの生まれた曜日は火曜日です</br>";
}
elseif($h == 4)
{
    print "あなたの生まれた曜日は水曜日です</br>";
}
elseif($h == 5)
{
    print "あなたの生まれた曜日は木曜日です</br>";
}
elseif($h == 6)
{
    print "あなたの生まれた曜日は金曜日です</br>";
}

?>

<a href="mojyuro.html"><input type="submit" value="もう一度生年月日を入力する"></a><br>

</body>
</html>