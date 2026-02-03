<!DOCTYPE html>
<html>
<head>
  <title>Be My Valentine ❤️</title>
  <style>
    body {
      background: pink;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      font-family: Arial;
    }

    .box {
      background: white;
      padding: 30px;
      border-radius: 15px;
      text-align: center;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 20px;
      border: none;
      cursor: pointer;
    }

    #yes {
      background: red;
      color: white;
    }

    #no {
      background: lightgray;
      position: absolute;
    }
  </style>
</head>

<body>

  <div class="box">
    <h2>Will you be my Valentine? ❤️</h2>
    <br>
    <button id="yes" onclick="yesClicked()">Yes ❤️</button>
    <button id="no">No 😢</button>
    <p id="msg"></p>
  </div>

  <script>
    const noBtn = document.getElementById("no");

    noBtn.addEventListener("mouseover", () => {
      const x = Math.random() * 200 - 100;
      const y = Math.random() * 200 - 100;
      noBtn.style.transform = `translate(${x}px, ${y}px)`;
    });

    function yesClicked() {
      document.getElementById("msg").innerText =
        "YAYYYYYY ❤️ I LOVEEEEE YOUUUUU SOOOOO MUCHHHH BABBYYYY!!! 🥰";
    }
  </script>

</body>
</html>
