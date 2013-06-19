<?php
    session_start();
if (isset($_SESSION["user"]) && isset($_SESSION["level_admin"]))
{
    include "elemen/head.php";
    include "elemen/top-nav.php";
?>
<body>
<div class="wrap">
    <div class="container">
        <div class="row">
            <?php include "elemen/left-nav.php";?>
            <div class="span7">
                <?php
                    if(isset($_REQUEST['page'])){
                        switch ($_REQUEST["page"])
                        {
                            case "inputAdmin":
                                include "pages/inputAdmin.php";
                                break;
                            case "tampilAdmin":
                                include "/pages/tampilAdmin.php";
                                break;
                            case "edit_admin":
                                include "/pages/edit_admin.php";
                                break;
                            case "input_siswa":
                                include "/pages/addSiswa.php";
                                break;
                            case "tampilSiswa":
                                include "/pages/tampilSiswa.php";
                                break;
                            case "edit_siswa":
                                include "/pages/editSiswa.php";
                                break;
                            case "input_soal":
                                include "/pages/inputSoal.php";
                                break;
                            case "tampil_soal":
                                include "/pages/tampilSoal.php";
                                break;
                            case "edit_soal":
                                include "/pages/edit_soal.php";
                                break;
                            case "tampilKriteria":
                                include "/pages/tampilKriteria.php";
                                break;
                            case "setKriteria":
                                include "/pages/setKriteria.php";
                                break;
                        }
                    }
                    else {
                        include "pages/beranda.php";
                    }
                ?>
            </div>
        </div>
    </div>
    <div id="push">

    </div>
<?php include "elemen/footer.php";?>
</body>
</html>
<?php
}
else{
    header("Location:login.php");
}
?>
