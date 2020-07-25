<div id='divPelanggan'>
    <div style='margin-bottom:15px;'>
        <a href='#!' class='btn btn-lg btn-primary  btn-icon icon-left' @click='tambahPelangganAtc'>
            <i class="fas fa-plus-circle"></i> Tambah Pelanggan
        </a>
    </div>

    <div class="row" style="padding-left:20px;margin-right:10px;">
        <div class="form-inline">
            <div class="form-group">
                <div class="input-group mb-3" style="margin-bottom: 15px;width:300px;">
                    <input type="text" class="form-control" placeholder="Cari pelanggan (nama / ho hp)" id='txtPelangganCari'>
                    <div class="input-group-append">
                        <button href='#!' class="btn btn-primary btn-icon iconleft" @click='cariPelangganAtc'>
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="input-group mb-3" style="margin-bottom: 15px;margin-left:30px;">
                <label>Ke halaman&nbsp;</label>
                    <input type="number" class="form-control" placeholder="Masukkan nomor halaman">
                    <div class="input-group-append">
                        <button href='#!' class="btn btn-primary btn-icon iconleft" @click='keHalamanAtc'>
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <table id='tblPelanggan' class='table table-hover table-bordered table-stripped'>
            <thead>
                <tr>
                    <th style="text-align: center;">Pelanggan</th>
                    <th>Alamat</th>
                    <th>Hp</th>
                    <th>Terakhir Kunjungan</th>
                    <th>Total Transaksi</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for='p in dataPelanggan'>
                    <td>
                        <div class="post">
                            <div class="line nama">{{p.nama}}</div>
                        </div>
                    </td>
                    <td>
                        <div class="post">
                            <div class="line">{{p.alamat}}</div>
                        </div>
                    </td>
                    <td>
                        <div class="post">
                            <div class="line">{{p.hp}}</div>
                        </div>
                    </td>
                    <td>
                        <div class="post">
                            <div class="line">{{p.lastVisit}}</div>
                        </div>
                    </td>
                    <td>
                        <div class="post">
                            <div class="line">{{p.totalTransaksi}}</div>
                        </div>
                    </td>
                    <td><a href='#!' class="btn btn-primary btn-sm" @click='detailAtc(p.idPelanggan)'><i
                                class='fas fa-info-circle'></i> Detail</a></td>
                </tr>
            </tbody>
        </table>
        <div>
            <i>Ditampilkan 10 dari total <?=$data['jlhPelanggan']; ?> pelanggan | Halaman ke - {{pageNow}} | Total
                halaman : {{pageMax}}</i>
        </div>
        <hr />
        <nav class="d-inline-block">
            <ul class="pagination mb-0">
                <li class="page-item" @click='prevAtc' id='liPrev'>
                    <a class="page-link" href="#!"><i class="fas fa-chevron-left"></i></a>
                </li>

                <li class="page-item active" v-for='h in halaman' :id="'pg'+h.no">
                    <a class="page-link" href="#!" >{{h.no}}</a>
                </li>

                <li class="page-item" @click='nextAtc' id='liNext'>
                    <a class="page-link" href="#!"><i class="fas fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<div id='divFormTambahPelanggan'>
    <div>
        <a href='#!' class="btn btn-primary btn-icon icon-left" id='btnKembali'><i class='fas fa-reply'></i> Kembali</a>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="form-group">
                <label>Nama Pelanggan</label>
                <input type="text" class="form-control" id='txtNama'>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control" id='txtAlamat'>
            </div>
            <div class="form-group">
                <label>Hp</label>
                <input type="text" class="form-control" id='txtHp'>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" id='txtEmail'>
            </div>
            <div>
                <a href='#!' class="btn btn-lg btn-primary btn-icon icon-left" id='btnSimpan'>
                    <i class='fas fa-save'></i>Simpan
                </a>
                &nbsp;&nbsp;
                <a href='#!' class="btn btn-lg btn-info btn-icon icon-left" id='btnClearForm'>
                    <i class='fas fa-i-cursor'></i> Clear
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-12 mt-3">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">Tentang manajemen pelanggan</h4>
                </div>
                <div class="card-body">
                    <ul>
                        <li v-for='bt in bantuan'>{{bt.teks}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?=STYLEBASE; ?>/dasbor/pelanggan.js"></script>