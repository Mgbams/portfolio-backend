<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Lato&family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <title>MgbamsPortFolio</title>
  </head>

  <body style='
      width: 100%;
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: "Montserrat", sans-serif;'>
   <div class="container" style='width: 100%;'>
      <div class="header" style='
         width: 100%; 
         background-color: black; 
         color: white !important;'>
        <div style='display: block; width: 100%;'>
            <h2 style='
               font-family: "Lato", sans-serif;
               font-size: 1.4rem; 
               text-align: center;'>MgbamsPortfolio
            </h2>
         </div>
         <div style='display: block; text-align: center; color: #00887a; width: 100%;'>
            <li style='display: inline; margin-right: 10px; list-style-type: none !important;'>Angular</li>
            <li style='display: inline; margin-right: 10px; list-style-type: none !important;'>React</li>
            <li style='display: inline; margin-right: 10px; list-style-type: none !important;'>Laravel</li>
            <li style='display: inline; margin-right: 10px; list-style-type: none !important;'>PHP</li>
            <li style='display: inline; list-style-type: none !important;'>JavaScript / JQuery</li>
         </div>
         <div class="header-thanks" style='margin: auto; display: block; xidth: 100%;'>
            <h2 style='
               text-transform: uppercase; 
               font-family: "Lato", sans-serif;
               font-size: 1.4rem; 
               text-align: center;'>thanks &nbsp; {{ $data['name'] }}
            </h2>
         </div>
      </div>
      <div class="main-content" style='padding-left: 5px;'>
        <h2>
          You were just contacted from
          <b style="color: #00887a">MgbamsPortFolio</b>. Below is the users
          details:
        </h2>
        <p><b class="h2 name" style='
            font-family: "Lato", sans-serif;
            font-size: 1.4rem; 
            text-transform: capitalize;'>Name:
            </b>&nbsp;{{ $data['name'] }}
        </p>
        <p>
            <b class="h2" style='
               font-family: "Lato", sans-serif;
               font-size: 1.4rem;'>Email:
            </b>&nbsp;{{ $data['email'] }}</p>
        <p>
            <b class="h2 first-letter" style='
               font-family: "Lato", sans-serif;
               font-size: 1.4rem; 
               text-transform: capitalize;'>Subject:
            </b>&nbsp;{{ $data['subject'] }}
         </p>
        <p style="text-align: center"><b class="h2">Message</b></p>
        <p class="first-letter" style='text-transform: capitalize;'> {{ $data['message'] }}</p>
      </div>
      <div class="thanks-message" style='
         width: 100%;
         background-color: #00887a;
         color: white;
         display: block;
         text-align: center;
         padding: 30px 0px;'>
        <span>Thanks for contacting me<br />
            I will get back to you
        </span>
      </div>
      <div class="social-icons" style='
         width: 100%;
         background-color: black;
         display: flex;
         align-items: center;
         justify-content: center;
         padding: 30px 0px;'>
        <div style='margin-right: 30px;'>
          <a href="https://github.com/Mgbams" target="_blank">
            <i class="fa fa-github" style='
               color: white !important;
               font-size: 2rem;'></i>
          </a>
        </div>
        <div>
          <a
            href="https://www.linkedin.com/in/kingsley-mgbams-33b781155/"
            target="_blank"
          >
            <i class="fa fa-linkedin" style='
            color: white !important;
            font-size: 2rem;'></i>
          </a>
        </div>
      </div>
      <div class="footer" style='display: block; width: 100%;'>
        <footer style='width: 100%;'>
          <p style='width: 100%; text-align: center;'>
            <b class="h2" style='
            font-family: "Lato", sans-serif;
            font-size: 1.4rem;'>Author:</b> &nbsp;<b>MGBAMS Kingsley</b><br />
            <b class="h2" style='
               font-family: "Lato", sans-serif;
               font-size: 1.4rem;'>Address: &nbsp;
            </b>3 Rue Auguste Chollat<br />
            69008 Lyon France
          </p>
        </footer>
      </div>
   </div>
  </body>
</html>
