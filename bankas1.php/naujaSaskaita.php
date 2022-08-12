

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bank1.css">
    <title>New Account</title>
</head>
<body >
    <!--1. Nauja sąskaita sukuriama su pradine 0 suma, o lėšos pridedamos/nuimamos pagalbiniuose puslapiuose.Naujos sąskaitos sukūrimas (įvedami duomenys: vardas, pavardė, sąskaitos numeris, asmens kodas)-->
    <div class="info-block">
        <h1>Create a new bank account</h1>
        <div>
            <form action="" class="container">
            <h2>Fill form</h3>
            <label for="fname">First name</label>
            <input type="text" id="fname" name="name" placeholder="Yours name" require>
            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="surname" placeholder="Yours surname"/>
            <label for="pnr">Personal number</label>
            <input type="number" id="pnr"name="personal nr" placeholder="Personal number"/>
            <label for="raccount">Random generates account number</label>
            <input type="text" id="raccount" name="bank account number" placeholder="random automaticly"/>
            <button type="submit">Sukurti sąskaitą</button>
            </form>
        </div>
    </div>
    
</body>
</html>