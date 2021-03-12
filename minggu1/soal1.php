<?php
class Buku {
    public $judulbuku;
    public $pengarang;
    public $penerbit;
    public $tahunterbit;
    public $cetakan;

    //method = hello
    public function hello ()
    {
        return "beep";
    }
}

//Instance
$mariposa = new Buku ();

//Get Values
echo $mariposa -> pengarang;
echo "<br />";

//Set Value
$mariposa -> judulbuku = 'MARIPOSA';
$mariposa -> pengarang = 'LULUK HR.';
$mariposa -> penerbit = 'Coconut Books';
$mariposa -> tahunterbit = '2018';
$mariposa -> cetakan = "5";

//Get Values
echo $mariposa -> judulbuku;
echo "<br />";
echo $mariposa -> pengarang;
echo "<br />";
echo $mariposa -> penerbit;
echo "<br />";
echo $mariposa -> tahunterbit;
echo "<br />";
echo $mariposa -> cetakan;
echo "<hr />";
?>