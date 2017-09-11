// set up the event listeners after the DOM is loaded
window.addEventListener("load", function() {
   var btn = document.getElementById("testButton");
   /* when button is clicked either fade the text or make it reappear */
   btn.addEventListener("click", function (e) {
      var content = document.getElementById("content");

      /* if button’s label is Hide, then change it to show and fade text content */
      if (btn.innerHTML == "Hide") {
         btn.innerHTML = "Show";
         content.className = "makeItDisappear";
         /* wait one second before hiding element */
         setTimeout(function(){
            content.style.display = "none";
         },1000);
      }
      else {
         /* button’s label is Show: change it to Hide and show text content */
         btn.innerHTML = "Hide";
         content.style.display = "block";
         setTimeout(function(){
            content.className = "makeItNormal";
         },500);
      }
   });
   
   var img = document.getElementById("mainImage");
   /* changes the style of the image when it is moused over */
   img.addEventListener("mouseover",function (event) {
      img.className = "makeItGray";
   });
   /* remove the styling when mouse leaves image */
   img.addEventListener("mouseout",function (event) {
      img.className = "makeItNormal";
   });
});