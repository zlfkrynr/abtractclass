<?php 
require_once 'abstract.php';

class Segitiga extends BangunDatar
{
	public $alas,
			  $tinggi;

	public $sisiA,
			$sisiB,
			$sisiC;

	public function __construct( $alas, $tinggi )
	{
		$this->alas = $alas;
		$this->tinggi = $tinggi;
	}

	public function setSisiABC( $sisiA, $sisiB, $sisiC )
	{
		$this->sisiA = $sisiA;
		$this->sisiB = $sisiB;
		$this->sisiC = $sisiC;
	}

    public function namaBidang () 
    {
        echo 'SEGITIGA';
    }

	public function luasBidang()
	{
		return (0.5 * $this->alas * $this->tinggi);
	}

	public function kelilingBidang()
	{
		return ($this->sisiA + $this->sisiB + $this->sisiC);
	}
}