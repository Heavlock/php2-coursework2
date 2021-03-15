<?php
echo 'шаблон книги';
$books = $pageData["books"];
echo '<pre>';
foreach ($books as $book) {
    echo $book->name . PHP_EOL;
}
echo '</pre>';