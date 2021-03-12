<?php 
//declare class
class kendaraan{
    //properties
    public $jeniskendaraan;
    public $jumlahroda;
    public $merk;
    public $bahanbakar;
    public $warna;
    public $tahunpembuatan;


    //method
    function hargaSecond()
    {
        if ($this->tahunpembuatan > 2010) $status ='20/100' ;
        elseif ($this->tahunpembuatan > 2005) $status ='30 persen turun';
        else $status ="40 persen turun";
        return $status;
    }
    function setMerk($x)
    {
        $this->merk = $x;
    }
    function setTahunPembuatan($x)
    {
        $this->tahunpembuatan = $x;
    }
}
$kendaraan = new kendaraan();
$kendaraan->setMerk("Supra X125");
$kendaraan->setTahunPembuatan(2004);
echo "Motor ".$kendaraan->merk." tahun pembuatan ".$kendaraan->tahunpembuatan." berapa persen mendapatkan penurunan ? ".$kendaraan->hargaSecond();
?>