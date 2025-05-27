let products = [
    {
        name: "LG Dual Inverter",
        image: "assets/images/image01.jpeg",
    },
    {
        name: "Samsung Wind-Free",
        image: "assets/images/image02.jpeg",
    },
    {
        name: "Daikin Split Hi-Wall",
        image: "assets/images/image03.jpeg",
    },
    {
        name: "Fujitsu Inverter",
        image: "assets/images/image04.jpeg",
    },
    {
        name: "Midea Liva",
        image: "assets/images/image05.jpeg",
    },
    {
        name: "Gree Eco Garden",
        image: "assets/images/image06.jpeg",
    },
    {
        name: "Philco Eco Inverter",
        image: "assets/images/image07.jpeg",
    },
    {
        name: "Springer Midea Evolution",
        image: "assets/images/image08.jpeg",
    }
];

const sectionProducts = document.querySelector(".product-list");

products.forEach((product) => {
    //console.log(product.name, product.image);
    const articleProduct = document.createElement("article");
    articleProduct.className = "product-item";
    //console.log(articleProduct);
    articleProduct.innerHTML = `
        <figure>
           <img src="${product.image}" alt="${product.name}" class="product-image">
           <figcaption>${product.name}</figcaption>
        </figure>
    `;
    sectionProducts.appendChild(articleProduct);
});

const searchInput = document.querySelector("#search");
const searchButton = document.querySelector("#search-button");

searchButton.addEventListener("click", () => {
    console.log("Buscar: " , searchInput.value);
    sectionProducts.innerHTML = "";
    products.forEach((product) => {
        console.log(product.name, searchInput.value);
        if(product.name === searchInput.value){
            const articleProduct = document.createElement("article");
            articleProduct.className = "product-item";
            //console.log(articleProduct);
            articleProduct.innerHTML = `
            <figure>
               <img src="${product.image}" alt="${product.name}" class="product-image">
               <figcaption>${product.name}</figcaption>
            </figure>
            `;
            sectionProducts.appendChild(articleProduct);
        }
    });
});