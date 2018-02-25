<div id="form">
  			<form name="loginForm" action="actions/utilisateur/loginAction.php" method="post">
	  			<table>
	  				<tr>
	  					<td colspan=2 id="bloc_erreur"></td>
	  				</tr>
	  				<tr>
	  					<td><label>Email</label></td>
	  					<td><input type="text" name="email"/></td>
	  				</tr>
	  				<tr>
	  					<td><label>Password</label></td>
	  					<td><input type="password" name="pwd"/></td>
	  				</tr>
	  				<tr>
	  					<td colspan="2" align="center">
	  						<input class="btn" type="button" value="Login" onclick="validation(loginForm,'loginForm')"/>
	  					</td>
	  				</tr>
	  			</table>
  			</form>
  		</div>