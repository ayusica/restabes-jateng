<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
  </div>
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Personel</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= filter_var($jum, FILTER_DEFAULT) ?></div>
            </div>
            <div class="col-auto">
              <!-- <i class="fas fa-fw fa-user-secret fa-2x text-gray-300"></i> -->
              <img height="60" width="45" src="<?= filter_var(base_url('assets/img/polisi1.png'), FILTER_DEFAULT) ?>" alt="police">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Kesatuan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800"><?= filter_var($pol, FILTER_DEFAULT) ?></div>
            </div>
            <div class="col-auto">
              <!-- <i class="fas fa-fw fa-police fa-2x text-gray-300"></i> -->
              <img height="50" width="50" src="<?= filter_var(base_url('assets/img/police-officer.png'), FILTER_DEFAULT) ?>" alt="police">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
      <!-- Card Header - Dropdown -->
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Grafik Jumlah Personel Kesatuan Polrestabes Semarang</h6>
        <div class="dropdown no-arrow">
          <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
          </a>
        </div>
      </div>
      <!-- Card Body -->
      <div class="card-body">
        <div class="chart-area">
          <div class="chartjs-size-monitor">
            <div class="chartjs-size-monitor-expand">
              <div class=""></div>
            </div>
            <div class="chartjs-size-monitor-shrink">
              <div class=""></div>
            </div>
          </div>
          <canvas id="myChart" width="787" height="270" class="chartjs-render-monitor"></canvas>
          <!--  style="display: block;" height: 400px; width: 525px; width="787" height="270" -->
        </div>
      </div>
    </div>
  </div>
  <!--DATA PERSONEL POLRESTABES SEMARANG -->
  <div class="card">
    <div class="card-header">
      TABEL DATA PERSONEL KEPOLISIAN RESOR KOTA BESAR SEMARANG <i class="fas fa-fw fa-angle-double-down"></i>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="example1" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>NRP</th>
              <th>Jabatan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach ($personel as $personel) : ?>
              <tr>
                <td><?= filter_var($no, FILTER_DEFAULT);
                    $no++ ?></td>
                <td><?= filter_var($personel['nama'], FILTER_DEFAULT); ?></td>
                <td><?= filter_var($personel['nrp'], FILTER_DEFAULT); ?></td>
                <td><?= filter_var($personel['jabatan'], FILTER_DEFAULT); ?></td>
                <td m-auto>
                  <a href="<?= filter_var(base_url(), FILTER_DEFAULT); ?>kabag/detail/<?= filter_var($personel['nrp'], FILTER_DEFAULT); ?>" class="badge badge-success"><i class="fas fa-fw fa-search"></i> Detail</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<br>