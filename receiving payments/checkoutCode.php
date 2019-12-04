#Paypal gateway https://www.paypal.com/cgi-bin/webscr

<input type="hidden" name="cmd" value="_cart" />  (A) 
<input type="hidden" name="upload" value="1" >   (B) need to specify interface commands for sending cart details
<input type="hidden" name="business" value="business-ID" /> (C) the businessID
<input type="hidden" name="return" value="https://success_url.php" />  (D) a payment success callback URL(Known as return) 
<input type="hidden" name="cancel_return" value="https://failure_url.php" /> (E) a failure URL 
<input type="hidden" name="img_url" value="https://business_logo_url" /> (F) A business logo can be supplied to make the Paypal payment pages better connected visually to the website of the business.The information on lines A through F are fixed. 
<input type="hidden" name="item_name_1" value="Tennis Shoes" />  (G)  
<input type="hidden" name="amount_1" value="151.90" >   
<input type="hidden" name="quantity_1" value="2" /> 
<input type="hidden" name="item_name_2" value="Tennis Balls" />  (H)  The shopping cart details given (lines G through H) must be computed based on customer's cart
<input type="hidden" name="amount_2" value="11.55" >   
<input type="hidden" name="quantity_2" value="3" /> 

function htmlCheckout(&$result_obj.$item_name,$amt_name,$qty_name , $gateway ,$gwValues , $class) // (1) obtaining payment transaction data from the gateway
{ if ($result_obj->num_rows == 0 ) return "";
