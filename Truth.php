<html lang="en">

  <body>
    <button id = "button-Now", style= "font-size:75px; height:100%; width:100%", onclick="sendMessage()">Send the truth out to the world</button>
  </body>
<script>
 function sendMessage() {
   
      document.getElementById("button-Now").disabled = true
   
      const request = new XMLHttpRequest();
      request.open("POST", "https://discord.com/api/webhooks/1065916707442544760/MyRnQunal8uotF_"+ "1pYWC36uOHWRLwBPjykJJT8hoJArTQpcI0OtR25a2XjXuhPcCpIZl");

      request.setRequestHeader('Content-type', 'application/json');

      const params = {
        username: "Captain truth",
        avatar_url: "https://magic-8ball.com/wp-content/uploads/ball.png",
        content: "<@219877909844721665> Vtubers are bad"
      }

      request.send(JSON.stringify(params));
    }
  </script>
</html>