<?php
$telefone = '(21) 99999 - 9999';
$regex= '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';

preg_match($regex, $telefone, $correspondencia);

echo preg_replace(
  $regex,
  '(xx) \2',
  $telefone
);