<div class="box lastbox">
    <div class="container">
        <div class="col-xs-12 center">
             <h1>Thank Your For Your Interest</h1>
             <p>The Below Quote Has Been Emailed To You<br><br></p>
        </div>
        <div class="clear"></div>
        <div class="inner-box table-responsive">
        	<table style="background-color:#f6f6f6; width:100%; color:#484848;font-size:16px;text-align:center;">
            	<tr>
                    <td>
                   	 <table style="width:100%; text-align:center;color:#484848;">
                     	<thead>
                            <tr>
                                <td style="padding:40px 0 20px 0;">
                                    <img src="<?=base_url();?>assets/quote/img/email_logos.png">
                                </td>
                            </tr>
                        </thead>
                        <tr>	
                            <td style="padding:0 0 20px 0; font-size:18px; border-bottom: 1px solid #e4e4e4;">
                                smarter - roster to payroll
                            </td>
                        </tr>
                        <tr>
                        	<td style="font-size:14px; padding:20px 0;">
                            	Hi <?=$input['name'];?><br><br>
                                
                            	Thanks for entering your details to receive a quote for our Smart Rostering & Payroll solution.<br><br>
                                
                                Please find below your quote, which is an estimate based on the information your provided.<br>
                                A final quote will be provided on further discussion about your particular franchise system's needs.
                            </td>
                        </tr>
                    </table>
                    </td>
                </tr>
                
                <!-- quote box -->
                <tr>
                    <td style="padding-left:15px; padding-right:15px;">
                        <table style="width:100%; font-family:Arial, sans-serif; border:1px solid #f0f0f0; text-align:center; vertical-align:central; background-color:#fff;font-size:16px; margin-bottom:20px;color:#484848;">
            
                            <thead style="font-weight:100; font-size:14px;">
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td>Your Quote Number : SB - <?=$quote_id;?></td>
                                </tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td style="vertical-align:central;">
                                        <img src="<?=base_url();?>assets/quote/img/fa-user.jpg"> <?=$input['name'];?> <? echo nbs(8);?>
                                        <img src="<?=base_url();?>assets/quote/img/fa-phone-square.jpg"> <?=$input['phone'];?> <? echo nbs(8);?>
                                        <img src="<?=base_url();?>assets/quote/img/fa-envelope.jpg"> <span style="color:#484848 !important;"><?=$input['email'];?></span>
                                    </td>
                                </tr>
                                <tr><td>&nbsp;</td></tr>
                            </thead>
                            
                            <tbody style="font-weight:100; font-size:20px;">
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td style="color:#00a2e0">
                                        <span style="font-size: 172px;font-weight: 400;">$<?=$quote['price_per_franchise'];?></span>
                                        <span style="">Inc GST</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-size:24px; font-weight:400;">per franchise | per month </td>
                                </tr>
                                <tr><td style="font-size:16px;"><?=$quote['package'];?></td></tr>
                                <tr><td>&nbsp;</td></tr>
                            </tbody>
                            
                            <tfoot style="font-weight:100; font-size:14px;">
                                <tr><td>&nbsp;</td></tr>
                                <tr>
                                    <td>
                                        Costing based on the estimate of<br>
                                        <b><?=$input['no_of_sites'];?> franchise</b> locations with <b><?=$input['avg_staff'];?> staff</b> per location
                                    </td>
                                </tr>
                                <tr><td><?=$quote['comment'];?></td></tr>
                                <tr><td>&nbsp;</td></tr>
                                <tr><td>&nbsp;</td></tr>
                            </tfoot>
                        </table>
                    </td>
                </tr>
                <!-- quote box -->
                
                <tr>
                	<td style="font-size:24px; padding-bottom:10px;">What's Included</td>
                </tr>
                <tr>
                	<td style="border-top:1px solid #d8d8d8; border-bottom:1px solid #d8d8d8;"><img src="<?=base_url();?>assets/quote/img/features_header.jpg"></td>
                </tr>
                <tr>
                	<td style="border-bottom:1px solid #d8d8d8;"><img src="<?=base_url();?>assets/quote/img/feature_overview.jpg"></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                	<td><a href="mailto:team@shoebooks.staffbooks.system"><img src="<?=base_url();?>assets/quote/img/tour_btn.jpg"></a></td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr>
                	<td style=" font-size:16px; font-weight:600;">
                    	We look forward to speaking to your in the coming days. <br><br>
                        
                        Kind Regards <br><br>
                        
                        The Shoebooks & Staffbooks Team<br><br>
                        
                        1300 882 428 | 1300 724 692<br>
                        <a style="color:#484848;text-decoration:none;" href="http://www.shoebooks.com.au">www.shoebooks.com.au</a> | <a style="color:#484848;text-decoration:none;" href="http://www.staffbooks.com.au">www.staffbooks.com.au</a>
                    </td>
                </tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td></tr>
                <tr><td>&nbsp;</td></tr>
            </table>
        </div>
    </div>
</div>