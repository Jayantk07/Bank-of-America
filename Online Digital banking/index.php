<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <title>Online Digital Banking System</title>
</head>

<body>
    <?php
  include 'navbar.php';
  ?>

        <div class="container-fluid">
            <!-- Introduction section -->
            <div class="row intro py-4">
                <div class="col-sm-12 col-md">
                    <div class="heading text-center my-5">
                        <h3>Welcome to</h3>
                        <h1>Bank of America</h1>

                    </div>
                </div>

            </div>
        </div>



        <!-- Activity section -->
        <section>
            <div class="row activity text-center">
                <div class="col-md act">

                    <span class="user-icon"><i class="fas fa-user-tie fa-10x"></i></span>
                    <br>
                    <a href="createuser.php"><button style="background-color :#000000;" class="mt-2">Create User</button></a>
                </div>
                <div class="col-md act">
                    <span class="user-icon"><i class="fas fa-hand-holding-usd fa-10x"></i></i></span>
                    <br>
                    <a href="transfermoney.php"><button style="background-color :#000000;" class="mt-2">Make Transaction</button></a>
                </div>
                <div class="col-md act">
                    <span class="user-icon"><i class="fas fa-search-dollar fa-10x"></i></span>
                    <br>
                    <a href="transactionhistory.php"><button style="background-color :#000000;">Transaction History</button></a>
                </div>
            </div>
            </div>
        </section>
        <br>
        <section>
            <div class="jayant">
                <p class="sectionTag text-big">Bank of America Corp.</p>
                <p class="sectionSubTag text-small">The Bank of America Corporation is an American multinational investment bank and financial services holding company headquartered in Charlotte, North Carolina. Founded in San Francisco, Bank of America was formed through Nations Bank's
                    acquisition of Bank America in 1998.
                </p>
            </div>
        </section>

        <footer class="text-center mt-5">
            <p><a href="https://github.com/Jayantk07"><span class="git"><i class="fab fa-github"></i></span></a> <b>Jayant Kumar</b> <br> <img src="tsf.png" width="20px" height="20px"> The Sparks Foundation</p>
            <p>
                Copyright &copy;2021 <br> https://www.bankofamerica.com/ - All Rights Reserved
            </p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap');
    body {
        background-image: url('https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjIwMzQxOTc3&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit');
        background-size: cover;
    }
    
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Roboto', sans-serif;
    }
    
    .container-f {
        background: rgba(0, 0, 0, 0.5);
    }
    
    .intro {
        background: rgba(0, 0, 0, 0);
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }
    
    .jayant {
        width: 80%;
        margin-top: 150px;
        padding: 0 30px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        color: white;
        font: size 50px;
    }
    
    .user-icon {
        color: #18a2a7e7;
    }
    
    .logo {
        width: 40%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px;
        padding: 10px;
    }
    
    .logo img {
        width: 33%;
        border: 3px solid white;
        margin-left: 300px;
        margin-top: -150px;
    }
    
    .row activity text-center {
        margin: 150px;
    }
    
    .col-md act {
        margin: 100px;
    }
    
    h1 {
        font-size: 7vh;
        color: #a77a13;
        font-weight: bold;
    }
    
    h3 {
        color: #8d6405;
        text-shadow: 0 0 0 0;
    }
    
    button {
        border: 1px solid #c0ff78;
        border-radius: 8px;
        padding: 10px;
        background: #0447b3;
        color: rgb(3, 141, 9);
        letter-spacing: 1.5px;
        font-size: 15px;
        transition: 0.5s;
        font-family: 'Roboto', sans-serif;
    }
    
    button:hover {
        background-color: red;
        border: 1px solid #78efff;
        color: #0208c2;
        transform: scale(1.1);
    }
    
    button:hover {
        background-color: #0e0eed;
    }
    
    footer {
        color: #EAF0F1;
        background-color: rgba(56, 49, 49, 0.99);
        letter-spacing: 0.5px;
        padding: 30px;
    }
    
    footer p {
        margin: 0;
        font-size: 15px;
        .git {
            color: #fff;
            font-size: 20px;
        }
        span i {
            color: #FFEBCD;
            font-size: 240px;
            text-shadow: 2px 5px 5px rgba(0, 0, 0, 0.8);
        }
        @media only screen and (orientation:portrait) {
            .intro {
                display: flex;
                flex-direction: column-reverse;
            }
            h1 {
                font-size: 30px;
            }
            .act {
                padding-bottom: 100px;
            }
        }
</style>

</html>