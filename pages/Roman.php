<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
    <link rel="stylesheet" href="../pages/bookStore.css">
</head>
<style>
          .slogan p{
    font-family: 'Times New Roman', Times, serif;
    font-size: 32px;
    
    
}
@media screen and (max-width:780px){
   
    .slogan p{
        text-align: left;
        padding-left: -80px;
        font-size: 10px;
        width:170px;
    }
    .slogan {
        margin-top:30px;
        padding:10px 0 10px 10px;
    }
   
}
    .b{
    background-image: url(../images/bgPhoto.png);
    background-position: center;
    background-size: cover;
    height: 600px;
    background-repeat:no-repeat;
    /* background-color: #21437a; */
    justify-content: center;
    align-items: center;
}
</style>
<body>
    <div class="b" style="height: 400px;">
    <header class="headerConatiner">
        <div class="logo">
            <p>BookStore</p>
        </div>
        <div class="div-links">
        <ul>
            <li><a href="../pages/index.php">Home</a></li>
            <li><a href="#">
                <select onchange="location=this.value" style="background-color:transparent; border: none;">
                <option  value="">Category</option>
                <option  value="../pages/ChildrenBooks.php">Libra per femije</option>
                <option  value="../pages/Roman.php">Romane</option>
                <option  value="../pages/cookBooks.php">Libra Gatimi</option>
                <option value="../pages/LibraShkencor.php">Libra Shkencor</option>
                </select></a>
            </li>
            <li><a href="../pages/ShoppingList.php">Shopping List</a></li>
           
        </ul>
    </div>
    </header>
    <hr style="color: white;">
    <main class="slogan">
        <h2>Romane</h2>
        <p>Zhvilloni imagjinatën tuaj me romanet tona, ku çdo faqe fsheh një mister dhe çdo kapitull sjell një emocion të ri</p>
    </main> 
    </div>
    <div class="photos">
        <div class="rubrika">
            <img src="../images/foto38.png" alt="foto38">
            <h2>Romane</h2>
            <p>Cmimi - 12.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto35.png" alt="foto35">
            <h2>Romane</h2>
            <p>Cmimi - 4.80$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto36.png" alt="foto36">
            <h2>Romane</h2>
            <p>Cmimi - 5.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto37.png" alt="foto37" style="height:295px">
            <h2>Romane</h2>
            <p>Cmimi - 10.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto31.png" alt="foto31" style="width: 198;">
            <h2>Romane</h2>
            <p>Cmimi - 12.50$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto32.png" alt="foto32" style="width: 198px;">
            <h2>Romane</h2>
            <p>Cmimi - 8.50$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto33.png" alt="foto33" style="width: 198px; height:280px ;">
            <h2>Romane</h2>
            <p>Cmimi - 9.00$</p>
            <button>Shto në shportë</button>
            
        </div>
        <div class="rubrika">
            <img src="../images/foto34.png" alt="foto34" style="width: 198px; height:280px">
            <h2>Romane</h2>
            <p>Cmimi - 12.00$</p>
            <button>Shto në shportë</button>

        </div>
        
        <div class="rubrika">
            <img src="../images/foto40.png" alt="foto40" style="width: 198;">
            <h2>Romane</h2>
            <p>Cmimi - 15.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto41.png" alt="foto41">
            <h2>Romane</h2>
            <p>Cmimi - 28.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto42.png" alt="foto42" style="width: 200px; height: 290px;">
            <h2>Romane</h2>
            <p>Cmimi - 33.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto43.png" alt="foto43">
            <h2>Romane</h2>
            <p>Cmimi - 40.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto44.png" alt="foto44" style="width: 200px; height:290px">
            <h2>Romane</h2>
            <p>Cmimi - 6.90$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto45.png" alt="foto45" style="width: 200px; height:290px">
            <h2>Romane</h2>
            <p>Cmimi - 9.80$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto46.png" alt="foto46" style="width: 200px; height:290px">
            <h2>Romane</h2>
            <p>Cmimi - 5.00$</p>
            <button>Shto në shportë</button>
        </div>
        
        <div class="rubrika">
            <img src="../images/foto47.png" alt="foto47" style="width: 200px; height:290px">
            <h2>Romane</h2>
            <p>Cmimi - 10.00$</p>
            <button>Shto në shportë</button>
        </div>
    </div>
    <footer class="footerContent">
        <div class="footerStart">
            <h2>Rreth nesh</h2>
            <h2>Kontakti</h2>
            <h2>Rrjetet tona sociale</h2>
        </div>
        <div class="footerMain">
        <div class="footerLeft">
            <p>BookStore eshte nje dyqan online ku ju mund te zgjedhni libra te kategorive te ndryshme.<br>Eshte krijuar qe nga viti 2015</p>
        </div>
        <div class="footerCenter">
            <p>Mund te na kontaktoni ne email-in tone zyrtar <br>Email: <a href="">bookStore@gmail.com</a></p>
        </div>
        <div class="footerRight">
            <div class="links">
                <a href=""><img src="../images/facebook.png" alt="facebook"  width="32px" height="32px"></a>
                <a href=""><img src="../images/instagram.png" alt="instagram"  width="32px" height="32px"></a>
                <a href=""><img src="../images/twitter.png" alt="twitter"  width="32px" height="32px"></a>
            </div>
        </div>
        </div>
        <div class="footerEnd">
            <p><em><b>Copyright 2023 BookStore. All rights reserved.</em></b></p>
        </div>
    </footer>
</div>
<script>
   
</script>
</body>
</html>