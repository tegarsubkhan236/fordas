@extends('adminlte::page')

@section('title', $title)

@section('content_header')
    {{-- // --}}
@stop

@section('content')
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <!-- title row -->
                    <div class="row">
                        <div class="col-xs-12">
                        <h2 class="page-header">
                            <i class="fa fa-globe"></i> FORDAS
                        </h2>
                        <p>Ketua Forum</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                  <!-- info row -->
                    <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                        From
                        <address>
                            <strong>Admin, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            Phone: (804) 123-5432<br>
                            Email: info@almasaeedstudio.com
                        </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                        To
                        <address>
                            <strong>John Doe</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            Phone: (555) 539-1037<br>
                            Email: john.doe@example.com
                        </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                        <b>Invoice #007612</b><br>
                        <br>
                        <b>Order ID:</b> 4F3S8J<br>
                        <b>Payment Due:</b> 2/22/2014<br>
                        <b>Account:</b> 968-34567
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                                  <!-- Table row -->
                    <div class="row">
                        <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                            <th>Qty</th>
                            <th>Product</th>
                            <th>Serial #</th>
                            <th>Description</th>
                            <th>Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                            <td>1</td>
                            <td>Call of Duty</td>
                            <td>455-981-221</td>
                            <td>El snort testosterone trophy driving gloves handsome</td>
                            <td>$64.50</td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>Need for Speed IV</td>
                            <td>247-925-726</td>
                            <td>Wes Anderson umami biodiesel</td>
                            <td>$50.00</td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>Monsters DVD</td>
                            <td>735-845-642</td>
                            <td>Terry Richardson helvetica tousled street art master</td>
                            <td>$10.70</td>
                            </tr>
                            <tr>
                            <td>1</td>
                            <td>Grown Ups Blue Ray</td>
                            <td>422-568-642</td>
                            <td>Tousled lomo letterpress</td>
                            <td>$25.99</td>
                            </tr>
                            </tbody>
                        </table>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </div>

        </div>
    </div>
@stop

@section('footer')
    <strong>Copyright &copy; 2020 <a href="/">DAS Jawa Barat</a>.</strong> All rights reserved.
@stop

@section('css')

@stop

@section('js')

@stop
