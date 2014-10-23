<table style="width:100%; text-align:center;">
	<tr>
    	<td style="padding:40px 0;">
			<img src="<?=base_url();?>assets/quote/img/email_logos.jpg">
    	</td>
    </tr>
</table>
<table style="width:100%; font-family:Arial, sans-serif; border:1px solid #ccc; text-align:center; vertical-align:central; color:#333;">
    
    <thead style="font-weight:100; font-size:20px;">
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>Your Quote Number : SB-<?=$quote_id;?></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td><img src="<?=base_url();?>assets/quote/img/fa-user.jpg"> <?=$input['name'];?> <? echo nbs(8);?><img src="<?=base_url();?>assets/quote/img/fa-phone-square.jpg"> <?=$input['phone'];?> <? echo nbs(8);?><img src="<?=base_url();?>assets/quote/img/fa-envelope.jpg"> <span style="color:#333;"><?=$input['email'];?></span></td>
        </tr>
        <tr><td>&nbsp;</td></tr>
        <tr><td>&nbsp;</td></tr>
    </thead>
    
    <tbody style="font-weight:100; font-size:20px;">
        <tr><td style="border-top:1px dotted #ccc;">&nbsp;</td></tr>
        <tr>
            <td style="color:#00a2e0">
                <span style="font-size: 170px;font-weight: 400;">$<?=$quote['price_per_franchise'];?></span>
                <span style="">Inc GST</span>
            </td>
        </tr>
        <tr>
            <td>per month | per franchise</td>
        </tr>
        <tr><td style="font-size:14px; font-weight:600;"><?=$quote['package'];?></td></tr>
        <tr><td style="font-size:14px; font-weight:100;"><?=$quote['comment'];?></td></tr>
        <tr><td style="border-bottom:1px dotted #ccc;">&nbsp;</td></tr>
    </tbody>
    
    <tfoot style="font-weight:100; font-size:14px;">
        <tr><td>&nbsp;</td></tr>
        <tr>
            <td>
                Costing based on the estimate of<br>
                <b><?=$input['no_of_sites'];?> franchise</b> locations with <b><?=$input['avg_staff'];?> staff</b> per location
            </td>
        </tr>
        <tr><td>&nbsp;</td></tr>
    </tfoot>
</table>
<p style="width:100%; font-family:Arial, sans-serif; text-align:center;">
	The quote provided for processing yoru payroll is an estimate, A formal discussion on your<br>
                payrole processing requirements is required to provide a final cost.<br><br>
</p>