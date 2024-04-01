<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Expense Tracker</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/app.css'>
    <link rel="shortcut icon" href="../img/explogo.png" type="image/x-icon">
</head>
<body>
    <main>
        <header>
            <h2><span>Expense Tracker</span><a href="../index.php">Logout</a></h2>
        </header>
        <div class="container">
            <div class="budget__numbers">
                <div id="earned" class="number">
                    <small>Total Income</small>
                    <div class="amount__container">
                        <p id="earned__symbol">&#8377;</p>
                    <span id="amount__earned"></span>
                </div>
            </div>
            <div id="available" class="number">
                <small>Current Balance</small>
                <div class="amount__container">
                    <p>&#8377;</p>
                    <span id="amount__available"></span>
                </div>
            </div>
            <div id="spent" class="number">
                <small>Total Expense</small>
                <div class="amount__container">
                    <p id="spent__symbol">&#8377;</p>
                    <span id="amount__spent"></span>
                </div>
            </div>
        </div>
        <div class="input__area">
            <p>Add transaction</p><input type="text" id="description" placeholder="Title" autofocus>
            <text id="rupee">&#8377;</text>
            <input type="number" id="amount" placeholder="Amount">
        </div>
        <div class="buttons__area">
            <button id="add__income">Add Income</button>
            <button id="add__expense">Add Expense</button>
        </div>
        <div class="items__container">
            <div id="income__container" class="container">
                <h2>Income</h2>
            </div>
            <div id="expenses__container" class="container">
                <h2>Expenses</h2>
            </div>
        </div>
    </div>
    <footer>
        <p>Developed by <a href="https://www.linkedin.com/in/aditya-as2">Aditya Singh Solanki</a></p>
    </footer>
</main>
<script src='../js/script.js'></script>
</body>
</html>