$(document).ready(function () {

    var category;
    var category_up;

    $("#category_name").blur(function () {
        valida_insert_category();
    });
    
    $("#category_name_update").blur(function () {
        valida_update_category();
    });

    $("#btn-insert-category").click(function () {
        valida_insert_category();
    });
    
    $("#btn-update-category").click(function () {
        valida_update_category();
    });
    

    function valida_insert_category() {
        if ($("#category_name").val() == "") {
            $("#error_category_name").html("Campo Obrigatório!");
            $("#category_name").css({ 'border-color': 'red' });
            category = false;
            btn_insert();
        } else {
            $('#error_category_name').html("");
            $('#category_name').css({ 'border': '1px solid #ced4da' });
            category = true;
            btn_insert();
        }
    }
    
    function valida_update_category() {
        if ($("#category_name_update").val() == "") {
            $("#error_category_name_update").html("Campo Obrigatório!");
            $("#category_name_update").css({ 'border-color': 'red' });
            category_up = false;
            btn_update();
        } else {
            $('#error_category_name_update').html("");
            $('#category_name_update').css({ 'border': '1px solid #ced4da' });
            category_up = true;
            btn_update();
        }
    }

    function btn_insert() {
        if (category) {
            $("#btn-insert-category").attr('type', 'submit');
        } else {
            $("#btn-insert-category").attr('type', 'button');
        }
    }
    
    function btn_update() {
        if (category_up) {
            $("#btn-update-category").attr('type', 'submit');
        } else {
            $("#btn-update-category").attr('type', 'button');
        }
    }

});