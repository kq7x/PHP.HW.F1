تكليف البحث عن دوال المصفوفه ودوال النصوص
تاريخ 21/11/2025
الطالب : اسيد صادق المخلافي


<?php
//انشاء مصفوفه
$fruits= array("Najd","osaid","al-mekhlafi");
$numbers =[1,2,3,4,5,6,7];

//داله الطباعه
echo count ($fruits);

//لتحقق اذا كان مصفوفه
var_dump(is_array($fruits));

//البحث عن قيمه في المصفوفه
echo in_array("osaid", $fruits);

//لبحثعن قيمه وارجاع المفتاح
echo array_search("Najd", $fruits);
?>
<?php
//اضافه وحذف عناصر

$colors =["red","black"];

// اضافه عنصر في النهايه
array_push($colors ,"yellow","blue")
print_r($colors);

//ازاله اخر عنصر
$last = array_pop ($colors);
echo $last;

//اضافه عنصر في البدايه 
array_unshift($colors,"purple");
echo $last;

//ازاله اول عنصر
$first = array_shift($colors);
echo $first;
?>

//دمج وتقسيم المصفوفات
<?php
$array1 =["a","b"];
$array2 =['c','d'];
//دمج مصفوفات
$merged =array_merge($array1,$array2);
print_r($merged);

//استخراج جزاء من المصفوفه
$sliced = array_slice($merged,1,2);
print_r($sliced);

//ازاله واستبدال جزاء من المصفوفه
$arr = [1,2,3,4,5];
array_splice($arr,1,2, ["a","b"]);
print_r($arr);
?>
ترتيب المصفوفات
<?php
$numbers = [3,1,4,5,2];

//ترتيب تصاعدي 
sort($numbers);
print_r($numbers);

//ترتيب تنازلي
rsort($numbers);
print_r($numbers);

//ترتيب تصاعدي مع الحفاظ على المفتاح
$ages =[23 <="osaid ",22 <="sad",5 <="najd"];
asort($ages);
print_r($ages);

//ترتيب حسب المفاتيح
ksort($ages);
print_r($ages);
?>
<?php
//دوال متقدمه
$numbers = [ 1,2,3,4,5,6,7];

//نطبيق داله على جميع العناصر
$squared = array_map(function($n){
    return $n * $n;
}, $numbers);
print_r($squared);

//تصفيه المصفوفه
$even = array_filter($numbers, function($n){
    return $n  % 2 ==0;

});
print_r($even);

//الحصول على المفتاح
$keys = array_keys($ages);
print_r($keys);

// الحصول على القيم
$values = array_values($ages);
print_r($values);
?>
//دوال النصوص
<?php
// الدوال الاساسيه
$text = "hello OSAID";

// طول النص بالبت
echo strlen($text);

//طول النص بالحروف للغه العربيه
echo mb_strlen($text, 'UTF-8');

// البحث عن نص داخل النص
echo strpos($text, "osaid");

// اسخراج جزاء من النص
echo substr($text,0,5);
?>

<?php 
//التحويل والتعديل
$text ="HELLO WORLD";

///تحويل لحروف صغيره
echo strtolower($text);

//تحويل لحروف كبيره
echo strtoupper($text);

//اول حرف كبير
echo ucfirst("hello");

//اول حرف من كل كلمه كبير
echo ucwords("hello world");

// استبدال النص
echo str_replace("world", "PHP", $text);

//عكس النص
echo strrev($text);
?>

التقسيم والدمج
<?php
$text ="najd","osaid","sadiq";

//تقسيم النص الى مصفوفه
$fruits = explode(",",$text);
print_r($fruits);

//تقسيم النص الى مصفوفه اخرى 
$chars = str_split("hello");
print_r($chars);

//دمج مصفوفه النص
$newText = implode ("-"$fruits);
echo $newText;
?>

التنضيف والتنسيق
<?php
$text ="HELLO WORLD ";

// ازاله تلمسافات 
echo trim($text);

//ازاله المسافات من اليسار
echo ltrim($text);

//ازاله المسافات من اليمين
echo rtrim($text);

//تحويل اسطر جديده 
echo nl2br("HELLO\nWORLD");

//تحويل الاحرف الخاصه
echo htmlspecialchars("<div>Test</div>");

?>
التنسيق والمقارنه

<?php
//تنسيق النص
$name ="osaid";
$age = 23;
echo sprintf("my name %s my age %d year ", $name,$age);

//مقارنه نصوص
echo strcmp("hello","hello");
echo strcmp("apple", "banana");

//مقارنه نصوص دون النضر في الحاله
echo strcasecmp ("HELLO","hello");

//تكرار النص
echo str_repeat("*",5);
?>
 
 

