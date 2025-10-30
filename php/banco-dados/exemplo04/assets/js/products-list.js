const products = [];
const listProductsSection = document.querySelector('#products-list-section');

async function loadProducts() {
    const response = await fetch("api/products-list.php");
    const products = await response.json();

    products.data.forEach(product => {
        const productArticle = document.createElement("article");
        productArticle.innerHTML = `
     <article>
         <header>
           <h3>${product.name}</h3>
             <p><small class="category">${product.categoryName}</small></p>
         </header>
           <p class="price">Preço: R$ ${product.price}</p>
           <fieldset>
           <legend>Status</legend>
           <label class="switch">
           <input product-id="${product.id}" 
                  type="checkbox" 
                  class="status-switch" ${product.status === 'online' ? 'checked' : ''}> ${product.status}
         </label>
       </fieldset>
     </article>     
     `;
        listProductsSection.appendChild(productArticle);
    });


}

loadProducts();



listProductsSection.addEventListener('click', (event) => {
    console.log(event.target.tagName);
    if(event.target.tagName === 'INPUT') {
        const productId = event.target.getAttribute('product-id');
        console.log(productId);
        toast("success", "Mensagem de teste");
    }
    event.stopPropagation();
});
