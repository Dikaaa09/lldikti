<div class="pagetitle">
    <div class="row">
        <div class="col-auto me-auto">
            <h1>List KGB</h1>
        </div>
        <div class="col-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active fs-6">KGB Saya</li>
            </ol>
        </div>
    </div>
    
</div><!-- End Page Title -->

<section class="section">
    <?php $this->view('messages')?>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-auto me-auto">
                    <h5>KGB Saya</h5>
                </div>
                <div class="col-auto">
                    <a href="<?=site_url('kgb_saya/add')?>" class="btn btn-primary btn-sm">
                        <i class="bi bi-person-plus-fill"></i> KGB Baru
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" class="text-center" style="width: 2%;">#</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col" class="text-center" style="width: 5%;">Gol.</th>
                        <th scope="col" class="text-center" style="width: 12%;">Gaji Pokok Lama</th>
                        <th scope="col" class="text-center" style="width: 12%;">Gaji Pokok Baru</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                        foreach ($row->result() as $key => $data) {?>
                            <tr>
                                <th scope="row"><?=$no++?>.</th>
                                <td><?= $data->nip?></td>
                                <td><?= $data->nama?></td>
                                <td><?= $data->jabatan?></td>
                                <td class="text-center"><?= $data->golongan?></td>
                                <td class="text-center"><?= indo_currency($data->gapok_lama)?></td>
                                <td class="text-center"><?= indo_currency($data->gapok_baru)?></td>
                                <td class="text-center">
                                    <a href="<?=site_url('kgb_saya/print/'.$data->kgb_id)?>" class="btn btn-primary rounded-pill btn-sm">
                                        <i class="bi bi bi-pencil-square"></i> Print
                                    </a>
                                    <a href="<?=site_url('kgb_saya/edit/'.$data->kgb_id)?>" class="btn btn-warning rounded-pill btn-sm">
                                        <i class="bi bi bi-pencil-square"></i> Edit
                                    </a>
                                    <a href="<?=site_url('kgb_saya/del/'.$data->kgb_id)?>" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger rounded-pill btn-sm">
                                        <i class="bi bi bi-trash"></i> Hapus
                                    </a>
                                </td>
                            </tr>
                    <?php
                        } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>