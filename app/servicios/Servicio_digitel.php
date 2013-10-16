<?php 
class Servicio_digitel extends Servicio
{
	protected $url 				= 'http://digitel.transamovil.com/recargar.jsp';
	protected $password			= 'transa';

	//nro 04121000750'
	public function pagar( $numero, $modo_pago, $monto )
	{
		$recarga_url = $this->url . '?telefono=' . $numero . '&paymentMode=' . $modo_pago . '&monto=' . $monto . '&password=' . $this->password;
		
		return file_get_contents( $recarga_url );		
	}
}