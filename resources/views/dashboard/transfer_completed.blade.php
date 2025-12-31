<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>
      body {
        text-align: center;
        padding: 40px 20px;
        background: #EBF0F5;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        margin: 0;
      }
      
      h1 {
        color: skyblue;
        font-weight: 900;
        font-size: 2.5em;
        margin-bottom: 10px;
      }
      
      p {
        color: #404F5E;
        font-size: 1.2em;
        margin: 0;
        padding: 10px 0;
      }

      .im {
        color: #9ABC66;
        width: 100px;
        height: 100px;
      }
      
      .card {
        background: white;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
        max-width: 90%;
        width: 100%;
        box-sizing: border-box;
      }

      .circle {
        border-radius: 50%;
        height: 200px;
        width: 200px;
        background: #F8FAF5;
        margin: 20px auto;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      @media (min-width: 768px) {
        .card {
          max-width: 500px;
          padding: 60px;
        }

        h1 {
          font-size: 3em;
        }

        .im {
          width: 150px;
          height: 150px;
        }
      }
    </style>
  </head>
  <body>
    <main>
      <div class="card">
        <div class="circle">
          <img class="im" src="{{asset('assets/images/roll.gif')}}" alt="Loading animation indicating process">
        </div>
        <h1>Withdrawal in Progress</h1>
        <p>Please wait... Redirecting in seconds.</p>
      </div>
    </main>

    <script>
      setTimeout(function() {
        window.location = '../withdraw';
      }, 3000);
    </script>
  </body>
</html>
