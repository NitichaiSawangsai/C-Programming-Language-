<?php
	include '../Controller/class/showcss.php';
	include '../Controller/class/tablecss.php';
	session_start();
        mysqli_connect("localhost","root","","mew");

	if($_SESSION['Username']==""){
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "ADMIN"){
		echo "This page for Admin only!";
		exit();
	}
?>


<!DOCTYPE html>
<html>
    <title>GUNAUG BANKING</title>
		<?php
					showcss();
					tablecss_purple();
		      tablecss_green();
		      tablecss_Orange();
		?>

<body>
<BR><BR><BR>

	<div class="col-md-12"> <!-- แท็บเมนู -->
	      <header id="topnav" class="navbar navbar-fixed-top navbar-red">
	        <div class="logo-area">
						<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg" onClick='location.replace("admin_page.php")'>
								<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
										<span class="icon-bg"> <i><img src="../jpg/2.12.png" width="30" height="30"></i> </span>
								</a>
						</span>  <!-- ท้ายส่วนปุ่มเมนูหลัก -->
	          	 <BR> <font face = "Alien Encounters" besefont size = "4" color = "#FFFF99"> GUNANG BANKING  </font>
	       	</div>

						<!-- ต้นคำสั่งคลิกแล้วแสดงเมนู -->
						<div class="toolbar-icon-bg hidden-xs" id="toolbar-search" ng-class="{ active: getLayoutOption('showSmallSearchBar') }">
									<div class="input-group">
											<span class="input-group-btn"><button class="btn" type="button"><i><img src="../jpg/2.png" width="30" height="30"></i></button></span>
														<input type="text" class="form-control" placeholder="   Search...">
									    </span>
									</div> <!-- ท้ายคำสั่งค้นหาข้อมูล -->
						</div>
	              <ul class="nav navbar-nav pull-right toolbar">
	              		<li class="dropdown ng-hide" ng-show="!isLoggedIn">
	              					<a href="logout.php" style="font-size: 14px"> <i><img src="../jpg/logout.png" width="30" height="30"></i> <font face = "Alfphabet" besefont size = "3"> Log out </font></a>
							  		</li>
								</ul>
	</div>   <!-- จบแท็บเมนู -->
	<CENTER>
	<div class="col-md-12">  <!-- เมนูหลัก -->
	      <div class="col-md-6">
					<BR>
	          		<div class="col-md-2">
												<a href="withdraw.php">
	                  			<div class="btn btn-midnightblue btn-sm-body">
														    <i><img src="../jpg/deposit.png" width="30" height="30"></i>
											 					&nbsp; ฝากเงิน
				            			</div>
												</a>
	          		</div>
	        <div class="col-md-3">
									<a href="Edit_data1.php">
	                  <div class="btn btn-midnightblue btn-sm-body">
											   <i><img src="../jpg/Edit.png" width="30" height="30"></i>
	                       แก้ไขข้อมูลตัวเอง
				            </div>
									</a>
	        </div>

	       </div>
	</div>
	</CENTER> <BR><BR><BR><BR> <!-- จบเมนูหลัก -->

	  <div class="col-md-12">      <!-- เริ่มโชว์ด้านซ้าย -->
	        <div class="col-md-4"> <!-- โชว์ข้อมูลประวัติ -->
	            <div class="panel panel-teal" style="visibility: visible; opacity: 1; display: block; transform: translateY(0px);">
	                <div class="panel-heading"> <h2> <font face = "TH Sarabun New" besefont size = "5"> ประวัติส่วนตัว </font> </h2> </div>
	            <div class="panel-body">
								<font face = "Arial Unicode MS" besefont size = "3">
	                			<td>&nbsp;&nbsp;&nbsp;&nbsp;</tb>
	                		<font face = "Bodoni MT Black" besefont size = "3">  <?php echo "Username : "; ?> </font>
	                			<td>&nbsp;&nbsp;&nbsp;&nbsp;</tb>
	                			<?php echo $_SESSION["Username"];?>

	            		<BR><BR>
	                			<td>&nbsp;&nbsp;&nbsp;&nbsp;</tb>
	                		<font face = "Bodoni MT Black" besefont size = "3">  <?php echo "Name : "; ?> </font>
	                			<td>&nbsp;&nbsp;&nbsp;&nbsp;</tb>
	                		<font face = "Arial Unicode MS" besefont size = "3"> <?php echo $_SESSION["Prefix"];?> </font>
													<?php echo "&nbsp;&nbsp;&nbsp;".$_SESSION["Fname"]."&nbsp;&nbsp;&nbsp;&nbsp;".$_SESSION["Lname"]; ?>
	                				<td>&nbsp;&nbsp;&nbsp;&nbsp;</tb>
	            		<BR><BR>
	                				<td>&nbsp;&nbsp;&nbsp;&nbsp;</tb>
	                  	<font face = "Bodoni MT Black" besefont size = "3">  <?php echo "Email : "; ?> </font>
	                				<td>&nbsp;&nbsp;&nbsp;</tb>
	                		    <?php echo $_SESSION["Email"]; ?>
	            		<BR><BR>
	                				<td>&nbsp;&nbsp;&nbsp;&nbsp;</tb>
	                		<font face = "Bodoni MT Black" besefont size = "3">	 <?php echo "Tel. : "; ?>  </font>
											    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</tb>
	                				<?php echo $_SESSION["Tel"]; ?>
	          		</font>
	            </div>
	          </div>

						<div class="col-md-12">  <!-- เริ่มปฎิทิน และ นาฬิกา-->
							<div class="col-md-6">  <!-- เริ่มปฎิทิน -->
										<script language="javascript" type="text/javascript">
												var day_of_week = new Array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');
												var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
												//  DECLARE AND INITIALIZE VARIABLES
												var Calendar = new Date();
												var year = Calendar.getFullYear();     // Returns year
												var month = Calendar.getMonth();    // Returns month (0-11)
												var today = Calendar.getDate();    // Returns day (1-31)
												var weekday = Calendar.getDay();    // Returns day (1-31)
												var DAYS_OF_WEEK = 7;    // "constant" for number of days in a week
												var DAYS_OF_MONTH = 31;    // "constant" for number of days in a month
												var cal;    // Used for printing
												Calendar.setDate(1);    // Start the calendar day at '1'
												Calendar.setMonth(month);    // Start the calendar month at now
												/* VARIABLES FOR FORMATTING
												NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR' tags to customize your caledanr's look. */
												var TR_start = '<TR>';
												var TR_end = '</TR>';
												var highlight_start = '<TD WIDTH="30"><TABLE CELLSPACING=0 BORDER=1 BGCOLOR=DEDEFF BORDERCOLOR=CCCCCC><TR><TD WIDTH=20><B><CENTER>';
												var highlight_end   = '</CENTER></TD></TR></TABLE></B>';
												var TD_start = '<TD WIDTH="30"><CENTER>';
												var TD_end = '</CENTER></TD>';
												/* BEGIN CODE FOR CALENDAR
												NOTE: You can format the 'BORDER', 'BGCOLOR', 'CELLPADDING', 'BORDERCOLOR'tags to customize your calendar's look.*/
												cal =  '<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=0 BORDERCOLOR=BBBBBB><TR><TD>';
												cal += '<TABLE BORDER=0 CELLSPACING=0 CELLPADDING=2>' + TR_start;
												cal += '<TD COLSPAN="' + DAYS_OF_WEEK + '" BGCOLOR="#EFEFEF"><CENTER><B>';
												cal += month_of_year[month]  + '   ' + year + '</B>' + TD_end + TR_end;
												cal += TR_start;
												//   DO NOT EDIT BELOW THIS POINT  //
												// LOOPS FOR EACH DAY OF WEEK
												for(index=0; index < DAYS_OF_WEEK; index++) { // BOLD TODAY'S DAY OF WEEK
														if(weekday == index){
																cal += TD_start + '<B>' + day_of_week[index] + '</B>' + TD_end;  // PRINTS DAY
														}else{
																cal += TD_start + day_of_week[index] + TD_end;
														}
												 }
												 cal += TD_end + TR_end;
												 cal += TR_start;
												 // FILL IN BLANK GAPS UNTIL TODAY'S DAY
												 for(index=0; index < Calendar.getDay(); index++){
														cal += TD_start + '  ' + TD_end;
												 }
												 // LOOPS FOR EACH DAY IN CALENDAR
											for(index=0; index < DAYS_OF_MONTH; index++){
														if( Calendar.getDate() > index ){  // RETURNS THE NEXT DAY TO PRINT
																week_day =Calendar.getDay();   // START NEW ROW FOR FIRST DAY OF WEEK
																if(week_day == 0){
																	cal += TR_start;
																}
																if(week_day != DAYS_OF_WEEK){    // SET VARIABLE INSIDE LOOP FOR INCREMENTING PURPOSES
																		var day  = Calendar.getDate(); // HIGHLIGHT TODAY'S DATE
																		if( today==Calendar.getDate() ){
																				cal += highlight_start + day + highlight_end + TD_end;  // PRINTS DAY
																		}else{
																				cal += TD_start + day + TD_end;
																		}
																 } // END ROW FOR LAST DAY OF WEEK
																if(week_day == DAYS_OF_WEEK){
																	cal += TR_end;
																}
															}  // INCREMENTS UNTIL END OF THE MONTH
															Calendar.setDate(Calendar.getDate()+1);
												 }// end for loop
												cal += '</TD></TR></TABLE></TABLE>'; //  PRINT CALENDAR
												document.write(cal); //  End -->
									  </script>
							 </div> <!-- จบปฎิทิน -->

			         <div class="col-md-6">   <!-- เริ่ม นาฬิกา -->
					  	<BR>
								 <font face = "Broadway" besefont size = "6">
								 	  <div id="css_time_run">
									 			 <?=date("H:i:s")?>
								 		</div>
									<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
									<script type="text/javascript">
										$(function(){
			    							var nowDateTime=new Date("<?=date("m/d/Y H:i:s")?>");
			    							var d=nowDateTime.getTime();
			    							var mkHour,mkMinute,mkSecond;
			     							setInterval(function(){
			        							d=parseInt(d)+1000;
			        							var nowDateTime=new Date(d);
			        							mkHour = new String(nowDateTime.getHours()+5);
			        							if(mkHour.length==1){
			            							mkHour="0"+mkHour;
			        							}
			        							mkMinute=new String(nowDateTime.getMinutes());
			        							if(mkMinute.length==1){
			            							mkMinute="0"+mkMinute;
			        							}
			        							mkSecond=new String(nowDateTime.getSeconds());
			        							if(mkSecond.length==1){
			            							mkSecond="0"+mkSecond;
			        							}
			        							var runDateTime=mkHour+":"+mkMinute+":"+mkSecond;
			        							$("#css_time_run").html(runDateTime);
			     				 			},1000);
								 	  });
								  </script>
								 </font>
							 </div> <!-- จบ นาฬิกา -->
						 </div>  <!-- จบ ปฎิทิน และ นาฬิกา-->
			 </div>  <!-- จบโชว์ด้านซ้าย -->

           <div class="col-md-8">   <!-- ตารางข้อมูลลูกค้าทั้งหมด -->
						 		<?php
							 			$objConnect = mysqli_connect("localhost","root","","mew") or die("Error Connect to Database");
							 			$strSQL     = "SELECT * FROM person";
							 			$objQuery   = $objConnect->query($strSQL) or die ("Error Query [".$strSQL."]");

										$sql        = "SELECT * FROM  login";
									  $num1       = $objConnect->query($sql) or die ("Error Query [".$sql."]");

						 		?>
								<h2>   <font face = "Alien Encounters" besefont size = "5" >ผู้ดูแลระบบทั้งหมดของ GUNAUG BANKING </font></h2>
						<div class="datagrid_purple">
						  <table width="600" border="1">
									<thead>
											<tr>
												<th width="5"> <div align="center">Username </div> </th>
											 <th width="30"> <div align="center">Name </div></th>
											 <th width="30"> <div align="center">Email </div></th>
											 <th width="10"> <div align="center">Tel </div></th>
											 </tr>
										</thead>
									<?php
										$count=1;
									  while($objResult = mysqli_fetch_array($objQuery)) {
											$objlogin = mysqli_fetch_array($num1);
								      if($objlogin["Status"] == "ADMIN"){
									 				$class_color = "";
													if($count%2 == 1){
														$class_color = "alt";
													}
									 ?>
									 <tr class="<?php echo $class_color;?>">
													 <td><div align="center"><?php echo $objResult["Username"];?></div>                               </td>
													 <td><?php echo $objResult["Prefix"]."       ".$objResult["Fname"]."      ".$objResult["Lname"];?></td>
													 <td align="left">       <?php echo $objResult["Email"];?>                                        </td>
													 <td align="center">     <?php echo $objResult["Tel"];  ?>                                        </td>
									 </tr>
						  <?php
							            $count++;
										  }
								 	 }
									 $objConnect->close();
							?>
							<tfoot>
	                  <tr> <td colspan="4">
	                            <div id="paging">
	                                <ul><li><a href="#"><span>Previous</span></a></li>
	                                <li><a href="#" class="active"><span>1</span></a></li>
	                                <li><a href="#"><span>2</span></a></li>
	                                <li><a href="#"><span>3</span></a></li>
	                                <li><a href="#"><span>4</span></a></li>
	                                <li><a href="#"><span>5</span></a></li>
	                                <li><a href="#"><span>Next</span></a>
	                                </li></ul></div></tr>
	            </tfoot>
					   </table>
          </div>









								 <?php
 							 			$objConnect = mysqli_connect("localhost","root","","mew") or die("Error Connect to Database");
 							 			$strSQL     = "SELECT * FROM person";
 							 			$objQuery   = $objConnect->query($strSQL) or die ("Error Query [".$strSQL."]");

 										$sql        = "SELECT * FROM  login";
 									  $num1       = $objConnect->query($sql) or die ("Error Query [".$sql."]");

 						 		?>

          <BR><BR>
							<h2>   <font face = "Alien Encounters" besefont size = "5" >ข้อมูลลูกค้าทั้งหมดของ GUNAUG BANKING </font></h2>
							<div class="datagrid_green">
							  <table width="600" border="1">
										<thead>
												<tr>
													<th width="5"> <div align="center">Username </div> </th>
												 <th width="30"> <div align="center">Name </div></th>
												 <th width="30"> <div align="center">Email </div></th>
												 <th width="10"> <div align="center">Tel </div></th>
												 </tr>
											</thead>
										<?php
											$count=1;
										  while($objResult = mysqli_fetch_array($objQuery)) {
												$objlogin = mysqli_fetch_array($num1);
									      if($objlogin["Status"] == "USER"){
										 				$class_color = "";
														if($count%2 == 1){
															$class_color = "alt";
														}
										 ?>
										 <tr class="<?php echo $class_color;?>">
														 <td><div align="center"><?php echo $objResult["Username"];?></div>                               </td>
														 <td><?php echo $objResult["Prefix"]."       ".$objResult["Fname"]."      ".$objResult["Lname"];?></td>
														 <td align="left">       <?php echo $objResult["Email"];?>                                        </td>
														 <td align="center">     <?php echo $objResult["Tel"];  ?>                                        </td>
										 </tr>
							  <?php
								            $count++;
											  }
									 	 }
										 $objConnect->close();
								?>
								<tfoot>
		                  <tr> <td colspan="4">
		                            <div id="paging">
		                                <ul><li><a href="#"><span>Previous</span></a></li>
		                                <li><a href="#" class="active"><span>1</span></a></li>
		                                <li><a href="#"><span>2</span></a></li>
		                                <li><a href="#"><span>3</span></a></li>
		                                <li><a href="#"><span>4</span></a></li>
		                                <li><a href="#"><span>5</span></a></li>
		                                <li><a href="#"><span>Next</span></a>
		                                </li></ul></div></tr>
		            </tfoot>
						   </table>
	          </div>


	      </div>
	   </div>
</body>
</html>