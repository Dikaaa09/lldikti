<div class="pagetitle">
    <div class="row">
        <div class="col-auto me-auto">
            <h1>Tambah PTS</h1>
        </div>
        <div class="col-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fs-6">Kepegawaian</li>
                <li class="breadcrumb-item fs-6"><a href="<?=site_url('pts')?>">Data PTS</a></li>
                <li class="breadcrumb-item active fs-6"><?=$hal?> PTS</li>
            </ol>
        </div>
    </div>
    
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-auto me-auto">
                    <h5>Data PTS</h5>
                </div>
                <div class="col-auto">
                    <a href="<?=site_url('pts')?>" class="btn btn-warning btn-sm">
                        <i class="bi bi-arrow-return-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form class="col-md-6 offset-md-3" action="<?=site_url('pts/process')?>" method="post">
                <div class="row mb-3">
                    <div class="col-12">
                        <input type="hidden" name="id" value="<?=$row->pts_id?>">
                        <label for="inputNanme4" class="form-label">Nama PTS</label>
                        <input type="text" class="form-control" name="pts_name" value="<?=$row->nama_pts?>" id="inputNanme4">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-2 offset-md-5">
                        <button type="submit" name="<?=$page?>" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>