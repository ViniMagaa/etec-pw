const form = {
	paymentType: () =>
		document.querySelector("input[name='paymentType']:checked"),
	creditCard: {
		container: () => document.getElementById("credit-card-container"),
		fields: {
			number: () => document.getElementById("credit-card-number"),
			numberError: () => document.getElementById("credit-card-number-error"),
			code: () => document.getElementById("credit-card-code"),
			codeError: () => document.getElementById("credit-card-code-error"),
			expireDate: () => document.getElementById("credit-card-expire-date"),
			expireDateError: () =>
				document.getElementById("credit-card-expire-date-error"),
		},
	},
	debitCard: {
		container: () => document.getElementById("debit-card-container"),
		fields: {
			number: () => document.getElementById("debit-card-number"),
			numberError: () => document.getElementById("debit-card-number-error"),
			code: () => document.getElementById("debit-card-code"),
			codeError: () => document.getElementById("debit-card-code-error"),
			expireDate: () => document.getElementById("debit-card-expire-date"),
			expireDateError: () =>
				document.getElementById("debit-card-expire-date-error"),
		},
	},
	pix: {
		container: () => document.getElementById("pix-container"),
		copyButton: () => document.getElementById("copy-pix-key-button"),
	},
	submit: () => document.getElementById("submit"),
};

function isFormValid() {
	const paymentType = form.paymentType().id;

	if (paymentType === "credit-card") {
		const { fields: creditFields } = form.creditCard;
		if (!creditFields.number().value) return false;
		if (creditFields.number().value.length !== 19) return false;

		if (!creditFields.code().value) return false;
		if (creditFields.code().value.length !== 3) return false;

		if (!creditFields.expireDate().value) return false;
		if (new Date(creditFields.expireDate().value) < new Date()) return false;
	} else if (paymentType === "debit-card") {
		const { fields: debitFields } = form.debitCard;
		if (!debitFields.number().value) return false;
		if (debitFields.number().value.length !== 19) return false;

		if (!debitFields.code().value) return false;
		if (debitFields.code().value.length !== 3) return false;

		if (!debitFields.expireDate().value) return false;
		if (new Date(debitFields.expireDate().value) < new Date()) return false;
	}

	return true;
}

function toggleButtonDisabled() {
	console.log(isFormValid());
	form.submit().disabled = !isFormValid();
}

// Display handlers
function hidePaymentTypeContainers() {
	form.creditCard.container().style.display = "none";
	form.debitCard.container().style.display = "none";
	form.pix.container().style.display = "none";
}

function showPaymentTypeContainer(container) {
	container.style.display = "flex";
}

function handleSelectingPaymentType() {
	hidePaymentTypeContainers();

	const validPaymentTypes = {
		"credit-card": form.creditCard,
		"debit-card": form.debitCard,
		pix: form.pix,
	};

	showPaymentTypeContainer(
		validPaymentTypes[form.paymentType().id].container()
	);
}

// Helpers
function getNumbersFromString(string) {
	return string.replace(/([^0-9])/g, "");
}

function toggleError(condition, fieldError, text) {
	fieldError.style.display = !condition ? "block" : "none";
	fieldError.innerText = text;
}

function formatCardNumber(numbers) {
	const cardNumbers = getNumbersFromString(numbers);
	const { length } = cardNumbers;
	let newCardNumbers = cardNumbers;

	if (length > 4) {
		newCardNumbers = `${cardNumbers.slice(0, 4)} ${cardNumbers.slice(4)}`;
	}

	if (length > 8) {
		newCardNumbers = `${newCardNumbers.slice(0, 9)} ${cardNumbers.slice(8)}`;
	}

	if (length > 12) {
		newCardNumbers = `${newCardNumbers.slice(0, 14)} ${cardNumbers.slice(
			12,
			19
		)}`;
	}

	return newCardNumbers;
}

// Input change handlers
function onChangeCreditCardNumber() {
	const { number, numberError } = form.creditCard.fields;

	toggleButtonDisabled();
	toggleError(
		getNumbersFromString(number().value).length === 16,
		numberError(),
		"Informe os 16 dígitos"
	);

	number().value = formatCardNumber(number().value);
}

function onChangeCreditCardCode() {
	const { code, codeError } = form.creditCard.fields;

	toggleButtonDisabled();
	code().value = getNumbersFromString(code().value);
	toggleError(code().value.length === 3, codeError(), "Preencha os 3 dígitos");
}

function onChangeCreditCardExpireDate() {
	const { expireDate, expireDateError } = form.creditCard.fields;

	toggleButtonDisabled();
	toggleError(
		new Date(expireDate().value) > new Date(),
		expireDateError(),
		"A data deve ser no futuro"
	);
}

function onChangeDebitCardNumber() {
	const { number, numberError } = form.debitCard.fields;

	toggleButtonDisabled();
	toggleError(
		getNumbersFromString(number().value).length === 16,
		numberError(),
		"Informe os 16 dígitos"
	);

	number().value = formatCardNumber(number().value);
}

function onChangeDebitCardCode() {
	const { code, codeError } = form.debitCard.fields;

	toggleButtonDisabled();
	code().value = getNumbersFromString(code().value);
	toggleError(code().value.length === 3, codeError(), "Preencha os 3 dígitos");
}

function onChangeDebitCardExpireDate() {
	const { expireDate, expireDateError } = form.debitCard.fields;

	toggleButtonDisabled();
	toggleError(
		new Date(expireDate().value) > new Date(),
		expireDateError(),
		"A data deve ser no futuro"
	);
}

// Others
function copyPixKey() {
	const button = form.pix.copyButton();

	navigator.clipboard.writeText("vinisantos2008vs@gmail.com");
	button.disabled = true;
	button.innerText = "Copiado!";
	button.style.backgroundColor = "var(--primary-green)";
	button.style.color = "black";

	form.submit().disabled = false;

	setTimeout(() => {
		button.disabled = false;
		button.innerText = "Copiar";
		button.style.backgroundColor = "var(--primary-blue)";
		button.style.color = "white";
	}, 1000);
}

// Function Calls
hidePaymentTypeContainers();
showPaymentTypeContainer(form.pix.container());