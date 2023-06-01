<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       .car-container {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin-top: 40px;
}

.car-seat-row {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 10px;
}

.car-seat {
  width: 40px;
  height: 20px;
  background-color: #eaeaea;
  border: 1px solid #ccc;
  margin: 0 5px;
}

.occupied {
  background-color: #ff0000;
}

.car-container::before {
  content: "";
  display: block;
  width: 200px;
  height: 120px;
  background-color: #333;
  position: absolute;
  border-radius: 10px;
  top: -20px;
}

.car-seat-row:first-child {
  position: relative;
  z-index: 1;
}

.car-seat-row:first-child .car-seat:nth-child(3) {
  background-color: #000;
}

.car-seat-row:last-child .car-seat:nth-child(2),
.car-seat-row:last-child .car-seat:nth-child(3),
.car-seat-row:last-child .car-seat:nth-child(4) {
  background-color: #000;
}



    </style>
</head>
<body>
<div class="car-container">
  <div class="car-seat-row">
    <div class="car-seat"></div>
    <div class="car-seat"></div>
    <div class="car-seat occupied"></div>
    <div class="car-seat"></div>
    <div class="car-seat"></div>
  </div>
  <div class="car-seat-row">
    <div class="car-seat"></div>
    <div class="car-seat"></div>
    <div class="car-seat"></div>
    <div class="car-seat"></div>
    <div class="car-seat"></div>
  </div>
</div>



</body>
</html>