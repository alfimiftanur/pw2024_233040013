<!DOCTYPE html>
<html>
  <head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
      .container {
        width: 500px;
        margin: 0 auto;
        text-align: center;
        margin-top: 100px;
      }

      h1 {
        font-size: 2.5rem;
        margin-bottom: 50px;
      }
      
      a{
        text-decoration: none;
        /* margin-bottom: 17px; */
      }
      .Btn {
        margin: 0 auto;
        display: flex;
        align-items: center;
        width: 45px;
        height: 45px;
        border: 1px solid #ddd;
        border-radius: 50%;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        transition-duration: .3s;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.199);
        background-color: rgb(255, 65, 65);
      }

      .sign {
        width: 100%;
        transition-duration: .3s;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .sign svg {
        width: 20px;
      }

      .sign svg path {
        fill: white;
      }
    
      .text {
        position: absolute;
        right: 0%;
        width: 0%;
        opacity: 0;
        color: white;
        font-size: 1.2em;
        font-weight: 600;
        transition-duration: .2s;
      }

      .Btn:hover {
        width: 125px;
        border-radius: 40px;
        transition-duration: .2s;
      }

      .Btn:hover .sign {
        width: 30%;
        transition-duration: .2s;
        padding-left: 10px;
    }

      .Btn:hover .text {
        opacity: 1;
        width: 50%;
        transition-duration: .2s;
        padding-right: 10px;
      }

      .Btn:active {
        transform: translate(5px ,5px);
      }
      
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Selamat Datang, Admin!</h1>
      <a href="login.php">
        <button class="Btn">
        <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
        <div class="text" id="login.php">Logout</div>
      </button></a>
</div>

  </body>
</html>