float x;
float y;
float targetX, targetY;



float s= 0.0;
float a = 0.0;

void setup()
{
  size(1280, 800);
  //stroke(130, 70, 200);
  
  noStroke();
  ellipseMode(CENTER);
  imageMode(CENTER);
  rectMode(CENTER);
  frameRate(30);

}



void draw() 
{

  
fill(0, 102, 153);
  fill(0);
 pushMatrix();
 pushStyle();
  draw_target(width/2, height/2, 1600, 10);
  popStyle();
  popMatrix();
  smooth();
   

}

void draw_target(int xloc, int yloc, int size, int num) {//
pushStyle();
popStyle();
  float grayvalues = color(random(255), random(255), random(255))/num; //divides grayscale by num of ellipses
  float steps = size/num; //size of ellipse divided by steps 
  for (int i=0; i<num; i++) {//
    fill(color(random(255), random(255), random(255))); //
    ellipse(xloc, yloc, size-i*steps, size-i*steps);//starts with bigger circle and goes down to smaller
  }
}

void keyPressed() {

  if (key == 's') {
    save("SUPERNOVA.jpg");
  }
}
