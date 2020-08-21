<?php


$sign_string = 'a4825234f4bae72a0be04eafe9e8e2bada209255eyJwdWJsaWNfa2V5IjoiaTAwMDAwMDAwIiwidmVyc2lvbiI6IjMiLCJhY3Rpb24iOiJwYXkiLCJhbW91bnQiOiIzIiwiY3VycmVuY3kiOiJVQUgiLCJkZXNjcmlwdGlvbiI6InRlc3QiLCJvcmRlcl9pZCI6IjAwMDAwMSJ9a4825234f4bae72a0be04eafe9e8e2bada209255';

$result = base64_encode ( string sha1 ( string $sign_string ));

	echo $result;

?>