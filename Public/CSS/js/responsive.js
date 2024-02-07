const picture = document.querySelector("#imgHere")
const pictureTwo = document.querySelector("#imgHere2")
        
        
        function displayScreenWidth() {
        let theWidth = window.innerWidth;

        if (theWidth > 683) {
            picture.src = "../Public/CSS/images/sectionvr.png";
            pictureTwo.src = "../Public/CSS/images/sectionflat.png";
        }else{
            picture.src = "../Public/CSS/images/vrsmart.png";
            pictureTwo.src = "../Public/CSS/images/flatsmart.png";
        }
    }
        displayScreenWidth();    
    window.addEventListener('resize', displayScreenWidth);
  