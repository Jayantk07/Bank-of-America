<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body>
 <?php
  include 'navbar.php';
  ?>

    </body>
    <section class="contact" id="Contact%20Us">
        <h4 class="text-center" style="color:#a77a13">Contact Us</h4>
        <div class="form">
            <input class="form-input" type=" text" name="name " id ="name" placeholder="Enter Your name">
            <input class="form-input" type=" phone" name="phone " id ="phone" placeholder="Enter Your Phone">
            <input class="form-input" type=" email" name="email" id ="email" placeholder="Enter Your Email">
            <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Enter Your Review"></textarea>
            <button class="btn btn-primary" style="font-family: 'Roboto', sans-serif;">Submit</button>
        </div>
    </section>
    
    <style>
 body {
  background-image:url('https://images.unsplash.com/photo-1501167786227-4cba60f6d58f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxfDB8MXxhbGx8fHx8fHx8fHwxNjIwMzQxOTc3&ixlib=rb-1.2.1&q=80&w=1080&utm_source=unsplash_source&utm_medium=referral&utm_campaign=api-credit');
  background-size:cover ;
  }
    .contact{
    height: 800px;
}
.text-center{
    text-align: center;
    padding: 40px;
    font-family: 'Roboto', sans-serif;
    font-size: 48px;
    color:  #4CF0FF;
}
.form{
    max-width: 1000px;
    margin:42px auto;
}
.btn-dark{
    color:  #4CF0FF;
    border: 2px solid grey;
    font-size: 25px;
    padding: 8px 20px;
    margin: 7px 3px;
    border-radius: 8px;
    cursor: pointer;
}
.form-input{
    margin: 14px 0;
    padding: 5px 3px;
    width: 100%;
    font-size: 18px;
    border: 2px solid grey;
    border-radius: 6px;
    font-family: 'Roboto', sans-serif;
}

    </style>