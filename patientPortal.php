<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seed Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="../style.css" rel="stylesheet">
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
        <h1 style="color:#3000a0"><strong>Patient Portal</strong></h1>
    </div>
    <div class="container">
        <div class="row gutters" style="height: 75vh">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-50">
                    <div class="card-body">
                        <div class="card-title" style="display: flex; justify-content: space-between; flex-direction: column;">
                            <h5>User Information</h5>
                            <form action="">
                                <label class="infoLabel"> Name </label>
                                <br>
                                <input disabled class="infoData" id="patientName">
                                <br>
                                <label class="infoLabel"> Age </label>
                                <br>
                                <input disabled class="infoData" id="patientAge">
                                <br>
                                <label class="infoLabel"> D.O.B. </label>
                                <br>
                                <input disabled class="infoData" id="patientDOB">
                            </form>
                            <button type="button" class="btn btn-outline-dark" id="editInfoButton" style="margin-top: 5%;">
                                Edit Information
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card h-50">
                    <div class="card-body">
                        <div class="card-title" style="display: flex; justify-content: space-between; align-items: center;">
                            <h5>Pregnancy Information</h5>
                        </div>
                        <table id="pregnancyTable">
                            <tr class="header">
                                <th style="width:33%;">Expected Due Date</th>
                                <th style="width:33%">Baby's Name</th>
                                <th style="width:33%;">Ultrasound Pictures</th>
                            </tr>
                            <tr>
                                <td>11-01-2022</td>
                                <td>Kristel Lim</td>
                                <td><a href=#>Click here</a></td>
                            </tr>
                            <tr>
                                <td>10-30-2020</td>
                                <td>Stacey Lim</td>
                                <td><a href=#>Click here</a></td>
                            </tr>
                            <tr>
                                <td>03-17-2018</td>
                                <td>Monique Lim</td>
                                <td><a href=#>Click here</a></td>
                            </tr>
                            <tr>
                                <td>04-24-2016</td>
                                <td>Maria Lim</td>
                                <td><a href=#>Click here</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="card-title" style="display: flex; justify-content: space-between; align-items: center;">
                            <h5>Appointments</h5>
                        </div>
                        <table id="recordsTable">
                            <tr class="header">
                                <th style="width:25%;">Date</th>
                                <th style="width:25%">Time</th>
                                <th style="width:25%;">Doctor</th>
                                <th style="width:25%;">Summary</th>
                            </tr>
                            <tr>
                                <td>11-28-2022</td>
                                <td>1:00 PM</td>
                                <td>Dr. Meredith Grey</td>
                                <td><a href=#>Click here</a></td>
                            </tr>
                            <tr>
                                <td>11-28-2022</td>
                                <td>1:30 PM</td>
                                <td>Dr. George O'Malley</td>
                                <td><a href=#>Click here</a></td>
                            </tr>
                            <tr>
                                <td>11-28-2022</td>
                                <td>2:00 PM</td>
                                <td>Dr. Cristina Yang</td>
                                <td><a href=#>Click here</a></td>
                            </tr>
                            <tr>
                                <td>11-29-2022</td>
                                <td>10:45 AM</td>
                                <td>Dr. Izzie Stevens</td>
                                <td><a href=#>Click here</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-25">
                    <div class="card-body" style="text-align: center;">
                        <div class="card-title" style="display: flex; justify-content: space-between; align-items: center;">
                            <h5>Request an Appointment</h5>
                        </div>
                        <button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#schedule">
                            Schedule Now
                        </button>
                        <div class="modal fade" id="schedule" tabindex="-1" aria-labelledby="scheduleAppointment" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Request an Appointment</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected>Select Doctor</option>
                                                <option value="1">Dr. Meredith Grey</option>
                                                <option value="2">Dr. George O'Malley</option>
                                                <option value="3">Dr. Cristina Yang</option>
                                                <option value="4">Dr. Izzie Stevens</option>
                                            </select>
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
                    </div>
                </div>
                <div class="card h-75">
                    <div class="card-body">
                        <div class="card-title" style="display: flex; justify-content: space-between; align-items: center; flex-direction: column;">
                            <div class="card-title" style="display: flex; justify-content: space-between; align-items: center;">
                                <h5>Medications</h5>
                            </div>
                            <table id="medsTable">
                                <tr class="header" style="text-align: center;">
                                    <th style="width:50%;">Drug</th>
                                    <th style="width:50%">Dosage</th>
                                </tr>
                                <tr>
                                    <td>Sugar Pill</td>
                                    <td>5g</td>
                                </tr>
                                <tr>
                                    <td>Sugar Pill</td>
                                    <td>5g</td>
                                </tr>
                                <tr>
                                    <td>Sugar Pill</td>
                                    <td>5g</td>
                                </tr>
                                <tr>
                                    <td>Sugar Pill</td>
                                    <td>5g</td>
                                </tr>
                                <tr>
                                    <td>Sugar Pill</td>
                                    <td>5g</td>
                                </tr>
                                <tr>
                                    <td>Sugar Pill</td>
                                    <td>5g</td>
                                </tr>
                                <tr>
                                    <td>Sugar Pill</td>
                                    <td>5g</td>
                                </tr>
                                <tr>
                                    <td>Sugar Pill</td>
                                    <td>5g</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>

<!-- TODO: proper margins for the smaller columns; user information and medication; button; reassess and clean -->