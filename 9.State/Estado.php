<?php
interface Estado {

	public function saca(Conta $conta, $valor);
	public function deposita(Conta $conta, $valor);
	
}