<div class="container-fluid">
    <div class="col-md-8">
        <div class="card px-4 py-1 m-0">
            <?php if ($this->session->userdata('akses') == 'kasium') : ?>
                <div class="card-header px-4 py-3 m-0 bg-light" style="color: #696969">
                    <h2 text-align="center">Panduan Penggunaan Sistem Sium</h2>
                </div>
                <div class="card-body bg-light">
                    <embed width="550" height="600" src="assets/panduan/Sium.pdf" type="application/pdf" aria-modal="true"></embed>
                </div>
            <?php endif; ?>
            <?php if ($this->session->userdata('akses') == 'kabag') : ?>
                <div class="card-header px-4 py-3 m-0 bg-light" style="color: #696969">
                    <h2 text-align="center">Panduan Penggunaan Sistem Kabag</h2>
                </div>
                <div class="card-body bg-light">
                    <embed width="550" height="600" src="assets/panduan/Kabag.pdf" type="application/pdf" aria-modal="true"></embed>
                </div>
            <?php endif; ?>
            <?php if ($this->session->userdata('akses') == 'kaurmin') : ?>
                <div class="card-header px-4 py-3 m-0 bg-light" style="color: #696969">
                    <h2 text-align="center">Panduan Penggunaan Sistem Urmin</h2>
                </div>
                <div class="card-body bg-light">
                    <embed width="550" height="600" src="assets/panduan/Urmin.pdf" type="application/pdf" aria-modal="true"></embed>
                </div>
            <?php endif; ?>
            <?php if ($this->session->userdata('akses') == 'personel') : ?>
                <div class="card-header px-4 py-3 m-0 bg-light" style="color: #696969">
                    <h2 text-align="center">Panduan Penggunaan Sistem Personel</h2>
                </div>
                <div class="card-body bg-light">
                    <embed width="550" height="600" src="assets/panduan/Personel.pdf" type="application/pdf" aria-modal="true"></embed>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>