console.log("Oi, vamos listar os produtos...");

async function  listProducts () {
    const products = await fetch("api/products-list.php");
    const productsJSON = await products.json();
    console.log(
        productsJSON.type,
        productsJSON.message,
        productsJSON.data
    );
}

listProducts();

