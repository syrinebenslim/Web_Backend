function verif() {
    var errors = "<ul>";
    var name = document.querySelector('#name').value;
    var price = document.querySelector('#price').value;
    var quantity = document.querySelector('#quantity').value;
    var category = document.querySelector('#category').value;
    var description = document.querySelector('#description').value;


    if (name.charAt(0) < 'A' || name.charAt(0) > 'Z') {
        errors += "<li>Product name must start with capital letter</li>";
    }
    if(price <= 0) {
        errors += "<li>Price must be higher than 0</li>";
    }
    if(quantity < 10) {
        errors += "<li>Quantity must be higher than 10</li>";
    }
    if(category == 'select') {
        errors += "<li>a category must be selected</li>";
    }
    if (description.charAt(0) < 'A' || description.charAt(0) > 'Z') {
        errors += "<li>Product description must start with capital letter</li>";
    }
    if (errors !== "<ul>") {
        document.querySelector('#erreur').style.color = 'red';
        errors += "</ul>"
        document.getElementById('erreur').innerHTML = errors;
        return false;
    }
    else {
        var msg = "Product added to database"; 
        alert(msg);
    }
}