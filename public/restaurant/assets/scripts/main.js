// popup start
function createPopup(id) {
  let popupNode = document.querySelector(id);
  let overlay = popupNode.querySelector(".overlay");
  let closeBtn = popupNode.querySelector(".close-btn");
  function openPopup() {
    popupNode.classList.add("active");
  }
  function closePopup() {
    popupNode.classList.remove("active");
  }

  overlay.addEventListener("click", closePopup);
  closeBtn.addEventListener("click", closePopup);
  return openPopup;
}

let popup = createPopup("#popup");
document.querySelector("#basket").addEventListener("click", popup);
// document.querySelector("#basket").click();

// popup end

// order system start
const cartBtn = document.querySelector(".basket");
const cartItems = document.querySelector(".basket-count");
const cartTotal = document.querySelector(".subtotal-value");
const cartContent = document.querySelector(".modal-products");
const productsDOM = document.querySelector(".modal-products");

import Products from "./Products.js";
import Storage from "./Storage.js";
import Ui from "./Ui.js";

document.addEventListener("DOMContentLoaded", () => {
  const ui = new Ui();
  const products = new Products();
  
  products.getProducts().then(products =>{
    ui.displayProducts(products);
  });
});
// order system end
