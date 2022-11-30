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
        <h1 style="color:#3000a0"><strong>Doctor Portal</strong></h1>
    </div>
    <div class="container">
        <div class="row gutters" style="height: 75vh">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="text-center m-3">Patient Search</h6>
                        <input type="text" id="searchBar" onkeyup="myFunction()" placeholder=" Patient Name">
                            
                        <table id="patientSearch" style="text-align: center">
                            <tr>
                                <th>Patient</th>
                            </tr>
                            <tr>
                                <td><a href=#>John Doe</a></td>
                            </tr>
                            <tr>
                                <td><a href=#>Albert Einstein</a></td>
                            </tr>
                            <tr>
                                <td><a href=#>Justin Bieber</a></td>
                            </tr>
                            <tr>
                                <td><a href=#>Marc Jacobs</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title" style="display: flex; justify-content: space-between; align-items: center;">
                            <h5>Upcoming Appointments</h5>
                            <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#schedule">
                                Schedule an Appointment
                            </button>
                        </div>
                        <div class="modal fade" id="schedule" tabindex="-1" aria-labelledby="scheduleAppointment" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Schedule an Appointment</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div>
                                                <label>Patient Full Name</label>
                                                <input type="text" style="width: 100%" required>
                                            </div>
                                            <div>
                                                <label class="mt-4">Patient Date of Birth</label>
                                                <input type="date" required>
                                            </div>
                                            <div>
                                                <label class="mt-3">Select Date and Time</label>
                                                <input type="datetime-local" name="book" required>
                                            </div>
                                            <div>
                                                <label class="form-group-text mt-3">Notes</label>
                                                <textarea class="form-control" aria-label="notes"></textarea>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-outline-primary">Save</button>
                                                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Cancel</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="recordsTable">
                            <tr class="header">
                                <th style="width:33%;">Date</th>
                                <th style="width:33%">Time</th>
                                <th style="width:33%;">Patient</th>
                            </tr>
                            <tr>
                                <td>11-28-2022</td>
                                <td>1:00 PM</td>
                                <td><a href=#>John Doe</a></td>
                            </tr>
                            <tr>
                                <td>11-28-2022</td>
                                <td>1:30 PM</td>
                                <td><a href=#>Albert Einstein</a></td>
                            </tr>
                            <tr>
                                <td>11-28-2022</td>
                                <td>2:00 PM</td>
                                <td><a href=#>Justin Beiber</a></td>
                            </tr>
                            <tr>
                                <td>11-29-2022</td>
                                <td>10:45 AM</td>
                                <td><a href=#>Marc Jacobs</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="text-center m-3">Patient Prescription</h6>
                        <form>
                            <div class="form-group my-3">
                                <label>Full Name</label>
                                <input type="text" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group my-3">
                                <label>Prescription</label>
                                <input type="text" class="form-control form-control-sm" required>
                            </div>
                            <div class="form-group my-3">
                                <label for="date">Date</label>
                                <input disabled type="text" id="date" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <span class="form-group-text">Notes</span>
                                <textarea class="form-control" aria-label="notes"></textarea>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-outline-primary mt-3">Submit Prescription</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="doctorPortal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>