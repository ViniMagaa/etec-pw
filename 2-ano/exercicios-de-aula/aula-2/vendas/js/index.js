function isFormValid() {
	return (
		form.product().value &&
		Number(form.price().value) &&
		Number(form.quantity().value)
	);
}

function toggleButtonDisabled() {
	form.submit().disabled = !isFormValid();
}

function toggleError(condition, filedError) {
	filedError.style.display = condition ? "none" : "block";
}

function onChangeProduct() {
	toggleButtonDisabled();
	toggleError(form.product().value, form.productError());
}

function onChangePrice() {
	toggleButtonDisabled();
	toggleError(Number(form.price().value), form.priceError());
}

function onChangeQuantity() {
	toggleButtonDisabled();
	toggleError(Number(form.quantity().value), form.quantityError());
}

const form = {
	product: () => document.getElementById("product"),
	productError: () => document.getElementById("product-error"),
	price: () => document.getElementById("price"),
	priceError: () => document.getElementById("price-error"),
	quantity: () => document.getElementById("quantity"),
	quantityError: () => document.getElementById("quantity-error"),
	submit: () => document.getElementById("submit"),
};
