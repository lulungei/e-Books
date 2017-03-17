
<!doctype html>
<html lang="en">
<head>
       
    <title>e-Books</title>  
    <link href="styles.css" rel="stylesheet"> 
     <script src="validate.js" type="text/javascript"></script>
     <style>
        body{
            background-color:silver;
        
        }
        div.transbox {
    margin: 30px;
    background-color: white;
    border: 1px solid black;
    opacity: 0.8;
    filter: alpha(opacity=60); 
    height:300px;
    width:300px;
    float:center;
}

div.transbox p {
    margin: 5%;
    font-weight: bold;
    color: black;
}


     </style>
</head>

<body >

<section>
<style>
/* input fields */
input[type=text], input[type=password]{
    width: 100%;
    padding: 12px 20px;
    margin:8px 0;
    display:inline-block;
    border: 1px solid #ccc;
    box-sizing:border-box;
}

/*buttons */
button{
    background-color: rosybrown;
    color:white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}
.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

.modal {
    display: none; 
    position: fixed; 
    z-index: 1;
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4); 
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 80%; 

    .close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}
}

</style>

<body>
<div class="transbox">

<h2>Existing user</h2>
<button onclick="document.getElementById('id01').style.display='block'" >Sign in</button>
<h2>New User</h2>

<button class="btn btn-success" style="widht:auto;">Sign up</button>
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>


<script>
// Get the login form
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the login form, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


</section>

<aside>
 

</aside>





     
</body>
</html>


