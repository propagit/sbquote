<table style="width:100%; font-family:Arial, sans-serif; border:1px solid #ccc; text-align:center; vertical-align:central;">
    
    <thead style="font-weight:100; font-size:20px;">
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>Your Quote Number : SB-<?=$quote_id;?></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><img src="<?=base_url();?>assets/quote/img/fa-user.jpg"> <?=$input['name'];?> <? echo nbs(8);?><img src="<?=base_url();?>assets/quote/img/fa-phone-square.jpg"> <?=$input['phone'];?> <? echo nbs(8);?><img src="<?=base_url();?>assets/quote/img/fa-envelope.jpg"> <?=$input['email'];?></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
    </thead>
    
    <tbody style="font-weight:100; font-size:20px;">
        <tr><td style="border-top:1px dotted #ccc;">&nbsp;</td></tr>
        <tr>
            <td style="color:#00a2e0">
                <span style="font-size: 170px;font-weight: 400;">$<?=$price;?></span>
                <span style="">Inc GST</span>
            </td>
        </tr>
        <tr>
            <td>per month | per franchise</td>
        </tr>
        <tr><td style="border-bottom:1px dotted #ccc;">&nbsp;</td></tr>
    </tbody>
    
    <tfoot style="font-weight:100; font-size:14px;">
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>
                The quote provided is an estimate only and to provide a formal finalised quote requires <br>
                Discussion into your exact payroll process requirements
            </td>
        </tr>
        <tr><td>&nbsp;</td></tr>
    </tfoot>
</table>