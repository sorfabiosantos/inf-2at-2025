console.log("Products List...");
// Criar uma funcão chamada renderProducts para renderizar os produtos no front

function renderProducts (listProducts) {

}

const listContainer = document.querySelector("#itemsContainer");
async function listProducts(){
    const response = await fetch("api/products-list.php");
    //console.log(response);
    const products = await response.json();
    //console.log(products.data);
    products.data.forEach(product => {
        //console.log(product);
        const productArticle = document.createElement("article");
        productArticle.innerHTML = `
        <header><h3>${product.name}</h3></header>
        <p><strong class="badge">${product.categoryName}</strong></p>
        <footer><span>ID: ${product.id}</span> <span class="price">R$ ${product.price}</span></footer>`;
        listContainer.appendChild(productArticle);
    });

}

listProducts();

const categoryFilter = document.querySelector("#categoryFilter");

categoryFilter.addEventListener("change", async () => {
    //console.log("Olá, estou selecionando!");
    //console.log(categoryFilter.value);
    const responseProductsByCategory = await fetch(`api/products-by-category.php?categoryId=${categoryFilter.value}`);
    //console.log(responseProductsByCategory);
    const productsByCategory = await responseProductsByCategory.json();
    console.log(productsByCategory.type);
    if(productsByCategory.type == "error"){
        return;
    }
    productsByCategory.data.forEach(product => {
        console.log(product);
    });
});