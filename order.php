<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale-1.0">
    <title>Food Restaurant</title>
    <link rel="icon" href="Green Orange Modern Healthy Food Restaurant Logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="order" id="order">

<h3 class="sub-heading"> order now </h3>
<h3 class="heading"> free and fast </h3>

<form action="payment.php">

    <div class="inputBox">
        <div class="input">
            <span>your name</span>
            <input type="text" placeholder="enter your name">
        </div>
        <div class="input">
            <span>your number</span>
            <input type="number" placeholder="enter your number">
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>your order</span>
            <input type="text" placeholder="enter food name">
        </div>
        <div class="input">
            <span>additional food</span>
            <input type="number" placeholder="extra with food">
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>how much</span>
            <input type="number" placeholder="how many orders">
        </div>
        <div class="input">
            <span>date and time</span>
            <input type="datetime-local">
        </div>
    </div>
    <div class="inputBox">
        <div class="input">
            <span>your name</span>
            <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="input">
            <span>your message</span>
            <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
        </div>
    </div>

    <input type="submit" value="checkout" class="btn">
</form>
</section>
</body>
</html>