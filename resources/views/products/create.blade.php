<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action:"/products">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Description:</label>
        <input type="text" name="description" required><br><br>
        
        <label>Price:</label>
        <input type="number" name="price" required><br><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>