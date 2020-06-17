
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contact Us Page</title>
    <link rel="stylesheet" type="text/css" href="static/styles/contactus.css">
    <link href="http://fonts.googleapis.com/css?family=Raleway">




</head>

<body >
  <!--  <div>
    <header class="header">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
                                <div class="logo"><a href="/Home">Tourism</a></div>
                                <nav class="main_nav">
                                    <ul class="d-flex flex-row align-items-start justify-content-start">
                                        <li ><a href="Home.php">Home</a></li>
                                        <li><a href="places.php">Places</a></li>
                                        <li><a href="about_us.php">About us</a></li>
                                        <li  class="active"><a href="contact_us.php">Contact</a></li>
                                        <li><a href="profile.php">Hello, <?php echo $_SESSION['username']; ?></a></li>
                                        <li><a href="logout.php">Logout</a></li>
                                       
                                    </ul>
                                </nav>
                                <div class="header_phone ml-auto">Call us: 9624527667 </div>



                                <div class="hamburger ml-auto">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </header>
    </div> -->
<!--<style>
    <div {
        background-image: url("co.jpg");

    }
</style>-->

    <div class="container-fluid">

        <div width="500px" height="500px">
            <div class="main" width="500px" height="500px">
                <h1><center>Contact Us</center></h1>
                <form method="post" action="contactme.php">
                    <table align="center"  height="500px" width="400px">
                        <tr><td colspan="3" align="center"> <h5>" * " is required field</h5> </td></tr>
                        <tr><td><label><h4>Name * :</h4></label> </td></tr><tr></tr><tr>
                            <td><input class="input" type="text" name="name" placeholder="Name" required="">
                        </td></tr>

                        <tr><td><label><h4>Email * :</h4> </label></td></tr><tr></tr><tr>
                            <td><input class="input" type="Email" name="email" placeholder="Ram@gmail.com"></td>
                        </tr>

                        <tr><td><label><h4>Purpose :</h4></label></td></tr><tr></tr><tr>
                            <td><input type="text" name="purpose" placeholder="Purpose"
                                ></td>
                        </tr>

                        <tr><td><label><h4>Message :</h4></label></td></tr><tr></tr><tr>
                            <td><textarea name="message"
                                ></textarea></td>
                        </tr>

                        <tr>

                            <td colspan="3" align="center"><input class="submit" type="submit"
                                value="submit" name="submit"></td>


                        </tr>




                         </table>
            </form>
            </div>
        </div>

</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>


        <script src="static/js/jquery-3.2.1.min.js"></script>
        <script src="static/styles/bootstrap4/popper.js"></script>
        <script src="static/styles/bootstrap4/bootstrap.min.js"></script>
        <script src="static/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
        <script src="static/plugins/Isotope/isotope.pkgd.min.js"></script>
        <script src="static/plugins/scrollTo/jquery.scrollTo.min.js"></script>
        <script src="static/plugins/easing/easing.js"></script>
        <script src="static/plugins/parallax-js-master/parallax.min.js"></script>
        <script src="static/js/custom.js"></script>
    </body>
</html>

