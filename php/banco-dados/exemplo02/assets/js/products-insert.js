const productForm = document.querySelector('#productForm');

productForm.addEventListener("submit", async (e) => {
    e.preventDefault();
    console.log("Enviando os dados do produto");
    const responseInsert = await fetch('api/products-insert.php', {
        method: 'POST',
        body: new FormData(productForm)
    });
    console.log(responseInsert);
    const product = await responseInsert.json();
    console.log(product);
});