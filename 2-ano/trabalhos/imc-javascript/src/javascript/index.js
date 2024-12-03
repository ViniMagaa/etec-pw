const elements = {
  result: {
    result: () => document.getElementById("result"),
    imcNumber: () => document.getElementById("imc-number"),
    recommendation: () => document.getElementById("recommendation"),
    classification: () => document.getElementById("classification"),
    levelOfObesity: () => document.getElementById("level-of-obesity"),
  },
  form: {
    form: () => document.getElementById("imc-form"),
    name: () => document.getElementById("name"),
    nameError: () => document.getElementById("name-error"),
    gender: () => document.getElementById("gender"),
    genderError: () => document.getElementById("gender-error"),
    height: () => document.getElementById("height"),
    heightError: () => document.getElementById("height-error"),
    weight: () => document.getElementById("weight"),
    weightError: () => document.getElementById("weight-error"),
    submitButton: () => document.getElementById("submit-button"),
  },
};

function isFormValid() {
  return (
    elements.form.name().value &&
    elements.form.gender().value &&
    Number(elements.form.height().value) &&
    Number(elements.form.weight().value)
  );
}

function toggleButtonDisabled() {
  elements.form.submitButton().disabled = !isFormValid();
}

function onChangeName() {
  toggleButtonDisabled();
  elements.form.nameError().innerText = elements.form.name().value
    ? ""
    : "Insira o nome corretamente";
}

function onChangeGender() {
  toggleButtonDisabled();
  elements.form.genderError().innerText = elements.form.gender().value
    ? ""
    : "Selecione uma opção válida";
}

function onChangeHeight() {
  toggleButtonDisabled();
  elements.form.heightError().innerText = Number(elements.form.height().value)
    ? ""
    : "Digite um valor válido";
}

function onChangeWeight() {
  toggleButtonDisabled();
  elements.form.weightError().innerText = Number(elements.form.weight().value)
    ? ""
    : "Insira o valor corretamente";
}

function handleClearForm() {
  elements.form.name().value = "";
  elements.form.nameError().innerText = "";
  elements.form.gender().value = "";
  elements.form.genderError().innerText = "";
  elements.form.height().value = "";
  elements.form.heightError().innerText = "";
  elements.form.weight().value = "";
  elements.form.weightError().innerText = "";
  toggleButtonDisabled();
}

function toggleDisplay(element, isVisible) {
  element.style.display = isVisible ? "flex" : "none";
}

function toggleTableVisible() {
  const isInvisible = document.getElementById("table").style.display === "none";

  document.getElementById("table").style.display = isInvisible ? "" : "none";
  document.getElementById("button-toggle-table-visible").innerText = isInvisible
    ? "Ver menos"
    : "Ver mais";
}

function calculateImc() {
  toggleDisplay(elements.form.form(), false);
  toggleDisplay(elements.result.result(), true);

  const weight = Number(elements.form.weight().value);
  const height = Number(elements.form.height().value);

  const imc = weight / Math.pow(height, 2);

  let recommendation;
  let classification;
  let levelOfObesity;

  if (imc <= 18.5) {
    recommendation = "Tente ganhar um pouco mais de peso";
    classification = "Magreza";
    levelOfObesity = "0";
  } else if (imc > 18.5 && imc <= 24.9) {
    recommendation = "Continue assim! Você está saudável.";
    classification = "Normal";
    levelOfObesity = "0";
  } else if (imc > 24.9 && imc <= 29.9) {
    recommendation = "Tente se controlar mais nas refeições.";
    classification = "Sobrepeso";
    levelOfObesity = "I";
  } else if (imc > 29.9 && imc <= 39.9) {
    recommendation = "Recomendamos que você faça academia.";
    classification = "Obesidade";
    levelOfObesity = "II";
  } else {
    recommendation = "Você deve procurar um médico urgentemente!";
    classification = "Obesidade Grave";
    levelOfObesity = "III";
  }

  elements.result.imcNumber().innerText = imc
    .toFixed(1)
    .toString()
    .replace(".", ".");
  elements.result.recommendation().innerHTML = `"${recommendation}"`;
  elements.result.classification().innerHTML = classification;
  elements.result.levelOfObesity().innerHTML = levelOfObesity;
}

elements.form.form().addEventListener("submit", (e) => {
  e.preventDefault();
  calculateImc();
});

toggleDisplay(elements.form.form(), true);
toggleDisplay(elements.result.result(), false);
