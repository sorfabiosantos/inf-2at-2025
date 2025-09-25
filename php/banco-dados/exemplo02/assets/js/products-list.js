console.log("Products List...");
const listContainer = document.querySelector("#itemsContainer");
async function listProducts(){
    const response = await fetch("api/products-list.php");
    const products = await response.json();
    //console.log(products.data);
    products.data.forEach(product => {
        console.log(product);
        const productArticle = document.createElement("article");
        productArticle.innerHTML = `
        <header><h3>${product.name}</h3></header>
        <p><strong class="badge">${product.categoryName}</strong></p>
        <footer><span>ID: ${product.id}</span> <span class="price">R$ ${product.price}</span></footer>`;
        listContainer.appendChild(productArticle);
    });

}

listProducts();