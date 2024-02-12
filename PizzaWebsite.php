<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="pizzaicon.png" type="image/x-icon">
    <title>Pizza Order Form</title>
</head>
<body>
    <header>
        <h1>Pizza Order Form</h1>
        <img src="pizzaslice.jpg" alt="Pizza slice">
    </header>
    <main>
        <form action="submit_order.php" method="post">
            <section>
                <h2>Contact Information</h2>
                <p>
                <label for="name">Name: </label>
                <input type="text" id="name" name="name" required>
                </p>
                <p>
                <label for="adress">Adress: </label>
                <input type="text" id="adress" name="adress" required>
                </p>
                <p>
                <label for="phone">Phone: </label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="1234567890" required>
                </p>
            </section>
            <section>
                <h2>Pizza Details</h2>
                <label for="numPizzas">Number of Pizzas:</label>
                <input type="number" id="numPizzas" name="numPizzas" min="1" required>
                <label for="size">Size:</label>
                <select id="size" name="size" required>
                    <option value="small">Small</option>
                    <option value="medium">Medium</option>
                    <option value="large">Large</option>
                </select>
            </section>
            <section>
                <h2>Pizza shape</h2>
                    <label for="round">Round</label>
                    <input type="radio" id="round" name="shape" value="round" checked>
                    <label for="square">Square</label>
                    <input type="radio" id="square" name="shape" value="square">
                    <label for="triangle">Triangle</label>
                    <input type="radio" id="triangle" name="shape" value="triangle">
            </section>
            <section>
                <h2>Crust Type</h2>
                <label for="deepDish">Deep Dish</label>
                <input type="radio" id="deepDish" name="crust" value="deepDish" checked>
                <label for="thinCrust">Thin Crust</label>
                <input type="radio" id="thinCrust" name="crust" value="thinCrust">
                <label for="Regular">Regular</label>
                <input type="radio" id="Regular" name="crstu" value="Regular">
            </section>
            <section>
                <h2>Toppings</h2>
                <p>
                    All pizzas come with tomato sauce and mozzarela
                </p>
                <label for="toppings">Select Toppings (Hold Ctrl/Cmd to select multiple):</label>
                <select id="toppings" name="toppings[]" multiple>
                    <option value="pepperoni">Pepperoni</option>
                    <option value="sausage">Sausage</option>
                    <option value="mushrooms">Mushrooms</option>
                    <option value="bellpeppers">Bell Peppers</option>
                    <option value="Onions">Onions</option>
                    <option value="Chicken">Chicken</option>
                    <option value="Bacon">Bacon</option>
                    <option value="Olives">Olives</option>
                    <option value="Ham">Ham</option>
                </select>
            </section>
            <section>
                <label for="name">Entra Requests: </label>
                <input type="text" id="extra" name="extra" placeholder="No Mozzarela or tomato sauce">
            </section>
            <section>
                <h2>Method of payment</h2>
                    <label for="creditdebit">Credit/Debit Card</label>
                    <input type="radio" id="creditdebit" name="payment" value="creditdebit" checked>
                    <label for="cash">Cash</label>
                    <input type="radio" id="cash" name="payment" value="square">
            </section>
            <button type="submit">Place Order</button>
        </form>
    </main>
    <footer>
        <p>2024 Pizza Delivery Service</p>
    </footer>
</body>
</html>
