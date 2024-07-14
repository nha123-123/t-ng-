<?php
class View
{
    public function getHomePage()
    {
        include_once "Templates/Home.php";
    }

    public function themsanpham($listNSX)
    {
        include_once "Templates/ThemSP.php";
    }

    public function danhsachsp($listSP)
    {
        include_once "Templates/ListSP.php";
    }
    public function editSanPham($result,$listNSX)
    {
        include_once "Templates/FormEditSP.php";
    }
}
