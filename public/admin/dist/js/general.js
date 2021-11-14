function injectModalData(resource_id, URL,form_id, method ,table_id=null)
{
    document.querySelector('#record_resource_id').value = resource_id;
    document.querySelector('#confirm_password_action_method').value = method;
    document.querySelector('#' + form_id).setAttribute('action', URL);
}
/***
 * Trash, restore or destroy a record
 * 
 * */
$(document).on('submit', '#confirm-password-form', function(event) 
{
    event.preventDefault();
    var url      = $(this).attr('action');
    var record   = document.getElementById('record_resource_id').value;
    var password = document.getElementById('inputAdminPass').value;
    var _method  = document.getElementById('confirm_password_action_method').value;
    var token    = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: url,
        method: _method,
        data: {
            _token:token,
            resource_id:record,
            admin_password:password
        },
        dataType: 'JSON',
        success: function (data) {
            if (data['code']===200) 
            {
                $('#confirm-password-modal').modal('toggle');
                $('#tableRecord-' + data['item']).remove();
                toastr.success(data['message']);
            }
            if (data['code']===500) 
                toastr.error(data['message']);
            if (data['code']===101) 
                toastr.error(data['message']);
        },
        error: function (data) {
            if (data.responseJSON.errors) {
                Object.keys(data.responseJSON.errors).forEach(function (key, index) {
                    data.responseJSON.errors[key].forEach(function (err) {
                        toastr.error(err);
                    })
                });
            }
            else
                toastr.error('Failed, Please try again later.');
        }
    });
});
$(document).on('submit', '#reset-admin-password-form', function(event) 
{
    event.preventDefault();
    var url           = $(this).attr('action');
    var record        = document.getElementById('record_resource_id').value;
    var adminPassword = document.getElementById('inputAdminPassword').value;
    var newPassword   = document.getElementById('inputPass').value;
    var newPasswordConfirmation = document.getElementById('inputConfirmPass').value;
    var token    = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        url: url,
        method: "POST",
        data: {
            _token:token,
            resource_id:record,
            admin_password:adminPassword,
            password:newPassword,
            password_confirmation:newPasswordConfirmation,
        },
        dataType: 'JSON',
        success: function (data) {
            if (data['code']===200) 
            {
                $('#reset-admin-password-modal').modal('toggle');
                toastr.success(data['message']);
            }
            if (data['code']===500) 
                toastr.error(data['message']);
            if (data['code']===101) 
                toastr.error(data['message']);
        },
        error: function (data) {
            if (data.responseJSON.errors) {
                Object.keys(data.responseJSON.errors).forEach(function (key, index) {
                    data.responseJSON.errors[key].forEach(function (err) {
                        toastr.error(err);
                    })
                });
            }
            else
                toastr.error('Failed, Please try again later.');
        }
    });
});