<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Studenten Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<!-- CSS Eike -->
	<link href="css_eike.css" rel="stylesheet" type="text/css">
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="dropzoneStudent.js"></script>
	<script src="dropzoneDozent.js"></script>
	<link rel="stylesheet" href="dropzoneDozent.css">
	<link rel="stylesheet" href="dropzoneStudent.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="student_dashboard.php">Willkommen Henny</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Einstellungen</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            
			<div class="row" style="margin-bottom:2em; padding-top:1em; margin-left:2%">
                <div class="col-lg-3">
                    <h4 class="page-wrapper">Aktuelle Vorlesung: Datenbanktechnik</h1>
                </div>
                 <div class="col-lg-3">
                    <h4 class="page-wrapper">Dozent: Prof. Dr. Reorg Gichter</h1>
                </div>
                 <div class="col-lg-3">
                    <h4 class="page-wrapper">Raum: B354</h1>
                </div>
                 <div class="col-lg-3">
                    <h4 class="page-wrapper">Zeitraum: 9.00 Uhr - 12.15 Uhr</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			<div class="col-lg-6">
			
			<div class="row">
				<div class="col-lg-6">
                    <div class="bewertungcontainer1 panel panel-yellow" id="bewertung_container" style="overflow: hidden">
                        <div class="bewertung1 panel-heading" id="bewertung_header">
                            Bewertung: Einführung
                        </div>
                      <div class="panel-body">
							<div class="col-lg-12" style="margin: 0 auto">
								<fieldset class="rating">
									<input type="radio" id="star5" name="rating" value="5" onChange="ratingChange(5)"/><label for="star5" title="Rocks!">5 stars</label>
									<input type="radio" id="star4" name="rating" value="4" onChange="ratingChange(4)"/><label for="star4" title="Pretty good">4 stars</label>
									<input type="radio" id="star3" name="rating" value="3" onChange="ratingChange(3)"/><label for="star3" title="Meh">3 stars</label>
									<input type="radio" id="star2" name="rating" value="2" onChange="ratingChange(2)"/><label for="star2" title="Kinda bad">2 stars</label>
									<input type="radio" id="star1" name="rating" value="1" onChange="ratingChange(1)"/><label for="star1" title="Sucks big time">1 star</label>
								</fieldset>
							</div>
							
							<div class="col-lg-3 radios1" style="margin-top:0.3em">
                            <span title="Thema verstanden">
							  <input type="radio" name="like" value="1" id="v1" onChange="verstandenChange()" title="Thema verstanden"/> 
                              <label class="radio" for="v1"></label>
                             </span>
							</div>
							<div class="col-lg-3 radios2" style="margin-top:0.8em">
                            <span title="Thema nicht verstanden">
							  <input type="radio" name="like" value="0" id="v2" onChange="verstandenChange()" title="Thema nicht verstanden"/>
                              <label class="radio" for="v2"></label>
                            </span>
							</div>
							<div class="col-lg-12" style="margin-top:0.5em">
								<div class="form-group input-group">
														<input type="text" class="form-control" id="kommentar" placeholder="Gib einen Kommentar ab">
														<span class="input-group-btn">
															<button class="btn btn-default" type="button" id="sendButton" onClick="sendComment()"><i class="fa fa-comment"></i>
															</button>
														</span>
								</div>
							</div>	
							
						</div>
					</div>
				</div>
				
				<script>
				
					var one_stars = 0;
					var two_stars = 0;
					var three_stars = 0;
					
					var one_comment = null;
					var two_comment = null;
					var three_comment = null;
					
					var one_count = 40;
					var two_count = 40;
					var three_count = 40;
					
					var one_Counter;
					var two_Counter;
					var three_Counter;
					
					var one_verstanden = -1;
					var two_verstanden = -1;
					var three_verstanden = -1;
					
					var radio_button;
					var agenda = 1;
					
					function verstandenChange(){
						switch(agenda){
						case 1:
							if(document.getElementById("v1").checked)
								one_verstanden = 2;
							else
								one_verstanden = 1;
							break;
						case 2:
							if(document.getElementById("v1").checked)
								two_verstanden = 2;
							else
								two_verstanden = 1;
							break;
						case 3:
							if(document.getElementById("v1").checked)
								three_verstanden = 2;
							else
								three_verstanden = 1;
							break;	
						}
					}
					
					function ratingChange(value){
						switch(agenda){
							case 1:
								one_stars = value;
								break;
							case 2:
								two_stars = value;
								break;
							case 3:
								three_stars = value;
								break;
							default:
							break;
						}
					}

					function agendaChange(position){
						
						switch(position){
						 case 1:
						 	//Last agenda
							var comment = document.getElementById("kommentar").value;
							if((!comment == "") && !document.getElementById("kommentar").disabled){
								switch(agenda){
									case 1:
										one_comment = comment;
										break;
									case 2:
										two_comment = comment;
										break;
									case 3:
										three_comment = comment;
										break;
								}
							}
						 	agenda = 1;
							document.getElementById("bewertung_header").innerHTML="Bewertung: Einführung";
							document.getElementById("bewertung_header").className = "panel-heading bewertung1";
							document.getElementById("bewertung_container").className = "bewertungcontainer1 panel panel-yellow";
					
							
							
							verstanden_button = document.getElementById("v1");
							nichtverstanden_button = document.getElementById("v2");
							if(one_verstanden == 2)
								verstanden_button.checked = true;
							else if(one_verstanden == 1)
								nichtverstanden_button.checked = true;
							else{
								verstanden_button.checked = false;
								nichtverstanden_button.checked = false;
							}
							
							if((one_comment === 'undefined' || one_comment === null) && one_count > 30){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							else if(one_count<=30){
								document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+one_count+")";
								document.getElementById("kommentar").disabled = true;
								document.getElementById("sendButton").disabled = true;
							}
							else{
								document.getElementById("kommentar").value = one_comment;
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							switch(one_stars){
								case 1:
									radio_button = document.getElementById("star1");
									radio_button.checked = true;
									break;
								case 2:
									radio_button = document.getElementById("star2");
									radio_button.checked = true;
									break;
								case 3:
									radio_button = document.getElementById("star3");
									radio_button.checked = true;
									break;
								case 4:
									radio_button = document.getElementById("star4");
									radio_button.checked = true;
									break;
								case 5:
									radio_button = document.getElementById("star5");
									radio_button.checked = true;
									break;
								default:
									radio_button = document.getElementById("star5");
									radio_button.checked = false;
									radio_button = document.getElementById("star4");
									radio_button.checked = false;
									radio_button = document.getElementById("star3");
									radio_button.checked = false;
									radio_button = document.getElementById("star2");
									radio_button.checked = false;
									radio_button = document.getElementById("star1");
									radio_button.checked = false;
									break;
							}
							break;
						 case 2:
						 	//Last agenda
							var comment = document.getElementById("kommentar").value;
							if((!comment == "") && !document.getElementById("kommentar").disabled){
								switch(agenda){
									case 1:
										one_comment = comment;
										break;
									case 2:
										two_comment = comment;
										break;
									case 3:
										three_comment = comment;
										break;
								}
							}
						 	agenda = 2;
							document.getElementById("bewertung_header").innerHTML="Bewertung: Weiterführung";
							document.getElementById("bewertung_header").className = "panel-heading bewertung2";
							document.getElementById("bewertung_container").className = "bewertungcontainer2 panel panel-yellow";
							
							verstanden_button = document.getElementById("v1");
							nichtverstanden_button = document.getElementById("v2");
							if(two_verstanden == 2)
								verstanden_button.checked = true;
							else if(two_verstanden == 1)
								nichtverstanden_button.checked = true;
							else{
								verstanden_button.checked = false;
								nichtverstanden_button.checked = false;
							}
							
							if((two_comment === 'undefined' || two_comment === null) && two_count > 30){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							else if(two_count<=30){
								document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+two_count+")";
								document.getElementById("kommentar").disabled = true;
								document.getElementById("sendButton").disabled = true;
							}
							else{
								document.getElementById("kommentar").value = two_comment;
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							
							switch(two_stars){
								case 1:
									radio_button = document.getElementById("star1");
									radio_button.checked = true;
									break;
								case 2:
									radio_button = document.getElementById("star2");
									radio_button.checked = true;
									break;
								case 3:
									radio_button = document.getElementById("star3");
									radio_button.checked = true;
									break;
								case 4:
									radio_button = document.getElementById("star4");
									radio_button.checked = true;
									break;
								case 5:
									radio_button = document.getElementById("star5");
									radio_button.checked = true;
									break;
								default:
									radio_button = document.getElementById("star5");
									radio_button.checked = false;
									radio_button = document.getElementById("star4");
									radio_button.checked = false;
									radio_button = document.getElementById("star3");
									radio_button.checked = false;
									radio_button = document.getElementById("star2");
									radio_button.checked = false;
									radio_button = document.getElementById("star1");
									radio_button.checked = false;
									break;
							}
							break;
						 case 3:
						 	//Last agenda
							var comment = document.getElementById("kommentar").value;
							if((!comment == "") && !document.getElementById("kommentar").disabled){
								switch(agenda){
									case 1:
										one_comment = comment;
										break;
									case 2:
										two_comment = comment;
										break;
									case 3:
										three_comment = comment;
										break;
								}
							}
						 	agenda = 3;
							document.getElementById("bewertung_header").innerHTML="Bewertung: Analyse";
							document.getElementById("bewertung_header").className = "panel-heading bewertung3";
							document.getElementById("bewertung_container").className = "bewertungcontainer3 panel panel-yellow";
							
							verstanden_button = document.getElementById("v1");
							nichtverstanden_button = document.getElementById("v2");
							if(three_verstanden == 2)
								verstanden_button.checked = true;
							else if(three_verstanden == 1)
								nichtverstanden_button.checked = true;
							else{
								verstanden_button.checked = false;
								nichtverstanden_button.checked = false;
							}
							
							if((three_comment === 'undefined' || three_comment === null) && three_count > 30){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							else if(three_count<=30){
								document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+three_count+")";
								document.getElementById("kommentar").disabled = true;
								document.getElementById("sendButton").disabled = true;
							}
							else{
								document.getElementById("kommentar").value = three_comment;
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							switch(three_stars){
								case 1:
									radio_button = document.getElementById("star1");
									radio_button.checked = true;
									break;
								case 2:
									radio_button = document.getElementById("star2");
									radio_button.checked = true;
									break;
								case 3:
									radio_button = document.getElementById("star3");
									radio_button.checked = true;
									break;
								case 4:
									radio_button = document.getElementById("star4");
									radio_button.checked = true;
									break;
								case 5:
									radio_button = document.getElementById("star5");
									radio_button.checked = true;
									break;
								default:
									radio_button = document.getElementById("star5");
									radio_button.checked = false;
									radio_button = document.getElementById("star4");
									radio_button.checked = false;
									radio_button = document.getElementById("star3");
									radio_button.checked = false;
									radio_button = document.getElementById("star2");
									radio_button.checked = false;
									radio_button = document.getElementById("star1");
									radio_button.checked = false;
									break;
							}
							break;
						 case 4:
							document.getElementById("bewertung_header").innerHTML="Bewertung: Fazit";
							break;
						 }
						 
						 }
						 
					   function sendComment(){
						   var comment = document.getElementById("kommentar").value;
						   if(!comment == ""){
							   switch(agenda){
								case 1:
									one_count = 30;
									one_Counter = setInterval(oneCounter, 1000);
									document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+one_count+")";
									document.getElementById("kommentar").disabled = true;
									document.getElementById("sendButton").disabled = true;
									one_comment = null;
									break;
								case 2:
									two_count = 30;
									two_Counter = setInterval(twoCounter, 1000);
									document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+two_count+")";
									document.getElementById("kommentar").disabled = true;
									document.getElementById("sendButton").disabled = true;
									two_comment = null;
									break;
								case 3:
									three_count = 30;
									three_Counter = setInterval(threeCounter, 1000);
									document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+three_count+")";
									document.getElementById("kommentar").disabled = true;
									document.getElementById("sendButton").disabled = true;
									three_comment = null;
									break;
								default:
									break;   
							   }
						   }
						}
					
					function oneCounter(){
						one_count = one_count - 1;
						if(one_count <= 0){
							clearInterval(one_Counter);
							one_count = 40;
							if(agenda == 1){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							return;	
						}
						if(agenda == 1)
							document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+one_count+")";
					}
					
					function twoCounter(){
						two_count = two_count - 1;
						if(two_count <= 0){
							clearInterval(two_Counter);
							two_count = 40;
							if(agenda == 2){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							return;	
						}
						if(agenda == 2)
							document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+two_count+")";
					}
					
					function threeCounter(){
						three_count = three_count - 1;
						if(three_count <= 0){
							clearInterval(three_Counter);
							three_count = 40;
							if(agenda == 3){
								document.getElementById("kommentar").value = '';
								document.getElementById("kommentar").disabled = false;
								document.getElementById("sendButton").disabled = false;
							}
							return;	
						}
						if(agenda == 3)
							document.getElementById("kommentar").value = "Bis zum nächsten Kommentar bitte warten ("+three_count+")";
					}
					
					
					
					DropzoneStudent.options.stmyDropzone = {
					init: function() {
						thisDropzone = this;
						<!-- 4 -->
						$.get('upload.php', function(data) {
							<!-- 5 -->
							$.each(data, function(key,value){
								
								document.getElementById("noFiles").style.display = 'none';
								 
								var mockFile = { name: value.name, size: value.size };
								 
								thisDropzone.options.addedfile.call(thisDropzone, mockFile);
				 
								thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "uploads/"+value.name);
								 
							});
							 
						});
						
					}
					}
					
					
				</script>
				
				<div class="col-lg-6">
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        Agenda
                                    </div>
                                    <div class="panel-body" style="text-align: left; margin-bottom: -1 em; margin-top: -1 em">

                                      <button type="button" style="width: 100% ; text-align: left" class="agenda1 btn btn-default btn-lg " onClick="agendaChange(1);">1. Einführung</button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="agenda2 btn btn-default btn-lg" onclick="agendaChange(2);">2. Weiterführung</button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="agenda3 btn btn-default btn-lg" onclick="agendaChange(3);" >3. Analyse</button>
                                      <br><br>
                                      <button type="button" style="width: 100% ; text-align: left" class="btn btn-lg btn-primary" onclick="agendaChange(4);" disabled="disabled">4. Fazit</button>


                                    </div>

                                </div>
                    <!-- /.col-lg-4 -->

                </div>
				
				
				</div>
				

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Vorlesungsinhalte
                        </div>
                        <div class="panel-body" style="margin-bottom: 0.5em; margin-top: 0.5em;">
							<div style="height: 200px; width: 100%; border: 2px dashed #0087F7; border-radius: 5px; background-color: white;">
								<form style="height: 100%; width: 100%" action="upload.php" class="dropzoneStud" id="stmy-Dropzone">
                                <span class="folder_empty" id="noFiles" >
                           	    	<img src="res/empty_folder.png"  height="70%" alt="" style="display:block; margin-left:auto; margin-right:auto; width:auto;"/>
                                 	<div style="text-align:center">Dieser Ordner ist leer <br> (Dateien werden vom Dozenten bereitgestellt) 
                                 	</div>
                                 </span>
                                 </form>
						  </div>
                        </div>

                    </div>
					
				</div>

				

				
<!------------------------------------------------------------------------------------------------------------------------------------------------
--------------------------------------------------------------- Fragenbox Anfang -----------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------------------------------------->
				
				<div class="col-lg-6">
                    <div class="panel panel-default" style="overflow: hidden">
                        <div class="panel-heading">
                            <h4 style="display:inline-block">FRAGEN</h4>
							
			<!-- **********************************************************Filterfunktion Anfang*************************************************************** -->
			<ul class="nav navbar-top-links navbar-right in" style="display:inline-block; position:center">
                <li class="dropdown active">
                    <a class="dropdown-toggle active" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-filter fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages in">
                        <li>
                            <a href="#" class="active">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="active">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="active">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center active" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
            </ul>
				
				
				
				<!-- ************************************************Filterfunktion Ende*************************************************************************** -->
                        </div>

                        <div class="panel-body">
                            <div class="col-lg-12">
									
							<!-- Panel Groups-->		
		
										<!-- *******************************************Panel Group 1 *****************************************************-->
										<div class="panel-group " id="accordion1">
											
											<!-- Frage 1.1 -->
											<div class="panel panel-default">
												<div class="panel-heading hintergrundfarbeFragenOne" style="overflow:hidden"> <!-- hintergrundfarbeFragenOne" --> 
													<!-- <div class="panel-title ellipsis fragePositionierung">
													
														<a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" >Frage: Weiterführung sinnvoll?</a>
													</div> -->
													
													<!-- Status Two-->
													<!-- <div class="checkerBoxer beantwortetButtonPositionierung">
														<input type="checkbox" onclick="return false" value="None" id="statusZwei" name="check" />
														<label class="haken" for="statusZwei"></label>
													</div> -->

													<div class="panel-title ellipsis fragePositionierung">
														<a data-toggle="collapse" data-parent="#accordion1" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >Frage so lannnngngngnaksdlfkjn kasdjf ksadöljf sdkljf askdjf k sjdkfjklsdkföklj  asdjfjjdj öaklsdjfölaksdjf öasldkfjsö dfkjdsfaklösdfjas??</a>
													</div>

													<div class="checkerBoxer beantwortetButtonPositionierung">
														<input type="checkbox" onclick="return false" value="None" id="statusEins" name="check" />
														<label class="haken" for="statusEins"></label>
													</div>

													
												</div>
												<div id="collapseOne" class="panel-collapse collapse">
													<div class="panel-body">
														<div>
															<p class="frageDatum">11. März 2015 um 11:20</p>
															<p class="frageVollständig"> Frage so lannnngngngnaksdlfkjn kasdjf ksadöljf sdkljf askdjf k sjdkfjklsdkföklj  asdjfjjdj öaklsdjfölaksdjf öasldkfjsö dfkjdsfaklösdfjas? </p>
														</div>
														<textarea id="antwortEins" cols="50" rows="4" placeholder="Es wurde noch keine Antwort gegeben..." readonly>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													    </textarea>
														
														<script type="text/javascript">
														<!-- Textarea auslesen und Status setzen -->									
														
														function leseTextarea1(){
															var antwort = document.getElementById("antwortEins").value;
															
															if(antwort == ""){
																document.getElementById("statusEins").checked = false;
															}
															else{
																document.getElementById("statusEins").checked = true;
															}
														}
														</script>
														
													</div>
												</div>
											</div>
											
											
											<!-- Frage 1.2 -->
											<div class="panel panel-default">
												<div class="panel-heading hintergrundfarbeFragenOne" style="overflow:hidden"> <!-- hintergrundfarbeFragenOne" --> 
													<!-- <div class="panel-title ellipsis fragePositionierung">
													
														<a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" >Frage: Weiterführung sinnvoll?</a>
													</div> -->
													
													<!-- Status Two-->
													<!-- <div class="checkerBoxer beantwortetButtonPositionierung">
														<input type="checkbox" onclick="return false" value="None" id="statusZwei" name="check" />
														<label class="haken" for="statusZwei"></label>
													</div> -->

													<div class="panel-title ellipsis fragePositionierung">
														<a data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" >Frage: Weiterführung sinnvoll?</a>
													</div>

													<div class="checkerBoxer beantwortetButtonPositionierung">
														<input type="checkbox" onclick="return false" value="None" id="statusZwei" name="check" />
														<label class="haken" for="statusZwei"></label>
													</div>

													
												</div>
												<div id="collapseTwo" class="panel-collapse collapse">
													<div class="panel-body">
														<div>
															<p class="frageDatum">11. März 2015 um 11:20</p>
															<p class="frageVollständig"> Weiterführung sinnvoll? </p>
														</div>
														<textarea id="antwortZwei" cols="50" rows="4" placeholder="Es wurde noch keine Antwort gegeben..." readonly></textarea>
														
														<script type="text/javascript">
														<!-- Textarea auslesen und Status setzen -->
														window.onload = start;
														
														function start(){
															leseTextarea1();
															leseTextarea2();
														}
														
														function leseTextarea2(){
															var antwort = document.getElementById("antwortZwei").value;
															
															if(antwort == ""){
																document.getElementById("statusZwei").checked = false;
															}
															else{
																document.getElementById("statusZwei").checked = true;
															}
														}
														</script>
														
													</div>
												</div>
											</div>
											
										</div>	

									
										<!-- *********************************************Panel Group 2 *********************************************************-->									
										<div class="panel-group" id="accordion2">
											
											<!-- Frage 2.1 -->
											<div class="panel panel-default">
												<div class="panel-heading hintergrundfarbeFragenTwo">
													<div class="panel-title ellipsis fragePositionierung">
													<script type="text/javascript">
													
													<!-- TODO: Textfeld auslesen und Checkbox setzen -->
													
													</script>
														<a data-toggle="collapse" data-parent="#accordion2" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree" >Frage: Weiterführung sinnvoll?</a>
													</div>
													
													<!-- Squared FOUR -->
													<div class="squaredCheckbox beantwortetButtonPositionierung">
														<input type="checkbox" value="None" id="squaredThree" name="check" />
														<label for="squaredThree"></label>
													</div>
													
													<!-- Beantwortet Label -->
													<div class="panel-title beantwortetLabelPositionierung">
															Beantwortet
													</div>
													
													
												</div>
												<div id="collapseThree" class="panel-collapse collapse">
													<div class="panel-body">
														<div>
															<p style="font-size: 0.85em; opacity: .5; filter:Alpha(Opacity=50);">11. März 2015 um 12:20</p>
															<p style="font-size: 1.3em; font-weight:bold"> Weiterführung sinnvoll? </p>
														</div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</div>
												</div>
											</div>
											
											
											
											<!-- Frage 2.2 -->
											<div class="panel panel-default">
												<div class="panel-heading hintergrundfarbeFragenTwo">
													<div class="panel-title ellipsis fragePositionierung">
													<script type="text/javascript">
													
													<!-- TODO: Textfeld auslesen und Checkbox setzen -->
													
													</script>
														<a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour" >Frage: Weiterführung sinnvoll?</a>
													</div>
													
													<!-- Squared FOUR -->
													<div class="squaredCheckbox beantwortetButtonPositionierung">
														<input type="checkbox" value="None" id="squaredFour" name="check" />
														<label for="squaredFour"></label>
													</div>
													
													<!-- Beantwortet Label -->
													<div class="panel-title beantwortetLabelPositionierung">
															Beantwortet
													</div>
													
													
												</div>
												<div id="collapseFour" class="panel-collapse collapse">
													<div class="panel-body">
														<div>
															<p style="font-size: 0.85em; opacity: .5; filter:Alpha(Opacity=50);">12. März 2015 um 11:20</p>
															<p style="font-size: 1.3em; font-weight:bold"> Weiterführung sinnvoll? </p>
														</div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</div>
												</div>
											</div>
											
											
										</div>							
								
								
								
							
								
									</div>
							
						</div>
							

                        <div class="panel-footer">
                            Kann eigentlich weg
                        </div>
					</div>
                </div>
                <!-- /.col-lg-4 -->
               
				
<!----------------------------------------------------------------------------------------------------------------------------------------------
----------------------------------------------------------------- Fragenbox ENDE ---------------------------------------------------------------
----------------------------------------------------------------------------------------------------------------------------------------------->
		

		
		
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    
    <footer style="display:block; text-align:center">
    	&copy; 2015 by EduRate
    </footer>

</body>



</html>
