<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>اختيار التسجيل</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap2.css">
    <style>
        /* body{
            background-image: linear-gradient(rgba(255, 0, 106, 0.7),rgba(4,9,30,1)),url(img/Blood.png);
            background-position:center;
		background-size:unset;
        } */
        .button2 {
        display: block;
        text-align: center;
        padding: 10px 100px 10px 100px;
        margin: 3% 0 3% 0;
        color: #fff;
        background-color: #006D77;
        border: 1px solid transparent;
        border-radius: 4px;
        text-decoration: none;
        z-index: 1;
        transition: 0.5s cubic-bezier(0.785, 0.135, 0.15, 0.86);
    }

        .button2:hover {
            color: #006D77;
            background-color: transparent;
            border: 1px solid #006D77;
        }
        .reg{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .button {
      display: block;
      padding: 10px 100px 10px 100px;
      color: #fff;
      background: linear-gradient(195deg, #EC407A 0%, #D81B60 100%);
      border: 1px solid transparent;
      border-radius:3px;
      margin-top: 10px;
      text-decoration: none;
      z-index:1;
      transition: 0.5s cubic-bezier(0.785, 0.135, 0.15, 0.86); 
      text-align: center;
  }
      .button:hover {
        color: #D81B60;
        background: transparent;
        border: 1px solid #D81B60; 
      }
      
    </style>
</head>
<body>
    <div class="reg">
        <h1 class="about text-center wow fadeIn mb-3">التسجيل كـ</h1>
        <a class="button shadow-lg" href="{{ route('register.donor') }}">متبرع</a>
        <a class="button shadow-lg" href="{{ route('register.hospital') }}">مستشفى</a>
</div>

      <script src="js/popper.min.js"></script>
      <script src="js/jquery-3.6.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
</body>
</html>