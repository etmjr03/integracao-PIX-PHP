<?php

namespace App\Pix;

class Payload {
    /**
     * IDs do Payload do Pix
    * @var string
    */
    const ID_PAYLOAD_FORMAT_INDICATOR = '00';
    const ID_MERCHANT_ACCOUNT_INFORMATION = '26';
    const ID_MERCHANT_ACCOUNT_INFORMATION_GUI = '00';
    const ID_MERCHANT_ACCOUNT_INFORMATION_KEY = '01';
    const ID_MERCHANT_ACCOUNT_INFORMATION_DESCRIPTION = '02';
    const ID_MERCHANT_CATEGORY_CODE = '52';
    const ID_TRANSACTION_CURRENCY = '53';
    const ID_TRANSACTION_AMOUNT = '54';
    const ID_COUNTRY_CODE = '58';
    const ID_MERCHANT_NAME = '59';
    const ID_MERCHANT_CITY = '60';
    const ID_ADDITIONAL_DATA_FIELD_TEMPLATE = '62';
    const ID_ADDITIONAL_DATA_FIELD_TEMPLATE_TXID = '05';
    const ID_CRC16 = '63';

    // Chave do pix (string)  
    private $chavePix;

    // Descrição do pagamento (string)  
    private $descricaoPagamento;

    // Nome do titular da conta (string)
    private $nomeTitular;

    // Nome da cidade do titular da conta (string)
    private $cidadeTitular;

    // Id da transação do pix (string)
    private $idTransacao;

    // Valor da transção (string)
    private $valorTransacao;

    // retorna valor da chave pix
    public function setChavePix($chavePix) {
        $this->chavePix = $chavePix;
        return $this;
    }

    // retorna a descrição do pix
    public function setDescricaoPagamento($descricaoPagamento) {
        $this->descricaoPagamento = $descricaoPagamento;
        return $this;
    }

    // retorna o nome do titular da conta
    public function setNomeTitular($nomeTitular) {
        $this->nomeTitular = $nomeTitular;
        return $this;
    }

    // retorna a cidade do titular da conta
    public function setCidadeTitular($cidadeTitular) {
        $this->cidadeTitular = $cidadeTitular;
        return $this;
    }

    // retorna o id da transação pix
    public function setIdTransacao($idTransacao) {
        $this->idTransacao = $idTransacao;
        return $this;
    }

    // retorna o valor da transação pix
    public function setValorTransacao($valorTransacao) {
        $this->valorTransacao = (string)number_format($valorTransacao, 2, '.', '');
        return $this;
    }

}