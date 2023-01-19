<?= $this->extend('template/base') ?>

<?= $this->section('content') ?>

<div class="content">
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url() . '/assets/img/logo_cari.png' ?>" alt="Logo" width="26" height="26" class="d-inline-block align-text-top">
            <span class="fw-bold">CariKelontong</span>
            </a>
        </div>
    </nav>
    <div class="container mt-1" style="width: 70%;">
        <a class="btn btn-primary my-3" href="<?= base_url() ?>">Kembali</a>
        <a class="btn btn-success my-3" href="<?= base_url() . '/arah/' . $data['id_toko'] ?>">Arah (Direction)</a> 
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th class="keterangan" scope="row">Nama Toko</th>
                        <td><?= $data['nama_toko'] ?></td>
                    </tr>
                    <tr>
                        <th class="keterangan" scope="row">Alamat Toko</th>
                        <td><?= $data['alamat_toko'] ?></td>
                    </tr>
                    <tr>
                        <th class="keterangan" scope="row">Minuman Dingin</th>
                        <td><?= ($data['fitur_minuman_dingin'] == "true") ? "Tersedia" : "Tidak Tersedia" ?></td>
                    </tr>
                    <tr>
                        <th class="keterangan" scope="row">Gas & Galon</th>
                        <td><?= ($data['fitur_gas_galon'] == "true") ? "Tersedia" : "Tidak Tersedia"  ?></td>
                    </tr>
                    <tr>
                        <th class="keterangan" scope="row">Pendingin Es Krim</th>
                        <td><?= ($data['fitur_es_krim'] == "true") ? "Tersedia" : "Tidak Tersedia" ?></td>
                    </tr>
                    <tr>
                        <th class="keterangan" scope="row">Bensin Eceran</th>
                        <td><?= ($data['fitur_bensin'] == "true") ? "Tersedia" : "Tidak Tersedia" ?></td>
                    </tr>
                    <tr>
                        <th class="keterangan" scope="row">Pulsa & Token Listrik</th>
                        <td><?= ($data['fitur_pulsa'] == "true") ? "Tersedia" : "Tidak Tersedia" ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
	
<?= $this->endSection('content') ?>
