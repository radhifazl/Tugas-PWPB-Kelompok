<?php 
    include 'database.php';
    $db = new Database();
    $db->Connect();
    $pegawais = $db->getDataPegawai("SELECT * FROM tbl_pegawai WHERE jns_kel = 'L'")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>TUGAS 2 : Menampilkan Data Laki-laki</title>
</head>
<body>
    <div class="data container p-5">
        <table class="table mx-auto mb-5">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tanggal Lahir</th>
                    <th>Status</th>
                    <th>Mulai Kerja</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($pegawais as $pegawai) : ?>
                    <tr>
                        <td>
                            <?= $pegawai['nip']; ?>
                        </td>
                        <td>
                            <?= $pegawai['nama']; ?>
                        </td>
                        <td>
                            <?= $pegawai['jns_kel']; ?>
                        </td>
                        <td>
                            <?= $pegawai['tgl_lahir']; ?>
                        </td>
                        <td>
                            <?= $pegawai['status']; ?>
                        </td>
                        <td>
                            <?= $pegawai['mulai_kerja']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        
        <ul class="list-group">
            <li class="list-group-item bg-dark text-white">Anggota Kelompok : </li>
            <li class="list-group-item">Radhif Azli Nurfahriza</li>
            <li class="list-group-item">Eko Junianto</li>
            <li class="list-group-item">Nasywasasi</li>
        </ul>
    </div>
</body>
</html>