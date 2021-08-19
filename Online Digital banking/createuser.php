<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Your Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Succesfull! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

        <?php
  include 'navbar.php';
?>
            <br>
            <div class="background">
                <div class="container">
                    <div class="screen">
                        <div class="screen-header">
                            <div class="screen-header-right">
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                                <div class="screen-header-ellipsis"></div>
                            </div>
                        </div>
                        <h2 class="text-center pt-4" style="color :#0447b3; font-family :Arial,sans-serif;">Create Account</h2>
                        <br>
                        <div class="screen-body">
                        <section>
                            <div class="container">
                              <div class="row">
                                <div class="col-lg-12 d-flex align-items-stretch">
                                  <div class="icon-boxes d-flex flex-column justify-content-center">
                                    <div class="row">
                                      <div class="col-xl-12 d-flex align-items-stretch">
                                        <div class="icon-box mt-1 mt-xl-0">
                                          <section>
                                            <div class="container">
                                              <div class="row">
                                                <div class="col-lg-12 mt-4 mt-lg-0">
                                                  <div class="tab-content">
                                                    <div class="tab-pane active show" id="tab-1">
                                                      <div class="row">
                                                        <div class="col-lg-6 text-center order-1 order-lg-1">
                                                        <span class="user-icon"><i class="fas fa-user-check fa-10x ml-5 pt-5"></i></span>
                                                        </div>
                                                        <div class="col-lg-6 details order-2 order-lg-2">
                                                        <div class="screen-body-item">
                                                            <form class="app-form" method="post">
                                                                <div class="app-form-group">
                                                                    <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                                                                </div>
                                                                <div class="app-form-group">
                                                                    <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                                                                </div>
                                                                <div class="app-form-group">
                                                                    <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                                                                </div>
                                                                <br>
                                                                <div class="app-form-group button">
                                                                    <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                                                                    <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>

                                            </div>
                                          </section>
                                        </div>
                                      </div>
                                    </div>
                                  </div><!-- End .content-->
                                </div>
                              </div>
                            </div>
                          </section>
                        </div>
                    </div>
                </div>
                <style>
                    body {
                        background-image: url('https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjIwMzQxOTc3&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit');
                        background-size: cover;
                    }
                    
                    button,
                    input {
                        font-family: 'Ubuntu', sans-serif;
                        font-weight: 700;
                        letter-spacing: 1.4px;
                    }
                    
                    .background {
                        width: 100%;
                        display: flex;
                    }
                    
                    span i {
                        color: #18a2a7e7;
                        font-size: 200px;
                        text-shadow: 0 5px 28px rgba(204, 238, 51, 0.13);
                    }
                    
                    .container {
                        flex: 0 1 700px;
                        width: 100%;
                        margin: auto;
                        padding: 10px;
                    }
                    
                    .screen {
                        position: relative;
                        background: #a77a13;
                        border-radius: 15px;
                    }
                    
                    .screen-body {
                        display: flex;
                        background-color: #14140f;
                    }
                    
                    .screen-header {
                        display: flex;
                        align-items: center;
                        padding: 10px 20px;
                        background: #b3045b;
                        border-top-left-radius: 15px;
                        border-top-right-radius: 15px;
                    }
                    
                    .screen-header-right {
                        display: flex;
                    }
                    
                    .screen-header-ellipsis {
                        width: 5px;
                        height: 5px;
                        margin-left: 3px;
                        border-radius: 8px;
                        background: #d9d9d9;
                    }
                    
                    .screen-body {
                        display: flex;
                    }
                    
                    .screen-body-item {
                        flex: 1;
                        padding: 50px;
                        color: #FF4C4F;
                    }
                    
                    .app-form-group {
                        margin-bottom: 15px;
                    }
                    
                    .app-form-group.button {
                        margin-bottom: 0;
                        text-align: right;
                        position: absolute;
                        bottom: 30px;
                        right: 40px;
                    }
                    
                    .app-form-control {
                        width: 100%;
                        padding: 10px 0;
                        background: none;
                        border: none;
                        border-bottom: 1px solid #c0bebe;
                        color: rgb(80, 223, 23);
                        font-size: 14px;
                        outline: none;
                        transition: border-color .2s;
                    }
                    
                    .app-form-control::placeholder {
                        color: rgb(167, 164, 164);
                    }
                    
                    .app-form-control:focus {
                        border-bottom-color: #4C4B4B;
                    }
                    
                    .app-form-button {
                        background: none;
                        border: none;
                        margin-left: 20px;
                        color: #2db7fc;
                        font-size: 14px;
                        cursor: pointer;
                        outline: none;
                    }
                    
                    .app-form-button:hover {
                        color: #ffffff;
                    }
                    
                    @media screen and (max-width: 520px) {
                        * {
                            letter-spacing: 1px;
                        }
                        .container {
                            margin-left: 20px;
                            margin-right: 20px;
                            margin-bottom: 40px;
                        }
                        .screen-body {
                            flex-direction: column;
                        }
                        .screen-body-item.left {
                            margin-bottom: 50px;
                        }
                        .app-form-button {
                            margin-top: 5px;
                        }
                    }
                    
                    @media screen and (max-width: 600px) {
                        .screen-body {
                            padding: 40px;
                        }
                        .screen-body-item {
                            padding: 0;
                        }
                    }
                </style>
                <br><br><br>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>