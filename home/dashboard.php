<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<link rel="stylesheet" href="../css/dashboard.css">

<main>

    <section class="wrapper">
        <section class="welcome">
            <h1>Welcome User! </h1>
        </section>
        <section class="statistics">
            <div class="totaltasks">
                <p>Total Tasks:</p>

            </div>
            <div class="taskstatus">
                <div class="statuscard">
                    <p>Completed Tasks:</p>

                </div>
                <div class="statuscard">
                    <p>Pending Tasks:</p>

                </div>
                <div class="statuscard">
                    <p>Recent Tasks:</p>

                </div>
            </div>
        </section>
        <section class="quicklinks">
            <div class="linkbtn">
                <button id="addbtn">Show Tasks</button>
                <button id="addbtn">Add Tasks</button>
                <button id="addbtn">Modify Tasks</button>
                <button id="addbtn">Logout</button>

            </div>
        </section>



    </section>


</main>


<?php include "../includes/footer.php"; ?>