$(document).on("ready", () => {
	$("#clone").on("click", CloneItem)
})

const CloneItem = () => {
	
	const entry = document.getElementById("entry")
	const newEntry = document.getElementById("newEntry")
	const display = document.getElementById("display")
	const name = document.getElementById("name")
	const description = document.getElementById("description")
	const itemLevel = document.getElementById("itemLevel")
	const data = new FormData()
	data.append("entry", entry.value)
	data.append("newEntry", newEntry.value)
	data.append("display", display.value)
	data.append("name", name.value)
	data.append("description", description.value)
	data.append("itemLevel", itemLevel.value)
	const xhr = new XMLHttpRequest()
	xhr.open("POST", "./server/clone_item.controller.php", true)
	xhr.onload = (response) => {
		console.log(response.currentTarget.response)
		//console.log(JSON.parse(response.currentTarget.response))
	}
	xhr.send(data)
}