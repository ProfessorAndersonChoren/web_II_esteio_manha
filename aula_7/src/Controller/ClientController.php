<?php
require dirname(dirname(__DIR__)) . '/vendor/autoload.php';

use APP\Model\Client;

$paulo = new Client("960.324.502-01");
$paulo->fullname = "Ruan Yago da Rosa";
$paulo->phone = "(51) 98889-3251";
$paulo->status = true;

// Não deixar isso acontecer
$paulo->cpf = "teste";

echo 'Nome: ' . $paulo->fullname.' CPF: '.$paulo->cpf;
