console.log("Products List...");
// Criar uma função chamada renderProducts para renderizar os produtos no front

const listContainer = document.querySelector("#itemsContainer");

function renderProducts (listProducts) {
    listContainer.innerHTML = "";
    listProducts.forEach(product => {
        //console.log(product);
        const productArticle = document.createElement("article");
        productArticle.innerHTML = `
        <header><h3>${product.name}</h3></header>
        <p><strong class="badge">${product.categoryName}</strong></p>
        <footer><span>ID: ${product.id}</span> <span class="price">R$ ${product.price}</span></footer>`;
        listContainer.appendChild(productArticle);
    });

}

async function listProducts(){
    const response = await fetch("api/products-list.php");
    const products = await response.json();
    toast(products.type, products.message);
    renderProducts(products.data);
}

listProducts();

const categoryFilter = document.querySelector("#categoryFilter");

categoryFilter.addEventListener("change", async () => {
    const responseProductsByCategory = await fetch(`api/products-by-category.php?categoryId=${categoryFilter.value}`);
    const productsByCategory = await responseProductsByCategory.json();
    toast(productsByCategory.type, productsByCategory.message);
    if(productsByCategory.type == "error"){
        return;
    }
    renderProducts(productsByCategory.data);
});