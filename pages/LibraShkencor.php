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
                <select onchange="location=this.value" style="background-color:transparent; border: none;"">
                <option  value="">Category</option>
                <option  value="../pages/ChildrenBooks.php">Libra per femije</option>
                <option  value="../pages/Roman.php">Romane</option>
                <option  value="../pages/cookBooks.php">Libra Gatimi</option>
                <option value="../pages/LibraShkencor.php">Libra Shkencor</a></option>
                </select></a>
            </li>
            <li><a href="../pages/ShoppingList.php">Shopping List</a></li>
           
        </ul>
    </div>
    </header>
    <hr style="color: white;">
    <main class="slogan">
        <h2>Libra Shkencor</h2>
        <p>Zhvillo njohuritë tua shkencore dhe eksploro misteret e një bote të panjohur.</p>
    </main> 
    </div>
    <div class="photos">
        <div class="rubrika">
            <img src="../images/foto22.png" alt="foto22" >
            <h2>Libra shkencor</h2>
            <p>Cmimi - 15.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto23.png" alt="foto23">
            <h2>Libra shkencor</h2>
            <p>Cmimi - 28.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto24.png" alt="foto24">
            <h2>Libra shkencor</h2>
            <p>Cmimi - 33.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto25.png" alt="foto25">
            <h2>Libra shkencor</h2>
            <p>Cmimi - 40.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto26.png" alt="foto26">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 3.50$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto27.png" alt="foto28" style="width: 200px;">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 54.50$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto28.png" alt="foto28" style="width: 190px; height:260px ;">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 33.00$</p>
            <button>Shto në shportë</button>
            
        </div>
        <div class="rubrika">
            <img src="../images/foto29.png" alt="foto29" style="width: 190px; height:260px">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 18.00$</p>
            <button>Shto në shportë</button>

        </div>
        
        <div class="rubrika">
            <img src="../images/foto30.png" alt="foto30" style="width: 190px; height: 260px;">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 15.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto48.png" alt="foto48" style="width: 190px;height: 260px;">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 28.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto49.png" alt="foto49" style="width: 200px; height: 260px;">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 33.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto50.png" alt="foto50" style="width: 190px;height: 260px;">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 40.00$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto51.png" alt="foto51" style="width: 200px; height:260px">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 92.90$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto52.png" alt="foto52" style="width: 200px; height:260px">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 26.80$</p>
            <button>Shto në shportë</button>
        </div>
        <div class="rubrika">
            <img src="../images/foto53.png" alt="foto53" style="width: 200px; height:260px">
            <h2>Libra Shkencor</h2>
            <p>Cmimi - 25.00$</p>
            <button>Shto në shportë</button>
        </div>
        
        <div class="rubrika">
            <img src="../images/foto54.png" alt="foto54" style="width: 200px; height:260px">
            <h2>Libra Shkencor</h2>
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