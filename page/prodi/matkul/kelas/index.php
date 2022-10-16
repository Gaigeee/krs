<?php 
    $result = $mysqli->query("SELECT * FROM kelas k JOIN dosen d ON k.nid_dosen=d.nid_dosen");
?>
<div class="card">
    <div class="card-header row justify-content-between">
        <h5 class="col">Daftar Kelas</h5>
        <div class="col-lg-2 col-md-3 col-sm-4 row justify-content-end">
            <a href="/<?= $folder ?>/prodi/matkul/kelas/new">
                <button type="button" class="btn btn-primary">
                    <span class="tf-icons bx bx-plus"></span>&nbsp; Tambah
                </button>
            </a>
        </div>
    </div>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Kelas</th>
                    <th>Kode Matkul</th>
                    <th>Nama Dosen</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                <?php 
                    while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?= $row['kode_kelas'] ?></td>
                    <td><?= $row['kode_matkul'] ?></td>
                    <td><?= $row['nama_dosen'] ?></td>
                    <td>
                        <a href="/<?= $folder ?>/prodi/matkul/kelas/edit?kode_kelas=<?= $row['kode_kelas'] ?>">
                            <button type="button" class="btn btn-icon btn-outline-primary">
                                <span class="tf-icons bx bx-edit-alt"></span>
                            </button>
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>