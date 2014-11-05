<!--package-->
<div class="box">
    <div class="container">
    	<div class="col-xs-12 center">
            <div class="col-xs-6 block row-no-lt-gutter offset-row-lt-gutter">
                <div class="col-xs-12">
                	<div class="icon-bg first-bg no-float"><i class="fa fa-desktop"></i></div>
                </div>
                <h1 class="alt">The Software & <span>You</span> <br>Run Your Payroll</h1>
                <div class="btn-group radio-btn group1" data-package="software-only" id="default-radio">
                  <button type="button" class="btn btn-default btn-success yes">Yes</button>
                  <button type="button" class="btn btn-default no">No</button>
                </div>
            </div>
            <div class="col-xs-6 block">
            	<div class="col-xs-12">
                	<div class="icon-bg no-float"><i class="fa fa-desktop minus-2x"></i><i class="fa fa-refresh minus-2x"></i></div>
                </div>
                <h1 class="alt">The Software & <span>We</span> <br>Run Your Payroll</h1>
                <div class="btn-group radio-btn group1" data-package="sofware-and-payroll">
                  <button type="button" class="btn btn-default yes">Yes</button>
                  <button type="button" class="btn btn-default btn-danger no">No</button>
                </div>
            </div>
        </div>
    </div>
</div><!-- package-->


<form id="quote-form">
<!-- tells us about your franchise -->
<div class="box">
    <div class="container">
    	<div class="col-xs-12">
        	<div class="col-xs-8 center">
               <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="icon-bg"><i class="fa fa-question-circle"></i></div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <h1>Tell Us About Your Business</h1>
                    <span class="display-block"><span class="imp">You</span> do your roster & <span class="imp">We</span> do your pay run</span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 block center vgap">
            <div class="form-group">
              <input id="avg-staff" name="avg_staff" type="text" class="form-control" placeholder="Enter The Average Number Of Staff Per Organisation">
            </div>
            <div class="form-group">
              <input id="no-of-sites" name="no_of_sites" type="text" class="form-control" placeholder="Enter The Number Of Locations">
            </div>
        </div>
    </div>
</div><!-- tells us about your franchise -->

<!-- get a quote -->
<div class="box lastbox">
    <div class="container">
    	<div class="col-xs-12">
            <div class="col-xs-8 center">
            	<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        			<div class="icon-bg"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            		<h1>Get A Quote To Your Inbox</h1>
                	<span class="display-block">Get An Estimate Now & Delivered To Your Inbox</span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 block center vgap">
            <div class="form-group">
              <input id="name" name="name" type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input id="phone" name="phone" type="text" class="form-control" placeholder="Your Phone Number">
            </div>
            <div class="form-group">
              <input id="email" name="email" type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-info btn-large" id="get-quote">GET QUOTE</button>
            </div>
        </div>
    </div>
</div><!-- get a quote  -->

<input type="hidden" id="package"  name="package" value="software-only">
</form>


<div id="quote-result" class="hide">
    <div class="box lastbox">
        <div class="container">
            <div class="col-xs-12 center">
                 <h1>Thank Your For Your Interest</h1>
                 <p>The Below Quote Has Been Emailed To You<br><br></p>
            </div>
            <div class="clear"></div>
            <div class="inner-box table-responsive" id="quote">
                
            </div>
            <div class="form-group" style="margin-top:40px;">
              <button type="button" class="btn btn-info btn-large" id="get-another-quote">GET ANOTHER QUOTE</button>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div>
<script>

$(function(){
	$('.radio-btn').click(function(){
		toggle_radio($(this),'group1');
		toggle_combo();
	});
	
	$('#get-quote').click(function(){
		if(validate()){
			get_quote();	
		}
	});
	
	$('#get-another-quote').click(function(){
		reset_form();
		$('html, body').animate({ scrollTop: 0 }, 500);
	});
});

function reset_form(){
	$('#quote-form')[0].reset();
	$('#quote-result').addClass('hide');
	$('#quote').html('');
	toggle_radio($('#default-radio'),'group1');
}

function toggle_radio(obj,group){
	var $this = obj;
	// radio group
	$('.'+group+' .yes').removeClass('btn-success');
	$('.'+group+' .no').addClass('btn-danger');	
	$($this).children('.yes').addClass('btn-success');
	$($this).children('.no').removeClass('btn-danger');
	$('#package').val($this.attr('data-package'));	
}

function get_quote(){
	loading();
	$.ajax({
		url:"<?=base_url();?>quote/ajax/get_quote",
		type:"POST",
		data:$('#quote-form').serialize(),
		success:function(html){
			remove_loading();
			$('#quote').html(html);
			$('#quote-result').removeClass('hide');
			$('html, body').animate({ scrollTop: $(document).height() }, 1000);
		}
	});
		
}

function validate(){
	var 	avg_staff = $('#avg-staff');
	var sites = $('#no-of-sites');
	var 	name = $('#name');
	var 	email = $('#email');
	var 	phone = $('#phone');
	var valid = true;
	
	$('#quote-form input').parent().removeClass('has-error');
	
	if(!avg_staff.val()){
		valid = false;
		avg_staff.parent().addClass('has-error');
	}
	
	if(!sites.val()){
		valid = false;
		sites.parent().addClass('has-error');
	}
	
	if(!name.val()){
		valid = false;
		name.parent().addClass('has-error');
	}
	
	if(!email.val()){
		valid = false;
		email.parent().addClass('has-error');
	}
	
	if(!phone.val()){
		valid = false;
		phone.parent().addClass('has-error');
	}
	
	return valid;

}

function loading(){
	var h = $(document).height();
	var mt = $(window).scrollTop() + 300;
	var w = $(document).width();
	$('body').append('<div id="loading" style="height:' + h + 'px;width:' + w + 'px;line-height:' + h + 'px;"><div style="margin-top:'+mt+'px" class="loading-inner-box"><i class="fa fa-spinner fa-spin"></i></div></div>');
}

function remove_loading(){
	$('#loading').remove();
}


</script>