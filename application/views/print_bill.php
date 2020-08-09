<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>St Mary's Dental Clinic</title>
    
    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 12px;
        line-height: 15px;
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
        font-family: 'Helvetica', Helvetica, Arial, sans-serif;
    }
    
    .rtl table {
        text-align: right;
    }
    
    .rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="https://www.stmarysdentalservices.com/assets/img/loder.jpg" style="width:120px; height:120px;">
                            </td>
                            
                            <td>
                                Invoice #: 123<br>
                                Date: <?php echo date('j F, Y'); ?><br>
                                Due: All accounts are on demand
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
                                St.Mary's Dental Services<br>
                                PO BOX 29868
                                Busula Luwero Uganda<br>
                                Phone Contact: +256 774 970 208,
                                Email: stmarysdentalservices@gmail.com
                            </td>
                            
                            <td>
                          <?php  
                         // print_r($bill);
                            echo $patient=$bill[0]->name. ' <br>'.
                            date('j F, Y',strtotime($bill[0]->posting_date)).'<br>'. $bill[0]->mobile;
                         ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            
        
            
            <tr class="heading">
                <td>
                    Item Description
                </td>
                
                <td>
                    Price
                </td>
            </tr>
           <?php foreach($bill as $row){ ?>
            <tr class="item">
                <td>
                    <?php echo $row->description; ?>
                </td>
                
                <td>
                    <?php echo $row->amount;  $sum += $row->amount;?>
                </td>
            </tr>
           <?php } ?>
            
            
            
            <tr class="total">
                <td></td>
                
                <td>
                   UGX: <?php echo $sum; ?>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>