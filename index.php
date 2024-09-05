<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Home</title>
</head>
<body>
	<div id="mainwrapper">
<header> 
    <!--**************************************************************************
    Header starts here. It contains Logo and 3 navigation links. 
    ****************************************************************************-->
    <div id="logo"> <a href="#"><img src="pic/logo.png" width="50px" height="50px">ระบบลงทะเบียน-รายงานผลการแข่งขันกีฬาสีภายใน</a></div>
    <nav> <a href="index.php" title="Link">Home</a>
		<a href="login.php" title="Link">Log in</a> </nav>
</header>
  <table width="100%" height="832" border="0" cellpadding="0" cellspacing="0">
    <tr class="side-con">
      <td height="87" bgcolor="#F0f0f0">&nbsp;</td>
      <td bgcolor="#FFFFFF">
         <form action="" method="get" name="search">
            <label for="search"></label>
           <input name="search" type="text" id="search" class="searchbar" placeholder="Search" size="100" >
        </form>
      </td>
      <td bgcolor="#f0f0f0">&nbsp;</td>
    </tr>
    <tr class="side-con">
      <td width="20%" height="369" bgcolor="#F0f0f0">&nbsp;</td>
      <td bgcolor="#FFFFFF" class="container">

        <table width="42%" border="1" align="left" cellpadding="0" cellspacing="0" class="sport">
        <tr>
          <th width="260" height="39" scope="col">รายการแข่งขัน</th>
        </tr>
        <tr>
          <td height="36"><a href="#">ฟุตบอล</a></td>
        </tr>
        <tr>
          <td height="36"><a href="#">ฟุตซอล</a></td>
        </tr>
        <tr>
          <td height="33"><a href="#">บาสเก็ตบอล</a></td>
        </tr>
        <tr>
          <td height="44"><a href="#">วอลเลย์บอล</a></td>
        </tr>
      </table>
		
        
      <div class="login-allin">
    <div class="login-groupin">
      <h2>Log in</h2>

      <form method="post" class="login-formin">
        <div>
          <label for="login-user">Username:</label><br>
          <input type="text" name="user" class="box" placeholder="Enter your username">
        </div>

         <div>
          <label for="login-pass">Password:</label><br>
          <input type="password" name="pass"  class="box" placeholder="Enter your password">
        </div>

        <div >
          <input type="submit" name="submit"  class="btnin" value="Log in">
        </div>
      </form>
      </div>
    </div>
</td>
      <td width="20%" bgcolor="#f0f0f0">&nbsp;</td>
    </tr>
    <tr class="side-con">
      <td height="257" bgcolor="#F0f0f0">&nbsp;</td>
      <td bgcolor="#FFFFFF" class="container">
        <table width="35%" border="1"  cellpadding="0" cellspacing="0" class="color">
        <tr>
          <th height="40" scope="col">คณะสี</th>
        </tr>
        <tr>
          <td height="45">สีแดง</td>
        </tr>
        <tr>
          <td height="50"><p>สีฟ้า</p></td>
        </tr>
        <tr>
          <td height="45">สีชมพู</td>
        </tr>
        <tr>
          <td height="43">สีเหลือง</td>
        </tr>
      </table></td>
      <td bgcolor="#f0f0f0">&nbsp;</td>
    </tr>
    <tr>
      <td height="119" colspan="3"  bgcolor="#666666">Copyright @Samakkhiwittayakhom School. | All Has Reserved.</td>
    </tr>
  </table>

 
</body>
</html>
