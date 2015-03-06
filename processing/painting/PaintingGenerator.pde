//Painting Generator 
//Jon Chambers 2014

int maxImages = 13; // Total # of images in each array
int firstimageIndex = 0; // Initial image to be displayed in array
int secondimageIndex = 0; // Initial image to be displayed is the first
int thirdimageIndex = 0; // Initial image to be displayed is the first

//Float variables for width and height
float w1;
float h1;

float w2;
float h2;

float w3;
float h3;

// Declaring an array of images.
PImage[] array1 = new PImage[maxImages]; 
PImage[] array2 = new PImage[maxImages]; 
PImage[] array3 = new PImage[maxImages]; 


void setup() {
  size(1280, 800);
  frameRate(.5);
  imageMode(CENTER);

  // Loading the images into each array

  for (int i = 0; i < array1.length; i ++ ) {
    array1[i] = loadImage( "data/stroke" + i + ".png" );
  }

  for (int i = 0; i < array2.length; i ++ ) {
    array2[i] = loadImage( "data/strokesec" + i + ".png" );
  }

  for (int i = 0; i < array3.length; i ++ ) {
    array3[i] = loadImage( "data/strokethrd" + i + ".png" );
  }
}

void draw() {

  background(random(255), random(255), random(255));
 
  // Randomly choosing the width and height positions
  w1 = random(width);
  h1 = random(height);

  w2 = random(width);
  h2 = random(height);

  w3 = random(width);
  h3 = random(height);


  // A new image is picked randomly 
  // Note the index to the array must be an integer!
  firstimageIndex = int(random(array1.length));
  secondimageIndex = int(random(array2.length));
  thirdimageIndex = int(random(array3.length));

  //fixing the w nd h values of the images if they go off screen
  if (w1 > width ) {
    w1 = w1-array1[firstimageIndex].width;
  }

  if (w2 > width) {
    w2 = w2-array2[secondimageIndex].width;
  }

  if (w3 > width) {
    w3 = w3-array3[thirdimageIndex].width;
  }

  if (w1 < 0 ) {
    w1 = w1+array1[firstimageIndex].width;
  }

  if (w2 < 0) {
    w2 = w2+array2[secondimageIndex].width;
  }

  if (w3 < 0) {
    w3 = w3+array3[thirdimageIndex].width;
  }

  if (h1 > height ) {
    h1 = h1-array1[firstimageIndex].height;
  }

  if (h2 > height) {
    h2 = h2-array2[secondimageIndex].height;
  }

  if (h3 > height) {
    h3 = h3-array3[thirdimageIndex].height;
  }

  if (h1 < 0 ) {
    h1 = h1+array1[firstimageIndex].height;
  }

  if (h2 <0) {
    h2 = h2+array2[secondimageIndex].height;
  }

  if (h3 <0) {
    h3 = h3+array3[thirdimageIndex].height;
  }

//Displaying each image. Each image will have it's own unique tint
  pushMatrix();
  pushStyle();
 // rotate(random(PI));
  tint(random(255), random(255), random(255));
  image(array1[firstimageIndex], w1, h1); 
  popStyle();
  popMatrix();

  pushStyle();
  tint(random(255), random(255), random(255));
  image(array2[secondimageIndex], w2, h2);
  popStyle();

  pushStyle();
  tint(random(255), random(255), random(255));
  image(array3[thirdimageIndex], w3, h3);
  popStyle();
}

//pressing the s key will save you an image!!
void keyPressed() {
  if (key == 's') {
    save("painting.jpg");
  }
}

