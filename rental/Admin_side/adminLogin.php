<!DOCTYPE html>
<html lan="en" and dir="Itr">

<head>
    <meta charset="utf-8">
    <title>Admin Control Area</title>
    <link rel="stylesheet" href="adminLogin.css">

</head>

<body>
    <form class="box" action="choose.php" method="POST">

        <h1>Admin Area</h1>

        <input type="text" name="" placeholder="Enter Username" id="username">
        <input type="password" name="" placeholder="Enter Password" id="password">
        <input type="submit" name="" value="Login" onclick="validate()">
    </form>
    <script>
            function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "admin" && password == "1234") {
        // alert("login successfully");
        window.location.href="choose.php";

    } else {
        alert("login failed");

    }
}
        </script>
</body>

</html>