<?php
// Cookie ----/
// First peramiter cookie name,
// second peramiter cookie value,
// third peramiter set time, [mane holo cookie ta koto khon thakbe]

// joto khon cookie ta rakhte chai curent time er sathe ta plus kore dibo.
// like time() + 10 [10s er jonno cookie set hoye jabe]


setcookie('key', 'value');
setcookie('Email', 'demo@mail.com', time()+20);
setcookie('userName', 'Demu_Name', time()+60*60*24*365); // 1 year jnno cookie set hoye jabe.


print_r($_COOKIE);



// Coolie Destroy---//
// age cookie te jei time ta set kore dichi, sei time ta minas kore diob.

if (isset($_COOKIE['key'])) {
    unset($_COOKIE['key']);
    setcookie('key', '', time() - 3600, '/'); // empty value and old timestamp
}

?>