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
    <div class="panel-body">
        <input type="hidden" id="cb_student_id" value="<?=$data->id?>">
        <div class="form-group">
            <center>
                <div class="checkbox-replace mt-lg">
                    <label class="i-checks">
                        <input type="checkbox" name="authentication" id="cb_authentication">
                        <i></i> <strong style="font-size:20px;"><?=translate('login_authentication_deactivate')?> , After Print Transfer Certificate </strong>
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;<button type="button" id="cb_submit" class="btn btn-danger btn-sm btn-circle" data-loading-text="<i class='fas fa-spinner fa-spin'></i> Processing"><?=translate('update')?></button>
                </div>
                <span class="error"></span>
                <span class="success"></span>
            </center>
        </div>
    </div>
	<hr class="solid-spc">
	<div class="table-responsive mb-md">
		<div id="printStudentTC">
			<!-- hidden school information prints -->
			<!-- <div class="visible-print"></div> -->
            <!-- <body> -->
                <div class="containerTC">
                    <img src="<?=base_url('uploads/app_image/logo.png')?>" class="watermark" alt="Watermark">
                    <div class="headerTC">
                        <div class="flex-lineTC">
                            <p>School Reg. No. <?=$institute->reg_no?></p>
                            <p>Mob: <?=$institute->mobileno?></p>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: center; gap: 10px; margin: 30px 0px;">
                            <img src="<?=base_url('uploads/app_image/logo.png')?>" alt="School Logo" style="width: 90px; height: auto;">
                            <div style="line-height: 40px;">
                                <p style="font-size: 30px; transform: scale(1, 2); font-weight: 600; margin:10px 0px 0px 0px;"><?=strtoupper($institute->institute_name)?></p>
                                <p></p>
                                <p><?=$institute->address?></p>
                            </div>
                        </div>
                        <h3>(English Medium Recognition by the Govt.)</h3>
                        <h2 class="borderTC">SCHOLAR'S TRANSFER CERTIFICATE</h2>
                    </div>

                    <div class="detailsTC">
                        <div class="flex-lineTC">
                            <p>Adm. Reg. No - <?=$data->register_no?></p>
                            <p>No. of Transfer Certificate : <?=$tc_no?></p>
                        </div>
                        <p>This is to certify that Master/Miss <strong><span class="dotsTC"> <?=$full_name?> </span></strong> Son/Daughter of Shri <strong><span class="dotsTC"> <?=$data->father_name?> </span></strong> and Smt. <strong><span class="dotsTC"> <?=$data->mother_name?> </span></strong> was admitted into this school on <strong><span class="dotsTC"> <?=_d($data->admission_date)?> </span></strong> on a transfer certificate from <strong><span class="dotsTC"> <?=_d($data->admission_date)?> </span></strong> and left on <strong><span class="dotsTC"><?=_d(date('Y-m-d'))?></span></strong> with a good character.</p>

                        <p>He / She was then studying in class <strong><span class="dotsTC"> <?=numberToRoman($data->name_numeric ? $data->name_numeric : $data->name)?> </span></strong> of the
                            <strong><span class="dotsTC"><?=$institute->recognized_board?></span></strong> stream, the school year beginning from April to March.
                        </p>

                        <p>All sums due to this school on his / her account have been paid.</p>
                        <p>His / Her date of birth, according to the Admission Register is (In figures) <strong><span class="dotsTC"><?=$data->birthday ? _d($data->birthday): null?></span></strong> (In words) <strong><span class="dotsTC"><?=$bday_in_words?></span></strong>.</p>
                        <p>(The following additional information must be supplied if the scholar left at the end of the school year) </p>
                        <br />
                        <br />
                        <div class="flex-lineTC">
                            <p>Promotion has been <strong><span class="dotsTC"> <?=numberToRoman($data->name_numeric+1)?> </span></strong> </p>
                            <p>PEN Number: <strong><span class="dotsTC"> <?=$data->pen?> </span></strong> </p>
                        </div>
                        <br />
                        <p>Date: <strong><span class="dotsTC"><?=_d(date('Y-m-d'))?></span></strong></p>
                    </div>
                    <br />
                    <div class="signatureTC">
                        <div>
                            <p>H.M. / Principal </p>
                            <p><?=$institute->institute_name?></p>
                            <p><?=$institute->short_address?></p>
                        </div>
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

<script type="text/javascript">
	$(document).ready(function () {
		$('#cb_submit').on('click', function() {
            let student_id = $("#cb_student_id").val();
			let cb_authentication = $('#cb_authentication').is(':checked');
            if(!cb_authentication){
                $('.error').html("Please! Check the box before update!");
            }
			if (student_id && cb_authentication) {
                $.ajax({
                    url: base_url + "student/after_tc_inactive",
                    type: "POST",
                    dataType: "JSON",
                    data: { student_id },
                    success:function(data) {
                        if(data.status){
                            $('.error').html("");
                            $('.success').html(data.message);
                        }
                        else{
                            $('.error').html(data.message);
                            $('.success').html("");
                        }
                    }
                });
            }
		});
	});
</script>