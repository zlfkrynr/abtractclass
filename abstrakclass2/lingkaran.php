<?php 
require_once 'abstract.php';

class Lingkaran extends BangunDatar
{
	public $jariJari;

	public function __construct( $jariJari )
	{
		$this->jariJari = $jariJari;
	}

    public function namaBidang () 
    {
        echo 'LINGKARAN';
    }

	public function luasBidang()
	{
		return (3.14 * ($this->jariJari * 2));
	}

	public function kelilingBidang()
	{
		return (3.14 * $this->jariJari * $this->jariJari);
	}
}