<?php
$dbconn = new PDO('sqlite:mydatabase.db'); //Connect to the db

//Chech the form
if ($_SERVER['REQUEST_METHOD'] == 'POST')
 {
    $username = $_POST['uname']; //Get values
    $password = $_POST['pass'];
    
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password';";//are they valid
    
    $result = $dbconn->query($query);
    $result = $result->fetchAll();

    foreach($result as $key => $item)
    {
        echo $item['username'];
    }

    if($result->rowCount() > 0)
    {
        /*header('Location: flag.php');//succesful login
        exit();*/
        $error = 'Correct entrance';
    }
    else
    {
        echo $username;
        echo $password;
        echo $query;
        var_dump ($result->rowCount());
        $error = 'Kullanıcı adı ya da Şifre Hatalı!';//failed login
    }

 }

 ?><!DOCTYPE html>
 <html>
 <head>
   <title>USOM TIMES</title>
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
   <header>
     <h1>THE USOM TIMES</h1>
    
     <?php if (isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>

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

