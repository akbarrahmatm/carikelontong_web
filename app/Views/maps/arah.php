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
    <div class="map" id="map"></div>
</div>
	
<?= $this->endSection('content') ?>
<?= $this->section('bottomjs') ?>
    <script>
        var map = L.map('map');

        L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
        }).addTo(map);
        
        map.locate({setView: true, maxZoom: 16});

        function onLocationFound(e) {
            var radius = e.accuracy;

            L.marker(e.latlng).addTo(map)
            map.setView(e.latlng, 15)

            L.Routing.control({
            waypoints: [
                L.latLng(e.latlng.lat, e.latlng.lng),
                L.latLng(<?= $data['bujur'] ?>, <?= $data['lintang'] ?>)
            ]
            }).addTo(map);
        }

        map.on('locationfound', onLocationFound);

        
      

    </script>
<?= $this->endSection('bottomjs') ?>