



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Joy AI</title>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 
  <meta name="viewport" content="width=device-width, user-scalable=no"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<style>
    body {
  overflow: hidden;
  margin: 0;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: #151515;
}

canvas {
  position: absolute;
  top: 0;
  left: 0;
  cursor: pointer;
}

h2 {
  position: absolute;
  bottom: 10px;
  width: 100%;
  text-align: center;
  color: white;
  font-family: "Josefin Sans", sans-serif;
  letter-spacing: 4px;
  font-weight: 300;
  display: flex;
  justify-content: center;
}
.btn {
  border: none;
  width: 15em;
  height: 3em;
  border-radius: 3em;
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 12px;
  background: #1C1A1C;
  cursor: pointer;
  transition: all 450ms ease-in-out;
}

.sparkle {
  fill: #AAAAAA;
  transition: all 800ms ease;
}

.text {
  font-weight: 600;
  color: #AAAAAA;
  font-size: medium;
}

.btn:hover {
  background: linear-gradient(0deg,#A47CF3,#683FEA);
  box-shadow: inset 0px 1px 0px 0px rgba(255, 255, 255, 0.4),
  inset 0px -4px 0px 0px rgba(0, 0, 0, 0.2),
  0px 0px 0px 4px rgba(255, 255, 255, 0.2),
  0px 0px 180px 0px #9917FF;
  transform: translateY(-2px);
}

.btn:hover .text {
  color: white;
}

.btn:hover .sparkle {
  fill: white;
  transform: scale(1.2);
} 

h1{
  
   
  
    color: #AAAAAA;
    font-weight: bolder;
     
     text-align: center;
    width:fit-content;
    font-family: "Josefin Sans", sans-serif;
}
#mm{
    padding: 0.8rem;
    margin-top:2rem; 
    width: 100%;
    position:absolute; 
    z-index:3;
    display: flex;
     justify-content: center;
     flex-direction: column;
     align-items: center;
}




.master-container {
  display: grid;
  grid-template-columns: auto;
  gap: 5px;
}

.card {
  width: 100%;
  background: #FFFFFF;
  box-shadow: 0px 187px 75px rgba(0, 0, 0, 0.01), 0px 105px 63px rgba(0, 0, 0, 0.05), 0px 47px 47px rgba(0, 0, 0, 0.09), 0px 12px 26px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
}

.title {
  width: 100%;
  height: 40px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 20px;
  border-bottom: 1px solid #efeff3;
  font-weight: 700;
  font-size: 11px;
  color: #63656b;
}

/* cart */
.cart {
  border-radius: 19px 19px 7px 7px;
}

.cart .products {
  display: flex;
  flex-direction: column;
  padding: 10px;
}

.cart .products .product {
  display: grid;
  grid-template-columns: 60px 1fr 80px 1fr;
  gap: 10px;
}

.cart .products .product span {
  font-size: 13px;
  font-weight: 600;
  color: #47484b;
  margin-bottom: 8px;
  display: block;
}

.cart .products .product p {
  font-size: 11px;
  font-weight: 600;
  color: #7a7c81;
}

.cart .quantity {
  height: 30px;
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  margin: auto;
  background-color: #ffffff;
  border: 1px solid #e5e5e5;
  border-radius: 7px;
  filter: drop-shadow(0px 1px 0px #efefef)
    drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
}

.cart .quantity label {
  width: 20px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding-bottom: 2px;
  font-size: 15px;
  font-weight: 700;
  color: #47484b;
}

.cart .quantity button {
  width: 30px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 0;
  outline: none;
  background-color: transparent;
  padding-bottom: 2px;
}

.card .small {
  font-size: 15px;
  margin: 0 0 auto auto;
}

.card .small sup {
  font-size: px;
}

/* coupons */
.coupons {
  border-radius: 7px;
}

.coupons form {
  display: grid;
  grid-template-columns: 1fr 80px;
  gap: 10px;
  padding: 10px;
}

.input_field {
  width: 98%;
  height: 36px;
  padding: 0 0 0 12px;
  border-radius: 5px;
  outline: none;
  border: 1px solid #e5e5e5;
  filter: drop-shadow(0px 1px 0px #efefef)
    drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
}

.input_field:focus {
  border: 1px solid transparent;
  box-shadow: 0px 0px 0px 2px #242424;
  background-color: transparent;
}

.coupons form button {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  padding: 10px 18px;
  gap: 10px;
  width: 100%;
  height: 36px;
  background: linear-gradient(180deg, #4480FF 0%, #115DFC 50%, #0550ED 100%);
  box-shadow: 0px 0.5px 0.5px #EFEFEF, 0px 1px 0.5px rgba(239, 239, 239, 0.5);
  border-radius: 5px;
  border: 0;
  font-style: normal;
  font-weight: 600;
  font-size: 12px;
  line-height: 15px;
  color: #ffffff;
}

/* Checkout */
.checkout {
  border-radius: 9px 9px 19px 19px;
}

.checkout .details {
  display: grid;
  grid-template-columns: 3fr 1fr;
  padding: 10px;
  gap: 5px;
}

.checkout .details span {
  font-size: 13px;
  font-weight: 600;
}

.checkout .details span:nth-child(odd) {
  font-size: 11px;
  font-weight: 700;
  color: #707175;
  margin: auto auto auto 0;
}

.checkout .details span:nth-child(even) {
  font-size: 13px;
  font-weight: 600;
  color: #47484b;
  margin: auto 0 auto auto;
}

.checkout .checkout--footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 10px 10px 20px;
  background-color: #efeff3;
}

.price {
  position: relative;
  font-size: 22px;
  color: #2B2B2F;
  font-weight: 900;
}

.price sup {
  font-size: 13px;
}

.price sub {
  width: fit-content;
  position: absolute;
  font-size: 11px;
  color: #5F5D6B;
  bottom: 5px;
  display: inline-block;
}

.checkout .checkout-btn {
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
  width: 150px;
  height: 36px;
  background: linear-gradient(180deg, #4480FF 0%, #115DFC 50%, #0550ED 100%);
  box-shadow: 0px 0.5px 0.5px #EFEFEF, 0px 1px 0.5px rgba(239, 239, 239, 0.5);
  border-radius: 7px;
  border: 0;
  outline: none;
  color: #ffffff;
  font-size: 13px;
  font-weight: 600;
  transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div id="mm">
    <img src="https://joytourandtravels.com/landing/clonelogo.png" width="150" alt="">
    
<h1>Customize your package with Joy AI</h1>
</div>
<canvas></canvas>
<h2>
    <button class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
            <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
        </svg>
    
        <span class="text" >Book Now</span>
    </button>
</h2>






<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5 d-flex" id="exampleModalLabel">
            <svg height="24" width="24" fill="#FFFFFF" viewBox="0 0 24 24" data-name="Layer 1" id="Layer_1" class="sparkle">
                <path d="M10,21.236,6.755,14.745.264,11.5,6.755,8.255,10,1.764l3.245,6.491L19.736,11.5l-6.491,3.245ZM18,21l1.5,3L21,21l3-1.5L21,18l-1.5-3L18,18l-3,1.5ZM19.333,4.667,20.5,7l1.167-2.333L24,3.5,21.667,2.333,20.5,0,19.333,2.333,17,3.5Z"></path>
            </svg>
            <p style="font-size: 0.8rem;" class="p-1 px-2">Joy AI</p>
          </h1>
          <button type="button" class="btn-close mb-3" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="master-container">
                <div class="card cart">
                  <label class="title">Customize People</label>
                  <div class="products">
                    <span class="mb-2">Number of persons:</span>
                    <div class="input-group mb-0 w-50">
                        <span class="input-group-text h-75">
                            <button  style="border: none; background:transparent;font-size:1.2rem;font-weight:bolder; ">-</button>
                        </span>
                        <input id="person" type="text"  readonly class="form-control h-75" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-text h-75">
                            <button style="border: none; background:transparent;font-size:1.2rem;font-weight:bolder; ">+</button></span>
                      </div>
                  </div>
                </div>

                <div class="card checkout">
                    <label class="title">Select Destinations</label>
                    <div class="details mt-1 mb-1 p-0 px-3">
                        <div class="input-group mb-1 ">
                            <span class="input-group-text" id="basic-addon1">
                                <input type="checkbox" class="form-check">
                            </span>
                            <input type="text" @readonly(true) value="Srinagar" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                    </div>
                    <div class="details mt-1 mb-1 p-0 px-3">
                          <div class="input-group mb-1 ">
                            <span class="input-group-text" id="basic-addon1">
                                <input type="checkbox" class="form-check">
                            </span>
                            <input type="text" @readonly(true) value="Pahalgam" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                          </div>
                    </div>
                    
                  </div>
              
                <div class="card coupons">
                  <label class="title">Apply coupons</label>
                  <form class="form">
                      <input type="text" required placeholder="Apply your coupons here" class="input_field">
                      <button>Apply</button>
                  </form>
                </div>

              
                <div class="card checkout">
                  <label class="title">Checkout</label>
                  <div class="details">
                    <span>Your subtotal:</span>
                    <span>47.99₹</span>
                    <span>Discount through applied coupons:</span>
                    <span>3.99₹</span>
                    <span>Discount through Joy Travels:</span>
                    <span>4.99₹</span>
                  </div>
                  <div class="checkout--footer">
                    <label class="price"><sup>₹</sup>57.99</label>
                    <button class="checkout-btn">Checkout</button>
                  </div>
                </div>
              </div>
          
        </div>
        <div class="modal-footer">
        
        </div>
      </div>
    </div>
  </div>



<!-- partial -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
<script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/86/three.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/127738/perlin.js'></script>



<script>
    // console.clear();
var renderer = new THREE.WebGLRenderer({
  canvas: document.querySelector("canvas"),
  antialias: true
});
renderer.setPixelRatio(window.devicePixelRatio > 1 ? 2 : 1);
renderer.setSize(window.innerWidth, window.innerHeight);
var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera(
  45,
  window.innerWidth / window.innerHeight,
  1,
  1000
);
camera.position.z = 60;
var length = 30;
var mouseJump = {
  x: 0,
  y: 0
};
var offset = 0;
function Spline() {
  this.geometry = new THREE.Geometry();
  this.color = Math.floor(Math.random() * 80 + 180);
  for (var j = 0; j < 180; j++) {
    this.geometry.vertices.push(
      new THREE.Vector3(j / 180 * length * 2 - length, 0, 0)
    );
    this.geometry.colors[j] = new THREE.Color(
      "hsl(" + (j * 0.6 + this.color) + ",70%,70%)"
    );
  }
  this.material = new THREE.LineBasicMaterial({
    vertexColors: THREE.VertexColors
  });
  this.mesh = new THREE.Line(this.geometry, this.material);
  this.speed = (Math.random() + 0.1) * 0.0002;
  scene.add(this.mesh);
}
var isMouseDown = false;
var prevA = 0;
function render(a) {
  requestAnimationFrame(render);
  for (var i = 0; i < splines.length; i++) {
    for (var j = 0; j < splines[i].geometry.vertices.length; j++) {
      var vector = splines[i].geometry.vertices[j];
      vector.y =
        noise.simplex2(j * 0.05 + i - offset, a * splines[i].speed) * 8;
      vector.z = noise.simplex2(vector.x * 0.05 + i, a * splines[i].speed) * 8;

      vector.y *= 1 - Math.abs(vector.x / length);
      vector.z *= 1 - Math.abs(vector.x / length);
    }
    splines[i].geometry.verticesNeedUpdate = true;
  }
  scene.rotation.x = a * 0.0003;
  if (isMouseDown) {
    mouseJump.x += 0.001;
    if (a - prevA > 100) {
      updateColor();
      prevA = a;
    }
  } else {
    mouseJump.x -= 0.001;
  }
  mouseJump.x = Math.max(0, Math.min(0.07, mouseJump.x));
  offset += mouseJump.x;
  renderer.render(scene, camera);
}
var splines = [];
for (var i = 0; i < 12; i++) splines.push(new Spline());
function onResize() {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize(window.innerWidth, window.innerHeight);
}
function updateColor() {
  for (var i = 0; i < splines.length; i++) {
    var color = Math.abs((splines[i].color - offset * 10) % 360);
    for (var j = 0; j < splines[i].geometry.vertices.length; j++) {
      splines[i].mesh.geometry.colors[j] = new THREE.Color(
        "hsl(" + (j * 0.6 + color) + ",70%,70%)"
      );
    }
    splines[i].mesh.geometry.colorsNeedUpdate = true;
  }
}
function onMouseDown(e) {
  isMouseDown = true;
  return false;
}
function onMouseUp() {
  isMouseDown = false;
}
window.addEventListener("resize", onResize);
window.addEventListener("keydown", onMouseDown);
document.body.addEventListener("mousedown", onMouseDown);
document.body.addEventListener("mouseup", onMouseUp);
document.body.addEventListener("touchstart", onMouseDown);
document.body.addEventListener("touchend", onMouseUp);
document.body.addEventListener("hover", onMouseDown);
requestAnimationFrame(render);
</script>
</body>
</html>
