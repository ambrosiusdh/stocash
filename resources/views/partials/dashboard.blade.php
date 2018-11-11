<div class="overlay" style="display: none;">

</div>

<div class="dashboard" style="right: -30%;">
    <div class="dashboard-exit">
        <button onclick="hideDashboard();"><i class="fas fa-times"></i></button>
    </div>
    <div class="dashboard-header">
        <i class="fas fa-user-circle"></i>
        <span>Toko Makmur Terus</span>
    </div>
    <div class="dashboard-content">
        <table class="table table-borderless">
            <tr>
                <td><i class="fas fa-home"></i></td>
                <td><a href="{{url('/')}}"><span>Home</span></a></td>
            </tr>
            <tr>
                <td><i class="fas fa-chart-line"></i></td>
                <td><a href="{{url('/report')}}"><span>Report</span></a></td>
            </tr>
            <tr>
                <td><i class="fas fa-briefcase"></i></td>
                <td><a href="{{url('/inventory')}}"><span>Inventory</span></a></td>
            </tr>
            <tr>
                <td><i class="fas fa-coins"></i></td>
                <td><a href="{{url('/transaction')}}"><span>Transaction</span></a></td>
            </tr>
            <tr>
                <td><i class="fas fa-receipt"></i></td>
                <td><a href="{{url('/cashier')}}"><span>Cashier</span></a></td>
            </tr>
        </table>
    </div>
    <div class="dashboard-footer dashboard-content">
        <table class="table table-borderless">
            <tr>
                <td><i class="far fa-user"></i></td>
                <td><a href=""><span>Account</span></a></td>
            </tr>
            <tr>
                <td><i class="fas fa-cog"></i></td>
                <td><a href=""><span>Setting</span></a></td>
            </tr>
        </table>
    </div>
</div>
