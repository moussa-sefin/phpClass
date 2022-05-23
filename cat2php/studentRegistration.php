
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registration</title>

	<style>
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f2f5;
        }
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .containere{
            width: 300px;
            height: 440px;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            padding: 0 15px;
            font-family: 'Poppins',sans-serif;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(95,95,95,.2);
        }
        .intro-text p{
            margin: 5px 0;
            font-size: 13px;
        }
        .intro-text p a{
            color: #121212;
        }
        form{
            height: 330px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
        form input{
            padding: 12px 7px;
            outline: none;
            border: 1px solid #8c8f94;
        }
        form input:focus{
            border-color: #16056b;
        }
        .check-box{
            display: flex;
        }
        
        .check-box label{
            font-size:10px;
            padding: 0 5px;
        }
        form button{
            border: none;
            outline: none;
            padding: 11px 0;
            background: #16056b;
            color:#fff;
            font-size: 18px;
            box-shadow: 0 7px 15px rgba(22,5,107,.3);
            font-family: 'Poppins', sans-serif;

        }
        .msg{
        color:<%=session.getAttribute("textcorol")%>; 
        
        }
        strong{
        font-size:18px;
        }
    </style>

</head>
<body>

<?php include("header.php") ?>

    <div class="containere">
        <div class="intro-text">
        <h4 class="msg">
<!--             	<%
			if(session.getAttribute("msg")!=null)
				{
				out.print(session.getAttribute("msg"));
				session.removeAttribute("msg");
				}
            	else if(session.getAttribute("exCeptionMsg")!=null)
            	{
            		out.print(session.getAttribute("exCeptionMsg"));
    				session.removeAttribute("exCeptionMsg");
            	}

				%> -->
                <?php
                if(isset($_SESSION['duplicate']))
                {
                    echo $_SESSION['duplicate'];
                    unset($_SESSION['duplicate']);
                }
                ?>
            </h4>

            
            <p> Alread have an account? <a href="login.php"><strong>Login</strong></a></p>
        </div>
        <form action="process/registerprocessing.php" method="POST">
            <input type="text" name="fname" placeholder="Fast Name" required/>
            <input type="text" name="lname" placeholder="Last Name" required/>
            <input type="text" name="regNumber" placeholder="Reg Number" required/>
            <div>
                <label>Department:</label> <select name="dpt">
                	<option selected disabled>Choose</option>	  
                    <option value="it">It</option>
                    <option value="et">Et</option>
                    <option value="re">Re</option>
                    <option value="mt">Mt</option>
                  </select><br>
            </div>
            <div>
                <label>Level:</label> <select name="level">	 
                	<option selected disabled>Choose</option>	 
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select><br>
            </div>
            <div>
               <label for="Gender">Gender:</label><input type="radio" name="gender" value="male" checked>Male
               <input type="radio" name="gender" value="female">Female 
            </div>
            <!-- <input type="email" name="email" placeholder="Email" required/> -->
            <input type="password" name="password" placeholder="Password" required/>
            <div class="check-box">
                <input type="checkbox" id="check">
                <label for="check">I have read and agree to the <a href="#">Term & Privacy</a></label>
            </div>
            <button type="submit">Sign up</button>
        </form>
    </div>

</body>
</html>