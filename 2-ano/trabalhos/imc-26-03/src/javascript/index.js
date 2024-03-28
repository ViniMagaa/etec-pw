function isFormValid() {
	return Number(form.height().value) && Number(form.weight().value);
}

function toggleButtonDisabled() {
	form.submitButton().disabled = !isFormValid();
}

function onChangeHeight() {
	toggleButtonDisabled();
	form.heightError().innerText = Number(form.height().value)
		? ""
		: "Digite um valor válido para a altura";
}

function onChangeWeight() {
	toggleButtonDisabled();
	form.weightError().innerText = Number(form.weight().value)
		? ""
		: "Insira o valor do peso corretamente";
}

function handleClearForm() {
	form.height().value = "";
	form.heightError().innerText = "";
	form.weight().value = "";
	form.weightError().innerText = "";
	toggleButtonDisabled();
}

const form = {
	height: () => document.getElementById("height"),
	heightError: () => document.getElementById("height-error"),
	weight: () => document.getElementById("weight"),
	weightError: () => document.getElementById("weight-error"),
	submitButton: () => document.getElementById("submit-button"),
};
