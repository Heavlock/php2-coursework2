<?php
var_dump($pageData);
if (is_string($pageData)) {

    $h1 = $pageData;
} elseif (!empty($pageData['title'])) {
    $h1 = $pageData['title'];
}
var_dump($h1);





