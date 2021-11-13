<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="ECD Online" />
        <meta name="author" content="Kantor Bea Cukai" />
        <title>ECD - Online</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/assets/img/bc_logo.png" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="/assets/fontawesome/css/all.min.css" rel="stylesheet" />
        <link href="/assets/app/css/passengers.css" rel="stylesheet" />
        <link href="/assets/app/css/select.min.css" rel="stylesheet" />
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
            <div class="starter">
                <div class="shadow-lg p-2 mt-3 bc-desc bg-body rounded"><?= $desc['text1'];?></div>
                <div class="shadow-lg p-2 mt-3 bc-desc bg-body rounded"><?= $desc['text2'];?></div>

                <div class="mt-3" style="float: right;">
                    <a id="starterLink" href="#" class="btn btn-outline-info"><?= $desc['button'];?></a>
                </div>
            </div>
            <!-- end starter -->
            <div class="passengers mt-3 d-none">
            <form name="formPassenger">
                <div class="card">
                    <div class="card-header bc-bg">
                        <?= $desc['passenger']['header']; ?>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="fullName" class="form-label"><?= ($en) ? 'Full Name' : 'Nama Lengkap'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR FULL NAME ACCORDING TO PASSPORT' : 'NAMA LENGKAP ANDA SESUAI PASPOR';?>"></i></label>
                            <input type="text" class="form-control" id="fullName" name="fullName" required>
                        </div>
                        <div class="mb-3">
                            <label><?= ($en) ? 'Date of Birth' : 'Tanggal Lahir'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR DATE OF BIRTH' : 'TANGGAL LAHIR ANDA (H-B-T)'; ?>"></i></label>
                            <div class="row">
                                <div class="col"><input name="birthDate" class="form-control" type="number" min="1" max="31" placeholder="dd" required /></div>
                                <div class="col"><input name="birthMonth" class="form-control" type="number" min="1" max="12" placeholder="mm" required /></div>
                                <div class="col"><input name="birthYear" class="form-control" type="number" min="1800" max="<?= date('Y');?>" placeholder="yyyy" required /></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="occupation" class="form-label"><?= ($en) ? 'Occupation' : 'Pekerjaan'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR OCCUPATION' : 'PEKERJAAN ANDA'; ?>"></i></label>
                            <input type="text" class="form-control" id="occupation" name="occupation" required>
                        </div>
                        <div class="mb-3">
                            <label for="nationality" class="form-label"><?= ($en) ? 'Nationality' : 'Kebangsaan'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR NATIONALITY' : 'KEBANGSAAN ANDA'; ?>"></i></label>
                            <select class="form-control" id="nationality" name="nationality" required>
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
                            <input type="text" class="form-control" id="passport" name="passport" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label"><?= ($en) ? 'Address in Indonesia (hotel name/residence address)' : 'Alamat di Indonesia (nama hotel/alamat tinggal)'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'FILL IN YOUR ADDRESS IN INDONESIA (HOTEL NAME OR RESIDENCE ADDRESS)' : 'ISIKAN ALAMAT TINGGAL / NAMA HOTEL DI INDONESIA'; ?>"></i></label>
                            <textarea class="form-control" id="address" name="address" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="flightNumber" class="form-label"><?= ($en) ? 'Flight or Voyage Number' : 'Nomor Penerbangan/pelayaran'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR FLIGHT OR VOYAGE NUMBER': 'NOMOR PENERBANGAN ANDA'; ?>"></i></label>
                            <input type="text" class="form-control" id="flightNumber" name="flightNumber" required>
                        </div>
                        <div class="mb-3">
                            <label><?= ($en) ? 'Date of Arrival' : 'Tanggal Kedatangan'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR ARRIVAL DATE' : 'TANGGAL KEDATANGAN ANDA'; ?>"></i></label>
                            <div class="row">
                                <div class="col"><input name="arrivalDate" class="form-control" type="number" min="1" max="31" placeholder="dd" required /></div>
                                <div class="col"><input name="arrivalMonth" class="form-control" type="number" min="1" max="12" placeholder="mm" required /></div>
                                <div class="col"><input name="arrivalYear" class="form-control" type="number" min="1800" max="<?= date('Y');?>" placeholder="yyyy" required /></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="baggageIn" class="form-label"><?= ($en) ? 'Number of accompanied baggage' : 'Jumlah bagasi yang dibawa'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'NUMBER OF ACCOMPANIED BAGAGE TRAVELING WITH YOU AND YOUR FAMILY. FILL 0 IF NONE' : 'JUMLAH BAGASI YANG DIBAWA BERSAMA PENUMPANG. TERMASUK JUMLAH BAGASI ANGGOTA KELUARGA YANG IKUT SERTA DALAM PERJALANAN INI. ISI 0 JIKA TIDAK ADA'; ?>"></i></label>
                            <input type="number" class="form-control" id="baggageIn" name="baggageIn" placeholder="pck" required value="0">
                        </div>
                        <div class="mb-3">
                            <label for="baggageEx" class="form-label"><?= ($en) ? 'Number of unaccompanied baggage' : 'Jumlah bagasi yang datang tidak bersamaan'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'NUMBER OF UNACCOMPANIED BAGAGE TRAVELING WITH YOU AND YOUR FAMILY. FILL 0 IF NONE' : 'JUMLAH BAGASI YANG DATANG TIDAK BERSAMA PENUMPANG. TERMASUK JUMLAH BAGASI ANGGOTA KELUARGA YANG IKUT SERTA DALAM PERJALANAN INI. ISI 0 JIKA TIDAK ADA'; ?>"></i></label>
                            <input type="number" class="form-control" id="baggageEx" name="baggageEx" placeholder="pck" required value="0">
                        </div>
                        <div class="mb-3">
                            <label for="familyNumber" class="form-label"><?= ($en) ? 'Number of family members traveling with you (only for passenger)' : 'Jumlah anggota keluarga yang bepergian bersama (untuk penumpang)'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'NUMBER OF FAMILY MEMBER (INCLUDING YOU) TRAVELING WITH YOU. FILL 1 IF TRAVELING ALONE' : 'JUMLAH ANGGOTA KELUARGA TERMASUK ANDA (PENUMPANG), YG IKUT SERTA DALAM PERJALANAN INI. ISI 1 JIKA BEPERGIAN SENDIRI'; ?>"></i></label>
                            <input type="number" class="form-control" id="familyNumber" name="familyNumber" value="0" required>
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
                            <!-- added on 8 Nov 2021 -->
                            <div class="mb-3">
                                <label><?= ($en) ? 'Date of Birth' : 'Tanggal Lahir'; ?><span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="<?= ($en) ? 'YOUR DATE OF BIRTH OF ALL YOUR FAMILY TRAVELING WITH YOU' : 'TANGGAL LAHIR ANDA (H-B-T) MASING-MASING ANGGOTA KELUARGA YANG IKUT SERTA DALAM PERJALANAN INI'; ?>"></i></label>
                                <div class="row">
                                    <div class="col"><input name="familyBirthDate" class="form-control" type="number" min="1" max="31" placeholder="dd" /></div>
                                    <div class="col"><input name="familyBirthMonth" class="form-control" type="number" min="1" max="12" placeholder="mm" /></div>
                                    <div class="col"><input name="familyBirthYear" class="form-control" type="number" min="1800" max="<?= date('Y');?>" placeholder="yyyy" /></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <button name="btnSaveFamily" class="btn btn-info text-white" style="float: right;"><?= ($en) ? 'Add' : 'Tambah'; ?></button>
                            </div>
                            <!-- table family information -->
                            <table name="familyTable" class="table table-striped table-sm table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col"><?= ($en) ? 'Name' : 'Nama';?></th>
                                        <th scope="col"><?= ($en) ? 'Passport ID' : 'No. Paspor';?></th>
                                        <th scope="col"><?= ($en) ? 'Tgl Lahir' : 'Birth Date';?></th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    
                    </div>
                    <!-- end card body -->
                    <div class="card-footer">
                        <button name="btnPersonalPrev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                        <button type="submit" name="btnPersonalNext" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
                    </div>
                </div>
            </form>
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
                        <input value="1" type="radio" class="btn-check" name="question_<?=$val['id'];?>" id="question_<?=$idx;?>">
                        <label class="btn btn-outline-primary" for="question_<?=$idx;?>"><?= ($en) ? 'Yes':'Ya';?></label>
                        <input value="0" type="radio" class="btn-check" name="question_<?=$val['id'];?>" id="question_<?=$idx+1;?>">
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
                <div class="goods_declare"></div>
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
                    <div class="row">
                        <div class="col-4">
                            <label for="goodsCurrency" class="form-label"><?= ($en) ? 'Currency':'Mata Uang';?><span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="goodsCurrency" name="goodsCurrency">
                        </div>
                        <div class="col-8">
                            <label for="goodsValue" class="form-label"><?= ($en) ? 'Value':'Nilai Barang';?><span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="goodsValue" name="goodsValue">
                        </div>
                    </div>
                    
                </div>
                <div class="mb-3">
                    <button name="btnSaveGoods" class="btn btn-info text-white" style="float: right;"><?=($en) ? 'Add' : 'Tambah';?></button>
                </div>

                <!-- table of goods -->
                <table name="goods_table" class="table table-dark table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?=($en) ? 'Description':'Uraian';?></th>
                            <th scope="col"><?=($en) ? 'Amount':'Jumlah';?></th>
                            <th scope="col"><?=($en) ? 'Value':'Nilai';?></th>
                            <!-- <th scope="col"><?=($en) ? 'Action':'Aksi';?></th> -->
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <button name="btnGoodsDetailPrev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                <button name="btnGoodsDetailNext" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
            </div>
            <!--end  goods detail -->

            <!-- rating layout -->
            <div class="rating mt-3 d-none">
                <div class="card">
                    <div class="card-header text-center bc-bg">
                        <p><b>SOEKARNO HATTA CUSTOMS</b> <br />CUSTOMS DECLARATION ONLINE</p>
                    </div>
                    <div class="card-body text-center">
                        <span value="1" name="bc-rate1" class="bc-rate fa fa-star fa-3x"></span>
                        <span value="2" name="bc-rate2" class="bc-rate fa fa-star fa-3x"></span>
                        <span value="3" name="bc-rate3" class="bc-rate fa fa-star fa-3x"></span>
                        <span value="4" name="bc-rate4" class="bc-rate fa fa-star fa-3x"></span>
                        <span value="5" name="bc-rate5" class="bc-rate fa fa-star fa-3x"></span>
                    </div>
                    <div class="card-footer">
                        <button name="btnRatingPrev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                        <button name="btnRatingNext" class="btn btn-outline-primary" style="float: right;"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
                    </div>
                </div>
            </div> 
            <!-- end rating -->

            <!-- preview -->
            <div class="preview mt-3 d-none">
                <p class="bc-desc"><?= ($en) ? 'Each arriving Passenger/Crew must submit  Customs Declaration (one customs declarations can be used for one family):' : 'Penumpang/Awak sarana pengangkut wajib menyerahkan Customs Declaration pada saat setiap kedatangan (satu keluarga dapat mengajukan satu Customs Declaration):'; ?></p>
                <table class="table table-info" style="font-size: 10px;">
                    <tbody>
                        <tr>
                            <td><?= ($en) ? 'Full Name': 'Nama Lengkap';?></td>
                            <td><span name="reviewName"></span></td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'Date of Birth' : 'Kelahiran'; ?></td>
                            <td><span name="reviewBirth"></span></td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'Nationality' : 'Kebangsaan'; ?></td>
                            <td><span name="reviewNation"></span></td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'Passport Number' : 'Nomor Paspor'; ?></td>
                            <td><span name="reviewPassport"></span></td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'Address in Indonesia' : 'Alamat di Indonesia'; ?></td>
                            <td><span name="reviewAddress"></span></td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'Flight or Voyage Number' : 'No Penerbangan/Pelayaran'; ?></td>
                            <td><span name="reviewFlight"></span></td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'Date of Arrival' : 'Tanggal Kedatangan'; ?></td>
                            <td><span name="reviewArrival"></span></td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'Number of accompanied baggage' : 'Jumlah bagasi yang dibawa'; ?></td>
                            <td><span name="reviewBaggageIn"></span> PKG</td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'Number of unaccompanied baggage, (if any, and see the reverse side of this form)' : 'Jumlah bagasi yang datang tidak bersamaan (jika ada, baca halaman belakang)'; ?></td>
                            <td><span name="reviewBaggageEx"></span> PKG</td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'Number of family travelling with you (only for passenger)' : 'Jumlah anggota keluarga yang bepergian bersama (untuk penumpang)'; ?></td>
                            <td><span name="reviewNumofFamily"></span></td>
                        </tr>
                        <tr>
                            <td><?= ($en) ? 'I am bringing:' : 'Saya membawa'; ?></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table class="table" name="reviewGoods">
                                    <tbody></tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="font-size: 10px; text-align: justify;">
                                <?= ($en) ? '' : 'Apabila anda memberikan jawaban "Ya" pada salah satu pertanyaan nomor 11 diatas, uraikan barang tersebut pada tempat yang disediakan di halaman sebelumnya, dan silakan menuju <b>JALUR MERAH</b>. Apabila memberikan jawaban "Tidak" Pada semua pertanyaan, silahkan menuju <b>JALUR HIJAU</b>'; ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="bc-desc"><?= ($en) ? 'MAKING A FALSE DECLARATION CONSTITUTES SERIOUS OFFENCES WHICH ATTRACT PENALTIES OR PUNISHMENT IN ACCORDANCE WITH LAWS AND REGULATIONS.' : 'SETIAP KESALAHAN PEMBERITAHUAN PABEAN DIKENAKAN SANKSI SESUAI DENGAN PERATURAN PERUNDANG-UNDANGAN';?></p>
                <p class="bc-desc" style="margin-bottom: -1px;"><?= ($en) ? 'I HAVE READ THE INFORMATION ON THIS FORM AND HAVE MADE A TRUTHFUL DECLARATION.' : 'SAYA TELAH MEMBACA INFORMASI PADA HALAMAN CUSTOMS DECLARATION INI DAN SAYA MENYATAKAN BAHWA YANG SAYA BERITAHUKAN ADALAH BENAR'; ?></p>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="agreement" required>
                    <label class="form-check-label" for="agreement"><?= ($en) ? 'Accept' : 'Setuju';?></label>
                </div>
                <button name="btnPreviewPrev" class="btn btn-outline-secondary"><?= ($en) ? 'Previous' : 'Sebelumnya';?></button>
                <button name="btnPreviewNext" class="btn btn-primary" style="float: right;" disabled="disabled"><?= ($en) ? 'Next' : 'Selanjutnya'; ?></button>
            </div>
            <!-- end preview -->
            <div class="qr_code mt-3 d-none">
                <p><b><?= ($en) ? 'Thank you' : 'Terima kasih';?>,</b></p>
                <p><?= ($en) ? 'Hand over this QR Code to Customs Officer for Customs Inspection':'Serahkan QR code ini kepada petugas penerimaan untuk melakukan pemeriksaan';?></p>
                <img src="" style="width: 100%;"/>
                <a href="" name="btnSaveQR" class="btn btn-outline-primary" style="float: right;" download><?= ($en) ? 'SAVE QR CODE':'SIMPAN QR CODE';?></a>
            </div>
        </div>
        <!-- end container -->

        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/jquery.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
        <script src="/assets/app/js/select.min.js"></script>
        <script type="text/javascript">
            var questionNum = <?= count($questions); ?>
        </script>
        
        <script src="/assets/app/js/passengers.js"></script>
        <script>
            $(document).ready(function() {
                $('select').select2();
            });
        </script>
    </body>
</html>