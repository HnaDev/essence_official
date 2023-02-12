// --------------------- click Giỏ Hàng ------------- //
let cart = document.querySelector("#essenceCartBtn");
let right_card_cart = document.querySelector(".right-card-cart");
let cart_bg_overlay = document.querySelector(".cart-bg-overlay");
cart.addEventListener("click", toggleClick);
function toggleClick() {
    right_card_cart.classList.toggle("card-on");
    cart_bg_overlay.classList.toggle("cart-bg-overlay-on");
}
document.addEventListener("click", ClickClose);
function ClickClose(event) {
    // console.log(event.target);
    //   contains : kiểm tra element có chưa element khác hay không
    // !right_card_cart.contains(event.target) (tuc là không chứa) : kiểm tra khi mình click vào có chứa element k
    if (
        !right_card_cart.contains(event.target) &&
        !event.target.matches("#essenceCartBtn")
    ) {
        // console.log('không chứa');
        // nếu right_card_cart không chưa target mình click vào và target mà mình click không phải là essenceCartBtn thì sẽ remove
        right_card_cart.classList.remove("card-on");
        cart_bg_overlay.classList.remove("cart-bg-overlay-on");
    }
}

// card user
let cart_user = document.querySelector("#essenceCart_User");
let right_card_cart_user = document.querySelector(".right-card-cart-user");
let cart_bg_overlay_user = document.querySelector(".cart-bg-overlay");
cart_user.addEventListener("click", useClick);
function useClick() {
    right_card_cart_user.classList.toggle("card-on");
    cart_bg_overlay_user.classList.toggle("cart-bg-overlay-on");
}
document.addEventListener("click", ClickCloseUse);
function ClickCloseUse(event) {
    if (
        !right_card_cart_user.contains(event.target) &&
        !event.target.matches("#essenceCart_User")
    ) {
        right_card_cart_user.classList.remove("card-on");
        cart_bg_overlay_user.classList.remove("cart-bg-overlay-on");
    }
}

// menu rps
let icon_menu = document.querySelector(".menu-toggle");
let menu_rps = document.querySelector(".classy-menu");
icon_menu.addEventListener("click", clickMenu);
function clickMenu() {
    icon_menu.classList.toggle("fa-times");
    icon_menu.classList.toggle("fa-bars");
    menu_rps.classList.toggle("on");
}
