
<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Admin Page</title>
<link rel="stylesheet" type="text/css" href="static/styles/contactus.css">
<link href="http://fonts.googleapis.com/css?family=Raleway">
<style>
    body {
        background-image: url('static/images/admin.jpg');

    }
</style>



</head>

<body >
<!--<style>
    <div {
        background-image: url("co.jpg");

    }
</style>-->

    <div class="container-fluid">

        <div width="500px" height="500px">
            <div class="main" width="500px" height="500px">
                <h1><center>Add Places</center></h1>
                <form method="post" action="adminUpdate.php" enctype="multipart/form-data">
                    <table align="center"  height="500px" width="400px">
                        <tr><td colspan="3" align="center"> </td></tr>
                        <tr><td><label><h4>Name  :</h4></label> </td></tr><tr></tr><tr>
                            <td><input class="input" type="text" name="name" placeholder="Name" required="">
                        </td></tr>

                        <tr><td><label><h4>Description  :</h4> </label></td></tr><tr></tr><tr>
                            <td><input class="input" type="text" name="desc" placeholder="e.g Delhi is capital."></td>
                        </tr>

                        <tr><td><label><h4>Price :</h4></label></td></tr><tr></tr><tr>
                            <td><input type="number" name="price" placeholder="Price"
                                ></td>
                        </tr>

                        <tr>  <td><label for="img">Select image:</label></td></tr><tr></tr><tr>
                              <td><input type="file" id="img"  name="image"></td>
                        </tr>


                        <tr>

                            <td colspan="3" align="center"><input class="submit" type="submit"
                                value="Add Place" name="upload"></td></td></tr><tr></tr><tr>

                             <td><label><a href="logout.php" ><font color="black">Logout</font></a></label></td>
                        </tr>
                         



                         </table>
            </form>
            </div>
        </div>

</div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </body>
</html>

