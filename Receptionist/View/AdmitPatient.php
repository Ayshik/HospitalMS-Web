
<?php
include('header/Resheader.php');
?>
</div>
<style>

.box {
  width: 328px;
    padding: 19px;
    position: absolute;
    top: 57%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #191919;
    text-align: center;
}
.box h1 {
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.box input[type="text"],
.box input[type="password"] {
  border: 0;
  background: none;
  display: block;
  margin: 3px  auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.box input[type="text"]:focus,
.box input[type="password"]:focus {
  width: 280px;
  border-color: yellowgreen;
}
.box input[type="submit"] {
  border: 0;
  background: none;
  display: block;
  margin: 3px  auto;
  text-align: center;
  border: 2px solid #ff4500;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.box input[type="submit"]:hover {
  background: #ff4500;
}



</style>
<form class="box" action="" method="post">
   
    
      <h1>Patient Registration</h1>
      <input type="text" name="ouname" placeholder="User Name" />
      <input type="text" name="pname" placeholder="Full Name" />
	   <input type="text" name="gender" placeholder="Gender"/>
	  
	   
	   
	 
      <input type="text" name="ophone" placeholder="Phone Number">
      <input type="text" name="age" placeholder="Age" />
      <input type="text" name="oaddress" placeholder="Address" />
      <input type="password" name="ocpass" placeholder="Password" />
	  <input type="text" name="problem" placeholder="problem" />
	   <input type="text" name="roono" placeholder="Roomno" />
      <input type="submit" name="drsignup" value="Sign-Up" />
    </form>
	
  </body>
</html>