/*global fetch*/

let csrf = document.querySelector('meta[name="csrf-token"]').content;

window.addEventListener('load', () => {
    fetchData('fetchdata');
    let clothesPages = document.getElementById("clothesPages");
    clothesPages.addEventListener('click', handleClick);
});

function fetchData(page) {
    fetch(page)
    .then(function(response) {
        return response.json();
    })
    .then(function(jsonData) {
        console.log(jsonData);
        showData(jsonData);
    })
    .catch(function(error) {
        console.log(error);
    });
}

function showData(data) {
    let clothesInfo = document.getElementById("clothesInfo");
    let clothesPages = document.getElementById("clothesPages");

    //let usernavbar = document.getElementById('user-navbar');
    /*let userItems = document.querySelectorAll('#user-navbar .nav-item');
    userItems.forEach(li => {
        if (data.user == null) {
            if (li.classList.contains('log')) {
                li.classList.add('hide');
            } else if(li.classList.contains('nolog')) {
                li.classList.remove('hide'); 
            }
        } else {
            if (li.classList.contains('log')) {
                li.classList.remove('hide');
            } else if(li.classList.contains('nolog')) {
                li.classList.add('hide'); 
            }
        }
    });*/
    let url = data.url;
    let clotheses = data.clotheses.data;
    let pagination = data.clotheses.links;

    //csrf
    console.log(csrf == data.csrf, csrf, data.csrf);

    // table body
    let string = '';
    clotheses.forEach(clothes => {
        string += 
        `
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <div class="product text-center">
                    <figure class="product-media">
                        <a href="{{ url('clothes/' . $clothes->id) }}">
                            <img src="${clothes.photo}" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                        </div>

                        <div class="product-action action-icon-top">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div>
                    </figure>

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">${clothes.category}</a>
                        </div>
                        <h3 class="product-title"><a href="{{ url('clothes/' . $clothes->id) }}">${clothes.name}</a></h3>
                        <div class="product-price">
                            ${clothes.price}
                        </div>
                    </div>
                </div>
            </div>
        `
        ;
    });
    
    clothesInfo.innerHTML = string;

    // pagination
    string = '';
    pagination.forEach(pag => {
        if (pag.active) {
            string += `
                <li class="page-item active" aria-current="page">
                    <a class="page-link pulsable" data-url="${pag.url}">${pag.label}</a>
                </li>
            `;
        } else if (pag.url != null) {
            string += `
                <li class="page-item">
                    <a class="btn btn-link pulsable" data-url="${pag.url}" id="${'pag' + pag.label}">${pag.label}</span>
                </li>
            `;
        } else {
            string += `
                <li class="page-item disabled">
                    <a class="page-link" aria-hidden="true">${pag.label}</a>
                </li>
            `;
        }
    });
    
    clothesPages.innerHTML = string;
}

function handleClick(e) {
    if (e.target.classList.contains('pulsable')) {
        console.log(e.target.getAttribute('data-url'));
        fetchData(e.target.getAttribute('data-url'));
    }
}