<?php
$myArray = array();
if (empty($myArray)){
    echo "Array tidak terdefinisi atau kosong";
} else {
    echo "Array terdefinisi dan tidak kosong";
}

if (empty($nonExistentVar)){
    echo "<br> variabel tidak terdefinisi atau kosong";
} else {
    echo "variabel terdefinisi dan tidak kosong";
}