var editStockButton = $('.inventory-content .inventory-edit-button');

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

function editStock(id){

    let stock = ($('.inventory-content table tbody tr:nth-of-type('+ id +') .inventory-stock').html());

    $('.warning').html('<div class="overlay"> <div class="notice"> <div class="notice-header"> Edit Stock</div> <div class="notice-content notice-edit-stock"> <table class="table table-borderless"> <tr> <td>Air Mineral 600mL</td> <td>' + stock + '</td> <td><button class="inventory-stock-minus" onclick="decreaseStock()"><i class="fas fa-minus"></i></button></td> <td style="width: 20%;"> <form action=""> <input type="number" id="update-stock-value" value="' + stock + '" min="0"> <input type="submit" style="display: none;"> </form> </td> <td><button class="inventory-stock-plus" onclick="increaseStock()"><i class="fas fa-plus"></i></button></td> </tr> </table> <div class="cashier-item-list-button"> <button class="cashier-btn-success" onclick="">OK</button> <button class="cashier-btn-fail" onclick="emptyWarningMenu();">Batal</button> </div> </div> </div> </div>');
}

function decreaseStock(){
    let stockInput = $('#update-stock-value');
    let val = parseInt(stockInput.attr('value'));
    val -= 1;
    if(val <= 0){
        val = 0;
    }
    stockInput.attr('value', val);
}

function increaseStock(){
    let stockInput = $('#update-stock-value');
    let val = parseInt(stockInput.attr('value'));
    val += 1;
    stockInput.attr('value', val);
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
