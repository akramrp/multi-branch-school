<header class="panel-heading">
	<h4 class="panel-title">
		<i class="fas fa-list-ul"></i> <?=translate("Scholar's_Transfer_Certificate")?>
	</h4>
	<div class="panel-btn">
		<button onclick="fn_printElem('printStudentTC', false, '<?=$tc_title?>')" class="btn btn-default btn-circle">
			<i class="fas fa-print"></i> <?=translate('print')?>
		</button>
        <button class="btn btn-default btn-circle modal-dismiss"><i class="fas fa-times"></i> <?=translate('close')?></button>
	</div>
</header>
<div class="panel-body">
	<hr class="solid-spc">
	<div class="table-responsive mb-md">
		<div id="printStudentTC">
			<!-- hidden school information prints -->
			<!-- <div class="visible-print"></div> -->
            <!-- <body> -->
                <div class="containerTC">
                    <div class="headerTC">
                        <div class="flex-lineTC">
                            <p>School Reg. No. <?=$school_reg_no?></p>
                            <p>Mob: <?=$school_contact_no?></p>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 10px; margin: 30px 0px;">
                            <img src="<?=base_url('uploads/app_image/logo.png')?>" alt="School Logo" style="width: 90px; height: auto;">
                            <div style="line-height: 40px;">
                                <p style="font-size: 30px; transform: scale(1, 2); font-weight: 600; margin:10px 0px 0px 0px;">RISING FLOWERS PUBLIC SCHOOL</p>
                                <p></p>
                                <p>Shaheed Bhagat Singh Marg, Pratap Pura, Prem Nagar, Jhansi</p>
                            </div>
                        </div>
                        <h3>(English Medium Recognition by the Govt.)</h3>
                        <h2 class="borderTC">SCHOLAR'S TRANSFER CERTIFICATE</h2>
                    </div>

                    <div class="detailsTC">
                        <div class="flex-lineTC">
                            <p>Adm. Reg. No - <?=$data->register_no?></p>
                            <p>No. of Transfer Certificate : 2025/3202</p>
                        </div>
                        <p>This is to certify that Master/Miss <strong><span class="dotsTC"><?=$full_name?></span></strong> Son/Daughter
                            of Shri <strong><span class="dotsTC">Sareef Khan</span></strong> and Smt. <strong><span
                                    class="dotsTC">Nazma Khan</span></strong> was admitted into this school on <strong><span
                                    class="dotsTC"> <?=_d($data->admission_date)?> </span></strong> on a transfer certificate from <strong><span
                                    class="dotsTC"> <?=_d($data->admission_date)?> </span></strong> and left on <strong><span
                                    class="dotsTC">29.03.2025</span></strong> with a good character.</p>

                        <p>He / She was then studying in class <strong><span class="dotsTC"> 7th </span></strong> of the
                            <strong><span class="dotsTC">CBSE</span></strong> stream, the school year beginning from April to March.
                        </p>

                        <p>All sums due to this school on his / her account have been paid.</p>
                        <p>His / Her date of birth, according to the Admission Register is (In figures) <strong><span
                                    class="dotsTC">17.08.2012</span></strong> (In words) <strong><span class="dotsTC">Seventeen
                                    August Two Thousand Twelve</span></strong>.</p>
                        <p>(The following additional information must be supplied if the scholar left at the end of the school year)
                        </p>
                        <br />
                        <br />
                        <p>Promotion has been <span class="dotsTC"> 8th </span> </p>
                        <br />
                        <p>Date: <span class="dotsTC">15.04.2025</span></p>
                    </div>
                    <br />
                    <div class="signatureTC">
                        <p>H.M. / Principal </p>
                        <p>Rising Flowers Public School</p>
                        <p>Jhansi</p>
                    </div>
                    <br />
                    <br />
                    <br />
                </div>
            <!-- </body> -->
			

		</div>
	</div>
</div>
<footer class="panel-footer">
	<div class="text-right">
		<button class="btn btn-default modal-dismiss"><?=translate('close')?></button>
	</div>
</footer>