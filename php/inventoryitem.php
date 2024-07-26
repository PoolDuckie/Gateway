<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="inventoryitem" method="post"></form>
    <label for="productId">Product ID:</label><br>
    <input type="number" id="productId" name="productId"><br><br>

    <label for="productName">Product Name:</label><br>
    <input type="text" id="productName" name="productName"><br><br>

    <label for="productType">Product Type:</label><br>
    <select name="productType" id="productType">
        <option value="poolChemical">Pool Chemical</option>
        <option value="testingReagent">Testing Reagent</option>
        <option value="firstAid">First Aid</option>
        <option value="poolEquipment">Pool Equipment</option>
        <option value="sportsClub">Sports Club</option>
        <option value="wibit">Wibit</option>
        <option value="facilityMaintence">Facility Maintenance</option>
        <option value="gymEquipment">Gym Equipment</option>
        <option value="kidsClub">Kids Club</option>
        <option value="racketSports">Racket Sports</option>
    </select><br><br>

    <label for="productPrice">Product Price:</label><br>
    <input type="number" step="0.01" id="productPrice" name="productPrice"><br><br>

    <label for="productStock">Product Stock:</label><br>
    <input type="number" id="productStock" name="productStock"><br><br>

    <label for="productBase">Product Base:</label><br>
    <input type="number" id="productBase" name="productBase"><br><br>

    <label for="productStatus">Product Status:</label><br>
    <select name="productStatus" id="productStatus">
        <option value="inStock">In Stock</option>
        <option value="unavailable">Unavailable</option>
        <option value="purchaseNeeded">Purchase Needed</option>
        <option value="soldOut">Sold Out</option>
        <option value="goodCondition">Good Condition</option>
        <option value="fairCondition">Fair Condition</option>
        <option value="poorCondition">Poor Condition</option>
        <option value="broken">Broken</option>
    </select><br><br>

    <label for="productDescription">Product Description:</label><br>
    <textarea id="productDescription" name="productDescription"></textarea><br><br>

    <input type="submit" value="Submit">

</body>
</html>



