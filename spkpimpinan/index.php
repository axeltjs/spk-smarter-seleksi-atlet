<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>HALAMAN PIMPINAN</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">            
            <form  class="form-vertical" action="cek-login.php" method="post">
				 <div class="control-group normal_text"> <h3>LOGIN PIMPINAN</h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" placeholder="Username" name="txtUsername" required />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" placeholder="Password" name="txtPassword" required />
                        </div>
                    </div>
                </div>
				<div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                          <input type="HIDDEN" name="level"  value ="Pimpinan"required />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    
                    <span class="pull-right"><button type="submit"  class="btn btn-success">Login</button></span>
                </div>
            </form>
            
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>
