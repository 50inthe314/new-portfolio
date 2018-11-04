function randombg(){
  var random= Math.floor(Math.random() * 5) + 0;
  var bigSize = ["url(http://localhost:8888/wp-content/uploads/homepage-background/background-1.jpg)",
                 "url(http://localhost:8888/wp-content/uploads/homepage-background/background-2.jpg)",
                 "url(http://localhost:8888/wp-content/uploads/homepage-background/background-3.jpg)",
                 "url(http://localhost:8888/wp-content/uploads/homepage-background/background-4.jpg)",
                 "url(http://localhost:8888/wp-content/uploads/homepage-background/background-5.jpg)",];
  document.getElementById("Random-Background-Homepage").style.backgroundImage=bigSize[random];
}


<SCRIPT LANGUAGE="JavaScript">
var theImages = new Array()

//Random-loading images
theImages[0] = 'http://localhost:8888/wp-content/uploads/homepage-background/background-1.jpg' // replace with names of images
theImages[1] = 'http://localhost:8888/wp-content/uploads/homepage-background/background-2.jpg' // replace with names of images
theImages[2] = 'http://localhost:8888/wp-content/uploads/homepage-background/background-3.jpg' // replace with names of images
theImages[3] = 'http://localhost:8888/wp-content/uploads/homepage-background/background-4.jpg' // replace with names of images

var j = 0
var p = theImages.length;
var preBuffer = new Array()

for (i = 0; i < p; i++){
preBuffer[i] = new Image()
preBuffer[i].src = theImages[i]
}
var whichImage = Math.round(Math.random()*(p-1));

function showImage(){
    if(whichImage==0){
    document.write(theImages[whichImage]);
    }
    else if(whichImage==1){
    document.write(theImages[whichImage]);
    }
    else if(whichImage==2){
    document.write(theImages[whichImage]);
    }
    else if(whichImage==3){
    document.write(theImages[whichImage]);
    }

}

</script>
