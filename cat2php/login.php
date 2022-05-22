
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>login</title>

<style>
        body{
            background-color: #f0f2f5;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }
        *{
            padding: 0;
            margin: 0;
            font-family: 'poppins',sans-serif;
            box-sizing: border-box;

        }
        .containere{
            width: 380px;
            height: 400px;
            
        }
        .containere , .input-box{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;

        }
        .input-box{
            width: 320px;
            height: 300px;
            background-color: #fff;
            border-radius: 10px;
            padding: 10px 0;
            box-shadow: 0 10px 20px rgba(95,95,95,.2);
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
            border-radius: 5px;
        }
        form .btn{
            border: none;
            outline: none;
            padding: 11px 0;
            background: #2408b2;
            color:#fff;
            font-size: 18px;
            box-shadow: 0 7px 15px rgba(22,5,107,.3);
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
        }
        form input:focus{
            border-color: #16056b;
        }
        form .btn:hover{
            background: #1a0681;
            color:white;
        }
        .links{
            display: flex;
        }
        .links a{
            font-size:14px;
            padding: 0 5px;
        }
        .input-box p{
            color: blue;
        }
        .var {
        color:red;
        }

    </style>


</head>
<body>

<?php include("header.php") ?>

 <div class="containere">

        <div class="input-box">
        <h4 class="var">
<!--              <%
				if(session.getAttribute("messageError")!=null)
				{
					out.print(session.getAttribute("messageError"));
					session.removeAttribute("messageError");
				}

			%> -->
            <?php
                
                    if (isset($_SESSION['unknown']))
                    {
                        echo $_SESSION['unknown'];
                        unset($_SESSION['unknown']);
                    }

                ?>
        </h4>

            <p>Login to Tumba</p>
            <form action="process/loginprocessing.php" method="POST">
                <input type="text" name="uName" placeholder="User name" class="input">
                <input type="password" name="passwd" placeholder="Password" class="input">
                <input type="submit" value="Log In" class="btn">
            </form>
            <div class="links">
                <a href="#">Forgotten account?</a>
                <a href="studentRegistration.php">Sign up for Tumba</a>
            </div>
        </div>
    </div>

</body>
</html>