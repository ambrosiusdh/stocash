function emptyWarningMenu(){
    $('.warning').html('');
}

function showExitMenu(){
    $('.warning').html('<div class="overlay"> <div class="notice"> <div class="notice-header"> Konfirmasi </div> <div class="notice-content"> <p> Apakah anda akan membatalkan transaksi? </p> <p> semua item tidak akan tersimpan </p> <div class="cashier-item-list-button"> <button class="cashier-btn-success" onclick="">Ya</button> <button class="cashier-btn-fail" onclick="emptyWarningMenu();">Batal</button> </div> </div> </div> </div>');
}

function calculateTotal(){
    let total = 0;

    $('.cashier-item-list-table .product-price').each(function(){
        total += parseInt($(this).text());
    });

    $('.cashier-item-list-table table tbody').append('<tr class="cashier-item-total"> <td class="col-md-6"><b>TOTAL</b></td> <td class="col-md-2"></td> <td class="col-md-3 total-price">' + total + '</td> <td class="col-md-1"></td> </tr>');
    $('.cashier-item-list-table').scrollTop(300);

    $('.cashier-item-list-button').html('<button class="cashier-btn-success" onclick="transactionComplete();">Pembayaran</button>');
}

function transactionComplete(){
    let cash = 600000;
    let total = parseInt($('.total-price').text());
    $('.warning').html('<div class="overlay"> <div class="notice"> <div class="notice-header"> Transaksi Selesai </div> <div class="notice-content"> <table class="table table-borderless"> <tbody> <tr> <th scope="col">Total yang harus dibayar</th> <th scope="col">Rp. ' + '500000'+ '</th> <tr> <th scope="row">Total dibayar</th> <td>' + '50000' + '</td> </tr> <tr> <th scope="row">Kembalian</th> <td>' + '21132123' + '</td> </tr></tbody> </table> <div class="cashier-item-list-button"> <button class="cashier-btn-success" onclick="">Cetak Struk</button> <button class="cashier-btn-fail" onclick="emptyWarningMenu(); location.reload();">Batal</button> </div> </div> </div> </div>');
}

function showStock(id){

    let stock = ($('.inventory-content table tbody .inventory-content-item-'+ id +' .inventory-stock').html());
    stock = stock.replace(/\s/g, '');
    if(isNaN(stock)){
        stock = 0;
    }

    let itemName = $('.inventory-content table tbody .inventory-content-item-'+ id +'  #inventory-item-name').html();
    $('#change-stock-item-name').html(itemName);
    $('#change-stock-value').html(stock);
    $('#update-stock-value').val(stock);
    $('#stock-id').val(id);
    $('.warning').fadeIn();


}

function hideStockMenu(){
    $('.warning').fadeOut();
}

function changeStock(){
    // $.ajaxSetup({
    //     headers: {
    //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    //     }
    // });
    // $.ajax({
    //     method: "POST",
    //     url: "/inventory",
    //     data: {
    //         stock: $('#update-stock-value').val(),
    //         id: $('#stock-id').val()
    //     },
    //     success: function (result) {
    //         console.log(result)
    //     }
    // });

    $('#change-stock-submit').click();

}

function decreaseStock(){
    let stockInput = $('#update-stock-value');
    let val = parseInt(stockInput.val());
    val -= 1;
    if(val <= 0){
        val = 0;
    }
    stockInput.val(val);
}

function increaseStock(){
    let stockInput = $('#update-stock-value');
    let val = parseInt(stockInput.val());
    val += 1;
    stockInput.val(val);
}

function showDashboard(){
    $('.dashboard').animate({
        'right' : '0%'
    }, 700);
    $('.overlay').fadeIn();
}

function hideDashboard(){
    $('.dashboard').animate({
        'right' : '-35%'
    }, 700);
    $('.overlay').fadeOut();
}

$('.nav-item .fa-bars').click(showDashboard);

$('.transaction-list-item').click(showTransactionDetail);


function showTransactionDetail(){
    $('.transaction-loading-screen').show();
    a = $(this).attr('id').match(/[0-9]+/g);
    id = parseInt(a[0]);
    cashier = $('#transaction-list-id-'+ id + ' div p i').html();
    date = $('#transaction-list-id-'+ id + ' .transaction-list-date').html();
    total = $('#transaction-list-id-'+ id + ' span').html();
    let transactionListHead = '<div class="transaction-receipt-detail"> <div class="transaction-receipt-detail-header"> <div class="transaction-list-item"> <div> <p>' + date +'</p> <p> <i>' + cashier + '</i> </p> </div> <div> Rp. <span>' + total + '</span> </div> </div> </div> <div class="transaction-receipt-detail-content"> <div class="cashier-item-list-table"> <table class="table table-borderless"> <thead> <tr class="cashier-table-header"> <td class="col-md-6">ITEM</td> <td class="col-md-2">QTY</td> <td class="col-md-3">HARGA</td> </tr> </thead> <tbody>';
    let transactionListFoot = '</tbody> </table> </div> </div> </div>';
    let tbody = "";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        type:'GET',
        url:'/test',
        data: {
            id: id
        },
        success:function(callback){
            for (i = 0; i < callback.count; i++){
                tbody += '<tr> <td class="col-md-6">' + callback.item[i][0].itemName + '</td> <td class="col-md-2">' + callback.amount[i] + '</td> <td class="col-md-3 product-price">' + callback.item[i][0].price + '</td> </tr>';
            }
            let result = transactionListHead + tbody + transactionListFoot;
            $('.transaction-content-detail .transaction-content-detail-item').html(result);
            $('.transaction-loading-screen').hide();
        },
        error: function (xhr) {
            console.log(xhr.responseText);
            $('.transaction-loading-screen').hide();
        }
    });
}
