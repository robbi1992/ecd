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
            <div class="passengers mt-3 d-none">
                <div class="card">
                    <div class="card-header bc-bg">
                        <?= $desc['passenger']['header']; ?>
                    </div>
                    <div class="card-body">
                    <form name="formPassenger">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="YOUR FULL NAME ACCORDING TO PASSPORT"></i></label>
                            <input type="text" class="form-control" id="fullName" name="fullName">
                        </div>
                        <div class="mb-3">
                            <label>Date of Birth<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="YOUR DATE OF BIRTH"></i></label>
                            <div class="row">
                                <div class="col"><input name="birthDate" class="form-control" type="number" min="1" max="31" placeholder="dd" /></div>
                                <div class="col"><input name="birthMonth" class="form-control" type="number" min="1" max="12" placeholder="mm" /></div>
                                <div class="col"><input name="birthYear" class="form-control" type="number" min="1800" max="<?= date('Y');?>" placeholder="yyyy" /></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="occupation" class="form-label">Occupation<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="YOUR OCCUPATION"></i></label>
                            <input type="text" class="form-control" id="occupation" name="occupation">
                        </div>
                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="YOUR NATIONALITY"></i></label>
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
                            <label for="passport" class="form-label">Passport Number<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="YOUR PASSPORT NUMBER. FILL IN USING NUMBER AND/OR LETTER"></i></label>
                            <input type="text" class="form-control" id="passport" name="passport">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address in Indonesia (hotel name/residence address)<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="FILL IN YOUR ADDRESS IN INDONESIA (HOTEL NAME OR RESIDENCE ADDRESS)"></i></label>
                            <textarea class="form-control" id="address" name="address"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="flightNumber" class="form-label">Flight or Voyage Number<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="YOUR FLIGHT OR VOYAGE NUMBER"></i></label>
                            <input type="text" class="form-control" id="flightNumber" name="flightNumber">
                        </div>
                        <div class="mb-3">
                            <label>Date of Arrival<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="YOUR ARRIVAL DATE"></i></label>
                            <div class="row">
                                <div class="col"><input name="arrivalDate" class="form-control" type="number" min="1" max="31" placeholder="dd" /></div>
                                <div class="col"><input name="arrivalMonth" class="form-control" type="number" min="1" max="12" placeholder="mm" /></div>
                                <div class="col"><input name="arrivalYear" class="form-control" type="number" min="1800" max="<?= date('Y');?>" placeholder="yyyy" /></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="baggageIn" class="form-label">Number of accompanied baggage<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="NUMBER OF ACCOMPANIED BAGAGE TRAVELING WITH YOU AND YOUR FAMILY. FILL 0 IF NONE"></i></label>
                            <input type="number" class="form-control" id="baggageIn" name="baggageIn" placeholder="pck">
                        </div>
                        <div class="mb-3">
                            <label for="baggageEx" class="form-label">Number of unaccompanied baggage<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="NUMBER OF UNACCOMPANIED BAGAGE TRAVELING WITH YOU AND YOUR FAMILY. FILL 0 IF NONE"></i></label>
                            <input type="number" class="form-control" id="baggageEx" name="baggageEx" placeholder="pck">
                        </div>
                        <div class="mb-3">
                            <label for="familyNumber" class="form-label">Number of family members traveling with you (only for passenger)<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="NUMBER OF FAMILY MEMBER (INCLUDING YOU) TRAVELING WITH YOU. FILL 1 IF TRAVELING ALONE"></i></label>
                            <input type="number" class="form-control" id="familyNumber" name="familyNumber">
                        </div>
                        
                        <div class="family-container d-none">
                            <hr />
                            <h6>Family Information</h6>
                            <hr />
                            <div class="mb-3">
                                <label for="familyName" class="form-label">Full Name<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="FULL NAME OF ALL YOUR FAMILY TRAVELING WITH YOU"></i></label>
                                <input type="text" class="form-control" id="familyName" name="familyName">
                            </div>
                            <div class="mb-3">
                                <label for="familyPassport" class="form-label">Number of Passport<span class="text-danger">*</span> <i class="far fa-question-circle" data-bs-toggle="tooltip" data-bs-placement="top" title="PASSPORT NUMBER OF ALL YOUR FAMILY TRAVELING WITH YOU"></i></label>
                                <input type="text" class="form-control" id="familyPassport" name="familyPassport">
                            </div>
                            <div class="mb-3">
                                <button class="btn btn-info text-white" style="float: right;">Save</button>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- end card body -->
                    <div class="card-footer">
                        <button name="btnPersonalPrev" class="btn btn-outline-secondary">Previous</button>
                        <button name="btnPersonalNext" class="btn btn-outline-primary" style="float: right;">Next</button>
                    </div>
                </div>
            </div>
            <!-- end passengers -->

            <!-- goods term & conditions -->
            <div class="goods_t_m mt-3">
                <div class="card">
                    <div class="card-body bc-bg bc-desc"><?=$desc['goods']['t&m'];?></div>
                    <div class="card-footer">
                        <button name="btnGoodsTMPrev" class="btn btn-outline-secondary">Previous</button>
                        <button name="btnGoodsTMNext" class="btn btn-outline-primary" style="float: right;">Next</button>
                    </div>
                </div>
            </div>
            <div class="goods_t_m2 mt-3 d-none">
                <div class="card">
                    <div class="card-body bc-bg bc-desc"><?=$desc['goods']['t&m2'];?></div>
                    <div class="card-footer">
                        <button name="btnGoodsTM2Prev" class="btn btn-outline-secondary">Previous</button>
                        <button name="btnGoodsTM2Next" class="btn btn-outline-primary" style="float: right;">Next</button>
                    </div>
                </div>
            </div>
            <div class="goods_t_m3 mt-3 d-none">
                <div class="card">
                    <div class="card-body bc-bg bc-desc"><?=$desc['goods']['t&m3'];?></div>
                    <div class="card-footer">
                        <button name="btnGoodsTM3Prev" class="btn btn-outline-secondary">Previous</button>
                        <button name="btnGoodsTM3Next" class="btn btn-outline-primary" style="float: right;">Next</button>
                    </div>
                </div>
            </div>
            <!-- end goods_t_m -->
        </div>
        <!-- end container -->

        <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/jquery.min.js"></script>
        <script src="/assets/app/js/passengers.js"></script>
    </body>
</html>