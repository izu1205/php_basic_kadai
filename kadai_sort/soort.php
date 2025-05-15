<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
function sort_and_display(array $numbers, string $order = 'asc'): void {
    if ($order === 'asc') {
        sort($numbers); // 昇順にソート
    } elseif ($order === 'desc') {
        rsort($numbers); // 降順にソート
    } else {
        echo "不正なソート順序です。'asc' か 'desc' を指定してください。\n";
        return;
    }

    foreach ($numbers as $num) {
        echo $num . "\n"; // 1行ずつ表示
    }
}
$num = [15, 4, 18, 23, 10];

echo "昇順:\n";
sort_and_display($num, 'asc');

echo "\n降順:\n";
sort_and_display($num, 'desc');

?>
    </p>
</body>

</html>