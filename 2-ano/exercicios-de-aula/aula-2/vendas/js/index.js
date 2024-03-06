function isFormValid() {
	return form.product().value && form.price().value && form.quantity().value;
}

function toggleButtonDisabled() {
	form.submit().disabled = !isFormValid();
}

function toggleError(field, filedError) {
	const { value } = field;
	filedError.style.display = !value ? "block" : "none";
}

function onChangeProduct() {
	toggleButtonDisabled();
	toggleError(form.product(), form.productError());
}

function onChangePrice() {
	toggleButtonDisabled();
	toggleError(form.price(), form.priceError());
}

function onChangeQuantity() {
	toggleButtonDisabled();
	toggleError(form.quantity(), form.quantityError());
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
