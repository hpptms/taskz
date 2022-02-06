$(function () {
    $(document).on("click blur", "#botton1", function () {
        $("#Sector").val("「重要」で「緊急」なもの");
    });

    $(document).on("click blur", "#botton2", function () {
        $("#Sector").val("「重要」だけど「緊急」でないもの");
    });

    $(document).on("click blur", "#botton3", function () {
        $("#Sector").val("「重要」ではないが「緊急」なもの");
    });

    $(document).on("click blur", "#botton4", function () {
        $("#Sector").val("「重要」でもないが「緊急」でもないもの");
    });
});