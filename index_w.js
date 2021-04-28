
let model;
let ctx;
let video = document.getElementById("videoElement");
let canvas = document.getElementById("canvasElement");
  

function displayImagesAtFingerTop(landmarks) {
  var motherImg = document.getElementById("mother");
  var ring = document.getElementById("ring");
  
  for (var i = 0; i < landmarks.length; i++) {
        const y = landmarks[i][0];
        const x = landmarks[i][1];
        console.log(x,y);
        if(i == 0) {
            ctx.drawImage(motherImg, y-200, x-100, 90, 55);
        } 
        else if(i == 10) {
            ctx.drawImage(ring, y-225, x-20, 40, 20);
        }
    }
}
async function predict() {    
    var canvas = document.getElementById("canvasElement");
    var video = document.getElementById("videoElement");
    
    ctx = canvas.getContext('2d');
        

    ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
     
    const predictions = await model.estimateHands(video);
    if(predictions.length > 0) {
        const landmarks = predictions[0].landmarks;
        displayImagesAtFingerTop(landmarks);
    }
  
    requestAnimationFrame(predict);
}

    
async function main() {
    var watch = document.getElementById("product-main-image");
    watch.style.display  = "none";     
    var tryon = document.getElementById("try-on-id");
    tryon.style.display  = "none";     
    
    model = await handpose.load();
    var video = document.getElementById("videoElement");
    var canvas = document.getElementById("canvasElement");

    navigator.getUserMedia = navigator.getUserMedia ||
                         navigator.webkitGetUserMedia ||
                         navigator.mozGetUserMedia;

    navigator.getUserMedia = navigator.getUserMedia ||
                         navigator.webkitGetUserMedia ||
                         navigator.mozGetUserMedia;

if (navigator.getUserMedia) {
   navigator.getUserMedia({ audio: false, video: { width: 1280, height: 720 } },
      function(stream) {
    
        video.srcObject = stream;
        video.play();
        
      },
      function(err) {
         console.log("The following error occurred: " + err.name);
      }
   );
} else {
   console.log("getUserMedia not supported");
}

    
  
    video.onloadedmetadata = () => {
        console.log("hey");
        ctx = canvas.getContext('2d');
        ctx.translate(canvas.width, 0);
        ctx.scale(-1, 1);
  
        requestAnimationFrame(predict);
    };   
}

