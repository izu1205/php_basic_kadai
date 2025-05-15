<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
function sort_2way(array $numbers, bool $asc): void {
    if ($asc) {
        sort($numbers); // 昇順
    } else {
        rsort($numbers); // 降順
    }

    foreach ($numbers as $num) {
        echo $num . "\n";
    }
}

$num = [15, 4, 18, 23, 10];

echo "昇順:\n";
sort_2way($num, true);

echo "\n降順:\n";
sort_2way($num, false);

?>

    </p>
</body>

</html>