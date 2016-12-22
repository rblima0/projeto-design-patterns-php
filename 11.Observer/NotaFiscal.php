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
		$this->razaoSocial = $razaoSocial;
		$this->cnpj = $cnpj;
		$this->valorBruto = $valorBruto;
		$this->impostos = $impostos;
		$this->dataDeEmissao = $dataDeEmissao;
		$this->observacoes = $observacoes;
		$this->itens = $itens;
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