"use strict";
$(document).ready(function () {
    $('#datatable').DataTable();

    $('#check_in').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'YYYY/MM/DD'
        }
    });
    
    $('#check_out').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'YYYY/MM/DD'
        }
    });

    $("#payment").change(function () {
        if($(this).val() == "BB/Hutang"){
            $("#dataagen").css("display","inline");
        }
        else{
            $("#dataagen").css("display","none");
        }
        if($(this).val() == "Debit" || $(this).val() == "TT"){
            $("#daftarbank").css("display","inline");
        }
        else{
            $("#daftarbank").css("display","none");
        }
    });

    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);

    $(":input").inputmask();
});