const modeToggle = document.getElementById('toggle-mode');
const body = document.body;

modeToggle.addEventListener('click', function() {
    if (this.src.endsWith('sun.png')) {
        this.src = 'moon.png'
    } else {
        this.src = 'sun.png'
    }

    body.classList.toggle('dark-mode');
    body.classList.toggle('light-mode');

    var activelinks =  document.getElementsByClassName('link-active')

    for (var activelink of activelinks) {
        activelink.classList.toggle("dark-mode")
    }

    for (var link of document.getElementsByClassName('link')) {
        link.classList.toggle('dark-mode')
    }

    var mainpage = document.querySelector('.main-page')
    
    if (mainpage) mainpage.classList.toggle("dark-mode")

    for (var product of document.getElementsByClassName('product-title')) {
        product.classList.toggle('dark-mode')
    }

    var card =  document.querySelector('.card')
    if (card) card.classList.toggle("dark-mode")
    
    for (var plush of document.getElementsByClassName('plush-card')) {
        plush.classList.toggle('dark-mode')
    }
    for (var doll of document.getElementsByClassName('doll-card')) {
        doll.classList.toggle('dark-mode')
    }
    for (var keychain of document.getElementsByClassName('keychain-card')) {
        keychain.classList.toggle('dark-mode')
    }
    var coming = document.querySelector('.cs-text')
    if (coming) coming.classList.toggle("dark-mode")

    var about = document.querySelector('.dif')
    if (about) about.classList.toggle("dark-mode")

    var bio = document.querySelector('.bio')
    if (bio) bio.classList.toggle("dark-mode")

    var intro = document.querySelector('.intro')
    if (intro) intro.classList.toggle("dark-mode")
    
    var title1 = document.querySelector('.color-cycling')
    if (title1) title1.classList.toggle("dark-mode")

    var title2 = document.querySelector('.pip-inch')
    if (title2) title2.classList.toggle("dark-mode")

    var sectionpip = document.querySelector('.double-section')
    if (sectionpip) sectionpip.classList.toggle("dark-mode")

    var pipdescp = document.querySelector('.pip-desc')
    if (pipdescp) pipdescp.classList.toggle("dark-mode")

    var pipaboot = document.querySelector('.pip-about')
    if (pipaboot) pipaboot.classList.toggle("dark-mode")

    for (var fitting of document.getElementsByClassName('fitting')) {
        fitting.classList.toggle('dark-mode')
    }
    for (var dcontain of document.getElementsByClassName('double-container')) {
        dcontain.classList.toggle('dark-mode')
    }
    for (var dcard of document.getElementsByClassName('double-card')) {
        dcard.classList.toggle('dark-mode')
    }

    var profilecont = document.querySelector('.profile-container')
    if (profilecont) profilecont.classList.toggle('dark-mode')
    
    var profilecard = document.querySelector('.profile-card')
    if (profilecard) profilecard.classList.toggle('dark-mode')

    var formcard = document.querySelector('.form-card')
    if (formcard) formcard.classList.toggle('dark-mode')

    for (var pcards of document.getElementsByClassName('product-card')) {
        pcards.classList.toggle('dark-mode')
    }

    var tbox = document.querySelector('.text-box')
    if (tbox) tbox.classList.toggle('dark-mode')
}); 
var slideIndex = 1;
showdivs(slideIndex);

function plusdivs(n) {
  showdivs(slideIndex += n);
}

function currentdiv(n) {
  showdivs(slideIndex = n);
}

var slideIndex = 1; 

function plusdivs(n) {
    showdivs(slideIndex += n);
}

function showdivs(n) {
    var i;
    var x = document.getElementsByClassName("hero-img");
    if (x.length) {
        if (n > x.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = x.length }
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        x[slideIndex - 1].style.display = "block";

    }
}

var voice = document.getElementById("clickoverlay") 
if (voice) {
    voice.addEventListener("click", function() {
        var chandlercry = document.getElementById("chandlercry");
        chandlercry.play();
        alert("Hey What Are You Doing Spoopin Around, Get Out!");
    });

}

function showAlert() {
    alert("This Page Will Be Available Soon");
}
const pipimg1 = document.querySelector(".pipimg1")
const pipdesc = document.querySelector(".pip-desc")


if (pipimg1)
pipimg1.addEventListener("click",function(){
    if (pipdesc.style.display == "none"){
        pipdesc.style.display = "block"
    } else {
        pipdesc.style.display = "none"
    }
})

const pipimg2 = document.querySelector(".pipimg2")
const pipabout = document.querySelector(".pip-about")

if (pipimg2)
pipimg2.addEventListener("click",function(){
    if(pipabout.style.display == "none"){
        pipabout.style.display = "block"
    } else {
        pipabout.style.display = "none"
    }
})
const rowletImage = document.getElementById("rowletImage");
const rowletAudio = document.getElementById("rowletAudio");
if (rowletImage) {
    rowletImage.addEventListener("click", function() {
        if (!rowletAudio.paused) {
            rowletAudio.pause();
        }
        rowletAudio.currentTime = 0; 
        rowletAudio.play();
    });
}
const litwickImage = document.getElementById("litwick-image");
const litwickAudio = document.getElementById("litwick-cry");
if (litwickImage) {
    litwickImage.addEventListener("click", function() {
        if (!litwickAudio.paused) {
            litwickAudio.pause();
        }
        litwickAudio.currentTime = 0;
        litwickAudio.play();
    });
}
const lampentImage = document.getElementById("lampent-image");
const lampentAudio = document.getElementById("lampent-cry");
if (lampentImage) {
    lampentImage.addEventListener("click", function() {
        if (!lampentAudio.paused) {
            lampentAudio.pause();
        }
        lampentAudio.currentTime = 0;
        lampentAudio.play();
    });
}
document.getElementById('product-image').addEventListener('change', function() {
    const previewImage = document.getElementById('image-preview');
    const fileInput = this;

    if (fileInput.files && fileInput.files[0]) {
        const reader = new FileReader();

        reader.onload = function(e) {
            previewImage.src = e.target.result;
            previewImage.style.display = 'block';
        };

        reader.readAsDataURL(fileInput.files[0]);
    } else {
        previewImage.style.display = 'none';
    }
});
function addProduct() {
    const productName = document.getElementById('product-name').value;
    const productPrice = document.getElementById('product-price').value;
    const imageInput = document.getElementById('product-image');
    const productImage = imageInput.files[0];
    const productDescription = document.getElementById('product-description').value;

    const productCard = document.createElement('div');
    productCard.classList.add('card');
    productCard.innerHTML = `
        <h2>${productName}</h2>
        <img src="${productImage ? URL.createObjectURL(productImage) : ''}" alt="${productName}">
        <p>Price: $${productPrice}</p>
        <p>${productDescription}</p>
    `;

    const productPreview = document.getElementById('product-preview');
    productPreview.appendChild(productCard);

    document.getElementById('add-product-form').reset();
    document.getElementById('image-preview').style.display = 'none';
}

const productCards = document.querySelectorAll('.product-card');

productCards.forEach((card) => {
    card.addEventListener('click', () => {
        card.classList.toggle('expanded');
    });
});


function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
    setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

