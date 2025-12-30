الفرق بين bindValue و bindParam في PHP PDO

bindValue - يأخذ القيمة وقت الاستدعاء

```php
<?php
$pdo = new PDO("mysql:host=localhost;dbname=mydb", "user", "pass");
$stmt = $pdo->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");

$productName = "Laptop";
$productPrice = 1200;


$stmt->bindValue(":name", $productName);
$stmt->bindValue(":price", $productPrice);


$productName = "Desktop";
$productPrice = 800;


$stmt->execute(); 
?>
```

bindParam - يأخذ القيمة وقت التنفيذ

```php
<?php
$pdo = new PDO("mysql:host=localhost;dbname=mydb", "user", "pass");
$stmt = $pdo->prepare("INSERT INTO products (name, price) VALUES (:name, :price)");

$productName = "Laptop";
$productPrice = 1200;


$stmt->bindParam(":name", $productName);
$stmt->bindParam(":price", $productPrice);


$productName = "Desktop";
$productPrice = 800;


$stmt->execute(); 
?>



متى تستخدم كل منهما؟

· استخدم bindValue عندما تكون القيمة ثابتة ولا تتغير
· استخدم bindParam عندما تريد ربط متغير قد تتغير قيمته قبل التنفيذ
· bindParam مفيد في الحلقات التكرارية لنفس الاستعلام
· bindValue آمن أكثر ولا يتأثر بتغييرات لاحقة


الخلاصه
 bindValue يأخذ القيمة الآن ويحفظها
 bindParam يربط المتغير نفسه ويقرأ قيمته عند التنفيذ فقط.