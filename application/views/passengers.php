<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="ECD Online" />
        <meta name="author" content="Kantor Bea Cukai" />
        <title>ECD - Online</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/fontawesome/css/all.min.css" rel="stylesheet" />
        <link href="/assets/app/css/passengers.css" rel="stylesheet" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bc-bg">
            <div class="container-fluid">
                <a class="navbar-brand text-white" href="#">
                    <img src="/assets/img/bc_logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                     ECD
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
        
        <div class="container" id="theContent">
            <div class="starter d-none">
                <div class="shadow-lg p-2 mt-3 bc-desc bg-body rounded"><?= $desc['text1'];?></div>
                <div class="shadow-lg p-2 mt-3 bc-desc bg-body rounded"><?= $desc['text2'];?></div>

                <div class="mt-3" style="float: right;">
                    <a id="starterLink" href="#" class="btn btn-outline-info"><?= $desc['button'];?></a>
                </div>
            </div>
            <!-- end starter -->
            <div class="passengers mt-3">
                <div class="card">
                    <div class="card-header bc-bg">
                        <?= $desc['passenger']['header']; ?>
                    </div>
                    <div class="card-body">
                    <form name="formPassenger">
                        <div class="mb-3">
                            <label for="fullName" class="form-label"><?= ($en) ? 'Full Name' : 'Nama Lengkap'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR FULL NAME ACCORDING TO PASSPORT' : 'NAMA LENGKAP ANDA SESUAI PASPOR';?>"></i></label>
                            <input type="text" class="form-control" id="fullName" name="fullName">
                        </div>
                        <div class="mb-3">
                            <label><?= ($en) ? 'Date of Birth' : 'Tanggal Lahir'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR DATE OF BIRTH' : 'TANGGAL LAHIR ANDA (H-B-T)'; ?>"></i></label>
                            <div class="row">
                                <div class="col"><input name="birthDate" class="form-control" type="number" min="1" max="31" placeholder="dd" /></div>
                                <div class="col"><input name="birthMonth" class="form-control" type="number" min="1" max="12" placeholder="mm" /></div>
                                <div class="col"><input name="birthYear" class="form-control" type="number" min="1800" max="<?= date('Y');?>" placeholder="yyyy" /></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="occupation" class="form-label"><?= ($en) ? 'Occupation' : 'Pekerjaan'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR OCCUPATION' : 'PEKERJAAN ANDA'; ?>"></i></label>
                            <input type="text" class="form-control" id="occupation" name="occupation">
                        </div>
                        <div class="mb-3">
                            <label for="nationality" class="form-label"><?= ($en) ? 'Nationality' : 'Kebangsaan'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR NATIONALITY' : 'KEBANGSAAN ANDA'; ?>"></i></label>
                            <select class="form-control" id="nationality" name="nationality">
                                <?php
                                foreach ($country as $val) { ?>
                                <option value="<?=$val['id'];?>"><?=$val['name'];?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="passport" class="form-label"><?= ($en) ? 'Passport Number' : 'Nomor Paspor'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR PASSPORT NUMBER. FILL IN USING NUMBER AND/OR LETTER' : 'NOMOR PASPOR ANDA. ISI HURUF DAN/ATAU ANGKA'; ?>"></i></label>
                            <input type="text" class="form-control" id="passport" name="passport">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label"><?= ($en) ? 'Address in Indonesia (hotel name/residence address)' : 'Alamat di Indonesia (nama hotel/alamat tinggal)'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'FILL IN YOUR ADDRESS IN INDONESIA (HOTEL NAME OR RESIDENCE ADDRESS)' : 'ISIKAN ALAMAT TINGGAL / NAMA HOTEL DI INDONESIA'; ?>"></i></label>
                            <textarea class="form-control" id="address" name="address"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="flightNumber" class="form-label"><?= ($en) ? 'Flight or Voyage Number' : 'Nomor Penerbangan/pelayaran'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR FLIGHT OR VOYAGE NUMBER': 'NOMOR PENERBANGAN ANDA'; ?>"></i></label>
                            <input type="text" class="form-control" id="flightNumber" name="flightNumber">
                        </div>
                        <div class="mb-3">
                            <label><?= ($en) ? 'Date of Arrival' : 'Tanggal Kedatangan'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR ARRIVAL DATE' : 'TANGGAL KEDATANGAN ANDA'; ?>"></i></label>
                            <div class="row">
                                <div class="col"><input name="arrivalDate" class="form-control" type="number" min="1" max="31" placeholder="dd" /></div>
                                <div class="col"><input name="arrivalMonth" class="form-control" type="number" min="1" max="12" placeholder="mm" /></div>
                                <div class="col"><input name="arrivalYear" class="form-control" type="number" min="1800" max="<?= date('Y');?>" placeholder="yyyy" /></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="baggageIn" class="form-label"><?= ($en) ? 'Number of accompanied baggage' : 'Jumlah bagasi yang dibawa'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'NUMBER OF ACCOMPANIED BAGAGE TRAVELING WITH YOU AND YOUR FAMILY. FILL 0 IF NONE' : 'JUMLAH BAGASI YANG DIBAWA BERSAMA PENUMPANG. TERMASUK JUMLAH BAGASI ANGGOTA KELUARGA YANG IKUT SERTA DALAM PERJALANAN INI. ISI 0 JIKA TIDAK ADA'; ?>"></i></label>
                            <input type="number" class="form-control" id="baggageIn" name="baggageIn" placeholder="pck">
                        </div>
                        <div class="mb-3">
                            <label for="baggageEx" class="form-label"><?= ($en) ? 'Number of unaccompanied baggage' : 'Jumlah bagasi yang datang tidak bersamaan'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'NUMBER OF UNACCOMPANIED BAGAGE TRAVELING WITH YOU AND YOUR FAMILY. FILL 0 IF NONE' : 'JUMLAH BAGASI YANG DATANG TIDAK BERSAMA PENUMPANG. TERMASUK JUMLAH BAGASI ANGGOTA KELUARGA YANG IKUT SERTA DALAM PERJALANAN INI. ISI 0 JIKA TIDAK ADA'; ?>"></i></label>
                            <input type="number" class="form-control" id="baggageEx" name="baggageEx" placeholder="pck">
                        </div>
                        <div class="mb-3">
                            <label for="familyNumber" class="form-label"><?= ($en) ? 'Number of family members traveling with you (only for passenger)' : 'Jumlah anggota keluarga yang bepergian bersama (untuk penumpang)'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'NUMBER OF FAMILY MEMBER (INCLUDING YOU) TRAVELING WITH YOU. FILL 1 IF TRAVELING ALONE' : 'JUMLAH ANGGOTA KELUARGA TERMASUK ANDA (PENUMPANG), YG IKUT SERTA DALAM PERJALANAN INI. ISI 1 JIKA BEPERGIAN SENDIRI'; ?>"></i></label>
                            <input type="number" class="form-control" id="familyNumber" name="familyNumber">
                        </div>
                        <div class="family-container d-none">
                            <hr />
                            <h6><?= ($en) ? 'Family Information' : 'Informasi Keluarga'; ?></h6>
                            <hr />
                            <div class="mb-3">
                                <label for="familyName" class="form-label"><?= ($en) ? 'Full Name' : 'Nama Lengkap';?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'FULL NAME OF ALL YOUR FAMILY TRAVELING WITH YOU' : 'NAMA LENGKAP MASING-MASING ANGGOTA KELUARGA YANG IKUT SERTA DALAM PERJALANAN INI'; ?>"></i></label>
                                <input type="text" class="form-control" id="familyName" name="familyName">
                            </div>
                            <div class="mb-3">
                                <label for="familyPassport" class="form-label"><?= ($en) ? 'Number of Passport' : 'Nomor Paspor';?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'PASSPORT NUMBER OF ALL YOUR FAMILY TRAVELING WITH YOU' : 'NOMOR PASPOR MASING-MASING ANGGOTA KELUARGA YANG IKUT SERTA DALAM PERJALANAN INI';?>"></i></label>
                                <input type="text" class="form-control" id="familyPassport" name="familyPassport">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-info text-white" style="float: right;"><?= ($en) ? 'Save' : 'Simpan'; ?></button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- end card body -->
                    <div class="card-footer">
                        <button name="btnPersonalPrev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                        <button name="btnPersonalNext" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
                    </div>
                </div>
            </div>
            <!-- end passengers -->

            <!-- goods term & conditions -->
            <div class="goods_t_m mt-3 d-none">
                <div class="card">
                    <div class="card-body bc-bg bc-desc"><?=$desc['goods']['t&m'];?></div>
                    <div class="card-footer">
                        <button name="btnGoodsTMPrev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                        <button name="btnGoodsTMNext" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
                    </div>
                </div>
            </div>
            <div class="goods_t_m2 mt-3 d-none">
                <div class="card">
                    <div class="card-body bc-bg bc-desc"><?=$desc['goods']['t&m2'];?></div>
                    <div class="card-footer">
                        <button name="btnGoodsTM2Prev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                        <button name="btnGoodsTM2Next" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
                    </div>
                </div>
            </div>
            <div class="goods_t_m3 mt-3 d-none">
                <div class="card">
                    <div class="card-body bc-bg bc-desc"><?=$desc['goods']['t&m3'];?></div>
                    <div class="card-footer">
                        <button name="btnGoodsTM3Prev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                        <button name="btnGoodsTM3Next" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
                    </div>
                </div>
            </div>
            <!-- end goods_t_m -->

            <!-- goods form -->
            <div class="goods_form mt-3 d-none">
                <h3><?= ($en) ? 'Goods' : 'Barang';?></h3><hr />
                <?= ($en) ? 'I declare my belonging:' : 'Saya membawa'; ?>
                <?php
                $idx = 1;
                foreach($questions as $index => $val) { ?>
                <div class="mb-3">
                    <label for="question_<?=$idx;?>" class="form-label"><?= $val['content']; ?></label>
                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                        <input type="radio" class="btn-check" name="question_<?=$val['id'];?>" id="question_<?=$idx;?>">
                        <label class="btn btn-outline-primary" for="question_<?=$idx;?>"><?= ($en) ? 'Yes':'Ya';?></label>
                        <input type="radio" class="btn-check" name="question_<?=$val['id'];?>" id="question_<?=$idx+1;?>">
                        <label class="btn btn-outline-primary" for="question_<?=$idx+1;?>"><?= ($en) ? 'No':'Tidak';?></label>
                    </div>
                </div>
                <?php
                $idx = $idx +2;
                }
                ?>
                <button name="btnGoodsFormPrev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                <button name="btnGoodsFormNext" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
            </div>
            <!-- end goods form -->

            <!-- goods detail -->
            <div class="goods_detail mt-3 d-none">
                <h3><?= ($en) ? 'Detail Goods' : 'Uraian Barang';?></h3><hr />
                <p><?= ($en) ? 'In previous page, you declare:' : 'Di halaman sebelumnya Anda menyatakan membawa:';?></p>
                <p><?= ($en) ? 'Please describe the goods (including the amount/number and value) on this form below. It is possible to input data according to the goods carried.' : 'Jelaskan detail setiap barang tersebut pada form di bawah. Anda dapat memasukkan data berulang kali sejumlah barang yang Anda bawa.';?></p>
                <hr />
                <div class="mb-3">
                    <label for="goodsDesc" class="form-label"><?= ($en) ? 'Description of Goods':'Uraian Barang';?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="goodsDesc" name="goodsDesc">
                </div>
                <div class="mb-3">
                    <label for="goodsAmount" class="form-label"><?= ($en) ? 'Amount' : 'Jumlah';?><span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="goodsAmount" name="goodsAmount">
                </div>
                <div class="mb-3">
                    <label for="goodsValue" class="form-label"><?= ($en) ? 'Value':'Nilai Barang';?><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="goodsValue" name="goodsValue">
                </div>
                <div class="mb-3">
                    <button class="btn btn-info text-white" style="float: right;"><?=($en) ? 'Save' : 'Simpan';?></button>
                </div>

                <!-- table of goods -->
                <table class="table table-dark table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?=($en) ? 'Description':'Uraian';?></th>
                            <th scope="col"><?=($en) ? 'Amount':'Jumlah';?></th>
                            <th scope="col"><?=($en) ? 'Value':'Nilai';?></th>
                            <th scope="col"><?=($en) ? 'Action':'Aksi';?></th>
                        </tr>
                    </thead>
                </table>
                <button name="btnGoodsDetailPrev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                <button name="btnGoodsDetailNext" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
            </div>
            <!--end  goods detail -->

            <div class="qr_code mt-3 d-none">
                <p><b><?= ($en) ? 'Thank you' : 'Terima kasih';?>,</b></p>
                <p><?= ($en) ? 'Hand over this QR Code to Customs Officer for Customs Inspection':'Serahkan QR code ini kepada petugas penerimaan untuk melakukan pemeriksaan';?></p>
                <img src="" style="width: 100%;"/>
                <button name="btnSaveQR" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'SAVE QR CODE':'SIMPAN QR CODE';?></button>
            </div>
        </div>
        <!-- end container -->

        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/jquery.min.js"></script>
        <script src="/assets/app/js/passengers.js"></script>
    </body>
</html>