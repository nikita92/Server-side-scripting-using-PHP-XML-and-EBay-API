<html>
<head>
<title> Homework 6 Nikita </title>
<script>
function forms(clear) 
{
	
  var elementsform = clear.elements;
  for (i = 0; i < elementsform.length; i++)
{
    field_type = elementsform[i].type.toLowerCase();
    
    switch (field_type)
    
    {
    	case "text":
      
      elementsform[i].value = "";
    
    case "checkbox":
    
        if (elementsform[i].checked)
    
        {
    
            elementsform[i].checked = false;
    
        }
    
        break;
    
    case "select-one":
    
    	    elementsform[i].selectedIndex = 0;
        
        
        break;
    	
    	default:
        break;
    }
}
return false;
}
function validate(form) 
{
  var y = form.keysw.value;
    
  if ( y== null || y == "") 
    {
        alert("Please enter Key Word values");
        return false;
    }
  
  var pricemin = parseInt(form.startingprice.value);
  
  var pricemax = parseInt(form.endingprice.value);
  
  if(isNaN(pricemin)|| isNaN(pricemax))
  {
  alert("Please enter a numeric value");
  }
  if(pricemax < pricemin && pricemax != "" && pricemax != null)
  {
    alert ("The Minimum price must be lesser than the Maximum price");
    return false;
  }
  var handlemax = form.handlemax.value;
  if(handlemax == "" || handlemax ==null)
  	{
  		}
  
  
  else
  {
  	  if(handlemax<1)
    {
    		
      alert("The maximum handling time cannot be less than 1");
      return false;
    }
    
  }
  }
</script>
</head>
<body>

    <table align="center">
     <tr >
    <td rowspan="2" ><img src="ebay.jpg" height="100px;" width="100px;"></td>
  <td>
        <h1>Shopping</h1>
        </td>
    
      </tr>
 </table>
  

<div border= 3px style="margin-left: auto; margin-right: auto;border-style: solid; padding:7px; width: 550px"> 
    	   <p><form name="myForm" method="GET" id="myForm"  onsubmit="return validate()"  action="HW6.php"> 
  
   <tr>
   <td>
    	<b> Key Words*: </b> </td> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <td><input type="text" id="keywords" size="50" name="key" value="<?php echo isset($_GET['(keywords)'])?$_GET['(keywords)']:''?>"> </td> </tr> 
	<hr/>
   
	
  <tr>
   <td>
    	<b> Price Range: </b> </td>  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <td> from $ </td><td> <input type="text" size="4" id="MinPrice" name="MinPrice" value="<?php echo isset($_GET['MinPrice'])?$_GET['MinPrice']:''?>"> </td> <td> </td><td> to $ </td><td><input type="text" size="4" id="MaxPrice" name="MaxPrice" value="<?php echo isset($_GET['MaxPrice'])?$_GET['MaxPrice']:''?>"> </td> </tr>
		<hr/>
    	
	<td> <b>Condition:</b></td> 
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="Condition[1000]" id= "1000" value="1000" 
	<?php if(isset($_GET['Condition']['1000'])){if ($_GET['Condition']['1000'] === "1000") {echo 'checked="checked"';}}?>>&nbsp;New </td>
	
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="Condition[3000]" id= "3000" value="3000" 
	<?php if(isset($_GET['Condition']['3000'])){if ($_GET['Condition']['3000'] === "3000") {echo 'checked="checked"';}}?>>&nbsp;Used </td>
	
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="Condition[4000]" id= "4000" value="4000" 
	<?php if(isset($_GET['Condition']['4000'])){if ($_GET['Condition']['4000'] === "4000") {echo 'checked="checked"';}}?>>&nbsp;Very Good </td>
	
	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="Condition[5000]" id= "5000" value="5000" 
	<?php if(isset($_GET['Condition']['5000'])){if ($_GET['Condition']['5000'] === "5000") {echo 'checked="checked"';}}?>>&nbsp; Good </td>

	<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="Condition[6000]" id= "6000" value="6000" 
	<?php if(isset($_GET['Condition']['6000'])){if ($_GET['Condition']['6000'] === "6000") {echo 'checked="checked"';}}?>>&nbsp; Acceptable </td>
	<br/><hr/>
	
	
	<td>	<b>Buying formats:</b>  </td>    <td> <input type="checkbox" name="buyingformat[FixedPrice]" id="FixedPrice" value="FixedPrice" 
												<?php if(isset($_GET['buyingformat']['FixedPrice'])){if($_GET['buyingformat']['FixedPrice'] === "FixedPrice") {echo 'checked="checked"';}}?>>&nbsp;Buy It Now</td>
											<td> <input type="checkbox" name="buyingformat[Auction]" id="Auction" value="Auction" 
												<?php if(isset($_GET['buyingformat']['Auction'])){if($_GET['buyingformat']['Auction'] === "Auction") {echo 'checked="checked"';}}?>>&nbsp;Auction</td>	
											<td> <input type="checkbox" name="buyingformat[Classified]" id="Classified" value="Classified" 
												<?php if(isset($_GET['buyingformat']['Classified'])){if($_GET['buyingformat']['Classified'] === "Classified") {echo 'checked="checked"';}}?>>&nbsp;Classified Ad</td>	
										<br/><hr/>
										
										
		<b>Seller:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ReturnsAcceptedOnly" value="NA" 
		<?php if(isset($_GET['ReturnsAcceptedOnly'])) echo 'checked="checked"'; ?> >&nbsp;Returned Accepted<br><hr>
					  
		<b>Shipping:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="FreeShippingOnly" id="FreeShippingOnly" value="NA" 
																								<?php if(isset($_POST['FreeShippingOnly'])) echo 'checked="checked"'; ?>>&nbsp;Free Shipping<br/>
				
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ExpeditedShippingType" id ="ExpeditedShippingType" value="NA"    
					 <?php if(isset($_POST['ExpeditedShippingType'])) echo 'checked="checked"'; ?>>&nbsp;Expedited Shipping available<br/>
					 
					 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Max handling time(days):&nbsp;<input type="text" size="5" name="MaxHandlingTime" id="MaxHandlingTime" 
					 value="<?php echo isset($_GET['MaxHandlingTime']) ? $_GET['MaxHandlingTime'] : '' ?>" > 
				
						<br/>
						<hr/>
						
		<b>Sort by:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <select name ="sort" id="sort">
		<option value="BestMatch" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'BestMatch') echo ' selected="selected"';?>  >Best Match</option>
		<option value="PriceHighest" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'PriceHighest') echo ' selected="selected"';?>  >Price: highest first</option>
		<option value="PriceAndShippingHighest" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'PriceAndShippingHighest') echo ' selected="selected"';?>  >Price + Shipping: highest first</option>
		<option value="PriceAndShippingLowest" <?php if(isset($_GET['sort']) && $_GET['sort'] == 'PriceAndShippingLowest') echo ' selected="selected"';?>  >Price + Shipping: lowest first</option>
		</select>
		<br/>
		<hr/>
		<b>Results Per page:</b><select name="res" id ="res">
		<option value="5"  <?php if(isset($_GET['res']) && $_GET['res'] == '5') echo ' selected="selected"';?> >5</option>
		<option value="10" <?php if(isset($_GET['res']) && $_GET['res'] == '10') echo ' selected="selected"';?> >10</option>
		<option value="15" <?php if(isset($_GET['res']) && $_GET['res'] == '15') echo ' selected="selected"';?> >15</option>
		<option value="20" <?php if(isset($_GET['res']) && $_GET['res'] == '20') echo ' selected="selected"';?> >20</option>
		</select>
		
		<hr/>
<div style="float:right;padding-top:5px;padding-right:30px;">

	<button onclick="return validate(this.form);" style="width:80px;">Clear</button>

	<input type="submit" value="Search" name="search" style="width:80px;">

</div>
	<br/>
	</form>
	 </div>

 
  
<?php if(isset($_GET["search"])):
    $ourl="http://svcs.ebay.com/services/search/FindingService/v1?siteid=0?OPERATION-NAME=findItemsAdvanced&SERVICE-VERSION=1.0.0&SECURITY-APPNAME=Universi-67b4-4a4e-b184-7ff2bd4b59e2&GLOBAL-ID=EBAY-US&keywords=".$_GET['key']."&paginationInput.entriesPerPage=".$_GET['res']."&sortorder=".$_GET['sort']."";
    $k =0;
    
    
    if(!empty($_GET['endingprice']))
    {
    $ourl .= "&itemFilter[$k].name=MaxPrice&itemFilter[$k].value=".$_GET['endingprice'];
    $k++;
    }
    if(!empty($_GET['buyingformat'])) {
    $j = 0;
    $ourl .= "&itemFilter[$k].name=ListingType";
    foreach($_GET['buyingformat'] as $check) {
      $ourl .= "&itemFilter[$k].value[$j]=".$check;
      $j++;
    }
    
    		$k++;
    }
 
    
if(!empty($_GET['startingprice']))
    {
    $ourl .= "&itemFilter[$k].name=MinPrice&itemFilter[$k].value=".$_GET['startingprice'];
    $k++;
    }
$sellingact = isset($_GET['selling_seller']) && $_GET['selling_seller']  ? "true" : "false";
    
    if($sellingact == "true")
    {
    $ourl .= "&itemFilter[$k].name=ReturnsAcceptedOnly&itemFilter[$k].value=".$sellingact;
      $k++;
    
    }
    
 if(!empty($_GET['condition'])) 
 {
    $j = 0;
    $ourl.= "&itemFilter[$k].name=Condition";
    foreach($_GET['condition'] as $check) {
      $ourl .= "&itemFilter[$k].value[$j]=".$check;
      $j++;
    }
    $k++;
  }
    
    
    
    $expediteshipavail = isset($_GET['expeditedshippingavailable']) && $_GET['expeditedshippingavailable']  ? "true" : "false";
    
    if($expediteshipavail == "true")
    {      $ourl .= "&itemFilter[$k].name=ExpeditedShippingType&itemFilter[$k].value=".$expediteshipavail;
      $k++;
    }
if(!empty($_GET['handlemax']))
    {
    $ourl .= "&itemFilter[$k].name=MaxHandlingTime&itemFilter[$k].value=".$_GET['handlemax'];
    $k++;
    }
    
    $shippingfree = isset($_GET['shipforfree']) && $_GET['shipforfree']  ? "true" : "false";
    
    if($shippingfree == "true")
    {
    $ourl .= "&itemFilter[$k].name=FreeShippingOnly&itemFilter[$k].value=".$shippingfree;
     $k++;
    }
    $url = simplexml_load_file($ourl);
if(($url->paginationOutput->totalEntries)==0):
    
      echo "</div>";
    
      echo "<center> Results not found </center>";
    
      echo "</div>";
    
      else:
        if ($url->ack == "Success") {
    
        echo "</div>";
    
       				 echo "<center>{$url->paginationOutput->totalEntries}&nbsp;Hits&nbsp;for&nbsp;{$_GET['key']}</center>";
    	
        echo "</div>";
    
          foreach($url->searchResult->item as $item) {
    
            echo "<div><img src=\"{$item->galleryURL}\" style=\"height:250;width:250\"></div>";
    
            echo "<div style=\"margin-left:280px;margin-top:-220px;height:200;\"><a href=\"{$item->viewItemURL}\">{$item->title}</a>";
    
            echo "<div style=\"margin-top:30px;\"><b>Condition:</b>{$item->condition->conditionDisplayName}</div>";
    
            if($item->topRatedListing == "true")
    
            {
    
              echo "<div style=\"margin-top:-38px;margin-left:170px;\"><img src=\"http://cs-server.usc.edu:45678/hw/hw6/itemTopRated.jpg\" style=\"height:70;width:80\"></div>";
    
            }
    
            if($item->listingInfo->listingType == "FixedPrice" || $item->listingInfo->listingType == "StoreInventory")
    
            {
    
              echo "</div>";
            }
    
            if($item->listingInfo->listingType == "Auction")
    
            {
            
              echo "</div>";
            
            }
    		
    		if($item->listingInfo->listingType == "Classified")
            {
             
              echo "</div>";
            
            }
           	
           	if($item->returnsAccepted == "true")
            {
            
              echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSeller Accepts returns";
            
            }
            
            if($item->shippingInfo->shippingServiceCost == "0.0")
            {
            	 
            	  echo "<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspFREE Shipping --";
           	 
           	}
            
            else
            {
              
              echo "<br/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspShipping not FREE --";
            	
            }
            
            if($item->shippingInfo->expeditedShipping == "true")
            {
             
              echo "Expedited Shipping Available --";
            
            }
            
            echo "Handled for shipping is {$item->shippingInfo->handlingTime} day(s)";
            
            echo "</div>";
            
            echo "<b>Price: \${$item->sellingStatus->convertedCurrentPrice}";
            
            if($item->shippingInfo->shippingServiceCost > "0")
            {
            
              echo " (+\${$item->shippingInfo->shippingServiceCost}for shipping)";
            
            }
            
            echo "</b>";
            
            echo "<i> {$item->location}</i>";
            
            echo "</div>";
            
            echo "</div>";
            
            echo "<div><hr/></div>";
          }
          
        echo "</div>";
        echo "</div>";
      }
    ?>
    <?php endif;?>
    <?php endif;?>

<noscript>
</body>
</html>