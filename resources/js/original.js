$(function () {
    $(document).on("click blur", "#botton1", function () {
        $('#Sector').text('「重要」で「緊急」なもの');
        $('#is_Sector').text(1);
    });

    $(document).on("click blur", "#botton2", function () {
        $('#Sector').text('「重要」だけど「緊急」でないもの');
        $('#is_Sector').text(2);
    });

    $(document).on("click blur", "#botton3", function () {
        $('#Sector').text('「重要」ではないが「緊急」なもの');
        $('#is_Sector').text(3);
    });

    $(document).on("click blur", "#botton4", function () {
        $('#Sector').text('「重要」でもないが「緊急」でもないもの');
        $('#is_Sector').text(4);
    });
});