"use strict";
$(document).ready(function () {
    $('#date').daterangepicker({
        singleDatePicker: true,
        timePicker: true,
        timePicker24Hour: true,
        timePickerIncrement: 10,
        locale: {
            format: 'YYYY/MM/DD hh:mm'
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