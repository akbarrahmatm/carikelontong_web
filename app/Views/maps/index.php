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
    <div id="map"></div>
</div>
	
<?= $this->endSection('content') ?>

<?= $this->section('bottomjs') ?>
    <script>
        var map = L.map('map');

        L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map)
        

        <?php foreach ($data["data"] as $dt) : ?>
            var marker = L.marker([<?= $dt['bujur'] ?>, <?= $dt['lintang'] ?>], {id: <?= $dt['id_toko'] ?>}).addTo(map);
            marker.bindPopup("<p class='fw-bold'><?= $dt['nama_toko'] ?></p><p><?= $dt['alamat_toko'] ?></p><a href='<?= base_url() . '/detail/toko/' . $dt['id_toko'] ?>' class='btn text-white btn-sm btn-primary'>Detail</a>");
            map.setView([<?= $dt['bujur'] ?>, <?= $dt['lintang'] ?>], 15)
        <?php endforeach ?>

    </script>
<?= $this->endSection('bottomjs') ?>