<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  font-family: "Lato", sans-serif;
  background-image: url(indexBG.png);
  background-size: cover;
}
h1{
  color: white;
  text-align: center;
  padding: 50px;
  font-weight: bold;
  font-family: 'Times New Roman', Times, serif;
  font-size: 50px;
}

.button-container {
    text-align: center;
    z-index: 1;
    padding-top: 15%;
}

button {
  width: 165px;
  height: 62px;
  cursor: pointer;
  color: #fff;
  font-size: 17px;
  border-radius: 1rem;
  border: none;
  position: relative;
  background: #100720;
  transition: transform 0.5s ease; 
  margin: 0 50px; 
  transform: translateY(100px); 
}

button::after {
  content: '';
  width: 100%;
  height: 100%;
  background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(255,94,247,1) 17.8%, rgba(2,245,255,1) 100.2% );
  filter: blur(15px);
  z-index: -1;
  position: absolute;
  left: 0;
  top: 0;
}

button:active { 
  transform: scale(0.9) rotate(3deg);
  background: radial-gradient( circle farthest-corner at 10% 20%,  rgba(255,94,247,1) 17.8%, rgba(2,245,255,1) 100.2% );
}
@keyframes slideInFromBottom {
  from {
    transform: translateY(100px); 
  }
  to {
    transform: translateY(0); 
  }
}

button:nth-child(1) {
  animation: slideInFromBottom 0.5s ease 0.1s forwards; 
}

button:nth-child(2) {
  animation: slideInFromBottom 0.5s ease 0.2s forwards; 
}

button:nth-child(3) {
  animation: slideInFromBottom 0.5s ease 0.3s forwards; 
}
</style>
</head>
<body>
  <h1>EMPLOYEE MANAGEMENT SYSTEM</h1>

<div class="button-container">
  <button onclick="location.href='index.php'"><i class="fa fa-fw fa-home"></i> Home</button>
  <button onclick="location.href='add.php'"><i class="fa fa-fw fa-plus"></i> Add Employee</button>
  <button onclick="location.href='view.php'"><i class="fa fa-fw fa-list"></i> View Employee</button>
</div>
     
</body>
</html> 
