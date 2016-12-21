<?php 
class NotaFiscal {

	private $razaoSocial;
	private $cnpj;
	private $valorBruto;
	private $impostos;
	private $dataDeEmissao;
	private $observacoes;
	private $itens;

	function __construct($razaoSocial, $cnpj, $valorBruto, $impostos, $dataDeEmissao, $observacoes, $itens){
		$razaoSocial = $this->razaoSocial;
		$cnpj = $this->cnpj;
		$valorBruto = $this->valorBruto;
		$impostos = $this->impostos;
		$dataDeEmissao = $this->dataDeEmissao;
		$observacoes = $this->observacoes;
		$itens = $this->itens;
	}


    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function getValorBruto()
    {
        return $this->valorBruto;
    }

    public function getImpostos()
    {
        return $this->impostos;
    }

    public function getDataDeEmissao()
    {
        return $this->dataDeEmissao;
    }

    public function getObservacoes()
    {
        return $this->observacoes;
    }

    public function getItens()
    {
        return $this->itens;
    }
    
}