<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ URL::asset('app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    </head>
    <body class="antialiased">
        <div class="sidebar">
            <div class="logo"></div>
            <ul class="menu">
                <li class="active">
                    <a haref="#">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a haref="#">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a haref="#">
                        <i class="fas fa-chart-bar"></i>
                        <span>Statistics</span>
                    </a>
                </li>
                <li>
                    <a haref="#">
                        <i class="fas fa-briefcase"></i>
                        <span>Careers</span>
                    </a>
                </li>
                <li>
                    <a haref="#">
                        <i class="fas fa-question-circle"></i>
                        <span>FAQ</span>
                    </a>
                </li>
                <li>
                    <a haref="#">
                        <i class="fas fa-star"></i>
                        <span>Testimonials</span>
                    </a>
                </li>
                <li>
                    <a haref="#">
                        <i class="fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="logout">
                    <a haref="#">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Logout</span>
                    </a>
                </li>
            <ul>
        </div>

        <div class="main--content">
            <div class="header--wrapper">
                <div class="header--title">
                    <span>
                        <?php
                            date_default_timezone_set('Asia/Calcutta');
                            $hour = date('G');
                            if ($hour >= 5 && $hour <= 11) {
                                echo "Good Morning,";
                            } else if ($hour >= 12 && $hour <= 18) {
                                echo "Good Afternoon,";
                            } else if ($hour >= 19 || $hour <= 4) {
                                echo "Good Evening,";
                            }
                        ?>
                    </span>
                    <h2>User Name Here!</h2>
                </div>
                <div class="user--info">
                    <div class="search--box">
                        <i class="fasolid fa-search"></i>
                        <input type="text" placeholder="Search">
                    </div>
                    <img src="">
                </div>
            </div>

            <div class="card--container">
                <h3 class="main--title"> Profile Data</h3>
                <div class="card--wrapper">
                    <div class="payment--card light-red">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">Description</span>
                                <span class="amount-value">gatau lah apa gitu</span>
                            </div>
                            <i class="fas fa-dollar-sign icon dark-red"></i>
                        </div>
                        <span class="card-detail">*** *** *** 3484</span>
                    </div>

                    <div class="payment--card light-purple">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">Education</span>
                                <span class="amount-value">CS - Binus</span>
                            </div>
                            <i class="fas fa-list icon dark-purple"></i>
                        </div>
                        <span class="card-detail">*** *** *** 5542</span>
                    </div>

                    <div class="payment--card light-green">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">GPA</span>
                                <span class="amount-value">3.5</span>
                            </div>
                            <i class="fas fa-users icon dark-green"></i>
                        </div>
                        <span class="card-detail">*** *** *** 3484</span>
                    </div>

                    <div class="payment--card light-blue">
                        <div class="card--header">
                            <div class="amount">
                                <span class="title">Status</span>
                                <span class="amount-value">Looking for Job</span>
                            </div>
                            <i class="fas fa-check icon darj-blue"></i>
                        </div>
                        <span class="card-detail">*** *** *** 7764</span>
                    </div>
                </div>
            </div>

            <div class="tabular--wrapper">
                <div class="tableHead">
                    <span><h3 class="main--title"> Experience</h3></span>
                    <span><button class="addButton">Add New Experience</button></span>
                </div>
                <div class+table-container>
                    <table>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Start Join</th>
                                <th>End Join</th>
                                <th>Company/Organization</th>
                                <th>Role</th>
                                <th colspan="2" style="text-align: center;">Action</th>
                            </tr>
                            <tbody>
                                @foreach ($experiences as $experience)
                                    <tr>
                                        <td>{{ $experience->id }}</td>
                                        <td>{{ $experience->startJoin }}</td>
                                        <td>{{ $experience->endJoin }}</td>
                                        <td>{{ $experience->companyName }}</td>
                                        <td>{{ $experience->role }}</td>
                                        <td style="text-align: center;"><button>Edit</button></td>
                                        <td style="text-align: center;"><button>Delete</button></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </thead>
                    </table> 
                </div>
            </div>
        </div>
    </body>
</html>
