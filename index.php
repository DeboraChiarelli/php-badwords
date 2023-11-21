<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Badwords</title>
</head>
<body>
                <h1>PHP BADWORDS</h1>
                <!-- Invia su "script.php" con metodo "post" perché stiamo inviando dei dati-->
                <form action="process.php" method="post">
                    <div>
                        <label for="paragraph" class="form-label">Enter your text here</label>
                        <textarea  name="paragraph" id="paragraph" placeholder="Write something...">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ut perferendis impedit iste, molestiae inventore explicabo. Quae ab suscipit tempora itaque consequuntur soluta dolor repudiandae, modi natus, placeat veritatis. Architecto!</textarea>
                    </div>
                    <div>
                        <label for="badword">Enter the word to censure from the text</label>
                        <input type="text" name="badword" id="badword" placeholder="Write here" value="Lorem">
                    </div>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
</body>
</html>