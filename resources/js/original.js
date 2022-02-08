$(function () {
    $(document).on("click blur", "#botton1", function () {
        document.querySelector('#val1').checked = true;
        input_chake();
    });

    $(document).on("click blur", "#botton2", function () {
        $('input[name=Sector]:eq(1)').prop('checked', true);
        input_chake();
    });

    $(document).on("click blur", "#botton3", function () {
        $('input[name=Sector]:eq(2)').prop('checked', true);
        input_chake();
    });

    $(document).on("click blur", "#botton4", function () {
        $('input[name=Sector]:eq(3)').prop('checked', true);
        input_chake();
    });

    function input_chake(){
        $('#is_Sector').text($('input[name=Sector]:checked').val());
        console.log($('input[name=Sector]:checked').val());
    }
});