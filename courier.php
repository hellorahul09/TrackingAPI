
if(strpos(strtolower($record->courier), 'delhivery') !== false)
{
   
   echo "<td><a href='https://www.delhivery.com/track/package/$record->AWB'>".$record->AWB."</a></td>";
   
}


elseif(strpos(strtolower($record->courier), 'tirupati') !== false)
{
   
   echo "<td><a href='http://www.shreetirupaticourier.net/Frm_DocTrack.aspx?docno=$record->AWB'>".$record->AWB."</a></td>";
   
}


elseif(strpos(strtolower($record->courier), 'dtdc') !== false)
{
   
   echo "<td><a href='https://tracking.dtdc.com/ctbs-tracking/customerInterface.tr?submitName=showCITrackingDetails&cType=Consignment&cnNo=$record->AWB'>".$record->AWB."</a></td>";
   
}

elseif(strpos(strtolower($record->courier), 'xpressbee') !== false)

{
   
   echo "<td><a href='https://www.xpressbees.com/track?isawb=Yes&trackid=$record->AWB'>".$record->AWB."</a></td>";
   
}



elseif(strpos(strtolower($record->courier), 'ecom') !== false)
{
   
   echo "<td><a href='https://ecomexpress.in/tracking/?awb_field=$record->AWB'>".$record->AWB."</a></td>";
   
}


elseif(strpos(strtolower($record->courier), 'fedex') !== false)
{
   
   echo "<td><a href='https://www.fedex.com/apps/fedextrack/index.html?action=track&tracknumbers=$record->AWB'>".$record->AWB."</a></td>";
   
}


elseif(strpos(strtolower($record->courier), 'dhl') !== false)
{
   
   echo "<td><a href='https://www.dhl.com/en/express/tracking.shtml?AWB=$record->AWB'>".$record->AWB."</a></td>";
   
}


elseif(strpos(strtolower($record->courier), 'trackon') !== false)
{
   
   echo "<td><a href='https://www.trackingmore.com/trackon-tracking.html?number=$record->AWB'>".$record->AWB."</a></td>";
   
}

elseif(strpos(strtolower($record->courier), 'bluedart') !== false)
{
   
   echo "<td><a href='https://trackcourier.io/track-and-trace/blue-dart-courier/$record->AWB'>".$record->AWB."</a></td>";
   
}

else

{echo "<td>".$record->AWB."</td>";}
