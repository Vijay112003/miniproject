<?php
include ("header.php");
if (mysqli_num_rows($query_res) == 1) {
    $row = $query_res->fetch_assoc();
    if ($row['gate_pass'] == $pass) {
        echo ("<script>alert('Gate $id');</script>");
        $_SESSION['gate'] = $row['gate_num'];
        echo ("<body class='landing'><!-- Header -->
                    <header id='header'>
                        <h1 id='logo'>GATE " . $_SESSION['gate'] . "</h1> 
                        <nav id='nav'>
                        <ul>
                            <li><a href='today.php'>TODAY ACTIVITY</a></li>
                            <li>
                                <a href='#'>LATE ENTRY</a>
                                <ul>
                                <li><a href='studentry.php'>STUDENT</a></li>
                                <li><a href='staffentry.php'>STAFF</a></li>
                                </ul>
                            </li>
                            <li><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#adminModal' data-image-id='1'>
                            <a href='../log-out.php'>Log-out</a>
                          </button></li>
                        </ul>
                    </nav>
                </header>");
        include ("footer.php");
    } else {
        echo "<script>alert('Password is wrong, Try again...?'); window.location='../index.php';</script>";
    }
} else {
    echo "<script>alert('Password is wrong'); window.location='../index.php';</script>";
}
?>