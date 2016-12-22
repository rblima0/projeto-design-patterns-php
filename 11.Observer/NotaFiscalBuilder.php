<?php 
class NotaFiscalBuilder {

	private $razaoSocial;
	private $cnpj;

	private $valorBruto;
	private $impostos;
	private $data;
	private $observacoes;
	private $todosItens = array();
    private $todasAcoesASeremExecutadas;

    public function __construct($todasAcoesASeremExecutadas){
        $this->data = date("d/m/Y");
        $this->todasAcoesASeremExecutadas = $todasAcoesASeremExecutadas;
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
    	$notaFiscal = new NotaFiscal($this->razaoSocial, $this->cnpj, $this->valorBruto, $this->impostos, $this->data, $this->observacoes, $this->todosItens);

        foreach($this->todasAcoesASeremExecutadas as $acao) {
            $acao->executa($notaFiscal);
        }

    return $notaFiscal;
    }

}