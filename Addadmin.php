<!DOCTYPE html>
<html>

<head>
    <title> Login Form in HTML5 and CSS3</title>
</head>
<style>
    body {
        margin: 0 auto;
        background-image: url("../image/technology.jpg");
        background-repeat: no-repeat;
        background-size: 100% 720px;
    }

    .container {
        width: 500px;
        height: 450px;
        text-align: center;
        margin: 0 auto;
        background-color: rgba(44, 62, 80, 0.7);
        margin-top: 160px;
    }

    .container img {
        width: 150px;
        height: 150px;
        margin-top: -60px;
    }

    input[type="text"],
    input[type="password"] {
        margin-top: 30px;
        height: 45px;
        width: 300px;
        font-size: 18px;
        margin-bottom: 20px;
        background-color: #fff;
        padding-left: 40px;
    }

    .form-input::before {
        content: "\f007";
        font-family: "FontAwesome";
        padding-left: 07px;
        padding-top: 40px;
        position: absolute;
        font-size: 35px;
        color: #2980b9;
    }

    .form-input:nth-child(2)::before {
        content: "\f023";
    }

    .btn-login {
        padding: 15px 25px;
        border: none;
        background-color: #27ae60;
        color: #fff;
    }
</style>

<body>
    <div class="container">
        <br><br><br><br>

        <form action="addcus.php" method="POST">

            <div class="col-md-12">
                <label class="form-label">Name</label>
                <input type="text" class="form-control form-control-lg" placeholder="Name" required name="name"
                    id="name">
            </div>
            <div class="col-md-12">
                <label class="form-label">Contact No.</label>
                <input type="text" class="form-control form-control-lg" required placeholder="Contact No."
                    name="contact" id="contact">
            </div>
            <div class="col-md-12">
                <label class="form-label">password</label>
                <input type="password" class="form-control form-control-lg" required placeholder="password"
                    name="password" id="password">
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
            </div>

        </form>

    </div>
</body>

</html>