<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていくclass Food {
          class Food {
            public string $name;
            public int $price;
        
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        
            public function show_price(): void {
                echo "価格: " . $this->price . "円\n";
            }
        }

        class Animal {
          public string $name;
          public int $height;
          public int $weight;
      
          public function __construct(string $name, int $height, int $weight) {
              $this->name = $name;
              $this->height = $height;
              $this->weight = $weight;
          }
      
          public function show_height(): void {
              echo "身長: " . $this->height . "cm\n";
          }
      }

    $food = new Food("りんご", 120);
$animal = new Animal("キリン", 500, 900);

// インスタンスの出力
print_r($food);
print_r($animal);

// メソッドの呼び出し
$food->show_price();
$animal->show_height();

        ?>
    </p>
</body>

</html>