<form id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">New Password <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="first-name" required="required" class="form-control col-md-7 col-xs-12" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Confirm <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" type="text">
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <a type="submit" class="btn btn-success" onclick="change_pword()">Change</a>
            <a type="submit" class="btn btn-primary">Cancel</a>

        </div>
    </div>

</form>
<script>
    function change_pword() {
        url =  '<?= URL_CALL_SERVICE?>/AdminPortal/ChangePassword';
        data = {
            'data': {
                'PassWord': '2'
            }
        };
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            headers: {
                'Authorization': '<?= $this->session->userdata('session');?>'
            },
            success: function (data, jqXHR) {
                alert('<?= $this->session->userdata('session');?>');
            },
            statusCode: {
                200: function () {
                    send_session(session);
                },
                401: function () {
                    alert('Ban khong quyen truy cap');
                }
            },
        });
    }
</script>