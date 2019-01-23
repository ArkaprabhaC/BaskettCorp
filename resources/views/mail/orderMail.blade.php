<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Invoice | Baskett</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }
    
    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }
    
    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }
    
    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }
    
    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }
    
    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }
    
    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }
    
    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }
    
    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }
    
    .invoice-box table tr.item.last td {
        border-bottom: none;
    }
    
    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }
    
    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }
        
        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }
    
    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    .
    </style>

</head>

<body>

    <p>Dear {{ $custname }},</p>

    <p>Thank you for shopping with us. Underneath is the copy of the invoice on your latest order. Just show the token to the shopkeeper to receive your products.</p>
   
    <div class="invoice-box" style="margin-top:5rem; margin-bottom:2rem;">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="{{asset('images/baskett-logo.jpeg')}}" style="width:100%; max-width:300px;">
                            </td>
                            
                            <td>
                                Token #: {{ $order[0]['token'] }}<br>
                                Created: {{ now() }}<br>
                                
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Baskett Corp.<br>
                                12345 Sunny Road<br>
                                Sunnyville, CA 12345
                            </td>
                            
                            <td>
                                Made for:<br>
                                {{ $custname }}<br>
                                {{ $custemail }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                
                <td>
                    Cash
                </td>
            </tr>
            
            
            
            <tr class="heading">
                <td>
                    Item
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            
            @foreach($order as $order)
                <tr class="item">
                    <td>
                       {{ $order['productname'] }}
                    </td>
                    
                    <td>
                        &#x20B9; {{ $order['productprice'] }}
                    </td>
                </tr>
            @endforeach

            <tr class="heading">
                <td>
                    Subtotal
                </td>
                
                <td>
                    &#x20B9; {{ $totalPrice }}
                </td>
            </tr>

            <tr class="heading">
                <td>
                    Service Charge
                </td>
                
                <td>
                    &#x20B9; 100
                </td>
            </tr>
            
            
            
            <tr class="total">
                <td></td>
                
                <td>
                   Total: &#x20B9; {{ $totalPrice+100 }}
                </td>
            </tr>
        </table>
    </div>

    <!--important js scripts--->    
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/easing/easing.js')}}"></script>
    <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('js/checkout_custom.js')}}"></script>
    <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
    <script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
    <script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
    <script src="{{asset('plugins/easing/easing.js')}}"></script>
    <script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
    <script src="{{asset('plugins/colorbox/jquery.colorbox-min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
