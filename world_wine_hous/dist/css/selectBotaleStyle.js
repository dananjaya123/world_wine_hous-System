// =================slider=================================
$(document).ready(function() {
    $('#media').carousel({
        pause: true,
        interval: false,
    });
});


// ================nav bar========================
$('#nSHome').click(function () {
    $('#roseWine').css("display","none");
    $('#whitWine').css("display","none");
    $('#Home').css("display","block");
    $('#redWine').css("display","none");
    $('#selectbottle').css("display","none");
    $('#customerLog').css("display","none");
    $('#customerForm').css("display","none");
    $('#cardPayment').css("display","none");


});

$('#nSRedWine').click(function () {
    $('#roseWine').css("display","none");
    $('#whitWine').css("display","none");
    $('#Home').css("display","none");
    $('#redWine').css("display","block");
    $('#selectbottle').css("display","none");
    $('#customerLog').css("display","none");
    $('#customerForm').css("display","none");
    $('#cardPayment').css("display","none");


});


$('#nSWhiteWine').click(function () {
    $('#roseWine').css("display","none");
    $('#whitWine').css("display","block");
    $('#Home').css("display","none");
    $('#redWine').css("display","none");
    $('#selectbottle').css("display","none");
    $('#customerLog').css("display","none");
    $('#customerForm').css("display","none");
    $('#cardPayment').css("display","none");


});

$('#nSRoseWine').click(function () {
    $('#roseWine').css("display","block");
    $('#whitWine').css("display","none");
    $('#Home').css("display","none");
    $('#redWine').css("display","none");
    $('#selectbottle').css("display","none");
    $('#customerLog').css("display","none");
    $('#customerForm').css("display","none");
    $('#cardPayment').css("display","none");


});

