function toggleTableVisible() {
	const isInvisible = document.getElementById("table").style.display === "none";

	document.getElementById("table").style.display = isInvisible ? "" : "none";
	document.getElementById("button-toggle-table-visible").innerText = isInvisible
		? "Ver menos"
		: "Ver mais";
}
