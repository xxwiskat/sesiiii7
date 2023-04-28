<?php
    include("Database/koneksi.php");

    function createuser($nama, $email, $user, $password){

        $stt = false;
        $iduser = md5($user);
        $sql ="INSERT INTO tbuser(nama, email, Username, Passkey, iduser) 
        VALUES(
        '$nama',
        '$email',
        '$user',
        '$password', 
        '$iduser'
        );";
        $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT)or die("Koneksi ke DBMS Mysql Gagal");
        $stt = mysqli_query($cnn, $sql);
        return $stt;
    }

    function ceklogin($user, $pw){
        global $cnn;
        $result["STATUS"]= false;

        $sql="SELECT nama, email, Username, Passkey, iduser FROM tbuser
        WHERE username= '$user';";

        $rsl= mysqli_query($cnn, $sql);
        $jdata= mysqli_num_rows($rsl);

        if($jdata > 0):
            $r= mysqli_fetch_assoc($rsl);
            if($r["Passkey"] == $pw):
                $result["STATUS"]= true;
                $result["NAMA"]= $r["nama"];
                $result["EMAIL"]= $r["email"];
                $result["IDUSER"]= $r["iduser"];
            endif;
        endif;

        return $result;
    }
