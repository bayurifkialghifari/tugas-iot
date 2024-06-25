<div>
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h4 class="page-title">{{ $settings->name }}</h4>
                <p class="text-muted">Selamat Datang di Dashboard {{ auth()->user()->name }}</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Jumlah Kebocoran Hari Ini</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat text-primary">
                                <i class="align-middle" data-feather="calendar"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="mt-1 mb-3">
                        {{ $kebocoranHariIni }}
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Jumlah Kebocoran 7 Hari Kebelakang</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat text-primary">
                                <i class="align-middle" data-feather="calendar"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="mt-1 mb-3">
                        {{ $kebocoranMingguIni }}
                    </h1>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Jumlah Kebocoran 30 Hari Kebelakang</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat text-primary">
                                <i class="align-middle" data-feather="calendar"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="mt-1 mb-3">
                        {{ $kebocoranBulanIni }}
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
