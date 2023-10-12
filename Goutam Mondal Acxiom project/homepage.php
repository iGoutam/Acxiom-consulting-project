<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
        <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

a {
    text-decoration: none;
}

.container {
    width: 100%;
    height: 100vh;
    background: url("img/images.jpg");
    background-size: cover;
    background-position: center;
}

.top {
    width: 100%;
    height: 100px;
    background: rgb(254, 141, 3);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0px 150px;
}

.logo_area {
    width: 30%;
}

.logo_area a {
    display: flex;
    align-items: center;
}

.logo_area a img {
    width: 100px;
}

.logo_area a h1 {
    color: #fff;
    text-transform: uppercase;
    font-family: cursive;
    margin-left: 15px;
}

.menu_area {
    width: 40%;
}

.menu_area ul {
    list-style: none;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.menu_area ul li {
    position: relative;
}

.menu_area ul li::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 3px;
    background: #00ffff;
    bottom: -10px;
    left: 0;
    transition: .5s all ease-in-out;
}

.menu_area ul li:hover::after {
    width: 100%;
}

.menu_area ul li a {
    color: #0b0b0b;
    font-family: lato;
    font-size: 16px;
    transition: 0.3s all ease-in-out;
}

.menu_area ul li a:hover {
    color: #00ffff;
}

.info {
    text-align: center;
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
}

.info h1 {
    color: #fff;
    font-family: lato;
    font-size: 60px;
}

.info p {
    color: #171212;
    font-size: 20px;
    font-family: arial;
    margin: 30px 0px;
}

.btn button {
    padding: 15px 45px;
    background: transparent;
    border: 2px solid aqua;
    color: #fff;
    font-size: 16px;
    border-radius: 25px;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}

.btn button::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 100%;
    background: rgb(218, 227, 237);
    left: 0;
    top: 0;
    z-index: -1;
    transition: .5s all ease-in-out;
}

.btn button:hover::after {
    width: 100%;
}
    </style>
    <link rel="Website Icon" type="png" href="img/Swami_Vivekananda_University,_Barrackpore_Logo.png">
    
</head>

<body>
    
    <div class="container">
        <div class="top">
        </div>
        <div class="info">
            <h1>Welcome to the Reminder Application <<username>></h1>
            <p>Today is Tuesday, 14th Of February.</p>
            <div class="menu_area">
                <ul>
                    <li><a href="set remainder.php">Set  Reminder</a></li>
                    <li><a href="modify.php">Modify Reminder</a></li>
                    <li><a href="disable.php">Disable Reminder</a></li>
                    <li><a href="Delete.php">Delete Reminder</a></li>
                    <li><a href="Enable.php">Enable Reminder</a></li>
                    <li><a href="View.php">View your Reminders</a></li>
                </ul>
            </div>
            <div class="btn">
                <button><a href="logout.php">Logout</a></button>
            </div>
        </div>
    </div>

</body>

</html>