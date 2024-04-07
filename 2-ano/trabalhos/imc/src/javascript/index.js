function isFormValid() {
	return (
		form.name().value &&
		form.gender().value &&
		Number(form.height().value) &&
		Number(form.weight().value)
	);
}

function toggleButtonDisabled() {
	form.submitButton().disabled = !isFormValid();
}

function onChangeName() {
	toggleButtonDisabled();
	form.nameError().innerText = form.name().value
		? ""
		: "Insira o nome corretamente";
}

function onChangeGender() {
	toggleButtonDisabled();
	form.genderError().innerText = form.gender().value
		? ""
		: "Selecione uma opção válida";
}

function onChangeHeight() {
	toggleButtonDisabled();
	form.heightError().innerText = Number(form.height().value)
		? ""
		: "Digite um valor válido";
}

function onChangeWeight() {
	toggleButtonDisabled();
	form.weightError().innerText = Number(form.weight().value)
		? ""
		: "Insira o valor corretamente";
}

function handleClearForm() {
	form.name().value = "";
	form.nameError().innerText = "";
	form.gender().value = "";
	form.genderError().innerText = "";
	form.height().value = "";
	form.heightError().innerText = "";
	form.weight().value = "";
	form.weightError().innerText = "";
	toggleButtonDisabled();
}

const form = {
	name: () => document.getElementById("name"),
	nameError: () => document.getElementById("name-error"),
	gender: () => document.getElementById("gender"),
	genderError: () => document.getElementById("gender-error"),
	height: () => document.getElementById("height"),
	heightError: () => document.getElementById("height-error"),
	weight: () => document.getElementById("weight"),
	weightError: () => document.getElementById("weight-error"),
	submitButton: () => document.getElementById("submit-button"),
};
