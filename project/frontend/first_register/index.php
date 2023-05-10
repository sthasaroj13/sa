<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WE CARE</title>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <style>
      body {
      }
    </style>
    <!-- <div class="logo">
     
    </div> -->

    <div class="content">
      <h1>WE CARE</h1>
      <p>
        We Care is an innovative and user-friendly application designed to
        streamline the process of emergency medical services.
      </p>
      <img src="amb.png" height="250px" width="320px" />
    </div>
    <div class="form">
      <form action="../../register.php" method="post">

        <h1>REGISTER FORM</h1>
        
        <label for="user">User Name</label> <br />
      <input type="text" class="in" placeholder="your username" name="username" /> <br />
      <br />
      <p id="para1"></p>
      <label for="user">Email</label> <br />
      <input type="text" class="in" placeholder="your email"  name="email"/> <br /><br />
      <p para2></p>
      <label for="user">Phone</label> <br />
      <input type="number" class="in" placeholder="your Phone" name="phone" /> <br /><br />
      
      <label for="type">Types</label> <br />
      <br />
      <input type="radio" name="type" value="o"  checked />Organation/personal
      <br />
      <br />

      <input type="radio" name="type" value="n" />Normal USer

      <p id="para3"></p>
    </div>

    <a href="#" id="bttn" class="link">LOGIN</a>
    <input id="buton" type="submit" />REGISTER

    </form>
    <div class="footer">
      <p>If you are already registered then login</p>
    </div>

    <script>
      let inputs = document.querySelectorAll(".in");
      let para = document.querySelector("#para3");
      let btn = document.querySelector("#bttn");
      const radios = document.getElementsByName("rad");
      const links = document.querySelector(".link");
      let but = document.querySelector("#buton");
      btn.addEventListener("click", function () {
        inputs.forEach((input) => {
          if (input.value == "") {
            para.innerHTML = "Please fill out this field";
            para.style.color = "red";
          }
        });
        let selectedRadio = radios[0].checked ? "o" : "nkjsd";

        if (selectedRadio == "o") {
          window.location.href = "http://127.0.0.1:5500/proj%20main/reg2.html";
        } else {
          window.location.href =
            "http://127.0.0.1:5500/proj%20main/das/das.html";
        }
      });

      // radios.forEach((radio) => {
      //   radio.addEventListener("change", (event) => {
      //     console.log(event.target);

      //   });
      // });
      but.addEventListener("click", function () {
        window.location.href = "http://127.0.0.1:5500/proj%20main/login/login.html";
      });
    </script>
  </body>
</html>
