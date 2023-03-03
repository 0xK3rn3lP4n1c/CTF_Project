<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Admin Paneline Girmek için Tıklayınız</h2>
        <div class="underline-title"></div>
      </div>
      <form action="Best/assigment" method="post" class="form">
        <input id="submit-btn" type="submit" name="assigment" value="Giriş" />
      </form>
    </div>
  </div>
</body>

</html>

<style>

a {
  text-decoration: none;
}
body {
  background: -webkit-linear-gradient(bottom, #dd4814, #77216f);
  background-repeat: no-repeat;
}
label {
  font-family: "Raleway", sans-serif;
  font-size: 11pt;
}

#card {
  background: #fbfbfb;
  border-radius: 8px;
  box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
  height: 410px;
  margin: 6rem auto 8.1rem auto;
  width: 329px;
}
#card-content {
  padding: 12px 44px;
}
#card-title {
  font-family: "Raleway Thin", sans-serif;
  letter-spacing: 4px;
  padding-bottom: 23px;
  padding-top: 13px;
  text-align: center;
}

#submit-btn {
  background: -webkit-linear-gradient(right, #5e2750, #2c001e);
  border: none;
  border-radius: 21px;
  box-shadow: 0px 1px 8px #333333;
  cursor: pointer;
  color: white;
  font-family: "Raleway SemiBold", sans-serif;
  height: 42.3px;
  margin: 0 auto;
  margin-top: 50px;
  transition: 0.25s;
  width: 153px;
}
#submit-btn:hover {
  box-shadow: 0px 1px 18px #333333;
}
.form {
  align-items: left;
  display: flex;
  flex-direction: column;
}
.form-border {
  background: -webkit-linear-gradient(right, #aea79f, #333333);
  height: 1px;
  width: 100%;
}
.form-content {
  background: #fbfbfb;
  border: none;
  outline: none;
  padding-top: 14px;
}
.underline-title {
  background: -webkit-linear-gradient(right, #aea79f, #333333);
  height: 2px;
  margin: -1.1rem auto 0 auto;
  width: 89px;
}

</style>