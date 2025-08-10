
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="create.css">
</head>

<body>
    <div class="login_form_container">
        <div class="login_form">
            <h2>Complete Your Profile</h2>
            <form action="create.php" method="POST" enctype="multipart/form-data">
                <div class="input_group">
                    <label for="user">Your Name:</label>&nbsp;
                    <input type="text" id="name" name="name" required>
                </div>
                <br>
                <div class="input_group">
                    <label for="civilId">Civil Number</label>&nbsp;
                    <input type="number" id="civil" name="civil" required>
                </div>
                <br>
                <div class="input_group">
                    <label for="civilId">Expiration date</label>&nbsp;
                    <input type="date" id="date" name="date" required>
                </div>
                <br>

                <h3 style="color:#103775; margin-top: 20px;">Bank Card Information</h3>

                <label for="card_number">Card Number:</label>
                <input type="text" id="card_number" name="card_number" maxlength="16" required><br><br>

                <label for="expiry_date">Expiry Date:</label>
                <input type="month" id="expiry_date" name="expiry_date" required><br><br>

                <label for="cvv">CVV:</label>
                <input type="text" id="cvv" name="cvv" maxlength="4" required><br><br>

                <label for="bank_statement">Upload 3-Month Bank Statement (PDF):</label>
                <input type="file" id="bank_statement" name="bank_statement" accept=".pdf" required><br><br>

                
<div class="button_group" id="login_button">
    <button type="submit" name="login_button" class="btn" style="
        width: 100%;
        height: 50px;
        font-size: 22px;
        border-radius: 50px;
        background-color: #0c1022;
        color: #ee00ff;
        border: none;
        cursor: pointer;
    ">save</button>
</div>

            </form>
        </div>
    </div>
</body>

</html>
