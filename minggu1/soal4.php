<?php 
//declare class
class Snack{
    //properties
    public $warna;
    public $berat;
    public $tahunpembuatan;
    public $kadaluarsa;
    public $jenis;
    public $bentuk;

    //method
    function barulama()
    {
        if ($this->tahunpembuatan > 2020) $status ='Baru' ;
        else $status ='Lama';
        return $status;
    }
    function berattidak()
    {
        if ($this->berat == "500 gr") $status ='Berat' ;
        else $status ='Tidak Berat';
        return $status;
    }
    function jenisSnack()
    {
        if ($this->jenis == "Kering") $status ='Snack Kering' ;
        else $status ='Snack Basah';
        return $status;
    }

    function setwarna($x)
    {
        $this->warna = $x;
    }
    function setTahunPembuatan($x)
    {
        $this->tahunpembuatan = $x;
    }
    function setJenis($x)
    {
        $this->jenis = $x;
    }
    function setbentuk($x)
    {
        $this->bentuk = $x;
    }
}
$snack = new Snack();
$snack->setwarna("Merah");
$snack->setTahunPembuatan(2021);
$snack->setJenis("Kering");
$snack->setbentuk("Bulat");
echo "Snack ".$snack->warna." tahun pembuatan ".$snack->tahunpembuatan." apakah Snack Baru ? ".$snack->barulama();
echo "<hr />";
echo "Snack ini  ".$snack->berat." Apakah Berat? ".$snack->berattidak();
echo "<hr />";
echo " Apakah Jenis Snacknya ? ".$snack->jenisSnack();
echo "<hr />";
?>