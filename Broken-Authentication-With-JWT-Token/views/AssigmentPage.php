<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Örnek Site</title>
    <link rel="stylesheet" href="../style.css" />
    <script type="text/javascript">
      
    </script>
  </head>
  <body>
    <div class="top-bar">
      <div class="container">
        <div class="logo">
          <a href="#">Örnek Site</a>
        </div>
        <div class="menu">
          <ul>
            <li><a href="#">Ana Sayfa</a></li>
            <li><a id="adminPanelButton" href="/task/assignment?token=<?= $token ?>">Admin Paneli</a></li>
            <li><a href="../Task/login">Çıkış Yap</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="content">
      <h1>Hoş Geldiniz!</h1>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at
        malesuada augue, id molestie tellus. Nulla facilisi. Vivamus eu felis
        imperdiet, malesuada mi vel, laoreet augue. Sed quis velit lectus. Ut
        vel sapien convallis, hendrerit orci ac, lacinia urna. Nullam vel massa
        vel dolor sollicitudin sagittis vel vel augue.
      </p>
    </div>
  </body>
</html>

