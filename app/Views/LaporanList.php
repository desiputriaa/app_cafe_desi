<?= $this->extend ('layouts/admin')?>
<?= $this->section('content')?>
<div class="container">
    <h3><strong>Laporan</strong></h3>

    <table class="table table-striped">
        <thead>
            <th>id</th>
            <th>user id</th>
            <th>tanggal</th>
            <th>total harga</th>
            <th>no meja</th>
            <th>nama pemesan</th>
        </thead>
        <tbody>
            <?php
            $no=1;
            foreach($data as $row):
            ?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row['user_id']?></td>
                <td><?=$row['tanggal']?></td>
                <td><?=$row['total_harga']?></td>
                <td><?=$row['no_meja']?></td>
                <td><?=$row['nama_pemesan']?></td>
                <td><a href="" class="btn btn-info btn-sm btn-edit">Edit</a>
            </tr>
            <?php
            $no++;
            endforeach?>
        </tbody>
    </table>
</div>
<?= $this->endSection()?>
