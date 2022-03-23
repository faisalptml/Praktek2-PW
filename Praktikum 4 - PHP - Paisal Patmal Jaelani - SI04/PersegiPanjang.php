<?php
        class persegi_panjang{
            const lebar = 10 ;
            const panjang = 5 ;

            function getLuas(){
                return 2 * self :: lebar + self :: panjang ;
            }
            function getKeliling(){
                return self :: lebar * self :: panjang ;
            }
        }

    $persegiPanjang1 = new persegi_panjang() ;

    echo "<br/>Luas Persegi Panjang = ". $persegiPanjang1 -> getLuas() ;
    echo "<br/>Keliling Persegi Panjang = ". $persegiPanjang1 -> getKeliling() ;
?>