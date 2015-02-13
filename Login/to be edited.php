<?php
					include('connection.php');
					
					if(sizeof($_POST)):
						$username = $_POST['admin_username'];
						$password = md5($_POST['admin_password']);
						$getUser = mysqli_query($con, "SELECT * FROM admins WHERE admin_username='" . $username. "' AND admin_password='" . $password . "'");
						$countUser = mysqli_num_rows($getUser);
						if($countUser == 1):
							$fetchUser = mysqli_fetch_assoc($getUser);
							$_SESSION['admin'] = $fetchUser['admin_id'];
							header('Location: index.php');
						else:
							echo 'Username or Password wrong.';
						endif;
						
					endif;
					
					if(@$_GET['action']=='logout'):
						unset($_SESSION['admin']);
					endif;
					
					if(isset($_SESSION['admin'])):
						$getUser = mysqli_query($con, "SELECT * FROM admins WHERE admin_id='" . $_SESSION['admin'] . "'");
						$fetchUser = mysqli_fetch_assoc($getUser);
						echo '<h2>Welcome ' . $fetchUser['admin_username'] . '!</h2>';
						echo '<a href="seminar-overview.php">Seminar Overview</a>';
						echo '<br /><a href="index.php?action=logout">Logout</a>';
					else:
				?>
				
					<h2>Admin Login</h2>
					<form method="POST">
						Username: <input type="text" name="admin_username" />
						<br />Password: <input type="password" name="admin_password" />
						<br /><input type="submit" value="Login" />
					</form>
				
				<?php endif; ?>