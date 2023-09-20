<?php

require __DIR__.'/vendor/autoload.php';

use \App\Pix\Payload;

// instancia da classe Payload com as informações do titular do pix
$obPayload = (new Payload)->setChavePix('12345678900')
                          ->setDescricaoPagamento('Pagamento enviado, valeu!')
                          ->setNomeTitular('Juninho')
                          ->setCidadeTitular('POCO FUNDO')
                          ->setIdTransacao('Juninho1234')
                          ->setValorTransacao(1.00);
