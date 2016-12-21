<?php 
class NotaFiscalBuilder {

	private $razaoSocial;
	private $cnpj;

	private $valorBruto;
	private $impostos;
	private $data;
	private $observacoes;
	private $todosItens = array();

    public function __construct(){
        $this->data = date("d/m/Y");
    }

    public function paraEmpresa($razaoSocial){
         $this->razaoSocial = $razaoSocial;
         return $this;
    }


    public function comCnpj($cnpj){
    	$this->cnpj = $cnpj;
    	return $this;
    }

    public function com(ItemDaNota $item){
    	$this->todosItens[] = $item;
    	$this->valorBruto += $item->getValor();
    	$this->impostos += $item->getValor() * 0.05;
        return $this;
    }

    public function comObservacoes($observacoes){
        $this->observacoes = $observacoes;
        return $this;
    }

    public function naData($novaData) {
        $this->data = $novaData;
        return $this;
    }

    public function constroi(){
    	return new NotaFiscal($this->razaoSocial, $this->cnpj, $this->valorBruto, $this->impostos, $this->data, $this->observacoes, $this->todosItens);
    }


}