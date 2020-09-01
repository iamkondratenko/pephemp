document.addEventListener("DOMContentLoaded", function() {

    checkCity()
    typeOfDelivery()
    gettingRouter()
    updateDataForAddButton()
    routerHash(location.hash);
    checkStateCartButton()
    cartDrawer()
    if (localStorage.getItem('cart')) {
        cartUpdate()
    }

});

var browserWidth = document.body.clientWidth

var browserHeight = document.body.clientHeight
console.log(browserHeight)

window.addEventListener('scroll', function(e) {
    let scrolledY = window.scrollY
    scrollingHeader(scrolledY)

    if (gettingRouter() == 'product') {
    scrollingFloatBlock(scrolledY)
    }
})

window.addEventListener('mousemove', function(e) {
    // coords(e)
})



window.addEventListener('hashchange', hashchange);

function hashchange(){
    routerHash(location.hash);
}

window.addEventListener('storage', function(e) {
    checkStateCartButton()
    cartDrawer()
    if (localStorage.getItem('cart')) {
        cartUpdate()
    }
});


function gettingRouter() {
    setScrollForProduct(location.pathname.split('/')[1])
    return location.pathname.split('/')[1]
}


function changeLocalStorage(label, value) {
    localStorage.setItem(label, JSON.stringify(value))
    cartDrawer()
    cartUpdate()
}



headerNode = document.getElementById('main-header')
function scrollingHeader(scroled) {
    if (scroled > 100) {
        headerNode.classList.add('--isScroled')
    } else {
        headerNode.classList.remove('--isScroled')
    }

}



/* Router */
function routerHash(currentHash) {

    if (currentHash.match('catalog')) {
        catalogFilter(currentHash.replace('#catalog-', ''))
    }

}


/* Filter */
function catalogFilter(param) {
    let products = document.getElementsByClassName('catalog__product-item')
    let filtersBlock = document.getElementsByClassName('catalog-homepage__filter-item')

    let catalogNode = document.querySelector('.catalog.ancore')
    console.log(catalogNode.getBoundingClientRect().top + pageYOffset)
    window.scrollTo({
        top: catalogNode.getBoundingClientRect().top + pageYOffset - 145,
        behavior: "smooth"
    })


    for (let i = 0; i < filtersBlock.length; i++) {
        if (filtersBlock[i].dataset.category == param) {
            filtersBlock[i].classList.add('--filter-item-active')
        } else {
            filtersBlock[i].classList.remove('--filter-item-active')
        }

    }

    for (let i = 0; i < products.length; i++) {
        if (param == 'all') {
            products[i].classList.remove('hideProductByFilter')
            products[i].classList.add('showProductByFilter')
        } else {
            if (products[i].dataset.category == param) {
                products[i].classList.remove('hideProductByFilter')
                products[i].classList.add('showProductByFilter')
            } else {
                products[i].classList.add('hideProductByFilter')
                products[i].classList.remove('showProductByFilter')
            }
        }
    }
}


/* Cart */
function addToCart(id, productTitle, productDescription, productPrice, productPic, quantity) {
    console.log(productPic)

    let cart = JSON.parse(localStorage.getItem('cart')) || {}

    if (cart[id]) {
        cart[id].quantity = Number(cart[id].quantity) + Number(quantity)
    } else {
        cart = Object.assign(cart,
            { [id] : {
                    id: id,
                    productTitle: productTitle,
                    productDescription: productDescription,
                    productPic: productPic,
                    productPrice: productPrice,
                    quantity: quantity
                }
            }
        )
    }

    changeLocalStorage('cart', cart)
    changeStateCartButton(id)

}

function removeProductFromCart(id) {
    let currentCart = JSON.parse(localStorage.getItem('cart'))
    delete currentCart[id]
    changeLocalStorage('cart', currentCart)
    changeStateCartButton(id)

}

function delay(f, ms) {

    return function() {
        setTimeout(() => f.apply(this, arguments), ms);
    };

}

function delayChangeQuantity(id) {
    let d1000 = delay(changeQuantity, 1000)
    d1000(id)
}

function changeQuantity(id) {


    let currentItemInput = document.getElementById('counterCartId' + id).value
    let currentCart = JSON.parse(localStorage.getItem('cart'))
    currentCart[id].quantity = currentItemInput
    changeLocalStorage('cart', currentCart)
    changeStateCartButton(id)
}



function cartDrawer() {
    let counter = document.getElementsByClassName('menu-cart__counter')[0]
    var counterValue = 0
    let cart = JSON.parse(localStorage.getItem('cart')) || {}
    const values = Object.values(cart);
    values.forEach(value => {
        counterValue = counterValue + Number(value.quantity)
    });

    if (counterValue) {
        counter.innerHTML = counterValue
        counter.classList.remove('hideCounter')
    } else {
        counter.classList.add('hideCounter')
    }
}


function cartUpdate() {



    var cart = Object.values(JSON.parse(localStorage.getItem('cart'))) || {}

    let cartArray = []


    if (Object.keys(cart).length == 0 && cart != true) {

        let newCart = '<div class="modals__cart__section__empty-cart">В кошику ще нема товарiв :(</div>'
        cartArray.push(newCart)
        closingCartDrawer()
    } else {
        cart.forEach(cart => {
            // let counterValue = counterValue + Number(cart.quantity)

            if (Number(cart.quantity) > 0) {
                let newCart = '<div class="modals__cart__section__product-item">' +
                    '                            <div class="modals__cart__section__product-items__picture-holder">' +
                    '                                <img src="' + cart.productPic + '" alt="" class="modals__cart__section__product-items__picture">' +
                    '                            </div>\n' +
                    '                            <div class="modals__cart__section__product-item__info">' +
                    '                                <h4 class="modals__cart__section__product-item__title">' + cart.productTitle + '</h4>\n' +
                    '                                <div class="modals__cart__section__product-item__description">' +
                    cart.productDescription +
                    '                                </div>' +
                    '                            </div>' +
                    '                            <div class="modals__cart__section__product-item__count"><input class="modals__cart__section__product-item__count-input" type="text" value="' + cart.quantity + '" oninput="delayChangeQuantity(' + cart.id + ')" id="counterCartId' + cart.id + '"></div>' +
                    '                            <div class="modals__cart__section__product-item__price">' + (Number(cart.productPrice) * Number(cart.quantity)) + '</div>' +
                    '                            <button class="modals__cart__section__product-item_button-remove-item" onclick="removeProductFromCart(' + cart.id + ')"> ' +
                    '' +
                    '                                   <svg width="19px" height="24px" viewBox="0 0 19 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">\n' +
                    '                                       <!-- Generator: Sketch 63.1 (92452) - https://sketch.com -->\n' +
                    '                                       <title>trash (2)</title>\n' +
                    '                                       <desc>Created with Sketch.</desc>\n' +
                    '                                       <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\n' +
                    '                                           <g id="trash-(2)" fill="#cccccc" fill-rule="nonzero">\n' +
                    '                                           <path d="M7.32989503,1.44873047 L11.3410034,1.44873047 L11.3410034,2.12365725 L12.7895508,2.12365725 L12.7895508,1.35424805 C12.7897339,0.607543969 12.1825561,0 11.4362182,0 L7.23468019,0 C6.4883423,0 5.88116456,0.607543969 5.88116456,1.35424805 L5.88116456,2.12365725 L7.32989503,2.12365725 L7.32989503,1.44873047 Z" id="Path"></path>\n' +
                    '                                           <path d="M16.1348877,7.86328125 L2.53601072,7.86328125 C2.16339112,7.86328125 1.87005614,8.18115234 1.90008544,8.55267333 L3.03698728,22.6107788 C3.1003418,23.3955689 3.75494386,24 4.54138181,24 L14.1293335,24 C14.9157715,24 15.5703735,23.3955689 15.633728,22.6105957 L16.7706299,8.55267333 C16.8008423,8.18115234 16.5075073,7.86328125 16.1348877,7.86328125 L16.1348877,7.86328125 Z M5.82879637,22.5005493 C5.81359866,22.5014648 5.79840089,22.5020142 5.78338622,22.5020142 C5.4036255,22.5020142 5.08483884,22.2062988 5.06121825,21.8221435 L4.34875491,10.281189 C4.32421875,9.88183594 4.62799073,9.53814698 5.02716066,9.51361083 C5.42504883,9.48944091 5.77020262,9.79248047 5.79473878,10.1920166 L6.50701903,21.7329712 C6.53173828,22.1323242 6.2279663,22.4758301 5.82879637,22.5005493 L5.82879637,22.5005493 Z M10.0678711,21.7776489 C10.0678711,22.1775513 9.7435913,22.501831 9.34350586,22.501831 C8.94342042,22.501831 8.61914062,22.1775513 8.61914062,21.7776489 L8.61914062,10.2365112 C8.61914062,9.83642578 8.94342042,9.51214598 9.34350586,9.51214598 C9.7434082,9.51214598 10.0678711,9.83642578 10.0678711,10.2365112 L10.0678711,21.7776489 Z M14.3221435,10.2791748 L13.6419067,21.8201294 C13.6193848,22.2050171 13.3000488,22.501831 12.9195557,22.501831 C12.9052734,22.501831 12.8908081,22.5014648 12.8763428,22.5007324 C12.4769897,22.4771118 12.1723022,22.1343384 12.1959229,21.7349854 L12.8759766,10.1938477 C12.8994141,9.79449464 13.2410888,9.48980714 13.6415405,9.51342773 C14.0408935,9.53686523 14.345581,9.87982177 14.3221435,10.2791748 L14.3221435,10.2791748 Z" id="Shape"></path>\n' +
                    '                                           <path d="M18.6397705,5.62792969 L18.1640625,4.2019043 C18.0386353,3.82598878 17.6867065,3.57238772 17.2902832,3.57238772 L1.38043214,3.57238772 C0.984191906,3.57238772 0.632080078,3.82598878 0.506835938,4.2019043 L0.0311279063,5.62792969 C-0.0606079219,5.90295412 0.0587768438,6.18347166 0.281616188,6.32336428 C0.3724365,6.38031005 0.479919422,6.41455078 0.598022438,6.41455078 L18.072876,6.41455078 C18.190979,6.41455078 18.298645,6.38031005 18.3892822,6.32318114 C18.6121216,6.18328856 18.7315064,5.90277098 18.6397705,5.62792969 Z" id="Path"></path>\n' +
                    '                                       </g>\n' +
                    '                                       </g>\n' +
                    '</svg></button>' +
                    '                        </div>'

                cartArray.push(newCart)
            } else {
                removeProductFromCart(cart.id)
            }

        });}


    let nodeCart = document.getElementsByClassName('modals__cart__section__product-items')[0]

    let test = cartArray.join(' ')

    nodeCart.innerHTML = test

    recalculateBasket()


}

function recalculateBasket() {
    var cart = Object.values(JSON.parse(localStorage.getItem('cart')))

    var total = 0



    cart.forEach(cart => {
        let newCart = Number(cart.productPrice) * Number(cart.quantity)
        total = total + newCart
    })

    console.log(total)
    var totalNode = document.querySelector('.cart_total_count')
    var orderTotalNode = document.querySelector('.order_total_count')
    orderTotalNode.innerHTML = total
    totalNode.innerHTML = total
}


function openCartDrawer() {
    document.body.classList.toggle('--cartDrawerIsOpen')
    let cartModal = document.querySelector('.modals__cart')
    let cartDrawer = document.querySelector('.modals__cart__section')
    let closeButton = document.querySelector('.modals__cart__close-button')
    cartModal.classList.toggle('modals__cart__is-showing')
    cartModal.classList.remove('orderDrawer-isShowing')
    cartDrawer.classList.toggle('--cart__drawer__is-showing')

    if (cartModal.classList.contains('modals__cart__is-showing')) {
      closeButton.style.display = 'block'
    } else {
      closeButton.style.display = 'none'
    }


}

function closingCartDrawer() {
    document.body.classList.remove('--cartDrawerIsOpen')
    let cartModal = document.querySelector('.modals__cart')
    let cartDrawer = document.querySelector('.modals__cart__section')
    let closeButton = document.querySelector('.modals__cart__close-button')
    cartModal.classList.remove('modals__cart__is-showing')
    cartModal.classList.remove('orderDrawer-isShowing')
    cartDrawer.classList.remove('--cart__drawer__is-showing')
    closeButton.style.display = 'none'


}

function closeButtonOnBg() {
    if (document.querySelector('body').classList.contains('--cartDrawerIsOpen')) {
        console.log('add')
        let bgClose = document.querySelector('.--cartDrawerIsOpen')
        bgClose.addEventListener('click', openCartDrawer)
    }
}


function updateDataForAddButton() {

    let currentLocation = location.pathname

    if (currentLocation.match('/product/') != "/product/") {

        let productItems = document.getElementsByClassName('catalog__product-item')

        for (const item of productItems) {
            let id = item.dataset.productid
            let productTitle = item.querySelector('.product-item__info-title').innerText
            let productDescription = item.querySelector('.product-item__info-description').innerText
            let productPrice = item.querySelector('.product-item__cart-price').innerText
            let productPic = item.querySelector('.product-item__image-item').getAttribute('src')

            let addButton = item.querySelector('.product-item__card-add')
            addButton.addEventListener("click", function() {addToCart(id, productTitle, productDescription, productPrice, productPic, '1');})


        }

    } else {
        let id = document.querySelector('.product-section').dataset.productid
        let productTitle = document.querySelector('.title-section__title').innerText
        let productDescription = document.querySelector('.title-section__description').innerText
        let productPrice = document.querySelector('.basket-section__price').innerText
        let productPic = document.querySelector('.photo-block__product').getAttribute('src')
        // let productPic = '/assets/products/oliya_food.png'

        let addButton = document.querySelector('.product-item__card-add')
        addButton.addEventListener("click", function() {
            addToCart(id, productTitle, productDescription, productPrice, productPic, '1');
        })
    }

}


function checkStateCartButton() {
    let currentCart = JSON.parse(localStorage.getItem('cart'))
    if (currentCart) {
        var currentCartProductId = Object.keys(currentCart)
    }


    if (currentCartProductId) {
        for (let i = 0; i < currentCartProductId.length; i++) {
            changeStateCartButton(currentCartProductId[i])
        }


    }
}

function changeStateCartButton(id) {
    let clickedButton = document.getElementById('pid' + id)
    let currentCart = JSON.parse(localStorage.getItem('cart'))
    let currentCartsItemId = currentCart[id]
    if (clickedButton) {
        if (currentCartsItemId) {
            clickedButton.innerHTML = '<span class="counterProductButton">' + currentCart[id].quantity + ' </span>&nbsp;<span class="cartButtonMore">&nbsp;Додати ще</span>'
        } else {
            clickedButton.innerHTML = '<span class="product-item__card-add__icon">\n' +
                '\n' +
                '                                        </span>Додати в кошик'
        }
}
}





// document.querySelector('div.main-banner[data-bannerid="bid"]').onclick = () => {
//  console.log(document.querySelector('div.main-banner[data-bannerid="bid"]'))
// }


const basketButtons = document.querySelectorAll('.product-item__card-add')


for (const arrayElement of basketButtons) {
    arrayElement.onclick = (event) => {
        console.log(window)
    }
}


var floatScrollBlock = null
var floatScrollBlockHeight = null

if (gettingRouter() == 'product') {
    var fullBlockHeight = document.querySelector('.product-section').scrollHeight
}

function setScrollForProduct(route) {



    if (browserWidth >  1080) {
        if (route == 'product') {
            let textBlock = document.querySelector('.product-section__text-block-holder')
            let photoBlock = document.querySelector('.photo-block__product-holder')
            let textBlockHeight = textBlock.scrollHeight
            let photoBlockHeight = photoBlock.scrollHeight

            console.log(textBlockHeight, photoBlockHeight)
            if (textBlockHeight >= photoBlockHeight) {
                photoBlock.classList.add('float-scroll')
                floatScrollBlock = photoBlock
                floatScrollBlockHeight = photoBlockHeight
            } else {
                textBlock.classList.add('float-scroll')
                floatScrollBlock = textBlock
                floatScrollBlockHeight = textBlockHeight
            }
        }
    }

}


function scrollingFloatBlock(scrolledY) {
    console.log(floatScrollBlock, floatScrollBlockHeight)


    console.log(scrolledY, fullBlockHeight, floatScrollBlockHeight)
    console.log((browserHeight))

    var fullScrolledState = scrolledY + browserHeight


        floatScrollBlock.style.transform = "translate(0," + ((scrolledY / (fullBlockHeight / (fullBlockHeight - floatScrollBlockHeight))) + 100) + "px)"

    }


function openOrdering() {
    let cartModal = document.querySelector('.modals__cart')
    let cartDrawer = document.querySelector('.modals__cart__section')
    let orderingDrawer = document.querySelector('.modals__cart-order__section')

    cartModal.classList.add('modals__cart__is-showing', 'orderDrawer-isShowing')
    cartDrawer.classList.add('--cart__drawer__is-showing')
    orderingDrawer.classList.add('--opened-ordering')
}

function checkCity() {
    let deliveryType = document.querySelector('.ordering-field.cityList');

    deliveryType.addEventListener('input', function () {
        if (deliveryType.value.length > 2) {
            gettingDepByCity(deliveryType.value)
            console.log(deliveryType.value);
        }
    })

    deliveryType.addEventListener('input', function () {


        if (deliveryType.value.length >= 2) {

            gettingCityByPattern(deliveryType.value)
        }
        document.querySelector('.form-field.radio-delivery-fields').classList.add('radio-delivery-fields__is-showing')
        if (deliveryType.value.toLowerCase() != 'киев' && deliveryType.value.toLowerCase() != "Київ".toLowerCase()) {
            document.querySelector('.radio__input-field.delivery-pickpoint').classList.add('delivery-type-is-hiding')
            
        } else {
            document.querySelector('.radio__input-field.delivery-pickpoint').classList.remove('delivery-type-is-hiding')
            document.querySelector('#pickpoint').checked = true;
        }

    })
}

function typeOfDelivery() {
    let deliveryType = document.querySelectorAll('.ordering-field.radio-delivery-field')

    for (const basketButton of deliveryType) {

        basketButton.addEventListener('click', function () {
            if (basketButton.value == 'novaposhta') {
                document.querySelector('.form-field.np-department').classList.add('departments-value-isShowing')
            } else {
                document.querySelector('.form-field.np-department').classList.remove('departments-value-isShowing')
            }

        })

    }
}



/* Getting city */



function gettingCityByPattern(pattern) {


    (async () => {
        const rawResponse = await fetch('https://api.novaposhta.ua/v2.0/json/', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                "modelName": "Address",
                "calledMethod": "getCities",
                "methodProperties": {
                    "FindByString": pattern
                },
                "apiKey": "bc3abcc11dd1a541d94c76526642726d"
            })
        });
        const content = await rawResponse.json();
        const sugestedCities = content.data;



            var cityNode = []



            let cityList = document.getElementById('cityList');

            for (const cityTitle of sugestedCities) {
                cityNode.push('<option class="city-item" value="' + cityTitle.Description + '" data-ref="' + cityTitle.Ref + '">')
                console.log(cityTitle.Description);
            }
                console.log(cityNode.join(''));
           
                cityList.innerHTML = cityNode.join('')



    })();


}



// function gettingCityByPattern(pattern) {


//     (async () => {
//         const rawResponse = await fetch('https://api.novaposhta.ua/v2.0/json/', {
//             method: 'POST',
//             headers: {
//                 'Accept': 'application/json',
//                 'Content-Type': 'application/json'
//             },
//             body: JSON.stringify({
//                 "apiKey": "bc3abcc11dd1a541d94c76526642726d",
//                 "modelName": "AddressGeneral",
//                 "calledMethod": "searchSettlements",
//                 "methodProperties": {
//                     "CityName": pattern,
//                     "Limit": 5
//                 }
//             })
//         });
//         const content = await rawResponse.json();
//         const sugestedCities = content.data[0].Addresses;



//             var cityNode = []


//             let cityList = document.getElementById('cityList');

//             for (const cityTitle of sugestedCities) {
//                 cityNode.push('<option class="city-item" value="' + cityTitle.Present + '" data-ref="' + cityTitle.Ref + '">')
//                 console.log(cityTitle.Present);
//             }

//             if (cityNode.length > 1) {
//                 cityList.innerHTML = cityNode.join('')
//             } else {
//                 cityList.innerHTML = ''
//             }


//     })();


// }


/* Getting dep */

function gettingDepByCity(pattern) {



    (async () => {
        const rawResponse = await fetch('https://api.novaposhta.ua/v2.0/json/', {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
    "modelName": "AddressGeneral",
    "calledMethod": "getWarehouses",
    "methodProperties": {
        "CityName": pattern
    },
    "apiKey": "bc3abcc11dd1a541d94c76526642726d"
})
        });
        const content = await rawResponse.json();


        const sugestedDep = content.data;


            var depNode = []



            let depList = document.getElementById('depList');

            for (let i = 0; i < sugestedDep.length; i++) {
                depNode.push('<option class="city-dep-item" value="' + sugestedDep[i].Description + '" >')
            }


            depList.innerHTML = depNode.join('')





        console.log('Finish')










    })();


}


function ordering(e) {


  let first_name = document.querySelector("input[name=first_name]").value;
  let last_name = document.querySelector("input[name=last_name]").value;
  let email = document.querySelector("input[name=order_email]").value;
  let phone = document.querySelector("input[name=phone]").value;
  let city = document.querySelector("input[name=city-title]").value;
  let department = document.querySelector("input[name=department]").value;


  let cartArray = []
  console.log(cartArray);

  var cart = Object.values(JSON.parse(localStorage.getItem('cart')));


  cart.forEach((item, i) => {
    let orderingBaket = {
        "product_name": item.productTitle,
        "product_id": item.id,
    		"quantity": item.quantity
      }
      cartArray.push(orderingBaket)
  });

  console.log(cartArray);


  // function getOrderBasket() {
  //   cart.forEach(cart => {
  //     let orderingBaket = {
  //       "product_name": cart.productTitle,
  //       "product_id": 1,
  // 			"quantity": 1
  //     }
  //     cartArray.push(orderingBaket)
  //   }
  // }



  var data = JSON.stringify({
  "first_name": first_name,
  "last_name": last_name,
  "email": email,
  "phone": phone,
  "city": city,
  "type_of_delivery": "NOVA_POSHTA",
  "pickpoint": department,
  "basket": cartArray
});

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    document.location.replace(this.responseText);
  }
});

xhr.open("POST", "/api/order/");
xhr.setRequestHeader("content-type", "application/json");

xhr.send(data);


localStorage.removeItem('cart');
}
