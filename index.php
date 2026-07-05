<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div class="window">
        <div class="head">
            <h1>Welcome To Our To-Do-List!</h1>
            <h3>Note Your Tasks</h3>
            <div class="container">
                <div id="blink" class="header">
                    <b>To Do List</b>
                </div>
                <div>
                    <div class="taskentry">
                        <form action="addtask.php" method="POST">
                            <input type="text" id="taskbox" name="taskbox" placeholder="enter your tasks!">
                            <button type="submit" id="addbtn">ADD</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2>Check Your Tasks? Click Here!
        <form action="showtask.php" method="GET">
            <button id="showbtn2">SHOW LIST</button>
        </form>
    </h2>
</body>

</html>