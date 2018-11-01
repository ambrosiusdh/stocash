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
