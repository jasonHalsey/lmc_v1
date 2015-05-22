<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Construction | Portland Oregon | Bid Room | LMC Incorporated</title>
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link href="css/lmc.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/swfobject.js"></script>
<script type="text/javascript" src="js/jquery-1.1.3.1.min.js"></script> 
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="js/jquery.lavalamp.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>

<script type="text/javascript">
$(function() {
    $("#slideMen").lavaLamp({
    fx: "backout", 
    speed: 700,
    click: function(event, menuItem) {
     return true;}
            });
        });
</script>
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
<script type="text/javascript">
$(document).ready(function() { 
    $("table").tablesorter({ 
        // pass the headers argument and assing a object 
        headers: { 
            // assign the secound column (we start counting zero) 
            2: { 
                // disable it by setting the property sorter to false 
                sorter: false 
            }, 
            
        } 
    }); 
});


</script>

</head>

<body>

<div id="contentContainer">
  <div id="header">
  <div id="logo"></div>
<div id="navContainSub">
                <div id="mainNavigation">
                <ul class="lavaLampNoImage" id="slideMen">
                 <li><a href="contact_LMC.html">Contact</a></li>
                 <li class="current"><a href="LMC_bid_room.php">Bid Room</a></li>
                 <li ><a href="LMC_projects.php">Projects</a></li>
                 <li ><a href="LMC_news.html">News</a></li>
                 <li><a href="LMC_services.html">Services</a></li>
                 <li><a href="about_LMC.html">About</a></li>
                 <li><a href="index.html">Home</a></li>
                </ul></div>
	 </div><!-- End navContainSub -->
</div><!-- End header -->

<div id="aboutContent" class="fullWidthContent">


	<h1>Bid Room</h1>
    <h2> New To LMC?</h2>
    <p>Since we subcontract the majority of our work, we're always looking for new talent and suppliers. If you're interested in working with us, download and complete the Pre-Qualification Form. That way we'll have you in our database and can notify you when bid opportunities arise.</p>
    
    <div id="PQcontainer" class="clearfix">
    <div id="box_1" class="DLbox"><h3>Pre-Qualification Form</h3></div>
    <div id="box_1" class="DLbox"><h3>Word Download</h3>
    	<div id="values_blank" class="Wordbtn_1"><a href="downloads/VENDOR-SUB_PREQUAL.doc" target="_blank">Download Word Pre-Qual</a></div></div>
    <div id="box_1" class="DLbox"><h3>PDF Download</h3>
    	<div id="order_sample" class="pdfdbtn_1"><a href="downloads/PREQUAL_FORM.pdf" target="_blank">Download PDF Pre-Qual</a></div></div>
    </div>
    
    <h2> Already a Subcontractor or Supplier?</h2>
    <p>Here are some forms to help you out</p>
    <div id="DLcontainer" class="clearfix">
    <div id="box_1" class="DLbox"><h3>Subcontractor Invoice Downloads</h3>
    	<div id="invoice_sample" class="DLbtn_1"><a href="downloads/sample_invoice.xls" target="_blank">Sample </a></div>
    	
    	<div id="invoice_blank" class="DLbtn_1"><a href="downloads/blank_invoice.xls" target="_blank">Blank </a></div>
    </div>
    	
    <div id="box_1" class="DLbox"><h3>Subcontractor Schedule of Values Download</h3>
    	<div id="values_blank" class="DLbtn_1"><a href="downloads/blank_values.xls" target="_blank">Blank Schedule of Values</a></div></div>
    <div id="box_1" class="DLbox"><h3>Subcontractor Change Order Requests Downloads</h3>
    	<div id="order_sample" class="DLbtn_1"><a href="downloads/sample_order.xls" target="_blank">Sample Order</a></div><div id="order_blank" class="DLbtn_1"><a href="downloads/blank_order.xls" target="_blank">Blank Order</a></div></div>
   
    </div> 
    
    <h2>Ready to bid?</h2>
    <p>If you're already on our supplier list, we invite you to bid on any of the jobs below. Don't see any bid opportunities? Check in again-we're constantly updating the list.</p>
    
  
    	<table id="myTable" class="tablesorter"> 
<thead> 
<tr > 
    <th class="due">Bid Due</th> 
    <th class="project">Project Name</th> 
    <th class="last">Description</th> 
     
</tr> 
</thead> 
<tbody>

<tr class="even"> 
    <td><p>November 13th, 2014</p></td> 
    <td><p>Metzger Park Apartments</p>
    
     <p><b><span style="text-decoration:underline;">Drawings and Specs</span></b><br />*Complete Specs available below</p>
    
   <table>
   	<tr>
   		
   		<td>
   		<h1>Specifications &amp; Drawings</h1>
   			<ul class="planList_drop">
   			
   			
   				<li><h2>Specs</h2>
   				<?php
						$dirname = "pdf/metzger_park";
						$modDir = "pdf/metzger_park/";
						$dir = opendir($dirname);
						echo '<select id="drop2" name="file0" >';
						echo '<option value="">Select your file for download</option>';
						while(false != ($file = readdir($dir)))
						        {
						            if(($file != ".") and ($file != ".."))
						                {
						        echo "<option value=". $modDir . $file.">$file</option>";
						               }
						        }
						                echo '</select>';
						?>
   				</li>
   				<li><h2>Drawings</h2>
   				<?php
						$dirname = "pdf/metzger_park/drawings";
						$modDir = "pdf/metzger_park/drawings/";
						$dir = opendir($dirname);
						echo '<select id="drop3" name="file0" >';
						echo '<option value="">Select your file for download</option>';
						while(false != ($file = readdir($dir)))
						        {
						            if(($file != ".") and ($file != ".."))
						                {
						        echo "<option value=". $modDir . $file.">$file</option>";
						               }
						        }
						                echo '</select>';
						?>
   				</li>
   				
   			</ul>
   		</td>
   		
   	</tr>

   </table></p>
   
  
    <td><p><b>Project Address:</b> 10025 & 10045 SW 85th Ave, Tigard, OR 97223</p>  
    
    <p><b>Work Summary:</b> </p>
    <p>The project scope includes new siding, windows, exterior doors, elevated walkway decking replacement, limited site concrete, site railings, landscaping, painting, miscellaneous paving and striping. Upgrades to 32 residential units is also included in the scope. This includes plumbing supply replacement, bath fan replacement and adding ducted range hoods to all units.</p>
    <p></p>


<p>Provide an itemized cost breakdown for your scope of work. Bid all work per plans and specifications and supplemental bid documents. Bidder Questions & Substitution Requests due no later than November 4th, 2014 at 5:00 pm. It is the subcontractor's responsibility to include all back up documentation for all substitution requests.</p> 


    <p><b>Project Contact:</b> Ryan Duffin</p>
   
    <p><b>Plans</b> All Plans and Specifications are available for viewing at LMC's office and website as well as CDs available to take. Each Sub-contractor is solely
responsible for viewing/reviewing any and all documents required to bid a complete Scope of Work. Full size prints may be ordered from
Precision Images at subcontractors expense. Plans will also be available at limited Plan Centers listed below.</p>
    
    <p><b>LMC Office<b><br />
19200 SW Teton Avenue<br />
Tualatin, Oregon 97062<br />
(503) 646-0521</b>p>

<p><b>Precision Images<b><br />
900 SE Sandy Blvd<br />
Portland, OR 97214<br />
(503) 274-2030</b></p>
    
    </td>  
    
</tr>



<!-- #################################################################################################################################### -->



<tr class="odd"> 
    <td><p>September 26th, 2014</p></td> 
    <td><p>Aspen Villas</p>
    
     <p><b><span style="text-decoration:underline;">Drawings and Specs</span></b><br />*Complete Specs available below</p>
    
   <table>
   	<tr>
   		
   		<td>
   		<h1>Specifications &amp; Drawings</h1>
   			<ul class="planList_drop">
   			
   			
   				<li><h2>Drawings and Docs</h2>
   				<?php
						$dirname = "pdf/aspen_villas";
						$modDir = "pdf/aspen_villas/";
						$dir = opendir($dirname);
						echo '<select id="drop16" name="file0" >';
						echo '<option value="">Select your file for download</option>';
						while(false != ($file = readdir($dir)))
						        {
						            if(($file != ".") and ($file != ".."))
						                {
						        echo "<option value=". $modDir . $file.">$file</option>";
						               }
						        }
						                echo '</select>';
						?>
   				</li>
   				
   			</ul>
   		</td>
   		
   	</tr>

   </table></p>
   
  
    <td><p><b>Project Address:</b> 933 NW Canal Blvd. Redmond, OR 97756</p>  
    
    <p><b>Work Summary:</b> </p>
    <p>The project scope includes new siding, roofing, windows, exterior doors, exterior stair replacement, limited site concrete, landscaping, site fencing, painting, miscellaneous MEP, miscellaneous paving and striping. Upgrades to 40 residential units is also included in the scope. This includes adding washer, dryers, new cabinets, countertops, framing, drywall, flooring, etc.</p>
    <p></p>


<p>Provide an itemized cost breakdown for your scope of work. Bid all work per plans and specifications and supplemental bid documents. Bidder Questions & Substitution Requests due no later than September 22, 2014 at 5:00 pm. It is the subcontractor's responsibility to include all back up documentation for all substitution requests.</p> 


    <p><b>Project Contact:</b> Ryan Duffin</p>
   
    <p><b>Plans</b> All Plans and Specifications are available for viewing at LMC's office and website as well as CDs available to take. Each Sub-contractor is solely
responsible for viewing/reviewing any and all documents required to bid a complete Scope of Work. Full size prints may be ordered from
Precision Images at subcontractors expense. Plans will also be available at limited Plan Centers listed below.</p>
    
    <p><b>LMC Office<b><br />
19200 SW Teton Avenue<br />
Tualatin, Oregon 97062<br />
(503) 646-0521</b>p>

<p><b>Precision Images<b><br />
900 SE Sandy Blvd<br />
Portland, OR 97214<br />
(503) 274-2030</b></p>
    
    </td>  
    
</tr>



<!-- #################################################################################################################################### -->

<tr class="even"> 
    <td><p>July 11, 2014</p></td> 
    <td><p>Los Jardines de la Paz Partial Exterior Renovation</p>
    
     <p><b><span style="text-decoration:underline;">Drawings and Specs</span></b><br />*Complete Specs available below</p>
    
   <table>
   	<tr>
   		
   		<td>
   		<h1>Specifications &amp; Drawings</h1>
   			<ul class="planList_drop">
   			
   			
   				<li><h2>Drawings and Docs</h2>
   				<?php
						$dirname = "pdf/los_jardine";
						$modDir = "pdf/los_jardine/";
						$dir = opendir($dirname);
						echo '<select id="drop13" name="file0" >';
						echo '<option value="">Select your file for download</option>';
						while(false != ($file = readdir($dir)))
						        {
						            if(($file != ".") and ($file != ".."))
						                {
						        echo "<option value=". $modDir . $file.">$file</option>";
						               }
						        }
						                echo '</select>';
						?>
   				</li>
   				
   				<li><h2>Addendum 1</h2>
   				<?php
						$dirname = "pdf/los_jardine/adden_1";
						$modDir = "pdf/los_jardine/adden_1/";
						$dir = opendir($dirname);
						echo '<select id="drop8" name="file0" >';
						echo '<option value="">Select your file for download</option>';
						while(false != ($file = readdir($dir)))
						        {
						            if(($file != ".") and ($file != ".."))
						                {
						        echo "<option value=". $modDir . $file.">$file</option>";
						               }
						        }
						                echo '</select>';
						?>
   				</li>
   				
   			</ul>
   		</td>
   		
   	</tr>

   </table></p>
   
  
    <td><p><b>Project Address:</b> 35530 NE 60th Ave, Portland, OR</p>  
    
    <p><b>Work Summary:</b> </p>
    <p>The project scope includes rough carpentry, new siding, roofing, windows, limited site concrete, painting, miscellaneous MEP,
and waterproofing. Limited finish carpentry and window coverings are also included.</p>
    <p></p>


<p>Provide an itemized cost breakdown for your scope of work. Bid all work per plans and specifications and supplemental bid documents.
Bidder Questions & Substitution Requests due no later than July 11th at 5:00 pm. It is the subcontractor's responsibility to include all back up
documentation for all substitution requests.</p> 

<p>There will be one opportunity to view interiors prior to the bid time. Site walk will be Wednesday, July 9th at 1 PM at Los Jardines
Apartments.</p>


    <p><b>Project Contact:</b> Noel Southard</p>
   
    <p><b>Plans</b> All Plans and Specifications are available for viewing at LMC's office and website as well as CDs available to take. Each Sub-contractor is solely
responsible for viewing/reviewing any and all documents required to bid a complete Scope of Work. Full size prints may be ordered from
Precision Images at subcontractors expense. Plans will also be available at limited Plan Centers listed below.</p>
    
    <p><b>LMC Office<b><br />
19200 SW Teton Avenue<br />
Tualatin, Oregon 97062<br />
(503) 646-0521</b>p>

<p><b>Precision Images<b><br />
900 SE Sandy Blvd<br />
Portland, OR 97214<br />
(503) 274-2030</b>p>
    
    </td>  
    
</tr>



<!-- #################################################################################################################################### -->



<tr class="odd"> 
    <td><p>Wednesday, May 14th</p></td> 
    <td><p>The Pointe Apartments- Leasing Office/Clubhouse Renovation </p>
    
     <p><b><span style="text-decoration:underline;">Drawings and Specs</span></b><br />*Complete Specs available below</p>
    
   <table>
   	<tr>
   		
   		<td>
   		<h1>Specifications &amp; Drawings</h1>
   			<ul class="planList_drop">
   			
   			
   				<li><h2>Drawings and Docs</h2>
   				<?php
						$dirname = "pdf/the_point";
						$modDir = "pdf/the_point/";
						$dir = opendir($dirname);
						echo '<select id="drop2" name="file0" >';
						echo '<option value="">Select your file for download</option>';
						while(false != ($file = readdir($dir)))
						        {
						            if(($file != ".") and ($file != ".."))
						                {
						        echo "<option value=". $modDir . $file.">$file</option>";
						               }
						        }
						                echo '</select>';
						?>
   				</li>
   				
   			</ul>
   		</td>
   		
   	</tr>

   </table></p>
   
  
    <td><p><b>Project Address:</b> 3708 NE 109th Ave., Vancouver, WA 98682</p>  
    
    <p><b>Work Summary:</b> </p>
    <p> The project consists of renovations to the existing leasing office and clubhouse at The Pointe Apartments in 
Vancouver, WA. Work includes demolition, wood stud framing & drywall, new doors and frames with relights, door hardware, 
painting, flooring, tile,casework, new lighting, new interior and exterior windows, fireplace.</p>
    <p></p>


<p>Instructions : Provide an itemized cost breakdown of your scope of work with a breakdown of costs for each project bid item. Bid all work per 
plans and specs, but submit with your bid any recommended alternates that may provide an advantage to the Owner.</p> 


    <p><b>Project Contact:</b> Richard Ray</p>
   
    <p><b>Plan</b> All Plans are available for viewing and copying via the links to the left, or LMC Construction has .pdf copies of plans & specs available on CD for pick-up at front desk. We will not be providing hard copies of plans or specs.</p>
    
    
    </td>  
    
</tr> 







<!-- ############################################ ############################################# ############################################### -->

</td> 
</tr> 

</tbody> 
</table> 

    
	  
</div><!-- End aboutContent -->


<div id="BtmNavContain">
	<div id="BtmNavBar">
 	<ul id="navlist">
        <li><a href="index.html">Home</a></li>
        <li><a href="about_LMC.html">About</a></li>
        <li><a href="LMC_services.html">Services</a></li>
        <li><a href="LMC_news.html">News</a></li>
        <li><a href="LMC_projects.php">Projects</a></li>
        <li><a href="LMC_bid_room.html">Bid Room</a></li>
        <li><a href="contact_LMC.html">Contact</a></li>
    </ul>
   </div><!-- End BtmNavBar -->
</div><!-- End BtmNavContain -->
</div><!-- End contentContainer -->

<div id="pageBTM">
	<div class="copyright">&copy; 2009 LMC Incorporated, LLC. All Rights Reserved</div>
</div>


<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-5399122-5");
pageTracker._trackPageview();
} catch(err) {}</script></body>
</html>
