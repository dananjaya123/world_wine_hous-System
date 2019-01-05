$('#btnSave').click(function () {
    let itemForm=$('#itenForm').serialize();

    $.ajax({
        url:"api/service/ItemService.php",
        method:"POST",
        async:true,
        data:itemForm
    }).done(function (res) {
        alert(res);
    });
});