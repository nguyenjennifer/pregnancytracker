<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seed Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <span class="h4 mb-0" style="color:#f9f9f9">Seed Tracker</span>
        </div>
    </nav>
    <div class="text-center">
        <h1 style="color:#3000a0"><strong>System Administrator Portal</strong></h1>
    </div>
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="text-center m-3">Create A Doctor Account</h5>
                        <form>
                            <div class="form-group my-3">
                                <label>First Name</label>
                                <input id="doctorFirstName" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>Last Name</label>
                                <input id="doctorLastName" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>Username</label>
                                <input id="doctorUsername" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>New Password</label>
                                <input id="doctorPassword" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="form-group my-3">
                                <label>Confirm Password</label>
                                <input id="doctorConfirmPassword" type="text" class="form-control form-control-sm">
                            </div>
                            <div class="text-center">
                                <button id="createDoctorAccountSubmit" type="submit"
                                    class="btn btn-outline-dark mt-2">Create Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <input type="text" id="searchBar" onkeyup="myFunction()" placeholder=" Record Search">

                        <table id="recordsTable">
                            <tr class="header">
                                <th style="width:30%;">Full Name</th>
                                <th style="width:30%">Username</th>
                                <th style="width:30%;">Role</th>
                                <th style="width:5%"></th>
                                <th style="width:5%"></th>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>john.doe</td>
                                <td>Patient</td>
                                <td><button id="editUser" class="btn"><img src="editIcon.png" alt="edit"
                                            width="35px"></img></button></td>
                                <td><button id="deleteUser" class="btn"><img src="deleteIcon.png" alt="edit"
                                            width="35px"></img></button></td>
                            </tr>
                            <tr>
                                <td>Albert Einstein</td>
                                <td>albert.einstein</td>
                                <td>Doctor</td>
                                <td><button id="editUser" class="btn"><img src="editIcon.png" alt="edit"
                                            width="35px"></img></button></td>
                                <td><button id="deleteUser" class="btn"><img src="deleteIcon.png" alt="edit"
                                            width="35px"></img></button></td>
                            </tr>
                            <tr>
                                <td>Justin Bieber</td>
                                <td>justin.bieber</td>
                                <td>Doctor</td>
                                <td><button id="editUser" class="btn"><img src="editIcon.png" alt="edit"
                                            width="35px"></img></button></td>
                                <td><button id="deleteUser" class="btn"><img src="deleteIcon.png" alt="edit"
                                            width="35px"></img></button></td>
                            </tr>
                            <tr>
                                <td>Marc Jacobs</td>
                                <td>marc.jacobs</td>
                                <td>System Administrator</td>
                                <td><button id="editUser" class="btn"><img src="editIcon.png" alt="edit"
                                            width="35px"></img></button></td>
                                <td><button id="deleteUser" class="btn"><img src="deleteIcon.png" alt="edit"
                                            width="35px"></img></button></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="text-center m-3">Edit User Account Information</h6>
                            <form>
                                <div class="form-group my-3">
                                    <label>First Name</label>
                                    <input disabled id="editFirstName" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="form-group my-3">
                                    <label>Last Name</label>
                                    <input disabled id="editLastName" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="form-group my-3">
                                    <label>Username</label>
                                    <input disabled id="editUserName" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="form-group my-3">
                                    <label>New Password</label>
                                    <input disabled id="editPassword" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="form-group my-3">
                                    <label>Confirm Password</label>
                                    <input disabled id="editConfirmPassword" type="text" class="form-control form-control-sm">
                                </div>
                                <div class="text-center">
                                    <button disabled id="editUser" type="submit" class="btn btn-outline-dark mt-2">Save</button>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="sysadmin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>