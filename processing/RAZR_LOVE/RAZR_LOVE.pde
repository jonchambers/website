//Jon Chambers 
//"RAZR LOVE" 
//2012
//Please send me other variations if you mess around with it!!

PImage RAZR;
float X;
float Y;
float targetX, targetY;
float easing = 0.05;
int num=10;


float[] x= new float[num];
float[] y= new float[num];
float[] xspeed= new float[num];
float[] yspeed= new float[num];

void setup() {
  rectMode(CENTER);
  size(1280,800);
  RAZR= loadImage("RAZR.png");
  background(35, 255, 3);
  
  for ( int i=0; i<num; i++) {
    xspeed[i]= 2;
    yspeed[i]= 2;
    x[i]= random(40, width);
    y[i]= random(height);
  }
  
  imageMode(CENTER);
}


void draw() {
  fill(color(random(255), random(255), random(255)));
 stroke(color(random(255), random(255), random(255)));
// background(color(random(255), random(255), random(255)));
 
 for (int i=0; i<num; i++) {
    y[i]=y[i]+yspeed[i];
    x[i]=x[i]+xspeed[i];
    rect(x[i], y[i], 30,50);
    image(RAZR, x[i], y[i]);

    if (x[i]>= 1265 ) {
      xspeed[i]*=-1;
    }
    if (x[i]<= 15 ) {
      xspeed[i]*=-1;
    }
    if (y[i]<=25) {
      yspeed[i]*=-1;
    }
    if (y[i]>=775) {
      yspeed[i]*=-1;
    }
  }

  float dx = mouseX - X; //dx is distance between mouse and ellipse 
  X += dx * easing;  //
  float dy = mouseY - Y;
  Y += dy * easing;
 // rect(X, Y, 30, 50);

//  image(RAZR, X, Y);
}

//void mousePressed(){
 
  //background(color(random(255), random(255), random(255)));
 
//}

void mousePressed() {



 
    for (int i=0; i<num; i++) {
      x[i]= random(width);
      y[i]= random(height);
    }
  
}

void keyPressed(){
  
  if (key == 's'){
    save("huxley.jpg");
  }
}
