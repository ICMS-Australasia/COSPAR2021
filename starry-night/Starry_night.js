let diamonds = [];
let img;
let lerpColVal = 0;
let lerpColInc = 0.01;

function preload() {
  img = loadImage('starry-night/star.png');
}

function setup() {
  let parentDiv = document.getElementById('anim').clientHeight;

  let canvas = createCanvas(windowWidth - 18, parentDiv);
  canvas.parent('banner');
  //Values in HSL(Hue: 360, Saturation: 100, Lightness: 100, Alpha: 100)
  imageMode(CENTER);
  //Object Initialisation
  for (let i = 0; i < width; i += int(random(50, 80))) {
    diamonds.push(new Diamond(i, random(height)));
  }
}

function draw() {
  lerpColVal += lerpColInc;
  //Background Gradient is changed here
  for (let i = 0; i < height; i ++) {
    let val = i/height;
    //Changes the background gradient (top to bottom) from Dark purple to col2
    let lerp = height < height * 0.8 ? 0 : (noise(lerpColVal) * 0.4);
    let col = lerpColor(color('#00003A'), color('#ea038c'), val - lerp);
    stroke(col);
    line(0, i, width, i);
  }
  for (let i = 0; i < diamonds.length; i ++) {
      diamonds[i].display();
      diamonds[i].update();
  }
}

class Diamond {
  constructor(_x, _y) {
    this.position = createVector(_x, _y);
    this.speed = random(0.2, 0.5);
    //Size of the star
    this.offset = random(3, 7);
    //the speed at which the star grows and shrinks
    this.pulseSpeed = random(-0.1, 0.1);
    // max and min size of the star
    this.minOffset = 5;
    this.maxOffset = 10;
    //how fast the star rotates
    this.rotationSpeed = random(-0.05, 0.05);
    //starting angle of the star
    this.angle = 0;
    this.lerpColVal = 0;
    this.lerpColInc = 0.001;
  }

  display() {
      let lerpVal = map(this.position.y, 0, height, 0, 1);
      push();
        translate(this.position.x, this.position.y);
        rotate(this.angle);
        tint(255, 255, 255, map(this.lerpColVal, 0, 1, 150, 1));
        image(img, 0, 0, this.offset+img.width/4, this.offset+img.height/4);
        tint(255, 255, 255, map(this.lerpColVal, 0, 1, 255, 100));
        image(img, 0, 0, this.offset+img.width/10, this.offset+img.height/10);
      pop();

  }

  update() {
      this.lerpColVal += this.lerpColInc;
      if (this.lerpColVal < 0 || this.lerpColVal > 1) {
        this.lerpColInc *= -1;
      }
      //Move down
      this.position.x += this.speed;
      //When below the screen, reset back to the top
      if (this.position.x > width + 10) {
          this.position.x = -10;
      }

      //Pulse
      this.offset += this.pulseSpeed;
      if (this.offset > this.maxOffset || this.offset < this.minOffset) {
          this.pulseSpeed *= -1;
      }

      //rotationSpeed
      this.angle += this.rotationSpeed;
  }

}
