
void setup(){

size(screenWidth, screenHeight, P2D);
 
// load the pixels on the screen
loadPixels();  
}

void draw(){ 
  
  //Sketch runs at 30 FPS
  frameRate(30);
  
  //Loop through all the pixels on the screen
  for (int i = 0; i < pixels.length; i++) {
  
  //Random RGB color
  color c = color(random(255),random(255), random(255));
  
  //Set a random RGB color for each pixel in the array
  pixels[i] = c;
}

//Update the pixels every frame
updatePixels(); 

}



