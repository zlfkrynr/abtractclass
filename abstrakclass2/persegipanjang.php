<?php 

require_once 'abstract.php';

class PersegiPanjang extends BangunDatar
{
	public $panjang,
		   $lebar;

	public function __construct( $panjang, $lebar ) 
	{
		$this->panjang = $panjang;
		$this->lebar = $lebar;
	}

    public function namaBidang () 
    {
        echo 'PERSEGI PANJANG';
    }

	public function luasBidang()
	{
		return ($this->panjang * $this->lebar);
	}

	public function kelilingBidang()
	{
		return (2 * ($this->panjang + $this->lebar));
	}
}