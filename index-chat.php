<!DOCTYPE html>
<html lang="fr">

<head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="style.css" rel="stylesheet">
</head>

<body>

    <div id="chat-content">
    </div>
    <div id="box-message">
        <label class="active" for="message">Message</label>
        <input id="message" type="text" onkeypress="onKeyEnter(event)" class="validate">
    </div>

</body>

</html>
<script src="chat.js"></script>
<script>
    document.getElementById("message").focus();

    let monPseudo =  <?php echo json_encode($_POST["pseudo"]);?>;
    console.log(monPseudo)
    function onKeyEnter(event) {
        if (event.keyCode === 13) {
            input = document.getElementById("message");

            var msg = {
                type: "message",
                text: input.value,
                id: monPseudo,
            };

            conn.send(JSON.stringify(msg));
            input.value = '';
        }
    }
</script>