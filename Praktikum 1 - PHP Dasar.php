<!doctype html>
<html lang="id">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Array Siswa</title>
  </head>
  <body>
<h5>Nama : Paisal Patmal Jaelani</h5>
<h5>NIM : 0110121095</h5>
<h5>Kelas : SI04</h5>
<br>

  <?php  
        $ns1 = ['id'=>1, 'nim'=>'01101', 'uts'=>80, 'uas'=>84, 'tugas'=>78] ;
        $ns2 = ['id'=>2, 'nim'=>'01121', 'uts'=>70, 'uas'=>50, 'tugas'=>68] ;
        $ns3 = ['id'=>3, 'nim'=>'01130', 'uts'=>60, 'uas'=>86, 'tugas'=>70] ;
        $ns4 = ['id'=>4, 'nim'=>'01134', 'uts'=>90, 'uas'=>91, 'tugas'=>82]  ;

        $_nilai = [$ns1, $ns2, $ns3, $ns4] ; 

    ?>
    <div class = "container mt-4">
    <h2 class = "text-center">Daftar Nilai Siswa</h2>
    <table class="table table-bordered text-center bg-dark text-light">
        <thead class = "bg-warning">
            <tr class = "text-dark">
                <th>No</th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead> 
        <tbody class = "border border-success">
            <?php 
                $nomor = 1 ;
                foreach ($_nilai as $ns) {
                    echo '<tr><td>' . $nomor . '</td>' ;
                    echo '<td>' . $ns['nim'] . '</td>' ;
                    echo '<td>' . $ns['uts'] . '</td>' ;
                    echo '<td>' . $ns['uas'] . '</td>' ;
                    echo '<td>' . $ns['tugas'] . '</td>' ;
                    $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3 ;
                    echo '<td>' .number_format ($nilai_akhir , 2 , ' , ' , ' . ') . '</td>' ;
                    echo '<tr/>' ;
                    $nomor++ ;
                }
            ?>
        </tbody>
    </table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>