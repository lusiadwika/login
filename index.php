<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>
   
    <body>
        <div class="container">
          <h1>Login</h1>
            <form action="biodata.html" method="post">
                <label>Username</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <button>Log in</button>
            </form>
            <style>*{
                margin: 0;
                padding: 0;
                outline: 0;
                font-family: 'Open Sans', sans-serif;
            }
            body{
                height: 100vh;
                background-image: url(https://www.rukita.co/stories/wp-content/uploads/2022/03/tips-membuat-foto-aesthetic-di-smartphone.png);
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }
            
            .container{
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%,-50%);
                padding: 20px 25px;
                width: 300px;
            
                background-color: rgba(0,0,0,.7);
                box-shadow: 0 0 10px rgba(255,255,255,.3);
            }
            .container h1{
                text-align: left;
                color: #fafafa;
                margin-bottom: 30px;
                text-transform: uppercase;
                border-bottom: 4px solid #2979ff;
            }
            .container label{
                text-align: left;
                color: #90caf9;
            }
            .container form input{
                width: calc(100% - 20px);
                padding: 8px 10px;
                margin-bottom: 15px;
                border: none;
                background-color: transparent;
                border-bottom: 2px solid #2979ff;
                color: #fff;
                font-size: 20px;
            }
            .container form button{
                width: 100%;
                padding: 5px 0;
                border: none;
                background-color:#2979ff;
                font-size: 18px;
                color: #fafafa;
            }</style>
        </div>   

    </body>
</html>