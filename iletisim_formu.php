<!doctype html>
<html lang="tr-TR">
<head>
<meta  http-equiv="Content-Type" content="text/html;charset=utf-8"  charset="utf-8">
<meta  http-equiv="Content-Language" content="tr">
<title>Extra</title>
	<style>
		.inputAlani{
			  width: 100%;
			  height: 15px;
			margin: 0;
			padding:5px 10px 5px 10px;
			
			
		}
		.TextAreaAlani{
			width: 100%;
			height: 150px;
			margin: 0;
			padding:5px 10px 5px 10px;

			
			
		}
		.buton{
		
			 height: 30px;
			margin:0;
			padding:5px 50px 5px 50px;  
			border: 1px solid #444499;
			background: #009900;
			color:#ffffff;
		}
				.buton:hover{
		
			 height: 30px;
			margin:0;
			padding:5px 50px 5px 50px;  
			border: 1px solid #000000;
			background: #00ff00;
			color:#000000;
		    cursor: pointer;
		}

		
		
		
		
		
		
		
		
		
		
	</style>

</head>

<body>
	   <form  action="iletisim_formu_sonuc.php" method="post">
		          <table width="503" border="0" align="center" cellpadding="0" cellspacing="0">
		                   <tr> 
					             <td width="150" height="30">Adınız Soyadınız </td>     
					             <td width="20" height="30">: </td>     
					             <td width="333" height="30"><input type="text" class="inputAlani" name="AdinizSoyadiniz"></td>     
					       </tr>
		                     <tr> 
					             <td width="150" height="30"> Telefon Numarası</td>     
					             <td width="20" height="30">: </td>     
					             <td width="333" height="30"><input type="text" class="inputAlani" name="TelefonNumarasi"> </td>     
					       </tr>
                          	<tr> 
					             <td width="150" height="30">Mail Adresi </td>     
					             <td width="20" height="30">: </td>     
					             <td width="333" height="30"><input type="text" class="inputAlani" name="MailAdresi"> </td>     
					       </tr>
                             <tr> 
					             <td width="150" height="30">Konu </td> 
					             <td width="20" height="30">:</td>     
					             <td width="333" height="30"><input type="text" class="inputAlani" name="Konusu"> </td>     
					       </tr>
                            <tr> 
					             <td width="150" height="30" valign="top">Mesaj</td> 
					             <td width="20" height="30" valign="top">:</td>     
					             <td width="333" height="30"><textarea  name="mesaj"></textarea></td>     
					       </tr>
                             <tr> 
					             <td width="150" height="30">&nbsp;</td> 
					             <td width="20" height="30">&nbsp;</td>     
					             <td width="333" height="30"><input type="submit" class="buton" value="gonder"></td>     
					       </tr>

		   
		   </table>
	   </form>
	
	
	
</body>
</html>