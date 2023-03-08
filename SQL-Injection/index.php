<?php
$dbconn = new PDO('sqlite:mydatabase.db'); // Veritabanına bağlan

// Formun gönderilip gönderilmediğini kontrol et
if ($_SERVER['REQUEST_METHOD'] == 'POST' || isset($_GET['uname']) || isset($_GET['pass'])) {
    $username = isset($_POST['uname']) ? $_POST['uname'] : $_GET['uname'];
    $password = isset($_POST['pass']) ? $_POST['pass'] : $_GET['pass'];

    $query = "SELECT * FROM users WHERE uname = '$username' OR pass = '$password';";

    $result = $dbconn->query($query);
    $result = $result->fetchAll();

    foreach($result as $key => $item) {
        echo $item['username'];
    }

    if(count($result) > 0) {
        header('Location: flag.php');
        exit();
    } else {
        echo $username;
        echo $password;
        echo $query;
        $error = 'Kullanıcı adı ya da Şifre Hatalı!';
    }
}


 ?><!DOCTYPE html>
 <html>
 <head>
   <title>USOM</title>
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
   <header>
     <h1>USOM</h1>
    
     <?php if (isset($error)) ?>
        <p><?php echo $error; ?></p>
    <?php ?>

     <form>
       <label for="uname">Username:</label>
       <input type="text" id="uname" name="uname">
       <label for="pass">password:</label>
       <input type="pass" id="pass" name="pass">
       <input type="submit" value="Log In">
     </form>
     <nav>
       <ul>
         <li><a href="#">Home</a></li>
         <li><a href="#">News</a></li>
         <li><a href="#">Sports</a></li>
         <li><a href="#">Entertainment</a></li>
       </ul>
     </nav>
   </header>
   <main>
     <section>
       <h2>Breaking News</h2>
       <article>
         <h3>Headline Goes Here</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget risus vitae felis fringilla rhoncus a a dolor. Donec facilisis, eros sit amet molestie faucibus, mi velit tempus massa, ac mollis mi libero a justo.</p>
         <a href="#">Read More</a>
       </article>
       <article>
         <h3>Headline Goes Here</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget risus vitae felis fringilla rhoncus a a dolor. Donec facilisis, eros sit amet molestie faucibus, mi velit tempus massa, ac mollis mi libero a justo.</p>
         <a href="#">Read More</a>
       </article>
     </section>
     <section>
       <h2>Sports News</h2>
       <article>
         <h3>Headline Goes Here</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget risus vitae felis fringilla rhoncus a a dolor. Donec facilisis, eros sit amet molestie faucibus, mi velit tempus massa, ac mollis mi libero a justo.</p>
         <a href="#">Read More</a>
       </article>
       <article>
         <h3>Headline Goes Here</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget risus vitae felis fringilla rhoncus a a dolor. Donec facilisis, eros sit amet molestie faucibus, mi velit tempus massa, ac mollis mi libero a justo.</p>
         <a href="#">Read More</a>
       </article>
     </section>
   </main>
   <footer>
     <p>&copy; 2023 My News Site</p>
   </footer>
 </body>
 </html>
 
 <?php
// Close the db connection
$dbconn = null;
?>

