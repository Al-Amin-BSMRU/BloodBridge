<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="adminProfile.css">
    <title>Admin Profile</title>
    <style>
        /* Add your CSS here (same as provided earlier) */
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        :root {
            --poppins: 'Poppins', sans-serif;
            --lato: 'Lato', sans-serif;

            --light: #F9F9F9;
            --blue: #3C91E6;
            --light-blue: #CFE8FF;
            --grey: #eee;
            --dark-grey: #AAAAAA;
            --dark: #342E37;
            --red: #DB504A;
            --yellow: #FFCE26;
            --light-yellow: #FFF2C6;
            --orange: #FD7238;
            --light-orange: #FFE0D3;
        }

        body {
            background: var(--grey);
            overflow-x: hidden;
        }

        /* SIDEBAR */
        #sidebar {
            font-family: var(--lato);
            max-width: 280px;
            width: 100%;
            height: 100vh;
            overflow-y: auto;
            background: var(--light);
            position: fixed;
            top: 0;
            left: 0;
            scrollbar-width: none;
            z-index: 1000;
            transition: .3s ease;
        }

        #sidebar.hide {
            max-width: calc((56px - 8px) + ((4px + 6px) * 2));
        }

        #sidebar::--webkit-scrollbar {
            display: none;
        }

        #sidebar .logo {
            font-size: 20px;
            color: var(--blue);
            font-weight: 700;
            text-align: center;
            width: 100%;
            height: calc(56px + 24px);
            background: var(--light);
            line-height: 56px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            left: 0;
            z-index: 999;
            white-space: nowrap;
        }

        #sidebar.hide .logo {
            justify-content: flex-start;
        }

        #sidebar .logo .icon {
            font-size: 30px;
            min-width: calc((56px - 8px) + ((4px + 6px) * 2));
        }

        #sidebar .side-menu {
            margin-top: 56px;
        }

        #sidebar .side-menu li {
            margin-left: 6px;
            height: 56px;
            padding: 4px;
            border-radius: 36px 0 0 36px;
            position: relative;
            background: var(--light);
        }

        #sidebar .side-menu li.active {
            background: var(--grey);
        }

        #sidebar .side-menu li a {
            white-space: nowrap;
            height: 100%;
            width: 100%;
            display: flex;
            grid-gap: calc(4px + 6px);
            background: var(--light);
            border-radius: 36px;
            align-items: center;
            color: var(--dark);
            font-size: 18px;
            font-weight: 500;
            max-width: 100%;
            transition: .3s ease;
            overflow: hidden;
        }

        #sidebar.hide .side-menu li a {
            max-width: calc(56px - 8px);
        }

        #sidebar .side-menu li a .icon {
            min-width: calc(56px - 8px);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #sidebar .side-menu li a.logout {
            color: var(--red);
        }

        #sidebar .side-menu li>span {
            position: absolute;
            right: 0;
            width: 24px;
            height: 24px;
            background: var(--grey);
            display: none;
            z-index: 100;
            pointer-events: none;
        }

        #sidebar .side-menu li.active>span {
            display: block;
        }

        #sidebar .side-menu li>span.top {
            top: -24px;
        }

        #sidebar .side-menu li>span.bottom {
            bottom: -24px;
        }

        #sidebar .side-menu li>span::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: var(--light);
            top: 0;
            left: 0;
            display: block;
        }

        #sidebar .side-menu li>span.top::before {
            border-radius: 0 0 24px 0;
        }

        #sidebar .side-menu li>span.bottom::before {
            border-radius: 0 24px 0 0;
        }

        /* CONTENT */
        #sidebar.hide~#content {
            width: calc(100% - ((56px - 8px) + ((4px + 6px) * 2)));
            left: calc((56px - 8px) + ((4px + 6px) * 2));
        }

        #content {
            width: calc(100% - 280px);
            position: relative;
            left: 280px;
            z-index: 500;
            transition: .3s ease;
        }

        #content nav .curve {
            position: absolute;
            bottom: -24px;
            left: 0;
            width: 24px;
            height: 24px;
            background: var(--light);
            display: block;
            z-index: 1000;
        }

        #content nav .curve::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 24px 0 0 0;
            background: var(--grey);
        }

        #content nav {
            width: 100%;
            height: 56px;
            background: var(--light);
            display: flex;
            font-family: var(--lato);
            padding: 0 36px;
            align-items: center;
            grid-gap: 36px;
            position: sticky;
            top: 0;
            left: 0;
            z-index: 500;
        }

        #content nav .menu-bar {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        #content nav a {
            color: var(--dark);
        }

        #content nav form {
            max-width: 420px;
            width: 100%;
            margin-right: auto;
        }

        #content nav form .form-input {
            position: relative;
            display: flex;
            align-items: center;
            height: 36px;
        }

        #content nav form .form-input input {
            height: 100%;
            flex: 1;
            border-radius: 32px 0 0 32px;
            background: var(--grey);
            border: none;
            padding: 0 16px;
            outline: none;
        }

        #content nav form .form-input .search-icon {
            background: var(--blue);
            height: 100%;
            border-radius: 0 32px 32px 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--light);
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 20px;
            width: 48px;
        }

        #content nav .notification {
            font-size: 22px;
            position: relative;
        }

        #content nav .notification .num {
            width: 20px;
            height: 20px;
            background: var(--red);
            border: 2px solid var(--light);
            font-size: 10px;
            color: var(--light);
            font-weight: 700;
            position: absolute;
            top: -6px;
            right: -6px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
        }

        #content nav .profile {
            padding: 0 16px;
            height: 100%;
            transition: .3s ease;
            display: flex;
            align-items: center;
            grid-gap: 16px;
        }

        #content nav .profile:hover {
            background: var(--grey);
        }

        #content nav .profile .name {
            font-size: 16px;
            font-weight: 700;
        }

        #content nav .profile img {
            width: 36px;
            height: 36px;
            object-fit: cover;
            border-radius: 50%;
        }

        #content main {
            font-family: var(--poppins);
            width: 100%;
            position: relative;
            padding: 24px 36px;
            color: var(--dark);
        }

        #content main .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            grid-gap: 20px;
        }

        #content main .top h1 {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        #content main .top .breadcrumb {
            display: flex;
            grid-gap: 16px;
        }

        #content main .top .breadcrumb a {
            color: var(--dark-grey);
            pointer-events: none;
        }

        #content main .top .breadcrumb a.active {
            color: var(--blue);
            pointer-events: unset;
        }

        #content main .top .btn-download {
            height: 48px;
            border-radius: 48px;
            background: var(--blue);
            color: var(--light);
            padding: 0 24px;
            display: flex;
            align-items: center;
            grid-gap: 16px;
            font-size: 16px;
            font-weight: 500;
        }

        #content main .top .btn-download .icon {
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #content main .box-info {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-gap: 36px;
        }

        #content main .box-info .box {
            padding: 24px;
            background: var(--light);
            border-radius: 20px;
            display: flex;
            grid-gap: 32px;
            align-items: center;
            flex-wrap: wrap;
        }

        #content main .box-info .box .icon {
            display: flex;
            min-width: 100px;
            height: 100px;
            border-radius: 10px;
            justify-content: center;
            align-items: center;
            background: var(--grey);
            font-size: 48px;
        }

        #content main .box-info .box .text h3 {
            font-size: 28px;
            margin-bottom: 4px;
            font-weight: 600;
        }

        #content main .box-info .box .text p {
            font-size: 16px;
        }

        #content main .box-info .box:nth-child(1) .icon {
            color: var(--blue);
            background: var(--light-blue);
        }

        #content main .box-info .box:nth-child(2) .icon {
            color: var(--yellow);
            background: var(--light-yellow);
        }

        #content main .box-info .box:nth-child(3) .icon {
            color: var(--orange);
            background: var(--light-orange);
        }

        #content main .table-data {
            display: flex;
            grid-gap: 36px;
            margin-top: 36px;
            flex-wrap: wrap;
        }

        #content main .table-data>div {
            padding: 24px;
            border-radius: 20px;
            background: var(--light);
            overflow-x: auto;
        }

        #content main .table-data .order {
            flex-basis: 500px;
            flex-grow: 1;
        }

        #content main .table-data .todo .head,
        #content main .table-data .order .head {
            display: flex;
            align-items: center;
            grid-gap: 24px;
            margin-bottom: 36px;
            min-width: 340px;
        }

        #content main .table-data .todo .head h3,
        #content main .table-data .order .head h3 {
            margin-right: auto;
            font-size: 24px;
            font-weight: 600;
        }

        #content main .table-data .order table {
            width: 100%;
            border-collapse: collapse;
            min-width: 520px;
        }

        #content main .table-data .order table th {
            padding-bottom: 10px;
            font-size: 14px;
            font-weight: 600;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }

        #content main .table-data .order table th:nth-child(1) {
            padding-left: 10px;
        }

        #content main .table-data .order table tbody tr:hover {
            background: var(--grey);
        }

        #content main .table-data .order table td {
            padding: 6px 0;
        }

        #content main .table-data .order table td img {
            width: 36px;
            height: 36px;
            object-fit: cover;
            border-radius: 50%;
        }

        #content main .table-data .order table tr td:nth-child(1) {
            display: flex;
            align-items: center;
            grid-gap: 16px;
            padding-left: 10px;
        }

        #content main .table-data .order table tr td .badge {
            font-size: 10px;
            font-weight: 600;
            height: 24px;
            line-height: 24px;
            padding: 0 16px;
            border-radius: 24px;
            color: var(--light);
            display: inline-block;
        }

        #content main .table-data .order table tr td .badge.completed {
            background: var(--blue);
        }

        #content main .table-data .order table tr td .badge.process {
            background: var(--yellow);
        }

        #content main .table-data .order table tr td .badge.pending {
            background: var(--orange);
        }

        #content main .table-data .todo {
            flex-basis: 360px;
            flex-grow: 1;
        }

        #content main .table-data .todo .todos {
            min-width: 520px;
        }

        #content main .table-data .todo .todos li {
            border-radius: 10px;
            background: var(--grey);
            padding: 16px 24px;
            margin: 8px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 16px;
            font-weight: 500;
        }

        #content main .table-data .todo .todos li.completed {
            border-left: 10px solid var(--blue);
        }

        #content main .table-data .todo .todos li.not-completed {
            border-left: 10px solid var(--orange);
        }

        #content main .table-data .todo .todos li .menu {
            cursor: pointer;
        }

        /* Additional Styles for User Management Table */
        #user-management-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #user-management-table th,
        #user-management-table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }

        #user-management-table th {
            background: var(--light-blue);
            color: var(--blue);
            font-weight: 600;
        }

        #user-management-table tbody tr:hover {
            background: var(--light);
        }

        #user-management-table .action-buttons {
            display: flex;
            gap: 8px;
        }

        #user-management-table .action-buttons button {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        #user-management-table .action-buttons button.edit {
            background: var(--blue);
            color: var(--light);
        }

        #user-management-table .action-buttons button.delete {
            background: var(--red);
            color: var(--light);
        }

        #user-management-table .action-buttons button:hover {
            opacity: 0.9;
        }

        .search-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 16px;
            gap: 16px; /* Added gap between search input and button */
        }

        .search-container input {
            padding: 8px 12px;
            border: 1px solid var(--grey);
            border-radius: 4px;
            outline: none;
            width: 200px;
        }

        .search-container button {
            padding: 8px 16px;
            background: var(--blue);
            color: var(--light);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .search-container button:hover {
            background: var(--light-blue);
            color: var(--blue);
        }

        .see-more-container {
            text-align: center;
            margin-top: 16px;
        }

        .see-more-container button {
            padding: 8px 16px;
            background: var(--blue);
            color: var(--light);
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .see-more-container button:hover {
            background: var(--light-blue);
            color: var(--blue);
        }

        /* Blood Stock Management Table */
        #blood-stock-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #blood-stock-table th,
        #blood-stock-table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }

        #blood-stock-table th {
            background: var(--light-blue);
            color: var(--blue);
            font-weight: 600;
        }

        #blood-stock-table tbody tr:hover {
            background: var(--light);
        }

        #blood-stock-table .action-buttons button.update {
            background: var(--blue);
            color: var(--light);
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        #blood-stock-table .action-buttons button.update:hover {
            opacity: 0.9;
        }

        /* Request Management Table */
        #request-management-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #request-management-table th,
        #request-management-table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }

        #request-management-table th {
            background: var(--light-blue);
            color: var(--blue);
            font-weight: 600;
        }

        #request-management-table tbody tr:hover {
            background: var(--light);
        }

        #request-management-table .action-buttons {
            display: flex;
            gap: 8px;
        }

        #request-management-table .action-buttons button {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        #request-management-table .action-buttons button.accept {
            background: var(--blue);
            color: var(--light);
        }

        #request-management-table .action-buttons button.reject {
            background: var(--red);
            color: var(--light);
        }

        #request-management-table .action-buttons button:hover {
            opacity: 0.9;
        }

        /* Donation Camp Management Table */
        #donation-camp-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #donation-camp-table th,
        #donation-camp-table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }

        #donation-camp-table th {
            background: var(--light-blue);
            color: var(--blue);
            font-weight: 600;
        }

        #donation-camp-table tbody tr:hover {
            background: var(--light);
        }

        #donation-camp-table .action-buttons {
            display: flex;
            gap: 8px;
        }

        #donation-camp-table .action-buttons button {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        #donation-camp-table .action-buttons button.edit {
            background: var(--blue);
            color: var(--light);
        }

        #donation-camp-table .action-buttons button.delete {
            background: var(--red);
            color: var(--light);
        }

        #donation-camp-table .action-buttons button:hover {
            opacity: 0.9;
        }

        /* Notification System Table */
        #notification-system-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #notification-system-table th,
        #notification-system-table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }

        #notification-system-table th {
            background: var(--light-blue);
            color: var(--blue);
            font-weight: 600;
        }

        #notification-system-table tbody tr:hover {
            background: var(--light);
        }

        #notification-system-table .action-buttons {
            display: flex;
            gap: 8px;
        }

        #notification-system-table .action-buttons button {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        #notification-system-table .action-buttons button.delete {
            background: var(--red);
            color: var(--light);
        }

        #notification-system-table .action-buttons button:hover {
            opacity: 0.9;
        }
        /* Feedback System Table */
        #feedback-system-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #feedback-system-table th,
        #feedback-system-table td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }

        #feedback-system-table th {
            background: var(--light-blue);
            color: var(--blue);
            font-weight: 600;
        }

        #feedback-system-table tbody tr:hover {
            background: var(--light);
        }

        #feedback-system-table .action-buttons {
            display: flex;
            gap: 8px;
        }

        #feedback-system-table .action-buttons button {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            transition: background 0.3s ease;
        }

        #feedback-system-table .action-buttons button.delete {
            background: var(--red);
            color: var(--light);
        }

        #feedback-system-table .action-buttons button:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="logo">
            <span class="icon"><i class='bx bxs-smile'></i></span>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu">
            <li class="active">
                <a href="#" data-page="dashboard">
                    <span class="icon"><i class='bx bxs-dashboard'></i></span>
                    <span class="text">Dashboard</span>
                </a>
                <span class="top"></span>
                <span class="bottom"></span>
            </li>
            <li>
                <a href="#" data-page="user-management">
                    <span class="icon"><i class='bx bxs-user'></i></span>
                    <span class="text">User Management</span>
                </a>
                <span class="top"></span>
                <span class="bottom"></span>
            </li>
            <li>
                <a href="#" data-page="blood-stock-management">
                    <span class="icon"><i class='bx bxs-droplet'></i></span>
                    <span class="text">Blood Stock Management</span>
                </a>
                <span class="top"></span>
                <span class="bottom"></span>
            </li>
            <li>
                <a href="#" data-page="request-management">
                    <span class="icon"><i class='bx bxs-calendar'></i></span>
                    <span class="text">Request Management</span>
                </a>
                <span class="top"></span>
                <span class="bottom"></span>
            </li>
            <li>
                <a href="#" data-page="donation-camp-management">
                    <span class="icon"><i class='bx bxs-calendar-event'></i></span>
                    <span class="text">Donation Camp Management</span>
                </a>
                <span class="top"></span>
                <span class="bottom"></span>
            </li>
            <li>
                <a href="#" data-page="notification-system">
                    <span class="icon"><i class='bx bxs-bell'></i></span>
                    <span class="text">Notification System</span>
                </a>
                <span class="top"></span>
                <span class="bottom"></span>
            </li>
            <li>
                <a href="#" data-page="feedback-system">
                    <span class="icon"><i class='bx bxs-message'></i></span>
                    <span class="text">Feedback System</span>
                </a>
                <span class="top"></span>
                <span class="bottom"></span>
            </li>
        </ul>

        <ul class="side-menu bottom">
            <li>
                <a href="#" class="logout">
                    <span class="icon"><i class='bx bxs-log-out-circle'></i></span>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->

    <!-- CONTENT -->
    <section id="content">
        <nav>
            <span class="menu-bar"><i class='bx bx-menu'></i></span>
            <a href="#" class="link-nav">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-icon"><i class='bx bx-search'></i></button>
                </div>
            </form>
            
            <a href="#" class="profile">
                <span class="name">Saifur Rahman</span>
                <img src="myPic.jpg" alt="Image">
            </a>
            <span class="curve"></span>
        </nav>

        <main>
            <!-- Dynamic content will be loaded here -->
            <div id="dynamic-content"></div>
        </main>
    </section>
    <!-- CONTENT -->

    <script>
        // JavaScript for handling dynamic content loading
        const allMenu = document.querySelectorAll('.side-menu:not(.bottom) li');
        const dynamicContent = document.getElementById('dynamic-content');

        // Default content (Dashboard)
        const dashboardContent = `
            <div class="top">
                <div class="left">
                    <h1 class="title">Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="#" class="active">Home</a>
                        </li>
                    </ul>
                </div>
                
            </div>
            <div class="box-info">
                <div class="box">
                   <span class="icon"><i class='bx bxs-calendar'></i></span>
                   <div class="text">
                      <h3>50</h3>
                      <p>Total Requests</p>
                   </div>
                </div>
                <div class="box">
                    <span class="icon"><i class='bx bxs-group'></i></span>
                    <div class="text">
                        <h3>1000</h3>
                        <p>Total Users</p>
                    </div>
                </div>
                <div class="box">
                  <span class="icon"><i class='bx bxs-store'></i></span>
                  <div class="text">
                    <h3>6</h3>
                    <p>Total Branches</p>
                  </div>
                </div>
            </div>
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Recent Request</h3>
                        <span><i class='bx bx-search'></i></span>
                        <span><i class='bx bx-filter'></i></span>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Request Date</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <img src="myPic.jpg" alt="Image">
                                    <span class="name">Siam Saif</span>
                                </td>
                                <td>29-10-2021</td>
                                <td><span class="badge completed">Accepted</span></td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="lionPic.jpg" alt="Image">
                                    <span class="name">Mr. Lion</span>
                                </td>
                                <td>29-10-2021</td>
                                <td><span class="badge process">Rejected</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
            </div>
        `;

        const userManagementContent = `
            <div class="top">
                <div class="left">
                    <h1 class="title">User Management</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="#" class="active">User Management</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search-container">
                <input type="text" id="search-input" placeholder="Search by Email or ID">
            </div>
            <table id="user-management-table">
                <thead>
                    <tr>
                        <th>Unique ID</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="user-table-body">
                    <!-- Rows will be dynamically added here -->
                </tbody>
            </table>
            <div class="see-more-container">
                <button id="see-more-btn">See More</button>
            </div>
        `;

        const bloodStockManagementContent = `
            <div class="top">
                <div class="left">
                    <h1 class="title">Blood Stock Management</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="#" class="active">Blood Stock Management</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search-container">
                <input type="text" id="search-blood-stock-input" placeholder="Search by Branch Name">
            </div>
            <table id="blood-stock-table">
                <thead>
                    <tr>
                        <th>Branch ID</th>
                        <th>Branch Name</th>
                        <th>Total Stock</th>
                        <th>A+</th>
                        <th>A-</th>
                        <th>B+</th>
                        <th>B-</th>
                        <th>O+</th>
                        <th>O-</th>
                        <th>AB+</th>
                        <th>AB-</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="blood-stock-table-body">
                    <!-- Rows will be dynamically added here -->
                </tbody>
            </table>
            <div class="see-more-container">
                <button id="see-more-blood-stock-btn">See More</button>
            </div>
        `;

        const requestManagementContent = `
            <div class="top">
                <div class="left">
                    <h1 class="title">Request Management</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="#" class="active">Request Management</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search-container">
                <input type="text" id="search-request-input" placeholder="Search by User Name">
            </div>
            <table id="request-management-table">
                <thead>
                    <tr>
                        <th>Request ID</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>Blood Group</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="request-table-body">
                    <!-- Rows will be dynamically added here -->
                </tbody>
            </table>
            <div class="see-more-container">
                <button id="see-more-request-btn">See More</button>
            </div>
        `;

        const donationCampManagementContent = `
            <div class="top">
                <div class="left">
                    <h1 class="title">Donation Camp Management</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="#" class="active">Donation Camp Management</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search-container">
                <input type="text" id="search-donation-camp-input" placeholder="Search by Organizer Name">
            </div>
            <table id="donation-camp-table">
                <thead>
                    <tr>
                        <th>Camp ID</th>
                        <th>Organizer Name</th>
                        <th>Blood Collected</th>
                        <th>A+</th>
                        <th>A-</th>
                        <th>B+</th>
                        <th>B-</th>
                        <th>O+</th>
                        <th>O-</th>
                        <th>AB+</th>
                        <th>AB-</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="donation-camp-table-body">
                    <!-- Rows will be dynamically added here -->
                </tbody>
            </table>
            <div class="see-more-container">
                <button id="see-more-donation-camp-btn">See More</button>
            </div>
        `;

        const feedbackSystemContent = `
            <div class="top">
                <div class="left">
                    <h1 class="title">Feedback System</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="#" class="active">Feedback System</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search-container">
                <input type="text" id="search-feedback-input" placeholder="Search by User Name">
            </div>
            <table id="feedback-system-table">
                <thead>
                    <tr>
                        <th>Feedback ID</th>
                        <th>User Name</th>
                        <th>Feedback</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="feedback-table-body">
                    <!-- Rows will be dynamically added here -->
                </tbody>
            </table>
            <div class="see-more-container">
                <button id="see-more-feedback-btn">See More</button>
            </div>
        `;

        const notificationSystemContent = `
            <div class="top">
                <div class="left">
                    <h1 class="title">Notification System</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li class="arrow-icon"><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a href="#" class="active">Notification System</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="search-container">
                <input type="text" id="search-notification-input" placeholder="Search by User Email">
                <button id="send-notice-btn">Send Notice</button>
            </div>
            <table id="notification-system-table">
                <thead>
                    <tr>
                        <th>Notification ID</th>
                        <th>User Email</th>
                        <th>Notification</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="notification-table-body">
                    <!-- Rows will be dynamically added here -->
                </tbody>
            </table>
            <div class="see-more-container">
                <button id="see-more-notification-btn">See More</button>
            </div>
        `;

        // Load default content (Dashboard)
        dynamicContent.innerHTML = dashboardContent;

        // Function to load content dynamically
        function loadPage(pageName) {
            let content = '';
            switch (pageName) {
                case 'dashboard':
                    content = dashboardContent;
                    break;
                case 'user-management':
                    content = userManagementContent;
                    break;
                case 'blood-stock-management':
                    content = bloodStockManagementContent;
                    break;
                case 'request-management':
                    content = requestManagementContent;
                    break;
                case 'donation-camp-management':
                    content = donationCampManagementContent;
                    break;
                case 'notification-system':
                    content = notificationSystemContent;
                    break;
                case 'feedback-system':
                    content = feedbackSystemContent;
                    break;    
                default:
                    content = `<h1>Page Not Found</h1>`;
            }
            dynamicContent.innerHTML = content;

            // Initialize User Management Table
            if (pageName === 'user-management') {
                initializeUserManagementTable();
            }

            // Initialize Blood Stock Management Table
            if (pageName === 'blood-stock-management') {
                initializeBloodStockManagementTable();
            }

            // Initialize Request Management Table
            if (pageName === 'request-management') {
                initializeRequestManagementTable();
            }

            // Initialize Donation Camp Management Table
            if (pageName === 'donation-camp-management') {
                initializeDonationCampManagementTable();
            }
            // Initialize Feedback System Table
            if (pageName === 'feedback-system') {
                initializeFeedbackSystemTable();
            }

            // Initialize Notification System Table
            if (pageName === 'notification-system') {
                initializeNotificationSystemTable();
            }
            
        }

        // Function to initialize User Management Table
        function initializeUserManagementTable() {
            const userTableBody = document.getElementById('user-table-body');
            const searchInput = document.getElementById('search-input');
            const seeMoreBtn = document.getElementById('see-more-btn');

            // Sample Data
            const users = [
                { id: 1, name: 'John Doe', email: 'john@example.com', password: '********' },
                { id: 2, name: 'Jane Smith', email: 'jane@example.com', password: '********' },
                { id: 3, name: 'Alice Johnson', email: 'alice@example.com', password: '********' },
                { id: 4, name: 'Bob Brown', email: 'bob@example.com', password: '********' },
                { id: 5, name: 'Charlie Davis', email: 'charlie@example.com', password: '********' },
            ];

            // Function to render users
            function renderUsers(usersToRender) {
                userTableBody.innerHTML = usersToRender
                    .map(
                        (user) => `
                        <tr>
                            <td>${user.id}</td>
                            <td>${user.name}</td>
                            <td>${user.email}</td>
                            <td>${user.password}</td>
                            <td class="action-buttons">
                                <button class="edit">Edit</button>
                                <button class="delete">Delete</button>
                            </td>
                        </tr>
                    `
                    )
                    .join('');
            }

            // Initial render
            renderUsers(users);

            // Search functionality
            searchInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                const filteredUsers = users.filter(
                    (user) =>
                        user.email.toLowerCase().includes(searchTerm) ||
                        user.id.toString().includes(searchTerm)
                );
                renderUsers(filteredUsers);
            });

            // See More functionality
            seeMoreBtn.addEventListener('click', () => {
                // Add more users or fetch from API
                alert('Fetching more users...');
            });
        }

        // Function to initialize Blood Stock Management Table
        function initializeBloodStockManagementTable() {
            const bloodStockTableBody = document.getElementById('blood-stock-table-body');
            const searchBloodStockInput = document.getElementById('search-blood-stock-input');
            const seeMoreBloodStockBtn = document.getElementById('see-more-blood-stock-btn');

            // Sample Data
            const bloodStocks = [
                { branchId: 1, branchName: 'Dhaka Central', totalStock: 500, Aplus: 100, Aminus: 50, Bplus: 80, Bminus: 40, Oplus: 120, Ominus: 60, ABplus: 30, ABminus: 20 },
                { branchId: 2, branchName: 'Chittagong Branch', totalStock: 400, Aplus: 90, Aminus: 45, Bplus: 70, Bminus: 35, Oplus: 110, Ominus: 55, ABplus: 25, ABminus: 15 },
                { branchId: 3, branchName: 'Sylhet Branch', totalStock: 300, Aplus: 80, Aminus: 40, Bplus: 60, Bminus: 30, Oplus: 100, Ominus: 50, ABplus: 20, ABminus: 10 },
            ];

            // Function to render blood stocks
            function renderBloodStocks(stocksToRender) {
                bloodStockTableBody.innerHTML = stocksToRender
                    .map(
                        (stock) => `
                        <tr>
                            <td>${stock.branchId}</td>
                            <td>${stock.branchName}</td>
                            <td>${stock.totalStock}</td>
                            <td>${stock.Aplus}</td>
                            <td>${stock.Aminus}</td>
                            <td>${stock.Bplus}</td>
                            <td>${stock.Bminus}</td>
                            <td>${stock.Oplus}</td>
                            <td>${stock.Ominus}</td>
                            <td>${stock.ABplus}</td>
                            <td>${stock.ABminus}</td>
                            <td class="action-buttons">
                                <button class="update">Update</button>
                            </td>
                        </tr>
                    `
                    )
                    .join('');
            }

            // Initial render
            renderBloodStocks(bloodStocks);

            // Search functionality
            searchBloodStockInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                const filteredStocks = bloodStocks.filter(
                    (stock) =>
                        stock.branchName.toLowerCase().includes(searchTerm)
                );
                renderBloodStocks(filteredStocks);
            });

            // See More functionality
            seeMoreBloodStockBtn.addEventListener('click', () => {
                // Add more stocks or fetch from API
                alert('Fetching more blood stocks...');
            });
        }

        // Function to initialize Request Management Table
        function initializeRequestManagementTable() {
            const requestTableBody = document.getElementById('request-table-body');
            const searchRequestInput = document.getElementById('search-request-input');
            const seeMoreRequestBtn = document.getElementById('see-more-request-btn');

            // Sample Data
            const requests = [
                { requestId: 1, userName: 'John Doe', userEmail: 'john@example.com', bloodGroup: 'A+', quantity: 2 },
                { requestId: 2, userName: 'Jane Smith', userEmail: 'jane@example.com', bloodGroup: 'B-', quantity: 1 },
                { requestId: 3, userName: 'Alice Johnson', userEmail: 'alice@example.com', bloodGroup: 'O+', quantity: 3 },
                { requestId: 4, userName: 'Bob Brown', userEmail: 'bob@example.com', bloodGroup: 'AB+', quantity: 1 },
                { requestId: 5, userName: 'Charlie Davis', userEmail: 'charlie@example.com', bloodGroup: 'A-', quantity: 2 },
            ];

            // Function to render requests
            function renderRequests(requestsToRender) {
                requestTableBody.innerHTML = requestsToRender
                    .map(
                        (request) => `
                        <tr>
                            <td>${request.requestId}</td>
                            <td>${request.userName}</td>
                            <td>${request.userEmail}</td>
                            <td>${request.bloodGroup}</td>
                            <td>${request.quantity}</td>
                            <td class="action-buttons">
                                <button class="accept">Accept</button>
                                <button class="reject">Reject</button>
                            </td>
                        </tr>
                    `
                    )
                    .join('');
            }

            // Initial render
            renderRequests(requests);

            // Search functionality
            searchRequestInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                const filteredRequests = requests.filter(
                    (request) =>
                        request.userName.toLowerCase().includes(searchTerm)
                );
                renderRequests(filteredRequests);
            });

            // See More functionality
            seeMoreRequestBtn.addEventListener('click', () => {
                // Add more requests or fetch from API
                alert('Fetching more requests...');
            });
        }

        // Function to initialize Donation Camp Management Table
        function initializeDonationCampManagementTable() {
            const donationCampTableBody = document.getElementById('donation-camp-table-body');
            const searchDonationCampInput = document.getElementById('search-donation-camp-input');
            const seeMoreDonationCampBtn = document.getElementById('see-more-donation-camp-btn');

            // Sample Data
            const donationCamps = [
                { campId: 1, organizerName: 'John Doe', bloodCollected: 500, Aplus: 100, Aminus: 50, Bplus: 80, Bminus: 40, Oplus: 120, Ominus: 60, ABplus: 30, ABminus: 20 },
                { campId: 2, organizerName: 'Jane Smith', bloodCollected: 400, Aplus: 90, Aminus: 45, Bplus: 70, Bminus: 35, Oplus: 110, Ominus: 55, ABplus: 25, ABminus: 15 },
                { campId: 3, organizerName: 'Alice Johnson', bloodCollected: 300, Aplus: 80, Aminus: 40, Bplus: 60, Bminus: 30, Oplus: 100, Ominus: 50, ABplus: 20, ABminus: 10 },
            ];

            // Function to render donation camps
            function renderDonationCamps(campsToRender) {
                donationCampTableBody.innerHTML = campsToRender
                    .map(
                        (camp) => `
                        <tr>
                            <td>${camp.campId}</td>
                            <td>${camp.organizerName}</td>
                            <td>${camp.bloodCollected}</td>
                            <td>${camp.Aplus}</td>
                            <td>${camp.Aminus}</td>
                            <td>${camp.Bplus}</td>
                            <td>${camp.Bminus}</td>
                            <td>${camp.Oplus}</td>
                            <td>${camp.Ominus}</td>
                            <td>${camp.ABplus}</td>
                            <td>${camp.ABminus}</td>
                            <td class="action-buttons">
                                <button class="edit">Edit</button>
                                <button class="delete">Delete</button>
                            </td>
                        </tr>
                    `
                    )
                    .join('');
            }

            // Initial render
            renderDonationCamps(donationCamps);

            // Search functionality
            searchDonationCampInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                const filteredCamps = donationCamps.filter(
                    (camp) =>
                        camp.organizerName.toLowerCase().includes(searchTerm)
                );
                renderDonationCamps(filteredCamps);
            });

            // See More functionality
            seeMoreDonationCampBtn.addEventListener('click', () => {
                // Add more camps or fetch from API
                alert('Fetching more donation camps...');
            });
        }

        // Function to initialize Notification System Table
        function initializeNotificationSystemTable() {
            const notificationTableBody = document.getElementById('notification-table-body');
            const searchNotificationInput = document.getElementById('search-notification-input');
            const seeMoreNotificationBtn = document.getElementById('see-more-notification-btn');
            const sendNoticeBtn = document.getElementById('send-notice-btn');

            // Sample Data
            const notifications = [
                { notificationId: 1, userEmail: 'john@example.com', notification: 'Your blood donation request has been accepted.' },
                { notificationId: 2, userEmail: 'jane@example.com', notification: 'Your blood donation request has been rejected.' },
                { notificationId: 3, userEmail: 'alice@example.com', notification: 'Your blood donation request is pending.' },
                { notificationId: 4, userEmail: 'bob@example.com', notification: 'Your blood donation request has been accepted.' },
                { notificationId: 5, userEmail: 'charlie@example.com', notification: 'Your blood donation request has been rejected.' },
            ];

            // Function to render notifications
            function renderNotifications(notificationsToRender) {
                notificationTableBody.innerHTML = notificationsToRender
                    .map(
                        (notification) => `
                        <tr>
                            <td>${notification.notificationId}</td>
                            <td>${notification.userEmail}</td>
                            <td>${notification.notification}</td>
                            <td class="action-buttons">
                                <button class="delete">Delete</button>
                            </td>
                        </tr>
                    `
                    )
                    .join('');
            }


            


            // Initial render
            renderNotifications(notifications);

            // Search functionality
            searchNotificationInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                const filteredNotifications = notifications.filter(
                    (notification) =>
                        notification.userEmail.toLowerCase().includes(searchTerm)
                );
                renderNotifications(filteredNotifications);
            });

            // See More functionality
            seeMoreNotificationBtn.addEventListener('click', () => {
                // Add more notifications or fetch from API
                alert('Fetching more notifications...');
            });

            // Send Notice functionality
            sendNoticeBtn.addEventListener('click', () => {
                const userEmail = prompt('Enter the user email:');
                const notificationText = prompt('Enter the notification text:');
                if (userEmail && notificationText) {
                    const newNotification = {
                        notificationId: notifications.length + 1,
                        userEmail,
                        notification: notificationText,
                    };
                    notifications.push(newNotification);
                    renderNotifications(notifications);
                    alert('Notification sent successfully!');
                } else {
                    alert('Please provide both user email and notification text.');
                }
            });
        }


        // Function to initialize Feedback System Table
        function initializeFeedbackSystemTable() {
            const feedbackTableBody = document.getElementById('feedback-table-body');
            const searchFeedbackInput = document.getElementById('search-feedback-input');
            const seeMoreFeedbackBtn = document.getElementById('see-more-feedback-btn');

            // Sample Data
            const feedbacks = [
                { feedbackId: 1, userName: 'John Doe', feedback: 'Great service! Highly recommended.' },
                { feedbackId: 2, userName: 'Jane Smith', feedback: 'The staff was very helpful.' },
                { feedbackId: 3, userName: 'Alice Johnson', feedback: 'The process was smooth and efficient.' },
                { feedbackId: 4, userName: 'Bob Brown', feedback: 'I had a wonderful experience.' },
                { feedbackId: 5, userName: 'Charlie Davis', feedback: 'The facility was clean and well-maintained.' },
            ];

            // Function to render feedbacks
            function renderFeedbacks(feedbacksToRender) {
                feedbackTableBody.innerHTML = feedbacksToRender
                    .map(
                        (feedback) => `
                        <tr>
                            <td>${feedback.feedbackId}</td>
                            <td>${feedback.userName}</td>
                            <td>${feedback.feedback}</td>
                            <td class="action-buttons">
                                <button class="delete">Delete</button>
                            </td>
                        </tr>
                    `
                    )
                    .join('');
            }

            // Initial render
            renderFeedbacks(feedbacks);

            // Search functionality
            searchFeedbackInput.addEventListener('input', (e) => {
                const searchTerm = e.target.value.toLowerCase();
                const filteredFeedbacks = feedbacks.filter(
                    (feedback) =>
                        feedback.userName.toLowerCase().includes(searchTerm)
                );
                renderFeedbacks(filteredFeedbacks);
            });

            // See More functionality
            seeMoreFeedbackBtn.addEventListener('click', () => {
                // Add more feedbacks or fetch from API
                alert('Fetching more feedbacks...');
            });
        }

        // Add event listeners to sidebar items
        allMenu.forEach(item => {
            const a = item.querySelector('a');
            a.addEventListener('click', function () {
                allMenu.forEach(item1 => item1.classList.remove('active'));
                this.parentElement.classList.add('active');
                const pageName = this.getAttribute('data-page');
                loadPage(pageName);
            });
        });

        // Toggle sidebar
        const menuBar = document.querySelector('#content nav .menu-bar');
        const sideBar = document.querySelector('#sidebar');

        menuBar.addEventListener('click', function () {
            sideBar.classList.toggle('hide');
        });
    </script>
</body>
</html>