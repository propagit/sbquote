<!--you run your payroll-->
<div class="box">
    <div class="container">
    	<div class="col-xs-12">
            <div class="col-xs-8 center">
                <div class="icon-bg"><i class="fa fa-desktop"></i></div>
                <h1>The Software & <span>You</span> Run Your Payroll</h1>
            </div>
        </div>
        <div class="clear"></div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 block">
        	<span>Roster - Time sheets Only</span>
            <div class="btn-group">
              <button type="button" class="btn btn-default switch">Yes</button>
              <button type="button" class="btn btn-danger switch">No</button>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 block">
        	<span>Payroll Only </span>
            <div class="btn-group">
              <button type="button" class="btn btn-default switch">Yes</button>
              <button type="button" class="btn btn-danger switch">No</button>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 block">
        	<span>Roster & Payroll</span>
            <div class="btn-group">
              <button type="button" class="btn btn-success switch">Yes</button>
              <button type="button" class="btn btn-default switch">No</button>
            </div> 
        </div>
    </div>
</div><!-- you run your payroll-->

<!-- we run your payroll-->
<div class="box">
    <div class="container">
    	<div class="col-xs-12">
            <div class="col-xs-8 center">
        		<div class="icon-bg"><i class="fa fa-desktop minus-2x"></i><i class="fa fa-refresh minus-2x"></i></div>
            	<h1>The Software & <span>We</span> Run Your Payroll</h1>
            </div>
        </div>
        <div class="clear"></div>
        <div class="col-xs-12 block">
        	<span>You do your roster & we do your pay run</span>
            <div class="btn-group">
              <button type="button" class="btn btn-success switch">Yes</button>
              <button type="button" class="btn btn-default switch">No</button>
            </div> 
        </div>
    </div>
</div><!-- we run your payroll-->

<!-- tells us about your franchise -->
<div class="box">
    <div class="container">
    	<div class="col-xs-12">
        	<div class="col-xs-8 center">
               <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="icon-bg"><i class="fa fa-question-circle"></i></div>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                    <h1>Tell Us About Your Franchise</h1>
                    <span class="display-block"><span class="imp">You</span> do your roster & <span class="imp">We</span> do yourpay run</span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 block center vgap">
            <div class="form-group">
              <input name="avg_staff" type="text" class="form-control" placeholder="Enter The Average Number Of Staff Per Organisation">
            </div>
            <div class="form-group">
              <input name="no_of_sites" type="text" class="form-control" placeholder="Enter The Number Of Sites">
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
              <input name="name" type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input name="phone" type="text" class="form-control" placeholder="Your Phone Number">
            </div>
            <div class="form-group">
              <input name="email" type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <button type="button" class="btn btn-info btn-large">GET QUOTE</button>
            </div>
        </div>
    </div>
</div><!-- get a quote  -->

<script>

$(function(){
	$('.switch').click(function(){
		toggle_switch($(this));
		
	});
});

function toggle_switch(obj){
	var $this = obj;
	
}


</script>