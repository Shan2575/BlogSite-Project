
let count = 0;
var homeMainCard = document.getElementsByClassName("home-main-card");
for(var i = 0; i < homeMainCard.length; i++){
   count += 1;
}

var asideSection = document.getElementById("home-aside-section");

for (var i = 1; i <= count; i++) {
    asideSection.innerHTML += `<div class='home-aside-card'><h2>Featured Blog ${i}</h2> </div>`;
}