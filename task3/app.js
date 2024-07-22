const wrapper = document.querySelector(".sliderWrapper");
const menuItems = document.querySelectorAll(".menuItem");

const products = [
  {
    id: 1,
    title: "Bluncher ",
    price: 3000,
    colors: [
      {
        code: "black",
        img: "./img/img2.png",
      },
      {
        code: "darkblue",
        img: "./img/q11.png",
      },
      {
        code: "darkred",
        img: "./img/img31.png",
      },
      {
        code: "darkyellow",
        img: "./img/yell.png",
      },
    ],
  },
  {
    id: 2,
    title: "Brogue ",
    price: 2100,
    colors: [
      {
        code: "lightgray",
        img: "./img/jordan.png",
      },
      {
        code: "green",
        img: "./img/jordan2.png",
      },
      {
        code: "darkred",
        img: "./img/img31.png",
      },
      {
        code: "darkyellow",
        img: "./img/yell.png",
      },
    ],
  },
  {
    id: 3,
    title: "Creeper",
    price: 1900,
    colors: [
      {
        code: "lightgray",
        img: "./img/blazer.png",
      },
      {
        code: "green",
        img: "./img/blazer2.png",
      },
      {
        code: "darkred",
        img: "./img/img31.png",
      },
      {
        code: "darkyellow",
        img: "./img/yell.png",
      },
    ],
  },
  {
    id: 4,
    title: "Buck ",
    price: 2500,
    colors: [
      {
        code: "black",
        img: "./img/crater.png",
      },
      {
        code: "lightgray",
        img: "./img/crater2.png",
      },
      {
        code: "darkred",
        img: "./img/img31.png",
      },
      {
        code: "darkyellow",
        img: "./img/yell.png",
      },
    ],
  },
  {
    id: 5,
    title: "Buckled ",
    price: 2000,
    colors: [
      {
        code: "gray",
        img: "./img/hippie.png",
      },
      {
        code: "black",
        img: "./img/hippie2.png",
      },
      {
        code: "darkred",
        img: "./img/img31.png",
      },
      {
        code: "darkyellow",
        img: "./img/yell.png",
      },
    ],
  },
];

let choosenProduct = products[0];

const currentProductImg = document.querySelector(".productImg");
const currentProductTitle = document.querySelector(".productTitle");
const currentProductPrice = document.querySelector(".productPrice");
const currentProductColors = document.querySelectorAll(".color");
const currentProductSizes = document.querySelectorAll(".size");

menuItems.forEach((item, index) => {
  item.addEventListener("click", () => {
    //change the current slide
    wrapper.style.transform = `translateX(${-100 * index}vw)`;

    //change the choosen product
    choosenProduct = products[index];

    //change texts of currentProduct
    currentProductTitle.textContent = choosenProduct.title;
    currentProductPrice.textContent =   choosenProduct.price +"rs";
    currentProductImg.src = choosenProduct.colors[0].img;

    //assing new colors
    currentProductColors.forEach((color, index) => {
      color.style.backgroundColor = choosenProduct.colors[index].code;
    });
  });
});

currentProductColors.forEach((color, index) => {
  color.addEventListener("click", () => {
    currentProductImg.src = choosenProduct.colors[index].img;
  });
});

currentProductSizes.forEach((size, index) => {
  size.addEventListener("click", () => {
    currentProductSizes.forEach((size) => {
      size.style.backgroundColor = "white";
      size.style.color = "black";
    });
    size.style.backgroundColor = "black";
    size.style.color = "white";
  });
});

const productButton = document.querySelector(".productButton");
const payment = document.querySelector(".payment");
const close = document.querySelector(".close");

productButton.addEventListener("click", () => {
  payment.style.display = "flex";
});

// close.addEventListener("click", () => {
//   payment.style.display = "none";
// });
// const paybutton= document.getElementsByClassName('payButton');
// function chnge(){
//   alert("Your form has been submit!");

// }